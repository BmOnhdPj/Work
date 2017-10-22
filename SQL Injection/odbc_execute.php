<?php
$conn = odbc_connect("Driver={SQL Server Native Client 10.0};Server=;Database=test;", 'root', '');
$stmt    = odbc_prepare($conn, 'CALL myproc(?)');
$success = odbc_execute($stmt, array($_GET['a']));
?>