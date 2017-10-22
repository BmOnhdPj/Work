<?php
if (empty($_GET['userID'])){
	die('error');
}

$userID = $_GET['userID'];
$sid = generateSessionID($userID);

function generateSessionID($userID){
	$arr = array($userID, $userID-1, $userID+1);
	$ids = shuffle($arr);
	return $ids[0];
}
?>