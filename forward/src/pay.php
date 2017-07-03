<?php

include("instamojo.php");

$api = new Instamojo\Instamojo('d883725d0649590e6b97f907ca8a861f', '1c79820a17606392de6b594eacef4cf7',
    'https://test.instamojo.com/api/1.1/');

try {
    $response = $api->paymentRequestCreate(array(
        'purpose' => 'Testing product',
        'amount' => '2500',
        'phone' => '9999999999',
        'buyer_name' => 'Kattappa',
        'redirect_url' => 'http://localhost/optimus/forward/src/thanks.php',
        'send_email' => true,
        'webhook' => '',
        'send_sms' => true,
        'email' => 'kattappa@bahubali.com',
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
