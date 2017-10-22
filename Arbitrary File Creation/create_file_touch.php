<?php
if (empty($_GET['file'])) {
	die('error');
}

$filePath = $_GET['file'];
touch($filePath);
?>