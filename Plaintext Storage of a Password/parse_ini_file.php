<?php
$dbConfig = parse_ini_file('db_config.ini');

$userName = $dbConfig['user'];
$password = $dbConfig['password'];

error_reporting(0);

if (!mysql_connect('localhost', $userName, $password)) {
 die('Could not connect to database');
}
?>