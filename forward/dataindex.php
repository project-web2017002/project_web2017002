<?php
require("essential/db/db.php");
$checkfeatured = mysqli_query($con,"select * from featpro");
$featuredcount = mysqli_num_rows($checkfeatured);
?>
<div class="container-fluid mainBar-fluid">

    <?php
    if($categoryid == '' && $city == '') {
        ?>
        <div class="row extra">
            <div class="positionadbtn" data-toggle="modal" data-target="#postModal"
                 style="text-align: center; margin-top:10%">
                <a id="btnPostAd" href="#" class="btn btn-warning btn-lg" title="Post Free Ad">Post Free Ad</a>
            </div>
        </div>
        <?php
    }
    ?>

    <div class="row dataindex-main">
        <div class="container">
            <div class="row" id="CategoryMenu">
                <?php
                require("include/media/categories.php");
                ?>
            </div>
            <div class="row" id="CategoryMenu2">
                <?php
                require("include/media/morecats.php");
                ?>
            </div>
            <div class="row" id="oo" style="cursor: pointer">
                <div class="col-md-4 col-sm-12"></div>
                <div class="col-md-4 col-sm-12" style="text-align: center; padding: 5px 10px">More Categories &bigtriangledown;</div>
                <div class="col-md-4 col-sm-12"></div>
            </div>
            <div class="row" id="ooo" style="cursor: pointer">
                <div class="col-md-4 col-sm-12"></div>
                <div class="col-md-4 col-sm-12" style="text-align: center; padding: 5px 10px">Less Categories &bigtriangleup;</div>
                <div class="col-md-4 col-sm-12"></div>
            </div>
        </div>
    </div>

    <?php
    if($categoryid == '' && $city == '') {
        ?>
        <div class="row" style="padding: 10px">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <img src="include/media/images/mcd.png" alt="Avertisemant" class="img-responsive">
                    </div>
                    <div class="col-md-9 col-sm-12 col-xs-12">
                        <?php include("carousal.php"); ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
    ?>

    <div class="row">
        <div class="rightsidebar" id="mainWindow">
            <?php
            if($categoryid=='' && $city==''){
                if($featuredcount > 0) {
                    ?>
                    <div class="text-primary" style="text-align: center; text-transform: capitalize"><h3>Featured Products</h3></div>
                    <div class="container padmar">
                        <?php
                        include("Category/FeaturedProduct/index.php");
                        ?>
                    </div>
                    <?php
                }
            }elseif($city == '' && $categoryid != ''){
                require("Category/index.php");
            }elseif($city != '' && $categoryid == ''){
                require("City/index.php");
            }else{
                require("Filter/index.php");
            }
            ?>
        </div>
    </div>
</div>
