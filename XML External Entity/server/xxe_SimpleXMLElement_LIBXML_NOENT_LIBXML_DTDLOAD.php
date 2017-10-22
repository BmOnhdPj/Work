<?php
if (empty($_POST['data'])) {
	die('error');
}

$data = $_POST['data'];
$xml = new SimpleXMLElement($data, LIBXML_NOENT | LIBXML_DTDLOAD);
echo $xml;
?>