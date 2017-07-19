<?php
error_reporting(0);
require("essential/db/db.php");
require("essential/ses/session.php");
?>
<div class="container-fluid">
    <?php
    if($categoryid == 10001){
        require("categoryID/10001/index.php");
    }
    elseif ($categoryid == 10002 || $categoryid == 10012){
        require("categoryID/10002/index.php");
    }
    elseif ($categoryid == 10003){
        require("categoryID/10003/index.php");
    }
    elseif ($categoryid == 10004){
        require("categoryID/10004/index.php");
    }
    elseif ($categoryid == 10005){
        require("categoryID/10005/index.php");
    }
    elseif ($categoryid == 10006){
        require("categoryID/10006/index.php");
    }
    elseif ($categoryid == 10007 || $categoryid == 10016){
        require("categoryID/10007/index.php");
    }
    elseif ($categoryid == 10008 || $categoryid == 10010 || $categoryid == 10011 || $categoryid == 10013 || $categoryid == 10017){
        require("categoryID/10008/index.php");
    }
    elseif ($categoryid == 10009){
        require("categoryID/10009/index.php");
    }
    elseif ($categoryid == 10014){
        require("categoryID/10014/index.php");
    }
    elseif ($categoryid == 10018){
        require("categoryID/10018/index.php");
    }
    elseif ($categoryid == 10019){
        require("categoryID/10019/index.php");
    }
    elseif ($categoryid == 10020){
        require("categoryID/10020/index.php");
    }
    elseif ($categoryid == 10021){
        require("categoryID/10021/index.php");
    }
    else{
        ?>
        <div class="container">No Such Category</div>
    <?php
    }
    ?>
</div>