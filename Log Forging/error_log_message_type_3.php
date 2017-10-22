<?php
$logFile = '/var/log/my-errors.log';

$message = $_GET['message'];

error_log('prefix ' . $message, 3, $logFile);
error_log('prefix ' . $message . ' suffix', 3, $logFile);
error_log($message . ' suffix', 3, $logFile);
error_log($message, 3, $logFile);
?>