<?php
$conn = cubrid_connect("localhost", 33000, "demodb");
$sql = "SELECT g.event_code, e.name FROM " . $_GET['a'];
$req = cubrid_execute($conn, $sql);
?>