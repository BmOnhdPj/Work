<?php
$conn = ifx_connect( "db", "user", "password" );
$result = ifx_prepare("SELECT customer_num, company FROM " . $_GET['a'], $conn);
ifx_do($result);
?>