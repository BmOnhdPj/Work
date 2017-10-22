<?php
$fileName = basename($_GET['file']);
$dir = '/var/www/files/';
$filePath = $dir . $fileName;

$handle = fopen($filePath, 'w');
$content = fwrite($handle, "some_simple_data_to_write");
//fclose($handle);
?>