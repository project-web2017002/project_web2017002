<?php
include("instamojo.php");
$api = new Instamojo\Instamojo('10da1d38ede2ebb62c0ba3b0bbbc8879', '276e14557b76c0e503bd7ce4f3cc2c4f');

try {
    $response = $api->paymentRequestCreate(array(
        'purpose' => 'Test Pay',
        'amount' => '10',
        'phone' => '8968336242',
        'buyer_name' => 'Akash',
        'redirect_url' => 'http://localhost/optimus/forward/src/thanks.php',
        'send_email' => true,
        'webhook' => '',
        'send_sms' => true,
        'email' => 'akashverma141997@gmail.com',
        'allow_repeated_payments' => false
    ));
    $pay_url = $response['longurl'];
    header("location:".$pay_url);
    exit();
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}
?>