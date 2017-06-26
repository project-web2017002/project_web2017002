<?php
require("../../../essential/db/db.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <title>Optimus Web Project</title>
    <link rel="stylesheet" href="//localhost/optimus/include/css/index.css">
    <link rel="stylesheet" href="//localhost/optimus/include/css/modal.css">
    <link rel="stylesheet" href="//localhost/optimus/include/css/footer.css">
    <link rel="stylesheet" href="//localhost/optimus/include/css/dataindex.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background: #f3f3f3">
<?php
//login/signup modal
require("../../../forward/modal.php");
//header
include("../../../include/head/header.php");
?>
<div class="container-fluid">
    <!-- main Content -->
    <div class="dataindex-main" style="text-align: center;">
        News
    </div>
</div>
<?php
//footer
require("../../../include/foot/footer.php");
?>
<!--scripts-->
<!--scripts-->
<script src="//localhost/optimus/include/js/angular.js"></script>
<script src="//localhost/optimus/include/js/index.js"></script>
</body>
</html>