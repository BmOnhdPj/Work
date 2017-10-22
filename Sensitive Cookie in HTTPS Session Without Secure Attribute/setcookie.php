<?php
$value = 'something from somewhere';
setcookie('TestCookie', $value, time() + 60*60*24*365*20);// 20 years
?>