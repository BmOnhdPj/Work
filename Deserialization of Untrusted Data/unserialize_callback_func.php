<?php
/**
 * It's possible to set a callback-function which will be called,
 * if an undefined class should be instantiated during unserializing
 * http://php.net/manual/en/function.unserialize.php
 *
 * Exploit XSS vulnerability in file that couldn't be called directly
 * ?data=O%3A33%3A"unserialize_callback_func_inc_xss"%3A0%3A%7B%7D&xss=inj
 */
define('FLAG_INCLUDED', 1);
ini_set('unserialize_callback_func', 'mycallback');

function mycallback($classname) {
	$classPath = './' . $classname . '.php';
	if (file_exists($classPath)) {
		include $classPath;
	}
}

/*
class unserialize_callback_func_inc_xss {
}
echo urlencode(serialize(new unserialize_callback_func_inc_xss()));
//*/
$userData = unserialize($_GET['data']);
?>