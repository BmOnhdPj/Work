<?php
if (empty($_GET['uri'])) {
	die('error');
}

$xml = simplexml_load_file($_GET['uri']);
echo $xml;
?>