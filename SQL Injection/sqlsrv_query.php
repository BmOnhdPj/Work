<?php 
    $server_name = "db-pc";
    $connection_info = array("Database" => "eshop", "UID" => "sa", "PWD" => "P0s_sw0rd");
    $conn = sqlsrv_connect( $server_name, $connection_info );

	$sql = "SELECT * FROM users WHERE name='" . $_GET['a'] . "'";
	$res = sqlsrv_query( $conn, $sql ); 

    while ( $row = sqlsrv_fetch_array( $res, SQLSRV_FETCH_ASSOC ) ) {
        echo $row['name'];
    }
?>