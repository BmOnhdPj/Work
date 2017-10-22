<?php
$conn = odbc_connect("Driver={SQL Server Native Client 10.0};Server=;Database=test;", 'root', '');
$s = odbc_exec($conn, 'CALL myproc('. $_GET['a'] .')');
?>