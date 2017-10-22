<?php
$conn = pg_pconnect("host=localhost port=5432 dbname=eshop user=postgres password=P0s_sw0rd");
if (!$conn) {
  echo "Could not connect.\n";
  exit;
}


$result = pg_query($conn, "SELECT * FROM users WHERE \"name\"='" . $_GET['name'] . "'");
if (!$result) {
  echo "Произошла ошибка.\n";
  exit;
}

while ($row = pg_fetch_row($result)) {
  echo $row[1];
  echo "<br />\n";
}
 
?>