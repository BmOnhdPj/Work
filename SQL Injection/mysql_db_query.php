<?php
// Connect to the default MySQL server
mysql_connect ('localhost', 'root', '')
   or die ("Could not connect to the default MySQL server.");

// Storing our query in a variable helps us debug more easily
// Change all login names to lowercase
$query = "SELECT * FROM users WHERE name='" . $_GET['name'] . "'"; 

$result = mysql_db_query ('eshop', $query)
    or die ("Query '$query' failed with error message: \"" . mysql_error () . '"');

if ( $result ) {
	while ( $row = mysql_fetch_assoc($result) ) {
		echo htmlspecialchars($row['name']);
	}
}

?>