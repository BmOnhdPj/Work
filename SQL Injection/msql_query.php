<?php
$link = msql_connect("dbserver");
msql_select_db("db", $link);
$result = msql_query("SELECT * FROM table WHERE id=" . $_GET['a'], $link);
?>