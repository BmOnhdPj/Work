<?php
$dbhandle = sqlite_open('sqlitedb');
$result = sqlite_unbuffered_query($dbhandle, 'SELECT name, email FROM users ' . $_GET['a']);
?>