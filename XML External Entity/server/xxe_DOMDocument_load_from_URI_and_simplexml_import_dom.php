<?php
if (empty($_GET['uri'])) {
	die('error');
}

$uri = $_GET['uri'];

$doc = new DOMDocument();
$doc->resolveExternals = TRUE;
$doc->substituteEntities = TRUE;
$doc->load($uri);

$xml = simplexml_import_dom($doc);
echo $xml;
?>