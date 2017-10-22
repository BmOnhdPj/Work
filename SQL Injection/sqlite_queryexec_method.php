<?php
$dbhandle = new SQLiteDatabase('sqlitedb');
$query = $dbhandle->queryExec("UPDATE users SET email='jDoe@example.com' WHERE username=" . $_GET['a'], $error);
?>