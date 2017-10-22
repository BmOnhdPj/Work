<?php
$fp = gzopen($_GET['a'], "wb");
gzwrite($fp, "some data");
gzclose($fp);

$fp = gzopen($_GET['a'], "rb");
gzclose($fp);
?>