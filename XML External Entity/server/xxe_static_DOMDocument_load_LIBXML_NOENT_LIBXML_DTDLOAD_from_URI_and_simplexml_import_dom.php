<?php
if (empty($_GET['uri'])) {
	die('error');
}

$uri = $_GET['uri'];
$doc = DOMDocument::load($uri, LIBXML_NOENT | LIBXML_DTDLOAD);
$xml = simplexml_import_dom($doc);
//echo $xml;
?>