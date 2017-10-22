<?php 
  $db = pg_connect("host=localhost port=5432 dbname=eshop user=postgres password=P0s_sw0rd");
  $data = array('name'=>'user', 'second_name'=>'userov');
  
  $rec = pg_update($db, $_GET['table'], array('name' => 'user'), $data);
  if ($rec) {
      echo "Records updated\n";
  } else {
      echo "User must have sent wrong inputs\n";
  }
?>