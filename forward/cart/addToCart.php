<?php
// code to add product into cart
// page called through an ajax call
// returns to ajax call
error_reporting(0);
require("../../essential/db/db.php");
require("../../essential/ses/session.php");

$getPr_id = $_POST['gyuvhdsfjhdowojn9njdbjhevgevsvcLH']; // getting product id
if($getPr_id == ''){
    $response = "Couldn't load Product";
}else {
    $getinfo = mysqli_query($con, "select * from shoppingcart where product_id=$getPr_id and user_id=$id"); // checking if product is already in cart
    $getnuminfo = mysqli_num_rows($getinfo);
    if ($getnuminfo > 0) {
        $response = "Product Is already in cart";
    } else {
        $insertcart = mysqli_query($con, "insert into shoppingcart (product_id,user_id) values ($getPr_id,$id)"); //insert product to cart
        if($insertcart){
            $response = "Success";
        } else {
            $response = "Some Problem Occurs while Adding Product to your cart! Please give it a Retry";
        }
    }
}
echo $response; //returns actual response