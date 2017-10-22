<?php
if (empty($_GET['uri'])) {
	die('error');
}

$xml = new SimpleXMLElement($_GET['uri'], LIBXML_NOENT | LIBXML_DTDLOAD, TRUE);
echo $xml;
?>