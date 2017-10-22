<?php
if (empty($_GET['msg'])) {
	die('error');
}

$msg = $_GET['msg'];/*entry point*/
trigger_error($msg);/*exit point*/
?>