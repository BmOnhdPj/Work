<?php 
  $db = pg_connect("host=localhost port=5432 dbname=eshop user=postgres password=P0s_sw0rd");
  // This is safe, since $_POST is converted automatically
  $rec = pg_select($db, $_GET['table'], array('name' => 'user'));
  if ($rec) {
      echo "Records selected\n";
      echo $rec[0]['name'];
  } else {
      echo "User must have sent wrong inputs\n";
  }
?>