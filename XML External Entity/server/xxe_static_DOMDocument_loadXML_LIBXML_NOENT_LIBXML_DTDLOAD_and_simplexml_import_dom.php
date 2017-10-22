<?php
if (empty($_POST['data'])) {
	die('error');
}

$data = $_POST['data'];
$doc = DOMDocument::loadXML($data, LIBXML_NOENT | LIBXML_DTDLOAD);
$xml = simplexml_import_dom($doc);
echo $xml;
?>