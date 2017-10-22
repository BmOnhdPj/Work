<?php 
  $db = pg_connect("host=localhost port=5432 dbname=eshop user=postgres password=P0s_sw0rd");
  // This is safe, since $_POST is converted automatically
  $res = pg_delete($db, $_GET['table'], array("name" => "test"));
  if ($res) {
      echo "Data is deleted: $res\n";
  } else {
      echo "User must have sent wrong inputs\n";
  }
?>