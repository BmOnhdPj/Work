<?php
if (empty($_GET['password'])) {
	die('empty password');
}

$password = hash('sha256', $_GET['password']);

if ($password === '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918') {
	echo 'admin';
}
?>