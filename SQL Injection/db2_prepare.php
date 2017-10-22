<?php
$animal = array(array($_GET['a']));
$conn = db2_connect("test", "root", "root");
$insert = 'INSERT INTO animals (id, breed) VALUES (?, ?)';
$stmt = db2_prepare($conn, $insert);
$result = db2_execute($stmt, $animal);
?>