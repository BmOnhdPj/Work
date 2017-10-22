<?php
class Config {
	private $userRoles = array('user','admin');
	
	public function SerUserRoles($userRoles) {
		$this->userRoles = $userRoles;
	}
	
	public function GetUserRoles() {
		return $this->userRoles;
	}
}

if (empty($_GET['roles'])) {
	die('error');
}
$roles = $_GET['roles'];

$config = new Config;
$config->SerUserRoles($roles);
//var_dump($config->GetUserRoles());
?>