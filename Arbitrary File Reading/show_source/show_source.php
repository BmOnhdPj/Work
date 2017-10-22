<?php
if (empty($_GET['file'])) {
	die('error');
}

$filePath = $_GET['file'];/*entry point*/
show_source($filePath);/*exit point*/
?>