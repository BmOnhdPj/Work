<?php
// you can read $_SERVER, private variables of class, etc
$foo = new Foo();

session_start();

if(isset($_GET['prefix']) && $_GET['mode'] === 'set') {
	$_SESSION[$_GET['prefix']] = 'value';/*entry point*/
}

if ($_GET['mode'] === 'view') {
	$sessionInfo = var_export($_SESSION, true);
	echo htmlentities($sessionInfo);/*exit point*/
}

class Foo {
	private $bar = 'secret';
}
?>