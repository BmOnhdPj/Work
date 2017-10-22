<?php
$fp = gzopen($_GET['a'], "wb");
gzwrite($fp, "some data");
gzclose($fp);
?>