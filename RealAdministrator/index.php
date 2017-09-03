<?php
// without login nothing will be there
require("essential/db/db.php"); // admin db connection
require("essential/session/session.php"); // admin session info
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administrator</title>
    <?php
    require("include/imp/Allcss.php");
    require("include/imp/topjs.php");
    ?>
</head>
<body>
<?php
    //login/signup modal
    require("forward/modal/modal.php");
    if($aid==''){
        include("forward/login/move.php");
    }else{
        //header
        include("include/header/header.php");
    ?>
<div class="container-fluid adminBar-fluid">
    <?php
        //maincontent
        require("forward/dataindex.php");
    }
    ?>
</div>
<?php
    require("include/imp/bottomjs.php");
?>
</body>
</html>