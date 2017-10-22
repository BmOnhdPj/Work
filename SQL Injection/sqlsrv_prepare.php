<?php
$serverName = "serverName\sqlexpress";
$connectionInfo = array( "Database"=>"dbName", "UID"=>"username", "PWD"=>"password");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
$sql = "UPDATE Table_1 SET OrderQty = " . $_GET['a'];
$stmt = sqlsrv_prepare( $conn, $sql);
if( sqlsrv_execute( $stmt ) === false ) {
      die( print_r( sqlsrv_errors(), true));
}

$sql = "UPDATE Table_2 SET OrderQty = ?";
$qty = $_GET['b'];
$stmt = sqlsrv_prepare( $conn, $sql, array(&$qty));
if( sqlsrv_execute( $stmt ) === false ) {
    die( print_r( sqlsrv_errors(), true));
}
?>