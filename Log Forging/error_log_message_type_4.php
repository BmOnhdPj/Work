<?php
$message = $_GET['message'];
error_log('prefix ' . $message, 4);
error_log('prefix ' . $message . ' suffix', 4);
error_log($message . ' suffix', 4);
error_log($message, 4);
?>