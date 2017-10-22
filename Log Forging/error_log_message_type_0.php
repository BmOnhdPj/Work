<?php
$message = $_GET['message'];
error_log('prefix ' . $message, 0);
error_log('prefix ' . $message . ' suffix', 0);
error_log($message . ' suffix', 0);
error_log($message, 0);
?>