<?php
if (empty($_POST['data'])) {
	die('error');
}

$data = $_POST['data'];
$doc = new DOMDocument();
$doc->loadXML($data, LIBXML_NOENT);

echo $doc->documentElement->nodeValue;
?>