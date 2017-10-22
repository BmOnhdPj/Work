<?php
if (empty($_GET['msg'])) {
	die('error');
}

$msg = $_GET['msg'];/*entry point*/
user_error($msg);/*exit point*/
?>