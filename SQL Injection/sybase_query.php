<?php
$dbh = sybase_connect('SYBASE', '', '');
$q = sybase_query('select firstname, lastname from ' . $_GET['a'], $dbh, false);
?>