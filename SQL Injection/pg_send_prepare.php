<?php
  $dbconn = pg_connect("host=localhost port=5432 dbname=eshop user=postgres password=P0s_sw0rd") or die("Could not connect");

  // Prepare a query for execution
  if (!pg_connection_busy($dbconn)) {
    $sql = "SELECT * FROM users WHERE name = '" . $_GET['name'] . "' limit $1";
    pg_send_prepare($dbconn, "my_query", $sql);
    $result = pg_get_result($dbconn);  
  }

  // Execute the prepared query.  Note that it is not necessary to escape
  // the string "Joe's Widgets" in any way
  if (!pg_connection_busy($dbconn)) {
    pg_send_execute($dbconn, "my_query", array(2));
    $result = pg_get_result($dbconn);
    while ($row = pg_fetch_row($result)) {
      echo $row[1];
      echo "<br />\n";
    }
  }  
?>