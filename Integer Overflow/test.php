<?php
define('MIN_BALANCE', -1000);
$balance = 1000;

if (empty($_GET['amount']) || empty($_GET['price'])
		|| empty($_GET['srcAccountId']) || empty($_GET['dstAccountId'])) {
	
	die('incorrect params');
}

$amount = (int)$_GET['amount'];
$price = (int)$_GET['price'];
$srcAccountId = (int)$_GET['srcAccountId'];
$dstAccountId = (int)$_GET['dstAccountId'];

$payment = (int)($price * $amount);
$newBalance = $balance - $payment;

if ($newBalance >= MIN_BALANCE) {
	// allow transaction
	$balance = $newBalance;
	SendMoney($srcAccountId, $dstAccountId, $payment);
	echo "Money send($payment), new balance $balance";
}
else {
	echo "You need $payment, you have $balance";
}

function SendMoney($srcAccountId, $dstAccountId, $payment) {
	// do things
}
?>