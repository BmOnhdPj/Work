<?php
// https://docs.google.com/document/d/1v1TkWZtrhzRLy0bYXBcdLUedXGb9njTNIJXa3u9akHM/edit?pli=1#heading=h.v6ej2vgw9apu
// test.php receive POST body if GET param code is equal to 307
$url = "http://localhost:81/redirect.php?code={$_GET['code']}&url=http://localhost:82/test.php";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'key=secret');
$resp = curl_exec($ch);
?>