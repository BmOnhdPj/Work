<?php
if (empty($_GET['file'])) {
	die('error');
}

$filePath = $_GET['file'];
$fd = dio_open($filePath, O_RDWR | O_CREAT | O_TRUNC);
dio_close($fd);
?>