<?php
define('DB_HOST', 'localhost');
define('DB_PORT', 3306);
define('DB_USER', '');
define('DB_PASSWORD', '');
define('DB_NAME', '');

mysql_connect(DB_HOST . ':' . DB_PORT, DB_USER, DB_PASSWORD);
mysql_select_db(DB_NAME);
$query = "SELECT1 * FROM items WHERE 1";

$result = mysql_query($query);

if ($result === FALSE) {
	exit('Invalid query: ' . mysql_error());
}
?>