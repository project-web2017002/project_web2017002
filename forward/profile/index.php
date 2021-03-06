<?php
//user profile page


require("../../essential/db/db.php");
require("../../essential/ses/session.php");
require("../../forward/OtherFiles/viewProduct/index.php");
if($id=='' && $googleid == '' && $fbid == ''){ // without login, no access
    echo "<script>window.locatio.assign('../../');</script>";
}elseif(($googleid == '' && $fbid == '') && $id != '') { // for our user
    //login/signup modal
    require("../../forward/modal.php");
    //header
    include("../../include/head/header.php");
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $user_name ?> | Profile</title>
        <?php
        require("../../include/imp/AllStylesheets.php");
        require("../../include/imp/topscripts.php");
        ?>
    </head>
    <body style="background: #f3f3f3">
    <div class="container-fluid profile-fluid">

        <div class="row">
            <div class="col-md-12 col-sm-12">

                <?php
                require("tabs.php");
                ?>

                <div class="well">
                    <div class="tab-content">
                        <!--User info tab-->
                        <?php
                        require("userinfo.php");
                        ?>
                        <!--User info tab ends-->

                        <!--User orders tab-->
                        <div class="tab-pane fade in" id="tab2">
                            <div class="container">
                            <?php
                            $getallordersbyme = mysqli_query($con,"select * from orders where order_by=$id and usertype='GENERAL'");
                            $getnum = mysqli_num_rows($getallordersbyme);
                            ?>
                                <div class="row" style="text-align: center">
                                    <div class="col-md-4 col-sm-12"></div>
                                    <div class="col-md-4 col-sm-12">
                                        <h3><strong>Total Orders: <?php echo $getnum ?></strong></h3>
                                    </div>
                                    <div class="col-md-4 col-sm-12"></div>
                                </div>
    <?php
                            if($getnum <= 0){
                                ?>
                                <div class="row" style="text-align: center">
                                    <div class="col-md-4 col-sm-12"></div>
                                    <div class="col-md-4 col-sm-12">
                                        You haven't Order Anything Yet!
                                    </div>
                                    <div class="col-md-4 col-sm-12"></div>
                                </div>
                                <?php
                            }else{
                                ?>
                                <table class="table">
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Order Title</th>
                                        <th>Image</th>
                                    </tr>
                                <?php
                                while($fetorderdetail = mysqli_fetch_array($getallordersbyme)){
                                    $orderid = $fetorderdetail[0];
                                    $productid = $fetorderdetail[2];
                                    $getproductdetails = mysqli_query($con,"select * from listed_products where product_id=$productid");
                                    $numpr = mysqli_num_rows($getproductdetails);
                                    if($numpr <= 0){
                                        ?>
                                        <tr>
                                            <td><?php echo $orderid ?></td>
                                            <td>Product Not more available on Website</td>
                                            <td>NO IMAGE</td>
                                        </tr>
                                        <?php
                                    }else{
                                        $fetprdetails = mysqli_fetch_array($getproductdetails);
                                        $title = $fetprdetails[1];
                                        $image = $fetprdetails[3];
                                        if($image == '' || $image == NULL){
                                            $imgfile = "../../include/media/images/no-image-available.jpg"; //empty image
                                        }else{
                                            $imgfile = "../../Category/images/$image"; // reference img
                                        }
                                        ?>
                                        <tr>
                                            <td><?php echo $orderid ?></td>
                                            <td><?php echo $title ?></td>
                                            <td>
                                                <img src="<?php echo $imgfile ?>" alt="Reference Product Image" class="img-responsive img-thumbnail" width="150">
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                }
                                ?>
                                </table>
                                    <?php
                            }
                            ?>
                            </div>
                        </div>
                        <!--User orders tab ends-->

                        <!--User uploads tab-->
                        <div class="tab-pane fade in" id="tab3">
                            <div class="container">
                                <div class="row">
                                    <table class="table">
                                        <tr>
                                            <th>Product Image</th>
                                            <th>Product Title</th>
                                            <th>Date/Time</th>
                                        </tr>
                                <?php
                                $row = 0;
                                $totalpr = 0;
                                $getallpro = mysqli_query($con,"select * from listed_products order by product_id desc");
                                while($fetchprodata = mysqli_fetch_array($getallpro)){
                                    $file = substr($fetchprodata[2], 20);
                                    if (($handle = fopen("../../".$file, "r")) !== FALSE) {
                                        while (($data = fgetcsv($handle, 4096, ",")) !== FALSE) {
                                            $row++;
                                            if ($row == 1) {
                                                continue;
                                            } else {
                                                $row = 0;
                                                $field = implode(",", $data);
                                                $row_arr = explode(",", $field);
                                                $userid = $row_arr[1];
                                                if($userid != $id){
                                                    continue;
                                                }else{
                                                    $totalpr++;
                                                    $prrid = $fetchprodata[0];
                                                    $title = $fetchprodata[1];
                                                    $image1 = $fetchprodata[3];
                                                    if($image1 == '' || $image1 == NULL){
                                                        $imgfile1 = "../../include/media/images/no-image-available.jpg"; //empty image
                                                    }else{
                                                        $imgfile1 = "../../Category/images/$image1"; // reference img
                                                    }
                                                    ?>
                                                    <tr onclick="ViewProduct(<?php echo $prrid ?>);">
                                                        <td><img src="<?php echo $imgfile1 ?>" alt="Product Image" class="img-responsive img-rounded" width="150"></td>
                                                        <td><?php echo $title ?></td>
                                                        <td></td>
                                                    </tr>
                                                    <?php
                                                }
                                            }
                                        }
                                        fclose($handle);
                                    }
                                }
                                ?>
                                    </table>
                                </div>
                                <div class="row well" style="text-align: center">
                                    <div class="col-md-4 col-sm-12"></div>
                                    <div class="col-md-4 col-sm-12">
                                        <h5><strong>Total Products : <?php echo $totalpr ?></strong></h5>
                                    </div>
                                    <div class="col-md-4 col-sm-12"></div>
                                </div>
                            </div>
                        </div>
                        <!--User uploads tab ends-->

                        <div class="tab-pane fade in" id="tab4">
                            <h3>This is tab 4</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php
    //footer
    require("../../include/foot/footer.php");
    require("../../include/imp/bottomscripts.php");
    ?>
    </body>
    </html>
    <?php
}elseif(($id == '' && $fbid == '') && $googleid != '') { // for google users
    //login/signup modal
    require("../../forward/modal.php");
    //header
    include("../../include/head/header.php");
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $user_name ?> | Profile</title>
        <?php
        require("../../include/imp/AllStylesheets.php");
        require("../../include/imp/topscripts.php");
        ?>
    </head>
    <body style="background: #f3f3f3">
    <div class="container-fluid profile-fluid">

        <div class="row">
            <div class="col-md-12 col-sm-12">

                <?php
                require("tabs.php");
                ?>

                <div class="well">
                    <div class="tab-content">
                        <!--User info tab-->
                        <?php
                        require("userinfo.php");
                        ?>
                        <!--User info tab ends-->
                        <div class="tab-pane fade in" id="tab2">
                            <div class="container">
                                <?php
                                $getallordersbyme = mysqli_query($con, "select * from orders where order_by=$googleid and usertype ='GOOGLE'");
                                $getnum = mysqli_num_rows($getallordersbyme);
                                ?>
                                <div class="row" style="text-align: center">
                                    <div class="col-md-4 col-sm-12"></div>
                                    <div class="col-md-4 col-sm-12">
                                        <h3><strong>Total Orders: <?php echo $getnum ?></strong></h3>
                                    </div>
                                    <div class="col-md-4 col-sm-12"></div>
                                </div>
                                <?php
                                if ($getnum <= 0) {
                                    ?>
                                    <div class="row" style="text-align: center">
                                        <div class="col-md-4 col-sm-12"></div>
                                        <div class="col-md-4 col-sm-12">
                                            You haven't Order Anything Yet!
                                        </div>
                                        <div class="col-md-4 col-sm-12"></div>
                                    </div>
                                    <?php
                                } else {
                                    ?>
                                    <table class="table">
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Order Title</th>
                                            <th>Image</th>
                                        </tr>
                                        <?php
                                        while ($fetorderdetail = mysqli_fetch_array($getallordersbyme)) {
                                            $orderid = $fetorderdetail[0];
                                            $productid = $fetorderdetail[2];
                                            $getproductdetails = mysqli_query($con, "select * from listed_products where product_id=$productid");
                                            $numpr = mysqli_num_rows($getproductdetails);
                                            if ($numpr <= 0) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $orderid ?></td>
                                                    <td>Product Not more available on Website</td>
                                                    <td>NO IMAGE</td>
                                                </tr>
                                                <?php
                                            } else {
                                                $fetprdetails = mysqli_fetch_array($getproductdetails);
                                                $title = $fetprdetails[1];
                                                $image = $fetprdetails[3];
                                                if ($image == '' || $image == NULL) {
                                                    $imgfile = "../../include/media/images/no-image-available.jpg"; //empty image
                                                } else {
                                                    $imgfile = "../../Category/images/$image"; // reference img
                                                }
                                                ?>
                                                <tr>
                                                    <td><?php echo $orderid ?></td>
                                                    <td><?php echo $title ?></td>
                                                    <td>
                                                        <img src="<?php echo $imgfile ?>" alt="Reference Product Image"
                                                             class="img-responsive img-thumbnail" width="150">
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </table>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="tab-pane fade in" id="tab3">
                            <div class="container">
                                <div class="row">
                                    <table class="table">
                                        <tr>
                                            <th>Product Image</th>
                                            <th>Product Title</th>
                                            <th>Date/Time</th>
                                        </tr>
                                        <?php
                                        $row = 0;
                                        $totalpr = 0;
                                        $getallpro = mysqli_query($con, "select * from listed_products order by product_id desc");
                                        while ($fetchprodata = mysqli_fetch_array($getallpro)) {
                                            $file = substr($fetchprodata[2], 20);
                                            if (($handle = fopen("../../" . $file, "r")) !== FALSE) {
                                                while (($data = fgetcsv($handle, 4096, ",")) !== FALSE) {
                                                    $row++;
                                                    if ($row == 1) {
                                                        continue;
                                                    } else {
                                                        $row = 0;
                                                        $field = implode(",", $data);
                                                        $row_arr = explode(",", $field);
                                                        $userid = $row_arr[1];
                                                        if ($userid != $googleid) {
                                                            continue;
                                                        } else {
                                                            $totalpr++;
                                                            $prrid = $fetchprodata[0];
                                                            $title = $fetchprodata[1];
                                                            $image1 = $fetchprodata[3];
                                                            if ($image1 == '' || $image1 == NULL) {
                                                                $imgfile1 = "../../include/media/images/no-image-available.jpg"; //empty image
                                                            } else {
                                                                $imgfile1 = "../../Category/images/$image1"; // reference img
                                                            }
                                                            ?>
                                                            <tr onclick="ViewProduct(<?php echo $prrid ?>);" style="cursor: pointer">
                                                                <td><img src="<?php echo $imgfile1 ?>"
                                                                         alt="Product Image"
                                                                         class="img-responsive img-rounded" width="150">
                                                                </td>
                                                                <td><?php echo $title ?></td>
                                                                <td></td>
                                                            </tr>
                                                            <?php
                                                        }
                                                    }
                                                }
                                                fclose($handle);
                                            }
                                        }
                                        ?>
                                    </table>
                                </div>
                                <div class="row well" style="text-align: center">
                                    <div class="col-md-4 col-sm-12"></div>
                                    <div class="col-md-4 col-sm-12">
                                        <h5><strong>Total Products : <?php echo $totalpr ?></strong></h5>
                                    </div>
                                    <div class="col-md-4 col-sm-12"></div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade in" id="tab4">
                            <h3>This is tab 4</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php
    //footer
    require("../../include/foot/footer.php");
    require("../../include/imp/bottomscripts.php");
    ?>
    </body>
    </html>
    <?php
} else {
        //login/signup modal
    require("../../forward/modal.php");
    //header
    include("../../include/head/header.php");
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $user_name ?> | Profile</title>
        <?php
        require("../../include/imp/AllStylesheets.php");
        require("../../include/imp/topscripts.php");
        ?>
    </head>
    <body style="background: #f3f3f3">
    <div class="container-fluid profile-fluid">

        <div class="row">
            <div class="col-md-12 col-sm-12">

                <?php
                require("tabs.php");
                ?>

                <div class="well">
                    <div class="tab-content">
                        <!--User info tab-->
                        <?php
                        require("userinfo.php");
                        ?>
                        <!--User info tab ends-->
                        <div class="tab-pane fade in" id="tab2">
                            <div class="container">
                                <?php
                                $getallordersbyme = mysqli_query($con,"select * from orders where order_by=$fbid and usertype='FB'");
                                $getnum = mysqli_num_rows($getallordersbyme);
                                ?>
                                <div class="row" style="text-align: center">
                                    <div class="col-md-4 col-sm-12"></div>
                                    <div class="col-md-4 col-sm-12">
                                        <h3><strong>Total Orders: <?php echo $getnum ?></strong></h3>
                                    </div>
                                    <div class="col-md-4 col-sm-12"></div>
                                </div>
                                <?php
                                if($getnum <= 0){
                                    ?>
                                    <div class="row" style="text-align: center">
                                        <div class="col-md-4 col-sm-12"></div>
                                        <div class="col-md-4 col-sm-12">
                                            You haven't Order Anything Yet!
                                        </div>
                                        <div class="col-md-4 col-sm-12"></div>
                                    </div>
                                    <?php
                                }else{
                                    ?>
                                    <table class="table">
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Order Title</th>
                                            <th>Image</th>
                                        </tr>
                                        <?php
                                        while($fetorderdetail = mysqli_fetch_array($getallordersbyme)){
                                            $orderid = $fetorderdetail[0];
                                            $productid = $fetorderdetail[2];
                                            $getproductdetails = mysqli_query($con,"select * from listed_products where product_id=$productid");
                                            $numpr = mysqli_num_rows($getproductdetails);
                                            if($numpr <= 0){
                                                ?>
                                                <tr>
                                                    <td><?php echo $orderid ?></td>
                                                    <td>Product Not more available on Website</td>
                                                    <td>NO IMAGE</td>
                                                </tr>
                                                <?php
                                            }else{
                                                $fetprdetails = mysqli_fetch_array($getproductdetails);
                                                $title = $fetprdetails[1];
                                                $image = $fetprdetails[3];
                                                if($image == '' || $image == NULL){
                                                    $imgfile = "../../include/media/images/no-image-available.jpg"; //empty image
                                                }else{
                                                    $imgfile = "../../Category/images/$image"; // reference img
                                                }
                                                ?>
                                                <tr>
                                                    <td><?php echo $orderid ?></td>
                                                    <td><?php echo $title ?></td>
                                                    <td>
                                                        <img src="<?php echo $imgfile ?>" alt="Reference Product Image" class="img-responsive img-thumbnail" width="150">
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </table>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="tab-pane fade in" id="tab3">
                            <div class="container">
                                <div class="row">
                                    <table class="table">
                                        <tr>
                                            <th>Product Image</th>
                                            <th>Product Title</th>
                                            <th>Date/Time</th>
                                        </tr>
                                        <?php
                                        $row = 0;
                                        $totalpr = 0;
                                        $getallpro = mysqli_query($con,"select * from listed_products order by product_id desc");
                                        while($fetchprodata = mysqli_fetch_array($getallpro)){
                                            $file = substr($fetchprodata[2], 20);
                                            if (($handle = fopen("../../".$file, "r")) !== FALSE) {
                                                while (($data = fgetcsv($handle, 4096, ",")) !== FALSE) {
                                                    $row++;
                                                    if ($row == 1) {
                                                        continue;
                                                    } else {
                                                        $row = 0;
                                                        $field = implode(",", $data);
                                                        $row_arr = explode(",", $field);
                                                        $userid = $row_arr[1];
                                                        if($userid != $fbid){
                                                            continue;
                                                        }else{
                                                            $totalpr++;
                                                            $prrid = $fetchprodata[0];
                                                            $title = $fetchprodata[1];
                                                            $image1 = $fetchprodata[3];
                                                            if($image1 == '' || $image1 == NULL){
                                                                $imgfile1 = "../../include/media/images/no-image-available.jpg"; //empty image
                                                            }else{
                                                                $imgfile1 = "../../Category/images/$image1"; // reference img
                                                            }
                                                            ?>
                                                            <tr onclick="ViewProduct(<?php echo $prrid ?>);">
                                                                <td><img src="<?php echo $imgfile1 ?>" alt="Product Image" class="img-responsive img-rounded" width="150"></td>
                                                                <td><?php echo $title ?></td>
                                                                <td></td>
                                                            </tr>
                                                            <?php
                                                        }
                                                    }
                                                }
                                                fclose($handle);
                                            }
                                        }
                                        ?>
                                    </table>
                                </div>
                                <div class="row well" style="text-align: center">
                                    <div class="col-md-4 col-sm-12"></div>
                                    <div class="col-md-4 col-sm-12">
                                        <h5><strong>Total Products : <?php echo $totalpr ?></strong></h5>
                                    </div>
                                    <div class="col-md-4 col-sm-12"></div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade in" id="tab4">
                            <h3>This is tab 4</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php
    //footer
    require("../../include/foot/footer.php");
    require("../../include/imp/bottomscripts.php");
    ?>
    </body>
    </html>
    <?php
}