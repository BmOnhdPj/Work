<?php
	ini_set('error_reporting', '-1');
	$server_name = "db-pc";
	$connection_info = array("Database" => "eshop", "UID" => "sa", "PWD" => "P0s_sw0rd");

	$conn = sqlsrv_connect( $server_name, $connection_info );

	$sql = "{call SelUser( ? )};";

	$params = array(array($_GET['name']));

	$stmt = sqlsrv_query( $conn, $sql, $params );

	if ( $stmt === false ) {
		if ( ($errors = sqlsrv_errors() ) != null) {
			foreach ($errors as $error) {
	            echo "SQLSTATE: ".$error[ 'SQLSTATE']."<br />";
	            echo "code: ".$error[ 'code']."<br />";
	            echo "message: ".$error[ 'message']."<br />";
			}
		} 
	}

	while ( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC )) {
		echo htmlspecialchars($row['name']);
	}
?>