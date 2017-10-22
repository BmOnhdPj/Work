<?php
$db = new SQLite3('mysqlitedb.db');
$db->querySingle('SELECT name, email FROM users ' . $_GET['a']);
?>