<?php
require("../../essential/db/db.php");
require("../../essential/ses/session.php");
if($id==''){
    echo "<script>window.locatio.assign('../../');</script>";
}else {
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Profile</title>
        <?php
        require("../../include/imp/AllStylesheets.php");
        require("../../include/imp/topscripts.php");
        ?>
    </head>
    <body style="background: #f3f3f3">
    <?php
    //login/signup modal
    require("../../forward/modal.php");
    //header
    include("../../include/head/header.php");
    ?>
    <div class="container-fluid profile-fluid">

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card hovercard">
                    <div class="card-background">
                        <img class="card-bkimg" alt="" src="http://lorempixel.com/100/100/people/9/">
                    </div>
                    <div class="useravatar">
                        <img alt="" src="http://zelfverbeteren.nl/wp-content/uploads/2016/12/abstract-user-flat-3.png">
                    </div>
                    <div class="card-info">
                        <span class="card-title" style="text-transform: uppercase"><?php echo $user_name ?></span>
                    </div>
                </div>
                <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
                    <div class="btn-group" role="group">
                        <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab">
                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                            <div class="hidden-xs">About Me</div>
                        </button>
                    </div>
                    <div class="btn-group" role="group">
                        <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab">
                            <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                            <div class="hidden-xs">My Orders</div>
                        </button>
                    </div>
                    <div class="btn-group" role="group">
                        <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab">
                            <span class="fa fa-product-hunt" aria-hidden="true"></span>
                            <div class="hidden-xs">Sold/Selling Products</div>
                        </button>
                    </div>
                    <div class="btn-group" role="group">
                        <button type="button" id="following" class="btn btn-default" href="#tab4" data-toggle="tab">
                            <span class="fa fa-product-hunt" aria-hidden="true"></span>
                            <div class="hidden-xs">Others</div>
                        </button>
                    </div>
                </div>

                <div class="well">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1">
                            <div class="row">
                                <div class="col-md-2 col-sm-12"></div>
                                <div class="col-md-8 col-sm-12">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 rgt-pull">
                                            <h5>
                                                <strong style="cursor: pointer" data-toggle="modal"
                                                        data-target="#editModal">
                                                    <i class="fa fa-edit"></i> Edit
                                                </strong>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 pull-lft">
                                            <h5>
                                                <strong>User Name:</strong>
                                            </h5>
                                        </div>
                                        <div class="col-md-6 col-sm-12 rgt-pull">
                                            <h5 style="text-transform: capitalize">
                                                <em><?php echo $user_name ?></em>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 pull-lft">
                                            <h5>
                                                <strong>Email Id:</strong>
                                            </h5>
                                        </div>
                                        <div class="col-md-6 col-sm-12 rgt-pull">
                                            <h5>
                                                <em><?php echo $user_email ?></em>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 pull-lft">
                                            <h5>
                                                <strong>Contact Number:</strong>
                                            </h5>
                                        </div>
                                        <div class="col-md-6 col-sm-12 rgt-pull">
                                            <h5>
                                                <em><?php echo $user_contact ?></em>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-12"></div>
                            </div>
                        </div>
                        <div class="tab-pane fade in" id="tab2">
                            <div class="container">
                            <?php
                            $getallordersbyme = mysqli_query($con,"select * from orders where order_by=$id");
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
                                            $imgfile = "http://www.crouzet.com/wp-content/themes/innovistasensors_wp-theme_crouzet-portal/assets/algolia/img/no-image-available.jpg"; //empty image
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
                                $getallpro = mysqli_query($con,"select * from listed_products");
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
                                                    $title = $fetchprodata[1];
                                                    $image1 = $fetchprodata[3];
                                                    if($image1 == '' || $image1 == NULL){
                                                        $imgfile1 = "http://www.crouzet.com/wp-content/themes/innovistasensors_wp-theme_crouzet-portal/assets/algolia/img/no-image-available.jpg"; //empty image
                                                    }else{
                                                        $imgfile1 = "../../Category/images/$image1"; // reference img
                                                    }
                                                    ?>
                                                    <tr>
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