<?php
$db = new SQLite3('mysqlitedb.db');
$stmt = $db->prepare('SELECT name, email FROM users ' . $_GET['a']);
$stmt->bindValue(':id', 1, SQLITE3_INTEGER);
$result = $stmt->execute();
?>