<?php
class Database {
	
	public static function getConnection() {
		$link = mysql_connect(DB_HOST . ':' . DB_PORT, DB_USER, DB_PASSWORD);
		if ($link === FALSE) {
			die('Could not connect to database');
		}

		if (mysql_select_db(DB_NAME) === FALSE) {
			die('Could not select database');
		}

		if (mysql_set_charset('utf8') === FALSE) {
			die('Unable to set the character set');
		}
		
		return $link;
	}
}
?>