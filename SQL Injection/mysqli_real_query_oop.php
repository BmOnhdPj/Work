<?php
$q = new mysqli("localhost", "root", "", "test");
$q->real_query("SELECT * FROM ci WHERE id=" . $_GET['a']);
?>
