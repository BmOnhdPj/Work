<?php
$secretURL = "http://example.org/?key=secret";
$data = file_get_contents($secretURL);
// do something

//PM sample
$password = $_POST['password'];
$secretURL2 = "http://example.org/?pass=" . $password;
$data = file_get_contents($secretURL2);
?>