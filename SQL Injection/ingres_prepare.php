<?php
$link = ingres_connect("demodb");
$result = ingres_prepare($link, "select * from " . $_GET['a']);
ingres_execute($result);
?>