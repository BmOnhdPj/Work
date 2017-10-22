<?php
$message = $_GET['message'];
$headers = $_GET['headers'];
error_log('prefix ' . $message, 1, 'root@ptsecurity.ru', $headers);
error_log('prefix ' . $message . ' suffix', 1, 'root@ptsecurity.ru', $headers);
error_log($message . ' suffix', 1, 'root@ptsecurity.ru', $headers);
error_log($message, 1, 'root@ptsecurity.ru', $headers);
?>