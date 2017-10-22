<?php
if (empty($_GET['host']) || empty($_GET['port'])) {
	die("host or port was\'n defined");
}

$host = $_GET['host'];
$port = $_GET['port'];

$fp = fsockopen($host, $port, $errno, $errstr, 5);

if ($fp) {
	echo 'socket was opened';
}
else {
	echo "$errstr ($errno)";
}
?>