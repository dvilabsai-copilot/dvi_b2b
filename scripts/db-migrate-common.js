'use strict';

const mysql = require('mysql2/promise');

function pickFirstDefined(row, preferredKeys) {
  for (const key of preferredKeys) {
    if (Object.prototype.hasOwnProperty.call(row, key) && row[key] !== undefined && row[key] !== null) {
      return row[key];
    }
  }

  const fallbackKey = Object.keys(row)[0];
  return fallbackKey ? row[fallbackKey] : undefined;
}

function escapeId(identifier) {
  return `\`${String(identifier).replace(/`/g, '``')}\``;
}

function buildInsertSql({ sourceDb, targetDb, tableName, columns }) {
  const cols = columns.map(escapeId).join(', ');
  return `INSERT INTO ${escapeId(targetDb)}.${escapeId(tableName)} (${cols}) SELECT ${cols} FROM ${escapeId(sourceDb)}.${escapeId(tableName)};`;
}

async function getCommonBaseTables(connection, sourceDb, targetDb) {
  const [rows] = await connection.execute(
    `
    SELECT s.table_name AS table_name
    FROM information_schema.tables s
    INNER JOIN information_schema.tables t
      ON t.table_schema = ?
     AND t.table_name = s.table_name
    WHERE s.table_schema = ?
      AND s.table_type = 'BASE TABLE'
      AND t.table_type = 'BASE TABLE'
    ORDER BY s.table_name ASC
    `,
    [targetDb, sourceDb]
  );

  return rows
    .map((row) => pickFirstDefined(row, ['table_name', 'TABLE_NAME']))
    .filter((value) => value !== undefined && value !== null && String(value).length > 0)
    .map((value) => String(value));
}

async function getTableCount(connection, dbName, tableName) {
  const sql = `SELECT COUNT(*) AS cnt FROM ${escapeId(dbName)}.${escapeId(tableName)}`;
  const [rows] = await connection.query(sql);
  return Number(rows[0].cnt || 0);
}

async function getColumns(connection, dbName, tableName) {
  const [rows] = await connection.execute(
    `
    SELECT column_name
    FROM information_schema.columns
    WHERE table_schema = ?
      AND table_name = ?
    ORDER BY ordinal_position ASC
    `,
    [dbName, tableName]
  );

  return rows
    .map((row) => pickFirstDefined(row, ['column_name', 'COLUMN_NAME']))
    .filter((value) => value !== undefined && value !== null && String(value).length > 0)
    .map((value) => String(value));
}

function printTableHeader(tableName, sourceCount, targetCount) {
  console.log('------------------------------------------------------------');
  console.log(`Table            : ${tableName}`);
  console.log(`Source row count : ${sourceCount}`);
  console.log(`Target row count : ${targetCount}`);
}

async function runMigration({
  mode,
  sourceDb,
  targetDb,
  connectionConfig,
  recreateIncompatible = false
}) {
  const executeMode = mode === 'EXECUTE';
  const connection = await mysql.createConnection(connectionConfig);

  const summary = {
    processed: 0,
    copied: 0,
    skipped: 0,
    warnings: 0,
    errors: 0
  };

  let fkDisabled = false;

  try {
    console.log(`Mode             : ${mode}`);
    console.log(`Source DB        : ${sourceDb}`);
    console.log(`Target DB        : ${targetDb}`);
    console.log(`Recreate mismatch: ${recreateIncompatible ? 'enabled' : 'disabled'}`);

    const tables = await getCommonBaseTables(connection, sourceDb, targetDb);
    console.log(`Common BASE TABLES: ${tables.length}`);

    if (!tables.length) {
      console.log('No common base tables found. Nothing to do.');
      return summary;
    }

    if (!executeMode) {
      console.log('DRY RUN: No data will be copied.');
      console.log('Planned SQL wrapper:');
      console.log('  SET SESSION FOREIGN_KEY_CHECKS = 0;');
      console.log('  -- copy statements for eligible tables');
      console.log('  SET SESSION FOREIGN_KEY_CHECKS = 1;');
    }

    for (const tableName of tables) {
      summary.processed += 1;

      try {
        const sourceCount = await getTableCount(connection, sourceDb, tableName);
        const targetCount = await getTableCount(connection, targetDb, tableName);

        if (sourceCount <= 0) {
          summary.skipped += 1;
          continue;
        }

        if (targetCount > 0) {
          summary.skipped += 1;
          continue;
        }

        printTableHeader(tableName, sourceCount, targetCount);

        const sourceColumns = await getColumns(connection, sourceDb, tableName);
        const targetColumns = await getColumns(connection, targetDb, tableName);
        const targetColumnSet = new Set(targetColumns);

        const matchingColumns = sourceColumns.filter((col) => targetColumnSet.has(col));
        const missingInTarget = sourceColumns.filter((col) => !targetColumnSet.has(col));

        if (matchingColumns.length === 0) {
          summary.warnings += 1;
          summary.skipped += 1;
          console.warn('WARNING          : No matching columns; skipping table.');
          continue;
        }

        // Strict safety: skip incompatible schemas unless explicit recreate mode is enabled.
        if (missingInTarget.length > 0) {
          summary.warnings += 1;

          if (!executeMode || !recreateIncompatible) {
            summary.skipped += 1;
            console.warn(`WARNING          : Incompatible schema (missing columns in target): ${missingInTarget.join(', ')}`);
            continue;
          }

          console.warn(`WARNING          : Incompatible schema detected. Recreate flow will run for table.`);
          console.warn(`Missing in target: ${missingInTarget.join(', ')}`);

          if (!fkDisabled) {
            await connection.query('SET SESSION FOREIGN_KEY_CHECKS = 0;');
            fkDisabled = true;
            console.log('FK checks        : disabled');
          }

          const dropSql = `DROP TABLE IF EXISTS ${escapeId(targetDb)}.${escapeId(tableName)};`;
          const createLikeSql = `CREATE TABLE ${escapeId(targetDb)}.${escapeId(tableName)} LIKE ${escapeId(sourceDb)}.${escapeId(tableName)};`;
          const copyAllSql = `INSERT INTO ${escapeId(targetDb)}.${escapeId(tableName)} SELECT * FROM ${escapeId(sourceDb)}.${escapeId(tableName)};`;

          console.log('Recreate SQL     :');
          console.log(dropSql);
          console.log(createLikeSql);
          console.log(copyAllSql);

          await connection.query(dropSql);
          await connection.query(createLikeSql);
          const [recreateInsertResult] = await connection.query(copyAllSql);
          summary.copied += 1;
          console.log(`Copied rows      : ${recreateInsertResult.affectedRows}`);
          continue;
        }

        const copySql = buildInsertSql({
          sourceDb,
          targetDb,
          tableName,
          columns: matchingColumns
        });

        console.log('Copy SQL         :');
        console.log(copySql);

        if (executeMode) {
          if (!fkDisabled) {
            await connection.query('SET SESSION FOREIGN_KEY_CHECKS = 0;');
            fkDisabled = true;
            console.log('FK checks        : disabled');
          }

          const [result] = await connection.query(copySql);
          summary.copied += 1;
          console.log(`Copied rows      : ${result.affectedRows}`);
        }
      } catch (tableError) {
        summary.errors += 1;
        console.error('ERROR            : Failed table, continuing.');
        console.error(`Table            : ${tableName}`);
        console.error(`Message          : ${tableError.message}`);
      }
    }
  } finally {
    if (executeMode && fkDisabled) {
      try {
        await connection.query('SET SESSION FOREIGN_KEY_CHECKS = 1;');
        console.log('FK checks        : re-enabled');
      } catch (fkError) {
        summary.errors += 1;
        console.error(`ERROR            : Could not re-enable FK checks: ${fkError.message}`);
      }
    }

    await connection.end();
  }

  console.log('============================================================');
  console.log(`Processed         : ${summary.processed}`);
  console.log(`Copied            : ${summary.copied}`);
  console.log(`Skipped           : ${summary.skipped}`);
  console.log(`Warnings          : ${summary.warnings}`);
  console.log(`Errors            : ${summary.errors}`);

  return summary;
}

module.exports = {
  runMigration
};
