<?php
$dbhandle = new SQLiteDatabase('sqlitedb');
$result = $dbhandle->singleQuery('SELECT name, email FROM users ' . $_GET['a']);
?>