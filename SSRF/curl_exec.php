<?php
if (empty($_POST['url'])) {
	die('no url');
}

$link = $_POST['url'];

$curlObj = curl_init();
curl_setopt($curlObj, CURLOPT_URL, $link);
curl_setopt($curlObj, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curlObj);
curl_close($curlObj);

$filename = './curled/'.rand().'.txt';
file_put_contents($filename, $result);
echo '<a href="' . $filename . '">result</a>';
?>