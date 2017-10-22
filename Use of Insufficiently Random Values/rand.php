<?php
if (empty($_GET['userID'])){
	die('error');
}

$userID = $_GET['userID'];
$sid = generateSessionID($userID);

function generateSessionID($userID){
	srand($userID);
	return rand();
}
?>