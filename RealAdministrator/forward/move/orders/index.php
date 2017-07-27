<?php
error_reporting(0);
require("../../../essential/db/db.php");
require("../../../essential/session/session.php");
$row=0;
if($aid == ''){
    echo "<script>window.location.assign('../../../');</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Product</title>
    <?php
    require("../../../include/imp/Allcss.php");
    require("../../../include/imp/topjs.php");
    ?>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <ul class="nav navbar-nav">
            <li class="active"><a id="goback2">Go Back</a></li>
        </ul>
    </div>
</nav>
<div class="container well" id="refreshable">
    <div class="row">
        <?php
        $getorders = mysqli_query($con,"select * from orders ORDER by order_counter desc");
        $num = mysqli_num_rows($getorders);
        if($num <= 0){
            ?>
            <div style="color: #e40046; text-align: center; text-transform: uppercase"><h1><strong>No Orders!!</strong></h1></div>
            <?php
        }else {
            while($fetorderdata = mysqli_fetch_array($getorders)){
                $ordernumer = $fetorderdata[0];
                $getorderstatus = mysqli_query($con,"select * from order_status where unique_order_number=$ordernumer");
                $fetorderstatus = mysqli_fetch_array($getorderstatus);
                $payment_req_id = $fetorderstatus[3];
                $payment_id = $fetorderstatus[4];
                $orderBy = $fetorderdata[1];
                $userdetail = mysqli_query($con,"Select * from verified_user where user_id=$orderBy");
                $fetuserdetail = mysqli_fetch_array($userdetail);
                $username=$fetuserdetail[1];
                $useremail=$fetuserdetail[2];
                $usercontact=$fetuserdetail[3];
                $pri = $fetorderdata[2];
                $getproducts = mysqli_query($con,"select * from listed_products where product_id=$pri");
                $prinum = mysqli_num_rows($getproducts);
                if($prinum <= 0){
                    ?>
                    <div style="color: #e40046; text-align: center; text-transform: uppercase"><h1><strong>Product No more Available!!</strong></h1></div>
                    <?php
                }else {
        ?>
        <div class="container">
            <div class="row" style="text-align: -webkit-center; text-transform: capitalize">
                <?php
                while ($fetchdata = mysqli_fetch_array($getproducts)) {
                    $filename = substr($fetchdata[2],20);
                    if (($handle = fopen("../../../../".$filename, "r")) !== false) {
                        while (($data = fgetcsv($handle, 4096, ",")) !== FALSE) {
                            $row++;
                            if ($row == 1) {
                                continue;
                            } else {
                                $row = 0;
                                $image = $fetchdata[3];
                                $field = implode(",", $data); $row_arr = explode(",",$field);
                                $category = $row_arr[0]; $userID = $row_arr[1];
                                if($category == 10001){
                                    $title = $row_arr[4]; $da_te_ti_me = $row_arr[14]; $date=substr($da_te_ti_me,0,-11); $time = substr($da_te_ti_me,11);
                                }
                                elseif ($category == 10002 || $category == 10012){
                                    $title = $row_arr[2]; $da_te_ti_me = $row_arr[17]; $date=substr($da_te_ti_me,0,-11); $time = substr($da_te_ti_me,11);
                                }
                                elseif ($category == 10003){
                                    $title = $row_arr[2]; $da_te_ti_me = $row_arr[14]; $date=substr($da_te_ti_me,0,-11); $time = substr($da_te_ti_me,11);
                                }
                                elseif ($category == 10004){
                                    $title = $row_arr[3]; $da_te_ti_me = $row_arr[14]; $date=substr($da_te_ti_me,0,-11); $time = substr($da_te_ti_me,11);
                                }
                                elseif ($category == 10005){
                                    $title = $row_arr[3]; $da_te_ti_me = $row_arr[14]; $date=substr($da_te_ti_me,0,-11); $time = substr($da_te_ti_me,11);
                                }
                                elseif ($category == 10006){
                                    $title = $row_arr[4]; $da_te_ti_me = $row_arr[14]; $date=substr($da_te_ti_me,0,-11); $time = substr($da_te_ti_me,11);
                                }
                                elseif ($category == 10007 || $category == 10016){
                                    $title = $row_arr[4]; $da_te_ti_me = $row_arr[18]; $date=substr($da_te_ti_me,0,-11); $time = substr($da_te_ti_me,11);
                                }
                                elseif ($category == 10008 || $category == 10017 || $category == 10010 || $category == 10011 || $category == 10013){
                                    $title = $row_arr[8]; $da_te_ti_me = $row_arr[20]; $date=substr($da_te_ti_me,0,-11); $time = substr($da_te_ti_me,11);
                                }
                                elseif ($category == 10009){
                                    $title = $row_arr[4]; $da_te_ti_me = $row_arr[18]; $date=substr($da_te_ti_me,0,-11); $time = substr($da_te_ti_me,11);
                                }
                                else{
                                    continue;
                                }
                                ?>
                                <div class="col-lg-4 col-md-6 col-sm-12" style="float: left;">
                                    <div class="row">
                                        <?php
                                        if($image == '') {
                                            ?>
                                            <img class="img-responsive img-thumbnail img-rounded"
                                                 src="../../../../include/media/images/no-image-available.jpg">
                                            <?php
                                        }else{
                                            ?>
                                            <img class="img-responsive img-thumbnail img-rounded" src="../../../../Category/images/<?php echo $image ?>">
                                            <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="row">
                                        <h3><?php echo $title ?></h3>
                                        <h6>posted on: <?php echo $date ?></h6>
                                        <h6>Payment Request Id: <?php echo $payment_req_id ?></h6>
                                        <h6>Payment Id: <?php echo $payment_id ?></h6>
                                        <h6>User Name: <?php echo $username ?></h6>
                                        <h6>User Email: <?php echo $useremail ?></h6>
                                        <h6>User Contact: <?php echo $usercontact ?></h6>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                    }
                }
                ?>
            </div>
        </div>
        <?php
                }
            }
        }
        ?>
    </div>
</div>

<?php
require("../../../include/imp/bottomjs.php");
?>
</body>
</html>