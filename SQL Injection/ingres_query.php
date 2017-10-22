<?php
$link = ingres_connect("demodb");
$result = ingres_query($link, "select * from " . $_GET['a']);
?>