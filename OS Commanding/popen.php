<?php
if (isset($_GET['cmd']))
{
	$cmd = "ping " . $_GET['cmd'];
	echo "Command '$cmd' execution.";
	$handle = popen($cmd, "r");
	$read = fread($handle, 2096);
	echo "<br />Result: <pre>" . $read . "</pre>";
}
?>