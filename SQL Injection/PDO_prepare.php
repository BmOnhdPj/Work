<?php
$dsn = 'mysql:dbname=test;host=127.0.0.1';
$user = 'root';
$password = '';
$dbh = new PDO($dsn, $user, $password);
$sql = 'SELECT * FROM city WHERE id = ' . $_GET['a'] . ';';
$stmt = $dbh->prepare($sql, array());
$stmt->execute(array());
?>