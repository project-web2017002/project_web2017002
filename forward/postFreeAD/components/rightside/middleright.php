<?php
if($ctid==10008 || $ctid == 10017 || $ctid == 10010 || $ctid == 10011 || $ctid == 10013){
    ?>
    <div class="page-header">
        <h4><strong style="text-align: center; text-transform: capitalize">Home & Lifestyle</strong></h4>
    </div>
    <?php
    require("middleforms/furni.php");
}
elseif ($ctid==10009){
    ?>
    <div class="page-header">
        <h4><strong style="text-align: center; text-transform: capitalize">Electronics & Appliances</strong></h4>
    </div>
    <?php
    require("middleforms/elect.php");
}
elseif ($ctid==10014){
    ?>
    <div class="page-header">
        <h4><strong style="text-align: center; text-transform: capitalize">Pets & Pet Care</strong></h4>
    </div>
    <?php
    require("middleforms/pets.php");
}