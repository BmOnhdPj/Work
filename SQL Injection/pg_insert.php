<?php 
  $dbconn = pg_connect("host=localhost port=5432 dbname=eshop user=postgres password=P0s_sw0rd");
  // This is safe, since $_POST is converted automatically
  $res = pg_insert($dbconn,  $_GET['table'], array("name" => "test", "second_name" => "testov"));
  if ($res) {
      echo "Data is successfully logged\n";
  } else {
      echo "User must have sent wrong inputs\n";
  }
?>