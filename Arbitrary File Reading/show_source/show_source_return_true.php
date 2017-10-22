<?php
if (empty($_GET['file'])) {
	die('error');
}

$filePath = $_GET['file'];/*entry point*/
echo show_source($filePath, TRUE);/*exit point*/
?>