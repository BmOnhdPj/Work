<?php
// you can read / write $_SERVER, private variables of class, etc
$cfg['password'] = 'secret';
$user = new User();

session_start();

if(isset($_GET['prefix']) && $_GET['mode'] === 'set') {
	$_SESSION[$_GET['prefix'] . 'bla'] = $_GET['data'];/*entry point*/
}

//*
if ($_GET['mode'] === 'view' && $user->GetRole() === 'admin') {
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