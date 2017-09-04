<?php
//post ad index page


error_reporting(0);
require("../../essential/db/db.php");
require("../../essential/ses/session.php");
$categoryid = $_GET['categoryId']; // category id
$city = $_GET['city']; // gets city
$ctid = $_GET['ctId']; // gets category id for posting an ad
$scripterr = $_GET['err']; // error
$product_id = $_GET['aagvgfeenmb']; //product id
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Post free Ad-Optimus Web Project</title>
    <?php
    require("../../include/imp/AllStylesheets.php");
    require("../../include/imp/topscripts.php");
    ?>
</head>
<body style="background: #f3f3f3">
<?php
if($id != "" || $googleid != '' || $fbid != '') { //load files only if user logged in
//login/signup modal
    require("../../forward/modal.php");
//header
    include("../../include/head/header.php");
}
?>
<div class="container">
    <!-- main Content -->
    <?php
    if($id == "" && $googleid == '' && $fbid == ''){ // if user is not logged in
        ?>
        <div class="container">
            <div class="row">
                <div class="jumbotron">
                    <div class="jumbotron" style="text-align: center;">
                        <h1 style=" color: #e40046;">Login/Signup To Post an Ad</h1>
                        <h3><a href="../../">Click here to go back</a></h3>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }else { //if user is logged in
        if($product_id == '') {
            ?>
            <div class="dataindex-main" style="text-align: center;">
                <div class="page-header">
                    <h4><strong style="text-align: center; text-transform: capitalize">post your free ad here</strong>
                    </h4>
                </div>
                <div class="row">
                    <div class="col-md-1 col-sm-12">
                        <!--empty-->
                    </div>
                    <?php
                    if($ctid == '') { // if category id is empty
                        ?>
                        <div class="col-md-2 col-sm-12">
                            <?php
                            require("components/leftindex.php");
                            ?>
                        </div>
                        <div class="col-md-8 col-sm-12">
                            <?php
                            require("components/rightindex.php");
                            ?>
                        </div>
                        <?php
                    }else{ // if category is selected for posting an ad
                        ?>
                        <div class="col-md-10 col-sm-12">
                            <?php
                            require("components/rightindex.php");
                            ?>
                        </div>
                        <?php
                    }
                        ?>

                    <div class="col-md-1 col-sm-12">
                        <!--empty-->
                    </div>
                </div>
            </div>
            <?php
        }else{ //for uploading ref-image after posting an ad
            require("components/imageUpload.php");
        }
    }
    ?>
</div>
<?php
if($id != "" || $googleid != '' || $fbid != '') { //only show if user logged in
//footer
    require("../../include/foot/footer.php");
}
    require("../../include/imp/bottomscripts.php");

?>
</body>
</html>