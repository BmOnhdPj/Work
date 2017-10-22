<?php
$dbhandle = new SQLiteDatabase('sqlitedb');
$result = $dbhandle->query('SELECT name, email FROM users ' . $_GET['a']);
?>