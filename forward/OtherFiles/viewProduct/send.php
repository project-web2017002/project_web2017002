<?php
require('../../../essential/db/db.php');
require('../../../essential/ses/session.php');

$product_id = $_POST['skey'];
$getProduct = mysqli_query($con, "select * from listed_products where product_id=$product_id");
$numrows = mysqli_num_rows($getProduct);
if ($numrows <= 0) {
    $response = "error";
    echo $response;
} else {
    $fetch = mysqli_fetch_array($getProduct);
    $title = $fetch[1];
    $file = substr($fetch[2],20);
    $row=0;
    if (($handle = fopen("../../../".$file, "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 4096, ",")) !== FALSE) {
            $row++;
            if ($row == 1) {
                continue;
            } else {
                $row = 0;
                $field = implode(",", $data);
                $row_arr = explode(",", $field);
                $category = $row_arr[0];
                if ($category == 10001) {
                    $cost = $row_arr[3]; $username = $row_arr[6]; $email = $row_arr[7]; $contact = $row_arr[8];
                } elseif ($category == 10002 || $category == 10012) {
                    $cost = $row_arr[7]; $username = $row_arr[8]; $email = $row_arr[9]; $contact = $row_arr[14];
                } elseif ($category == 10003) {
                    $cost = $row_arr[6]; $username = $row_arr[7]; $email = $row_arr[8]; $contact = $row_arr[11];
                } elseif ($category == 10004 || $category == 10005) {
                    $cost = $row_arr[6]; $username = $row_arr[8]; $email = $row_arr[11]; $contact = $row_arr[10];
                } elseif ($category == 10006) {
                    $cost = $row_arr[4]; $username = $row_arr[7]; $email = $row_arr[8]; $contact = $row_arr[9];
                } elseif ($category == 10007 || $category == 10016) {
                    $cost = $row_arr[7]; $username = $row_arr[12]; $email = $row_arr[13]; $contact = $row_arr[14];
                } elseif ($category == 10008 || $category == 10017 || $category == 10010 || $category == 10011 || $category == 10013) {
                    $cost = $row_arr[11]; $username = $row_arr[14]; $email = $row_arr[15]; $contact = $row_arr[16];
                } elseif ($category == 10009) {
                    $cost = $row_arr[7]; $username = $row_arr[12]; $email = $row_arr[13]; $contact = $row_arr[14];
                } else {
                    $cost = 0000; $username = ''; $email = ''; $contact = '';
                }
            }
        }
    }
    $image = $fetch[3];
    if($image == ''){
        $img = "<img class='img-responsive img-thumbnail' id='viewproductImage' src='http://www.crouzet.com/wp-content/themes/innovistasensors_wp-theme_crouzet-portal/assets/algolia/img/no-image-available.jpg'>";
    }else {
        $img = "<img class='img-responsive img-thumbnail' id='viewproductImage' src='Category/images/$image'>";
    }
    $cartquery = mysqli_query($con,"select * from shoppingcart where product_id=$product_id and user_id=$id");
    $numcart = mysqli_num_rows($cartquery);
    if($numcart <= 0){
        $option = "<div class='col-sm-6 btn btn-default' style='font-weight: 900;'><h1>Cost: <span class='fa fa-rupee' id='cost'></span></h1></div><div class='col-sm-6 btn btn-success' id='_acpr' style='font-weight: 900;' onclick='addtocart();'><h1><span class='fa fa-shopping-cart'></span> Add to cart</h1></div>";
    }else{
        $option = "<div class='col-sm-6 btn btn-default' style='font-weight: 900;'><h1>Cost: <span class='fa fa-rupee' id='cost'></span></h1></div><div class='col-sm-6 btn btn-info' style='font-weight: 900;'><h1><span class='fa fa-shopping-cart'></span> In Cart</h1></div>";
    }
    $response = "success,$title,$img,$cost,$username,$email,$contact,$option";
    echo $response;
}