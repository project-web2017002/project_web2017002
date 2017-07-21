<?php
error_reporting(0);
require("../../essential/db/db.php");
require("../../essential/ses/session.php");

$pr = $_POST['hjkl'];
if($pr == ''){
    $response = "Couldn't load cart product";
    echo $response;
}else{
    $remove = mysqli_query($con,"delete from shoppingcart where count=$pr");
    if($remove){
        $response = "success";
        echo $response;
    }else{
        $response = "Some error occured";
        echo $response;
    }
}