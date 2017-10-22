<?php
if (empty($_GET['n'])) {
	die('undefined n');
}

$n = $_GET['n'];
echo 'n! = ' . factorial($n);

function factorial($n) {
	$res = $n * factorial($n - 1);
	return $res;
}
?>