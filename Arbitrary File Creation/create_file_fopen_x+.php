<?php
if (empty($_GET['file'])) {
	die('error');
}

$filePath = $_GET['file'];
$handle = fopen($filePath, 'x+');
fclose($handle);
?>