<?php
$conn = mysqli_connect('localhost', 'root', '', 'test');
mysqli_prepare($conn, "SELECT * FROM ci WHERE id=" . $_GET['a']);
?>