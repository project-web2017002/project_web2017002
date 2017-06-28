<?php
require("../../essential/db/db.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>
    <?php
    require("../../include/imp/AllStylesheets.php");
    require("../../include/imp/topscripts.php");
    ?>
</head>
<body style="background: #f3f3f3">
<?php
//login/signup modal
require("../../forward/modal.php");
//header
include("../../include/head/header.php");
?>
<div class="container-fluid">
    <!-- main Content -->
    <div class="dataindex-main" style="text-align: center;">
        Contact Us
    </div>
</div>
<?php
//footer
require("../../include/foot/footer.php");
require("../../include/imp/bottomscripts.php");
?>
</body>
</html>