<?php
if (empty($_GET['uri'])) {
	die('error');
}

$xml = new SimpleXMLElement($_GET['uri'], NULL, TRUE);
echo $xml;
?>