<?php
$dbhandle = sqlite_open('sqlitedb');
$result = sqlite_array_query($dbhandle, 'SELECT name, email FROM users ' . $_GET['a'], SQLITE_ASSOC);
?>