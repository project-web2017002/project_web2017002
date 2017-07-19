<?php
    if($ctid==''){
        require("default.php");
    }else{
        if($ctid==10001){
            ?>
            <div class="page-header">
                <h4><strong style="text-align: center; text-transform: capitalize">Services</strong></h4>
            </div>
            <div id="alert"></div>
            <?php
            require("topforms/servicesform.php");
        }
        elseif ($ctid==10002 || $ctid == 10012){
            ?>
            <div class="page-header">
                <h4><strong style="text-align: center; text-transform: capitalize">Homes Or Real Estate</strong></h4>
            </div>
            <div id="alert"></div>
            <?php
            require("topforms/homeform.php");
        }
        elseif ($ctid==10003){
            ?>
            <div class="page-header">
                <h4><strong style="text-align: center; text-transform: capitalize">Jobs</strong></h4>
            </div>
            <div id="alert"></div>
            <?php
            require("topforms/jobform.php");
        }
        elseif ($ctid==10004){
            ?>
            <div class="page-header">
                <h4><strong style="text-align: center; text-transform: capitalize">Cars</strong></h4>
            </div>
            <div id="alert"></div>
            <?php
            require("topforms/carform.php");
        }
        elseif ($ctid==10005){
            ?>
            <div class="page-header">
                <h4><strong style="text-align: center; text-transform: capitalize">Bikes</strong></h4>
            </div>
            <div id="alert"></div>
            <?php
            require("topforms/bikeform.php");
        }
        elseif ($ctid==10006){
            ?>
            <div class="page-header">
                <h4><strong style="text-align: center; text-transform: capitalize">Education</strong></h4>
            </div>
            <div id="alert"></div>
            <?php
            require("topforms/educationform.php");
        }
        elseif ($ctid==10007 || $ctid == 10016){
            ?>
            <div class="page-header">
                <h4><strong style="text-align: center; text-transform: capitalize">Mobiles & Tablets</strong></h4>
            </div>
            <div id="alert"></div>
            <?php
            require("topforms/mobntabletform.php");
        }
    }