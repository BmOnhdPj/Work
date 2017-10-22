<?php
if (empty($_POST['data'])) {
	die('error');
}

$data = $_POST['data'];
$xml = simplexml_load_string($data, 'SimpleXMLElement', LIBXML_NOENT);
echo $xml;
?>