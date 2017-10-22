<?php
$message = $_GET['message'];
error_log('prefix ' . $message, 1, 'root@test.ru');
error_log('prefix ' . $message . ' suffix', 1, 'root@test.ru');
error_log($message . ' suffix', 1, 'root@test.ru');
error_log($message, 1, 'root@test.ru');
?>