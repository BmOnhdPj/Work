<?php
$q = new mysqli("localhost", "root", "", "test");
$st = $q->stmt_init();
$st->prepare("SELECT * FROM ci WHERE id=" . $_GET['a']);
$st->execute();
?>
