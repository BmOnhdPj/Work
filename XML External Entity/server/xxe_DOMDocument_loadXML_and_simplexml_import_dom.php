<?php
if (empty($_POST['data'])) {
	die('error');
}

$data = $_POST['data'];

$doc = new DOMDocument();
$doc->resolveExternals = TRUE;
$doc->substituteEntities = TRUE;
$doc->loadXML($data);

$xml = simplexml_import_dom($doc);
echo $xml;
?>