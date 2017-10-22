<?php
$conn = db2_connect("test", "root", "root");
$create = 'CREATE TABLE animals (id INTEGER, ' . $_GET['a'] . ' VARCHAR(32))';
$result = db2_exec($conn, $create);
?>