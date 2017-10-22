<?php
if (empty($_GET['code'])) {
	die('no status code');
}

// in other case may be open redirect
header('Location: http://localhost:82/test.php', false, (int)$_GET['code']);
?>