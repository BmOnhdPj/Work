<?php
$host = 'localhost:/path/to/your.gdb';
$dbh = ibase_connect($host, "root", "root");
$stmt = 'SELECT * FROM ' . $_GET['a'];
$sth = ibase_query($dbh, $stmt);
?>