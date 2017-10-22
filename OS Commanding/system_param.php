<?php
//1 real vuln
//Vector is like: ?cmd=localhost%20%26%20ping%20localhost%20-n%2010

if (isset($_GET['cmd']))
{
	$cmd = "ping " . $_GET['cmd'];
	system($cmd);
	echo "<br /><br />Command '" . $cmd . "' execution done.";
}
?>