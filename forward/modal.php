<?php
//login/signup modals
error_reporting(0);
include("login/login.php");
include("signup/signup.php");
include("postFreeAD/adBlockModal.php");
include("login/logoutmodal.php");
include("profile/edit.php");
?>
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog" id="moda">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><i class="fa fa-user-circle"></i> Login/Signup</h4>
            </div>
            <div class="modal-body smalltext">
                <h3>Already a Customer?</h3>
                <div class="container">
                    <button class="btn btn-danger btn-lg btn-block" data-toggle="modal" data-target="#loginModal" data-dismiss="modal">Login</button>
                </div>
                <h3>New User?</h3>
                <div class="container">
                    <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#signupModal" data-dismiss="modal">Signup</button>
                </div>
            </div>
        </div>
    </div>
</div>