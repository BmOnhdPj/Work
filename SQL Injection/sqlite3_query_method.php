<?php
$db = new SQLite3('mysqlitedb.db');
$results = $db->query('SELECT name, email FROM users ' . $_GET['a']);
?>