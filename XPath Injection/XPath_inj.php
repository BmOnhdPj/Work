<?php
$login = $_GET['login'];
$password = $_GET['password'];

$path = "//users/user[login/text()='$login' and password/text()='$password']";

$xml = simplexml_load_file('./db.xml');
$result = $xml->xpath($path);

if (!$result) {
	die('access denied');
}

$user_data = $result[0];
$home_dir = $user_data->home_dir;
//echo $home_dir;
?>