<?php
  $dbconn = pg_connect("host=localhost port=5432 dbname=eshop user=postgres password=P0s_sw0rd") or die("Could not connect");

  if (!pg_connection_busy($dbconn)) {
      $sql = "select * from users where name='" . $_GET['name'] . "'";
      pg_send_query($dbconn, $sql);
  }
  
  $result = pg_get_result($dbconn);
  while ($row = pg_fetch_row($result)) {
    echo $row[1];
    echo "<br />\n";
  }

?>