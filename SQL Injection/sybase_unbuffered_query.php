<?php
$dbh = sybase_connect('SYBASE', '', '');
$q = sybase_unbuffered_query('select firstname, lastname from ' . $_GET['a'], $dbh, false);
?>