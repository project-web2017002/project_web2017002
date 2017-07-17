<?php
require("essential/db/db.php");
$checkfeatured = mysqli_query($con,"select * from featpro");
$featuredcount = mysqli_num_rows($checkfeatured);
?>
<div class="container-fluid mainBar-fluid">
    <div class="row extra"></div>
    <div class="row dataindex-main">
        <div class="col-lg-3 leftsidebar" id="CategoryMenu">
            <div class="row">
                <?php
                require("include/media/categories.php");
                ?>
            </div>
            <div class="row">
                <div>
                    <img src="http://www.marknewtonband.com/wp-content/uploads/2016/09/adver-marknewtonband-1.png" alt="Avertisemant" class="img-responsive">
                </div>
            </div>
        </div>
        <div class="col-lg-9 rightsidebar" id="mainWindow">
            <?php
            if($categoryid==''&&$city==''){
            include("carousal.php");
            ?>
            <div class="padmar" style="text-align: -webkit-center">
                <img src="https://shaeff04.files.wordpress.com/2015/05/apple.jpg" alt="Avertisemant" class="img-responsive">
            </div>
                <?php
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
            }elseif($city==''){
                require("Category/index.php");
            }
            else{
                require("City/index.php");
            }
            ?>
        </div>
    </div>
    <div class="row">
        <div class="padmar" style="text-align: -webkit-center">
            <img src="http://blog.refreshideas.com/wp-content/uploads/2016/08/ai-coverpic.jpg" alt="Avertisemant" class="img-responsive">
        </div>
    </div>
</div>
