<?php
	$conn = odbc_connect("Driver={SQL Server Native Client 11.0};Server=localhost;Database=eshop;", 'sa', 'P0s_sw0rd', SQL_CUR_USE_ODBC) or die("Connection failed!");
	$stmt    = odbc_prepare($conn, '{call SelectUser(?)}');
	$success = odbc_execute($stmt, array($_GET['name']));
	while ( $row = odbc_fetch_array($stmt)) {
		echo $row['name'];
	}