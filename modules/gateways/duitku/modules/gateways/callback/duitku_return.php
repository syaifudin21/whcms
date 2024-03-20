<?php

require "../../../init.php";
$whmcs->load_function("gateway");
$whmcs->load_function("invoice");

// check if the module is activated
/*--- start ---*/


if (empty($_REQUEST['resultCode']) || empty($_REQUEST['merchantOrderId']) || empty($_REQUEST['reference'])) {
	error_log('wrong query string please contact admin.');
	exit;
}

$order_id = stripslashes($_REQUEST['merchantOrderId']);
$status = stripslashes($_REQUEST['resultCode']);
$reference = stripslashes($_REQUEST['reference']);

if ($status == '00') {				
		$url = $CONFIG['SystemURL'] . "/viewinvoice.php?id=" . $order_id . "&paymentsuccess=true";		
}else if ($_REQUEST['resultCode'] == '01') {
		$url = $CONFIG['SystemURL'] . "/viewinvoice.php?id=" . $order_id;
		header('Location: ' . $url);
}else {		
		$url = $CONFIG['SystemURL'] . "/viewinvoice.php?id=" . $order_id . "&paymentfailed=true";		
}				

//redirect to invoice with message status
header('Location: ' . $url);
die();
			