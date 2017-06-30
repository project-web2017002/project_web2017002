<?php
if($ctid==10008){
    ?>
    <div class="page-header">
        <h4><strong style="text-align: center; text-transform: capitalize">Furniture & Decoration</strong></h4>
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
elseif ($ctid==10010){
    ?>
    <div class="page-header">
        <h4><strong style="text-align: center; text-transform: capitalize">Kids & Toys</strong></h4>
    </div>
    <?php
    require("middleforms/kids.php");
}
elseif ($ctid==10011){
    ?>
    <div class="page-header">
        <h4><strong style="text-align: center; text-transform: capitalize">Sports, Hobbies & Fashion</strong></h4>
    </div>
    <?php
    require("middleforms/spohobfas.php");
}
elseif ($ctid==10012){
    ?>
    <div class="page-header">
        <h4><strong style="text-align: center; text-transform: capitalize">Commercial Real Estate</strong></h4>
    </div>
    <?php
    require("middleforms/comrealestate.php");
}
elseif ($ctid==10013){
    ?>
    <div class="page-header">
        <h4><strong style="text-align: center; text-transform: capitalize">Salon at Home</strong></h4>
    </div>
    <?php
    require("middleforms/salon.php");
}
elseif ($ctid==10014){
    ?>
    <div class="page-header">
        <h4><strong style="text-align: center; text-transform: capitalize">Pets & Pet Care</strong></h4>
    </div>
    <?php
    require("middleforms/pets.php");
}