<?php
$password = file_get_contents('/user/admin/pass.txt');

error_reporting(0);

if (!mysql_connect('localhost', 'admin', $password)) {
 die('Could not connect to database');
}
?>