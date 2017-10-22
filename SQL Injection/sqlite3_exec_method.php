<?php
$db = new SQLite3('mysqlitedb.db');
$db->exec("UPDATE users SET email='jDoe@example.com' WHERE username=" . $_GET['a']);
?>