<?php
$host = 'ptsecurity.com';

$fp = fsockopen($host, 80);

if ($fp === FALSE) {
	die('connection error');
}

$out = "GET / HTTP/1.1\r\n"
		. "Host: $host\r\n"
		. "Connection: Close\r\n\r\n";

fwrite($fp, $out);

$data = '';

while (!feof($fp)) {
	$data .= fread($fp, 128);
}

fclose($fp);
//echo $data;
?>