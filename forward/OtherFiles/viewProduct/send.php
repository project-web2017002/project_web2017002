<?php
// for fetching a products all info and returns to its called ajax call
require('../../../essential/db/db.php');
require('../../../essential/ses/session.php');

$product_id = $_POST['skey'];
$getProduct = mysqli_query($con, "select * from listed_products where product_id=$product_id"); // getting product info from db
$numrows = mysqli_num_rows($getProduct);
if ($numrows <= 0) { // if product not found
    $response = "error";
    echo $response;
} else {
    $fetch = mysqli_fetch_array($getProduct);
    $title = $fetch[1];
    $file = substr($fetch[2],20);
    $row=0;
    if (($handle = fopen("../../../".$file, "r")) !== FALSE) { //opening product file
        while (($data = fgetcsv($handle, 4096, ",")) !== FALSE) {
            $row++;
            if ($row == 1) {
                continue;
            } else {
                $row = 0;
                $field = implode(",", $data);
                $row_arr = explode(",", $field);
                $category = $row_arr[0];
                $cust_id = $row_arr[1];
                $cost = $fetch[4]; // getting cost of product from db

                // getting products' required info from file opened
                if ($category == 10001) {
                    $username = $row_arr[6]; $email = $row_arr[7]; $contact = $row_arr[8]; $city = $row_arr[5]; $uploaded_on = $row_arr[14];
                } elseif ($category == 10002 || $category == 10012) {
                    $username = $row_arr[8]; $email = $row_arr[9]; $contact = $row_arr[14]; $city = $row_arr[12]; $uploaded_on = $row_arr[17];
                } elseif ($category == 10003) {
                    $username = $row_arr[7]; $email = $row_arr[8]; $contact = $row_arr[11]; $city = $row_arr[9]; $uploaded_on = $row_arr[14];
                } elseif ($category == 10004 || $category == 10005) {
                    $username = $row_arr[7]; $email = $row_arr[8]; $contact = $row_arr[9]; $city = $row_arr[6]; $uploaded_on = $row_arr[14];
                } elseif ($category == 10006) {
                    $username = $row_arr[8]; $email = $row_arr[11]; $contact = $row_arr[10]; $city = $row_arr[5]; $uploaded_on = $row_arr[14];
                } elseif ($category == 10007 || $category == 10016) {
                    $username = $row_arr[12]; $email = $row_arr[13]; $contact = $row_arr[14]; $city = $row_arr[5]; $uploaded_on = $row_arr[18];
                } elseif ($category == 10008 || $category == 10017 || $category == 10010 || $category == 10011 || $category == 10013) {
                    $username = $row_arr[14]; $email = $row_arr[15]; $contact = $row_arr[16]; $city = $row_arr[9]; $uploaded_on = $row_arr[20];
                } elseif ($category == 10009) {
                    $username = $row_arr[12]; $email = $row_arr[13]; $contact = $row_arr[14]; $city = $row_arr[5]; $uploaded_on = $row_arr[18];
                } else {
                    $username = ''; $email = ''; $contact = ''; $city = ''; $uploaded_on = '';
                }
            }
        }
    }

    $image = $fetch[3]; //image from db, since only one image option is available, so only one image file
    if($image == ''){ // setting image to show
        $img = "<img class='img-responsive img-thumbnail' id='viewproductImage' src='//localhost/optimus/include/media/images/no-image-available.jpg'>";
        $img2 = "<img class=\"smimg\" src=\"//localhost/optimus/include/media/images/no-image-available.jpg\">";
    }else {
        $img = "<img class='img-responsive img-thumbnail' id='viewproductImage' src='//localhost/optimus/Category/images/$image'>";
        $img2 = "<img class=\"smimg\" src=\"//localhost/optimus/Category/images/$image\">";
    }
    $cartquery = mysqli_query($con,"select * from shoppingcart where (product_id=$product_id) and (user_id=$id or user_id=$fbid or user_id=$googleid)"); // getting info if product is in cart of that user
    $numcart = mysqli_num_rows($cartquery);

    if($numcart <= 0){
        if(($cust_id == $id) || ($cust_id == $fbid) || ($cust_id == $googleid)){
            $option = "<div class='col-sm-12 col-xs-12 btn btn-default' style='font-weight: 900;'><h1><span class='fa fa-rupee' id='cost'></span></h1></div>";
        }else {
            $option = "<div class='col-sm-6 col-xs-12 btn btn-default' style='font-weight: 900;'><h1><span class='fa fa-rupee' id='cost'></span></h1></div><div class='col-sm-6 col-xs-12 btn btn-success' id='_acpr' style='font-weight: 900;' onclick='addtocart();'><h3><span class='fa fa-shopping-cart'></span> Add to cart</h3></div>";
        }
    }else{
        $option = "<div class='col-sm-6 col-xs-12 btn btn-default' style='font-weight: 900;'><h1><span class='fa fa-rupee' id='cost'></span></h1></div><div class='col-sm-6 col-xs-12 btn btn-info' style='font-weight: 900;'><h1><span class='fa fa-shopping-cart'></span> In Cart</h1></div>";
    }

    $date1 = explode("-",$uploaded_on);
    $dval = $date1[0]."-".$date1[1]."-".$date1[2]." at ".$date1[3].":".$date1[4].":".$date1[5];

    // displaying images of product, only one referenced image other are dummy
    $pop = "<div class=\"col-md-3\" data-target=\"#prodImagesCarousel\" data-slide-to=\"0\">$img2</div><div class=\"col-md-3\" data-target=\"#prodImagesCarousel\" data-slide-to=\"1\"><img class=\"smimg\" src=\"//localhost/optimus/include/media/images/loading.gif\"></div><div class=\"col-md-3\" data-target=\"#prodImagesCarousel\" data-slide-to=\"2\"><img class=\"smimg\" src=\"//localhost/optimus/include/media/images/mcd.png\"></div><div class=\"col-md-3\" data-target=\"#prodImagesCarousel\" data-slide-to=\"3\"><img class=\"smimg\" src=\"//localhost/optimus/include/media/images/app.png\"></div>";

    $imgtab = "<div class=\"carousel-inner\" role=\"listbox\"><div class=\"item active imm\"></div><div class=\"item\"><img src=\"//localhost/optimus/include/media/images/loading.gif\"></div><div class=\"item\"><img src=\"//localhost/optimus/include/media/images/mcd.png\"></div><div class=\"item\"><img src=\"//localhost/optimus/include/media/images/app.png\"></div></div>";

    //building array to return
    $response = "success,$title,$img, $cost,$username,$email,$contact,$option,$city,$dval,$pop,$imgtab";
    echo $response; // returns array or string
}