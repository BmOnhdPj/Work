<?php
$q = mysqli_connect("localhost", "root", "", "test");
$st = mysqli_stmt_init($q);
mysqli_stmt_prepare($st, "SELECT * FROM ci WHERE id=" . $_GET['a']);
mysqli_stmt_execute($st);
?>
