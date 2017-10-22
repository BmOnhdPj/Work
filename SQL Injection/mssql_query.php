<?php
	// Connect to MSSQL
	$link = mssql_connect('KALLESPC\SQLEXPRESS', 'sa', 'phpfi');

	if (!$link || !mssql_select_db('php', $link)) {
	    die('Unable to connect or select database!');
	}

	$db = mssql_select_db('eshop', $link);

	// Do a simple query, select the version of 
	// MSSQL and print it.
	$sql = mssql_query("SELECT * FROM users WHERE name'" . $_GET['name'] . "'");
	$row = mssql_fetch_array($sql);

	echo $row[0];

	// Clean up
	mssql_free_result($sql);
?>