<?php
$q = new mysqli("localhost", "root", "", "test");
$q->prepare("SELECT * FROM ci WHERE id=" . $_GET['a']);
?>
