<?php
if (empty($_GET['host']) || empty($_GET['port']) || empty($_GET['page'])) {
	die("host, port or page was\'n defined");
}

$host = $_GET['host'];
$port = $_GET['port'];
$page = str_replace(array("\r","\n"), '', $_GET['page']);

$fp = fsockopen($host, $port, $errno, $errstr, 5);

if (!$fp) {
	die('connection error');
}

$out = "HEAD $page HTTP/1.1\r\n"
		. "Host: $host\r\n"
		. "Connection: Close\r\n\r\n";

fwrite($fp, $out);
while (!feof($fp)) {
	echo fgets($fp, 128);
}
fclose($fp);
?>