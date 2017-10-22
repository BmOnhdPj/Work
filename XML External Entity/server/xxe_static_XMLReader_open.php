<?php
if (empty($_GET['uri'])) {
	die('error');
}

$uri = $_GET['uri'];

$reader = XMLReader::open($uri);
$reader->setParserProperty(XMLReader::SUBST_ENTITIES, TRUE);

while ($reader->read()) {
	//echo 'name: ' . $reader->name .', nodeType: ' . $reader->nodeType . ', ';
	//echo 'hasValue: ' . var_export($reader->hasValue, TRUE) . ', ';
	if ($reader->hasValue) {
		echo $reader->value . "\n";
	}
}

$reader->close();
?>