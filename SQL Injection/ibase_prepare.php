<?php
$query = "SELECT * FROM " . $_GET['a'];
$p_sql = ibase_prepare($query);
$result = ibase_execute($p_sql);
?>