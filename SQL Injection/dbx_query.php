<?php
$link = dbx_connect('mysql', "localhost", "test", "root", "");
$result = dbx_query($link, 'SELECT id FROM table WHERE id = ' . $_GET['a']);
?>