<?php
error_reporting(0);
include("instamojo.php");

$api = new Instamojo\Instamojo('10da1d38ede2ebb62c0ba3b0bbbc8879', '276e14557b76c0e503bd7ce4f3cc2c4f');

$data = $_POST;
$mac_provided = $data['mac'];

$payment_id = $data['payment_id'];
$payment_request_id = $data['payment_request_id'];
$payment_status=$data['status'];

try {
    $response = $api->paymentRequestPaymentStatus($payment_request_id);
    $realstatus = $response['status'];
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}

unset($data['mac']);
$ver = explode('.', phpversion());
$major = (int) $ver[0];
$minor = (int) $ver[1];
if($major >= 5 and $minor >= 4){
    ksort($data, SORT_STRING | SORT_FLAG_CASE);
}
else{
    uksort($data, 'strcasecmp');
}
$mac_calculated = hash_hmac("sha1", implode("|", $data), "28eec07f3f0a4f41b99b1864d71465eb");
if($mac_provided == $mac_calculated){
    if($realstatus == "completed"){
        echo "Success";
    }
    else{
        echo "failed";
    }
}
else{
    echo "MAC mismatch";
}

?>