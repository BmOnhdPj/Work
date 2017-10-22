<?php
if (empty($_GET['file'])) {
	die('error');
}

$filePath = $_GET['file'];/*entry point*/
highlight_file($filePath, FALSE);/*exit point*/
?>