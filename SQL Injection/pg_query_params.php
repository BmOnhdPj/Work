<?php
// Connect to a database named "mary"
$dbconn = pg_connect("host=localhost port=5432 dbname=eshop user=postgres password=P0s_sw0rd");

// Find all shops named Joe's Widgets.  Note that it is not necessary to
// escape "Joe's Widgets"
$sql = "SELECT * FROM users WHERE name = '" . $_GET['name'] . "' limit $1";
$result = pg_query_params($dbconn, $sql, array(2));

while ($row = pg_fetch_row($result)) {
  echo $row[1];
  echo "<br />\n";
}
  
?>