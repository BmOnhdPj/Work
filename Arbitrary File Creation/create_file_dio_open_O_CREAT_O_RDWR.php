<?php
if (empty($_GET['file'])) {
	die('error');
}

$filePath = $_GET['file'];
$fd = dio_open($filePath, O_CREAT | O_RDWR);
dio_close($fd);
?>