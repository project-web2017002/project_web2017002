<?php
error_reporting(0);
require("essential/db/db.php");
require("essential/ses/session.php");
require("forward/OtherFiles/viewProduct/index.php");
?>
<div class="container-fluid">
    <?php
    if($categoryid == 10001){ $cateory = 10001; $categoryname = "Services"; }
    elseif ($categoryid == 10002 || $categoryid == 10012){ $cateory = 10002; $categoryname = "Homes & Commercial Real Estate"; }
    elseif ($categoryid == 10003){ $cateory = 10003; $categoryname = "Jobs"; }
    elseif ($categoryid == 10004){ $cateory = 10004; $categoryname = "Cars"; }
    elseif ($categoryid == 10005){ $cateory = 10005; $categoryname = "Bikes"; }
    elseif ($categoryid == 10006){ $cateory = 10006; $categoryname = "Education"; }
    elseif ($categoryid == 10007 || $categoryid == 10016){ $cateory = 10007; $categoryname = "Mobiles & Tablets"; }
    elseif ($categoryid == 10008 || $categoryid == 10010 || $categoryid == 10011 || $categoryid == 10013 || $categoryid == 10017){
        $cateory = 10008; $categoryname = "Home Essentials";
    }
    elseif ($categoryid == 10009){ $cateory = 10009; $categoryname = "Electronics & Appliances"; }
    elseif ($categoryid == 10014){ $cateory = 10014; $categoryname = "Pets & Pet Care"; }
    elseif ($categoryid == 10018){ $cateory = 10018; $categoryname = "Entertainment"; }
    elseif ($categoryid == 10019){ $cateory = 10019; $categoryname = "Community"; }
    elseif ($categoryid == 10020){ $cateory = 10020; $categoryname = "Events"; }
    elseif ($categoryid == 10021){ $cateory = 10021; $categoryname = "Matrimonial"; }
    else{ $cateory = ''; }
    require("categoryID/index.php");
    ?>
</div>