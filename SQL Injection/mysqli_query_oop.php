<?php
$q = new mysqli("localhost", "root", "", "test");
$q->query("SELECT * FROM ci WHERE id=" . $_GET['a']);
?>
