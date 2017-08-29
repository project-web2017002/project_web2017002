<?php
// cart page


error_reporting(0);
require("../../essential/db/db.php");
require("../../essential/ses/session.php");
$categoryid = $_GET['categoryId'];
$city = $_GET['city'];
if($id == '' || $googleid == '' || $fbid == ''){ // if user is not signed in, then no access
    echo "<script>window.location.assign('../../');</script>";
}else{
    $get_my_cart = mysqli_query($con,"select * from shoppingcart where user_id=$id"); // getting particular user cart info
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>My Shopping Cart-Optimus Web Project</title>
        <?php
        require("../../include/imp/AllStylesheets.php");
        require("../../include/imp/topscripts.php");
        ?>
    </head>
    <body style="background: #f3f3f3">
    <?php
        require("../../forward/modal.php");
        include("../../include/head/header.php");
        ?>
        <div class="container">
            <div>
                <div style="text-align: center; text-transform: capitalize">
                    <h4>
                        <strong>
                            <span class="fa fa-shopping-cart"></span> My Shopping Cart
                        </strong>
                    </h4>
                </div>
                <div class="carterror"></div>
                <hr>
                <?php
                $num_cart = mysqli_num_rows($get_my_cart);
                if($num_cart <= 0){
                    // if no product found
                    ?>

                    <div class="row">
                        <div class="col-md-4 col-sm-12"></div>
                        <div class="col-md-4 col-sm-12" style="text-align: center; font-size: 30px;">Empty Cart</div>
                        <div class="col-md-4 col-sm-12"></div>
                    </div>

                    <?php
                }else {
                    while($fetch = mysqli_fetch_array($get_my_cart)) { // getting each cart product
                        $cou = $fetch[0];
                        $pr_id = $fetch[1];
                        $get_this_product = mysqli_query($con,"select * from listed_products where product_id=$pr_id"); //product info
                        $numproduct = mysqli_num_rows($get_this_product);
                        if($numproduct <= 0){ // if products removed from db by user or sold out
                            ?>
                            <div class="row">
                                <div class="col-md-4 col-sm-12"></div>
                                <div class="col-md-4 col-sm-12" style="text-align: center; font-size: 30px;">Product not more available</div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="col-sm-12 btn btn-default" onclick="remove(<?php echo $cou; ?>)">
                                        <span class="glyphicon glyphicon-trash"></span> Remove
                                    </div>
                                </div>
                            </div>
                            <?php
                        }else{
                            $product_detail_fetch = mysqli_fetch_array($get_this_product);
                            $row = 0;
                            $title = $product_detail_fetch[1];
                            $filename = substr($product_detail_fetch[2],20);
                            $imagefile = $product_detail_fetch[3];
                            if($imagefile == '' || $imagefile == NULL){
                                $image = "../../include/media/images/no-image-available.jpg";
                            }else{
                                $image = "../../Category/images/$imagefile";
                            }
                            if (($handle = fopen("../../".$filename, "r")) !== FALSE) { //opening product file
                                while (($data = fgetcsv($handle, 4096, ",")) !== FALSE) {
                                    $row++;
                                    if ($row == 1) {
                                        continue;
                                    } else {
                                        $row = 0;
                                        $field = implode(",", $data);
                                        $row_arr = explode(",", $field);
                                        $categor_y = $row_arr[0];
                                        //getting cost of product
                                        if($categor_y == 10001){ $cost = $row_arr[3]; }
                                        elseif ($categor_y == 10002 || $categor_y == 10012){ $cost = $row_arr[7]; }
                                        elseif ($categor_y == 10003){ $cost = $row_arr[6]; }
                                        elseif ($categor_y == 10004 || $categor_y == 10005){ $cost = $row_arr[4]; }
                                        elseif ($categor_y == 10006){ $cost = $row_arr[6]; }
                                        elseif ($categor_y == 10007 || $categor_y == 10016 || $categor_y == 10009){ $cost = $row_arr[7]; }
                                        elseif ($categor_y == 10008 || $categor_y == 10010 || $categor_y == 10011 || $categor_y == 10013 || $categor_y == 10017){
                                            $cost = $row_arr[11];
                                        }
                                        /*elseif ($categor_y == 10014){
                                            $cost = $row_arr[7];
                                        }*/
                                        /*elseif ($categor_y == 10018){
                                            $cost = $row_arr[7];
                                        }*/
                                        /*elseif ($categor_y == 10019){
                                            $cost = $row_arr[7];
                                        }*/
                                        elseif ($categor_y == 10020){ $cost = $row_arr[6]; }
                                        /*elseif ($categor_y == 10021){
                                           $cost = $row_arr[7];
                                        }*/
                                        else{ $cost = ''; }
                                        ?>

                                        <div class="row" style="margin-top: 10px;">
                                            <div class="col-md-1 col-sm-12">
                                                <div class="hidden" id="pr_id"><?php echo $pr_id ?></div>
                                                <div class="hidden" id="cos"><?php echo $cost ?></div>
                                            </div>

                                            <div class="col-md-2 col-sm-12">
                                                <img class="img-responsive img-thumbnail" src="<?php echo $image ?>"/>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <br><br>
                                                <div class="row">
                                                    <div class="col-sm-12" style="font-size: large; font-weight: bold;"><?php echo $title ?></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12" style="padding-left: 15px;">
                                                        <span class="fa fa-rupee"></span> <?php echo $cost ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-12">
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-12 btn btn-default" onclick="remove(<?php echo $cou; ?>)">
                                                        <span class="glyphicon glyphicon-trash"></span> Remove
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-12 btn btn-info" id="buy">
                                                        <span class="glyphicon glyphicon-new-window"></span> Buy Now
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-1 col-sm-12"></div>
                                        </div>
                                        <hr>
                                        <?php
                                    }
                                }
                                fclose($handle);
                            }
                        }
                    }
                }
                    ?>
            </div>
        </div>
        <?php
        require("../../include/foot/footer.php");
        require("../../include/imp/bottomscripts.php");
    ?>
    </body>
    </html>
<?php
}
?>