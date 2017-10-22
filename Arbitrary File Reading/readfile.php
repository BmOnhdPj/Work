<?php
if (empty($_GET['file'])) {
	die('error');
}

$filePath = $_GET['file'];/*entry point*/
$bytesRead = readfile($filePath);/*exit point*/
if ($bytesRead > 0) {
	/*vuln_code_marker_for_AI*/
}
?>