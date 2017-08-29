<?php
//otp verification page
//only for user registered from our form

    require("../../../essential/db/db.php");
    require("../../../essential/ses/session.php");
    //if user isn't logged in
    if($id == ''){
        echo "<script>window.location.assign('../../../');</script>";
    }else{

        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>OTP verification | Optimus</title>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
            <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        </head>
        <body style="padding: 40px;">
        <div id="loading" style="display: none; top:0; left:0; position: fixed; text-align: -webkit-center; padding: 15% 0; background: transparent; width: 100%; z-index: 9999">
            <img src="/optimus/include/media/images/loading.gif">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12"></div>
                <div class="col-md-4 col-sm-12" style="font-size: large; text-transform: uppercase; text-align: center">
                    Please enter OTP send to your given email
                </div>
                <div class="col-md-4 col-sm-12"></div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4 col-sm-12"></div>
                <div class="col-md-4 col-sm-12" id="errorfield" style="text-align: center; color:red;"></div>
                <div class="col-md-4 col-sm-12"></div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-12"></div>
                <div class="col-md-4 col-sm-12" style="font-size: large; text-align: center">
                    <br>

                    <form id="otpsignup" style="border: 1px solid green; padding: 15px;">
                        <input type="text" id="otpval" placeholder="Enter OTP:" required class="form-control" pattern="[0-9]{4,4}"
                               title="Enter four Digits OTP" autofocus>
                        <br>
                        <div id="formOTP" class="btn btn-primary btn-block">Submit</div>
                    </form>
                </div>
                <div class="col-md-4 col-sm-12"></div>
            </div>
        </div>
        <script type="text/javascript" src="../../../include/js/opt.js"></script>
        </body>
        </html>
        <?php
    }
    ?>