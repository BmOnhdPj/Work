<?php
$conn = mysqli_connect('localhost', 'root', '', 'test');
mysqli_real_query($conn, "SELECT * FROM ci WHERE id=" . $_GET['a']);
?>
