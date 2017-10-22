<?php
//1 real, 1 fake vuln

if (isset($_GET['cmd']))
{
	$cmd = $_GET['cmd'];
	echo "Command 1 '" . $cmd . "' result:<br />";
	system($cmd);
	echo "<br />Exectuion of '" . $cmd . "' is done. <br /><br />";	
}
if (isset($_GET['cmd2']))
{
	$cmd2 = "ping " . escapeshellcmd($_GET['cmd2']);
	echo "Command 2 '" . $cmd2 . "' result:<br />";
	system($cmd2);
	echo "<br /> Should not be executed.";
}
?>