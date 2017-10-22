<?php
if (empty($_POST['xml'])) {
	die('error');
}

$xml = simplexml_load_string($_POST['xml']);
echo $xml;
?>