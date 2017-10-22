<?php
if (empty($_POST['data'])) {
	die('error');
}

$data = $_POST['data'];
$xml = new SimpleXMLElement($data);
echo $xml;
?>