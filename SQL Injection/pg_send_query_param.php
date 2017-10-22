<?php
  $dbconn = pg_connect("host=localhost port=5432 dbname=eshop user=postgres password=P0s_sw0rd") or die("Could not connect");

  // Using parameters.  Note that it is not necessary to quote or escape
  // the parameter.
  $sql = 'select * from users where name =\'' . $_GET['name'] . '\' limit $1';
  pg_send_query_params($dbconn, $sql, array(2));
  $result = pg_get_result($dbconn);

  while ($row = pg_fetch_row($result)) {
	  echo $row[1];
	  echo "<br />\n";
  }
  
 
?>