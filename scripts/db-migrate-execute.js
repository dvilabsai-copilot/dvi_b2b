'use strict';

const { runMigration } = require('./db-migrate-common');

const config = {
  host: process.env.DB_HOST || '127.0.0.1',
  port: Number(process.env.DB_PORT || 3306),
  user: process.env.DB_USER || 'root',
  password: process.env.DB_PASSWORD || '',
  charset: 'utf8mb4'
};

const sourceDb = process.env.SOURCE_DB || 'dvi_main';
const targetDb = process.env.TARGET_DB || 'dvi_travels';
const recreateIncompatible = String(process.env.RECREATE_INCOMPATIBLE || '0') === '1';

runMigration({
  mode: 'EXECUTE',
  sourceDb,
  targetDb,
  connectionConfig: config,
  recreateIncompatible
}).catch((err) => {
  console.error('Fatal error:', err.message);
  process.exitCode = 1;
});
