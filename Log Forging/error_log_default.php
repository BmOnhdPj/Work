<?php
$message = $_GET['message'];
error_log('prefix ' . $message);
error_log('prefix ' . $message . ' suffix');
error_log($message . ' suffix');
error_log($message);
?>