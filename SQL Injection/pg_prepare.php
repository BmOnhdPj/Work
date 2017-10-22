<?php
// Connect to a database named "mary"
$dbconn = pg_connect("host=localhost port=5432 dbname=eshop user=postgres password=P0s_sw0rd");

// Prepare a query for execution
$sql = "SELECT * FROM users WHERE name = '" . $_GET['name'] . "' limit $1";
$result = pg_prepare($dbconn, "my_query", $sql);

// Execute the prepared query.  Note that it is not necessary to escape
// the string "Joe's Widgets" in any way
$result = pg_execute($dbconn, "my_query", array(2));

  while ($row = pg_fetch_row($result)) {
	  echo $row[1];
	  echo "<br />\n";
  }
  
?>