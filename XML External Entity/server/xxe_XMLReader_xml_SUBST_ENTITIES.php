<?php
if (empty($_POST['data'])) {
	die('error');
}

$data = $_POST['data'];

$reader = new XMLReader();
$reader->XML($data);
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