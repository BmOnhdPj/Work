<?php
if (empty($_GET['file'])) {
	die('error');
}

$filePath = $_GET['file'];/*entry point*/
echo highlight_file($filePath, TRUE);/*exit point*/
?>