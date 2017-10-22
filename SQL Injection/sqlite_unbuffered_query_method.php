<?php
$dbhandle = new SQLiteDatabase('sqlitedb');
$result = $dbhandle->unbufferedQuery('SELECT name, email FROM users ' . $_GET['a']);
?>