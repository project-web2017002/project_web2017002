<?php

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
                <div class="thumbnail">
                    Advertisement
                </div>
            </div>
        </div>
        <div class="col-lg-9 rightsidebar" id="mainWindow">
            <?php
            if($categoryid==''&&$city==''){
            include("carousal.php");
            ?>
            <div class="thumbnail padmar">Block For Advertisement</div>
            <div class="container padmar"></div>
            <div class="thumbnail padmar">Block for advertisement</div>
            <div class="container padmar"></div>
            <?php
            }elseif($city==''){
                require("Category/index.php");
            }
            else{
                require("City/index.php");
            }
            ?>
        </div>
    </div>
</div>
