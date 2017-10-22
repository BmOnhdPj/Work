<?php
if (empty($_POST['data'])) {
	die('error');
}

$xml = $_POST['data'];

$reader = new XMLReader();
$reader->xml($xml, 'UTF-8', LIBXML_NOENT);
$reader->setParserProperty(XMLReader::VALIDATE, TRUE);

/*
echo "isValid = ";
var_dump($reader->isValid());
//*/

while ($reader->next()) {
	echo $reader->readString();
}
?>