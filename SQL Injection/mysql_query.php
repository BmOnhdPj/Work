<?php
	$conn = mysql_connect('localhost', 'root', '');

	if (!$conn) {
		die("Could not connect to DB");
	}

	$db_selected = mysql_select_db('eshop');

    $sql = "SELECT * FROM users WHERE name='" . $_GET['name'] . "'";
    $result = mysql_query($sql);
    
    if ( $result ) {
    	while ( $row = mysql_fetch_assoc($result) ) {
    		echo htmlspecialchars($row['name']);
    	}
    }
?>