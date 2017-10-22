<?php
if (empty($_POST['url'])) {
	die('no url');
}

$content = file_get_contents($_POST['url']);
$filename = './images/img' . rand() . '.jpg';
file_put_contents($filename, $content);

echo '<img src="' . $filename . '"/>';
?>