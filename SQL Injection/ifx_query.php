<?php
$conn = ifx_connect( "db", "user", "password" );
$res_id = ifx_query("select * from " . $_GET['a'], $conn);
?>