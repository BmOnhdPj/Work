<?php
if ($_SERVER['REMOTE_ADDR'] !== '127.0.0.1') {
	die('access denied');
}

if (isset($_GET['username'])) {
	die('<error>' . $_GET['username'] . ' is incorrect username!</error>');
}

if (isset($_GET['s3cr3t']) && $_GET['s3cr3t'] === 'tru3') {
	die('FLAG: fbc533ebad2f00ab31ffac40221d58c0');
}

echo 'secret data here: /?s3cr3t=tru3';
?>