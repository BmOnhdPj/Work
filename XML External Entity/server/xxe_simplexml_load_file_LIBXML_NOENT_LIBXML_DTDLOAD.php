<?php
if (empty($_GET['uri'])) {
	die('error');
}

$uri = $_GET['uri'];
$xml = simplexml_load_file($uri, 'SimpleXMLElement', LIBXML_NOENT | LIBXML_DTDLOAD);
echo $xml;
?>