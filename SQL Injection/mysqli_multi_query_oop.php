<?php
$q = new mysqli("localhost", "root", "", "test");
$q->multi_query("SELECT * FROM ci WHERE id=" . $_GET['a']);
?>
