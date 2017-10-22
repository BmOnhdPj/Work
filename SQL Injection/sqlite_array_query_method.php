<?php
$dbhandle = new SQLiteDatabase('sqlitedb');
$result = $dbhandle->arrayQuery('SELECT name, email FROM users ' . $_GET['a'], SQLITE_ASSOC);
?>