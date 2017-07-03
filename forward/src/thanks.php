<h1>Success</h1>
<?php
error_reporting(0);
include("instamojo.php");

$api = new Instamojo\Instamojo('d883725d0649590e6b97f907ca8a861f', '1c79820a17606392de6b594eacef4cf7',
    'https://test.instamojo.com/api/1.1/');

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