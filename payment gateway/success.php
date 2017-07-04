<?php
error_reporting(0);
include("instamojo.php");

$api = new Instamojo\Instamojo('10da1d38ede2ebb62c0ba3b0bbbc8879', '276e14557b76c0e503bd7ce4f3cc2c4f');

$pay_req_id = $_GET['payment_request_id'];
$pay_id = $_GET['payment_id'];

echo $pay_id;
try {
    $response = $api->paymentRequestPaymentStatus($pay_req_id, $pay_id);
    echo "<br>".$response['payment']['status']."<br>".$response['payment']['buyer_email'];
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}

?>