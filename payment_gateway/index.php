<?php
// gets data when user click on buy an item in cart
// receives just two parameters, product id and its cost
error_reporting(0);
require("../essential/db/db.php");
require("../essential/ses/session.php");
if($id == ''){ // for wrong access
    echo "<script>window.location.assign('../')</script>";
}else {
    $pr_id = $_GET['b'];
    $cost = $_GET['a'];
    $gettitle = mysqli_query($con,"select * from listed_products where product_id=$pr_id"); //product details
    $fet = mysqli_fetch_array($gettitle);
    $title = $fet[1];
    $getuserinfo = mysqli_query($con,"select * from verified_user where user_id=$id"); // user details
    $fetchuserdata = mysqli_fetch_array($getuserinfo);
    $name = $fetchuserdata[1];
    $email = $fetchuserdata[2];
    $contact = $fetchuserdata[3];
    include("instamojo.php");
    // this should be like $api = new Instamojo\Instamojo('YOUR API', 'YOUR AUTH TOKEN'); in working environment
    $api = new Instamojo\Instamojo('d883725d0649590e6b97f907ca8a861f', '1c79820a17606392de6b594eacef4cf7', 'https://test.instamojo.com/api/1.1/');

    try {
        $response = $api->paymentRequestCreate(array(
            'purpose' => $title,
            'amount' => $cost,
            'phone' => $contact,
            'buyer_name' => $name,
            'redirect_url' => 'http://localhost/optimus/payment_gateway/success.php?g='.$pr_id,
            'send_email' => true,
            'webhook' => '',
            'send_sms' => true,
            'email' => $email,
            'allow_repeated_payments' => false
        ));
        $pay_url = $response['longurl'];
        header("location:" . $pay_url);
        exit();
    } catch (Exception $e) {
        print('Error: ' . $e->getMessage());
    }
}
?>