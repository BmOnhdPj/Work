<?php
$dbhandle = sqlite_open('sqlitedb');
$result = sqlite_exec($dbhandle, "UPDATE users SET email='jDoe@example.com' WHERE username=" . $_GET['a'], $error);
?>