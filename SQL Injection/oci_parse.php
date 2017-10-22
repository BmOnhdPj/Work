<?php
    $conn = oci_connect('system', 'P0s_sw0rd', 'localhost/orcl.0.64.47') or die("Can not connect to DB");

    $stid = oci_parse($conn, "select owner, table_name from dba_tables where table_name='" . $_GET['name'] . "'"); 
    $res = oci_execute($stid);

    while ( $row = oci_fetch_assoc($stid)) {
    	echo htmlentities($row['TABLE_NAME']);
    	echo "<br />";
    }

?>