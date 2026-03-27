<?php
/*
* JACKUS - An In-house Framework for TDS Apps
*   
* Author: Touchmark Descience Private Limited. 
* https://touchmarkdes.com
* Version 5.0.1
* Copyright (c) 2010-2022 Touchmark De`Science
*
*/
include('Encryption.php');

/* $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if ($conn == false) :
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
endif; */

// Enable error reporting for debugging
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
	// Create a MySQL connection
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

	// Check if connection failed
	if (!$conn) {
		throw new Exception("Connection failed: " . mysqli_connect_error());
	}

	/* echo "Connected successfully!"; */
} catch (Exception $e) {
	// Handle connection error
	die("Database connection error: " . $e->getMessage());
}

//0. Basic Query label
function sqlQUERY_LABEL($query)
{
	global $conn;
	return mysqli_query($conn, $query);
}

function sqlFETCHARRAY_LABEL($query)
{
	global $conn;
	return  mysqli_fetch_array($query, MYSQLI_ASSOC);
}

function sqlERROR_LABEL()
{
	global $conn;
	return  mysqli_error($conn);
}

function sqlNUMOFROW_LABEL($query)
{
	global $conn;
	return mysqli_num_rows($query);
}

function sqlDATASEEK_LABEL($query, $offset)
{
	global $conn;
	return mysqli_data_seek($query, $offset);
}

function sqlFETCHASSOC_LABEL($query)
{
	global $conn;
	return mysqli_fetch_assoc($query);
}

function sqlREALESCAPESTRING_LABEL($query)
{
	global $conn;
	return mysqli_real_escape_string($conn, $query);
}

function sqlINSERTID_LABEL()
{
	global $conn;
	return mysqli_insert_id($conn);
}

function sqlFETCHROW_LABEL($query)
{
	global $conn;
	return mysqli_fetch_row($query);
}

function sqlFETCHOBJECT_LABEL($query)
{
	return mysqli_fetch_object($query);
}

function sqlFREE_RESULT($query)
{
	return mysqli_free_result($query);
}

function sqlMORE_RESULT($conn)
{
	return mysqli_more_results($conn);
}

function sqlNEXT_RESULT($conn)
{
	return mysqli_next_result($conn);
}

function sqlSTORE_RESULT($conn)
{
	return mysqli_store_result($conn);
}

//1. SQL Query
function sqlQUERY($query)
{
	global $conn;
	if (mysqli_query($conn, $query)) :
		return true;
	else :
		return die(mysqli_error($conn));
		exit();
	endif;
}

//2. SQL QUERY + Fetch Array
function sqlRETURNROWSET($query)
{
	global $conn;
	if ($results = sqlQUERY($query)) :
		if ($row = mysqli_fetch_array($results)) :
			return $row;
		endif;
	else :
		return $results;
	endif;
}
//$row = return_row_set($query);

//3. SQL Total Row Count
function sqlROWCOUNT($query)
{
	global $conn;
	$result = sqlQUERY($query);
	while ($val = mysqli_fetch_array($result)) :
		$row_count = $val['row_count'];
	endwhile;
	return $row_count;
}

//4. Get Single Value
function sqlSINGLEVALUE($sqlFrom, $sqlWhere, $getField)
{
	global $conn;
	$tmp_val = "";
	$query = "SELECT " . $getField . " FROM " . $sqlFrom . " WHERE " . $sqlWhere;
	$row = sqlRETURNROWSET($query);
	if (empty($row)) : return "";
	endif;
	$tmp_val = $row[$getField];
	if (empty($tmp_val)) :
		return "";
	else :
		return $tmp_val;
	endif;
}

//5. INSERT || UPDATE || DELETE || SELECT Query
function sqlACTIONS($sqlAction, $tableName, $arrFields = "", $arrValues = "", $sqlWhere = "")
{
	global $conn;
	$sqlResult = "";

	if ($sqlAction == "UPDATE") :
		foreach ($arrFields as $ind => $field) :
			$sqlResult = $sqlResult . $field . "=" . singleQuote($arrValues[$ind], $sqlAction) . ",";
		endforeach;
		$sqlResult = "UPDATE " . $tableName . " SET " . substr($sqlResult, 0, strlen($sqlResult) - 1);
		// sub string is used to strip the last como
		$sqlResult =  $sqlResult . ", updatedon='" . date('Y-m-d H:i:s') . "'";
	/* echo $sqlResult;
		echo "<br>";
		echo "<br>"; */
	//exit();
	endif; //End of Update

	if ($sqlAction == "INSERT") :
		$tmpField = "";
		$tmpValue = "";
		foreach ($arrFields as $ind => $field) :
			if (($arrValues[$ind]) && trim($arrValues[$ind]) != "") :
				$tmpField = $tmpField . ", " . $field;
				$tmpValue = $tmpValue . ", " . singleQuote($arrValues[$ind], $sqlAction);
			endif;
		endforeach;
		$sqlResult = "INSERT INTO `" . $tableName . "` ( " . substr($tmpField, 1) . ", `createdon` ) VALUES (" . substr($tmpValue, 1) . ",'" . date('Y-m-d H:i:s') . "')";
	// echo "$sqlResult";
	// exit;
	endif; //End of Insert

	if ($sqlAction == "DELETE") :
		$sqlResult = "DELETE FROM " . $tableName . "";
	endif; //End of Delete

	if ($sqlAction == "SELECT") :
		$retfields = "*";
		if (is_array($arrFields))
			$retfields = implode(",", $arrFields);
		$sqlResult = "SELECT * FROM " . $tableName . "";
		if ($result = sqlQUERY($sqlResult)) : // executs the SQl query and give result.	    
			return true;
		endif;
	endif;

	if (!empty($sqlWhere)) :
		$sqlResult = $sqlResult . " WHERE " . $sqlWhere;
	endif;

	/* echo $sqlResult;
	echo "<br>";
	echo "<br>"; */

	//writeFile($sqlResult, "sqlQuery.txt");

	if (sqlQUERY($sqlResult)) : // executs the SQl query and give result.
		return true;
	else :
		return false;
	endif;
}

//6. write into text file 
function writeFile($stringValue, $outFile)
{
	global $conn;
	$file = fopen($outFile, "w");
	fwrite($file, $stringValue);
	fclose($file);
}

//7. Single Quote for Updating Records
function singleQuote($value, $sqlAction)
{
	global $conn;
	//$value = htmlentities(addslashes(trim($value)));
	$value = htmlentities($value);
	if ($sqlAction == "UPDATE") :
		if (substr($value, 0, 1) == '[') : return substr($value, 1, strlen($value) - 2);
		else : return $value = " '" . $value . "'";
		endif;
	else :
		if (trim($value) != "") :
			if (substr($value, 0, 1) == '[') : return substr($value, 1, strlen($value) - 2);
			else : return $value = " '" . $value . "'";
			endif;
		endif;
	endif;
}

function db_close($conn)
{
	return mysqli_close($conn);
}
