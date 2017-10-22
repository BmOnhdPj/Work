<?php
$host = 'localhost';
$port = 3306;
$user = 'mopas_user';
$password = 's3cr3tp@ss';

if (mysql_connect($host . ':' . $port, $user, $password) === FALSE) {
	die('Could not connect to database server');
}
?>