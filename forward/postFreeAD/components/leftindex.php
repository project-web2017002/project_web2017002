<!--Left side menu to display if user didn't select an category to post an ad-->
<div class="leftadv" id="advertiseCategoryMenu">
    <?php
    if($ctid == '') {
        require("leftside/topleft.php");
        require("leftside/middleleft.php");
        require("leftside/bottomleft.php");
    }
    ?>
</div>