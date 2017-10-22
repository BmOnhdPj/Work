<?php
if (empty($_POST['login']) || empty($_POST['password'])) {
	echo '<form method="POST" action="">
	Login: <input type="text" name="login" />
	Password: <input type="password" name="password" />
	<input type="submit" value="Login" />
</form>';
	exit;
}

$login = $_POST['login'];
$password = $_POST['password'];
ChangeUserPassword($login, $password);

function ChangeUserPassword($login, $password) {
	// do something
	$passwordToStoreInDatabase = hash('sha256', $password);
	// ...
}
?>