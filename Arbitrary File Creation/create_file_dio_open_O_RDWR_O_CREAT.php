<?php
if (empty($_GET['file'])) {
	die('error');
}

$filePath = $_GET['file'];
$fd = dio_open($filePath, O_RDWR | O_CREAT);
dio_close($fd);
?>