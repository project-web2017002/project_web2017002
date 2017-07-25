<?php
require("../essential/db/db.php");
require("../essential/ses/session.php");
if($id == ''){
    echo "<script>window.location.assign('../')</script>";
}else {
    include("instamojo.php");
    $po = $_GET['g'];
    $api = new Instamojo\Instamojo('d883725d0649590e6b97f907ca8a861f', '1c79820a17606392de6b594eacef4cf7', 'https://test.instamojo.com/api/1.1/');

    $pay_req_id = $_GET['payment_request_id'];
    $pay_id = $_GET['payment_id'];

    echo $pay_id;
    try {
        $response = $api->paymentRequestPaymentStatus($pay_req_id, $pay_id);
        if ($response['payment']['status'] == 'Credit') {
            $insertorder = mysqli_query($con,"insert into orders (order_by,product_id) values ($id,$po)");
            if($insertorder) {
                $deletethisfromcart = mysqli_query($con,"delete from shoppingcart where product_id=$po and user_id=$id");
                if($deletethisfromcart) {
                    $fetuniquenum = mysqli_query($con, "select * from orders where order_by=$id and product_id=$po");
                    $fet = mysqli_fetch_array($fetuniquenum);
                    $uni = $fet[0];
                    $insertordersatus = mysqli_query($con, "insert into order_status (unique_order_number,status,payment_req_id_mojo,payment_id_mojo) values ($uni,'Order Placed','$pay_req_id','$pay_id')");
                    if ($insertordersatus) {
                        echo "<div><h1>Your Order Has been SuccessFully placed.</h1></div><br><br><div><a href='../'>Go Back To main Page</a></div>";
                    }
                }
            }
        }
    } catch (Exception $e) {
        print('Error: ' . $e->getMessage());
    }
}
?>