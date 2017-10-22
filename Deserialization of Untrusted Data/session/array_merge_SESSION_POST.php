<?php
// you can read / write $_SERVER, private variables of class, etc
$cfg['password'] = 'secret';
$user = new User();

session_start();

$mode = $_GET['mode'] ? $_GET['mode'] : '';

if($mode === 'merge') {
	$_SESSION = array_merge($_SESSION, $_POST);/*entry point*/
}
elseif ($mode === 'view' && $user->GetRole() === 'admin') {
	$sessionInfo = var_export($_SESSION, true);
	echo htmlentities($sessionInfo);/*exit point*/
}

//*
class User {
	private $role = 'user';
	
	public function GetRole() {
		return $this->role;
	}
}
//*/

/*
class User {
	private $role = 'admin';
}
$user = new User();
file_put_contents('./exploit.txt', serialize($user));
//*/
?>