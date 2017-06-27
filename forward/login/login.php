<div id="loginModal" class="modal fade" role="dialog">
    <div class="modal-dialog" id="moda">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><i class="fa fa-user-circle"></i> Login</h4>
                <div class="row smalltext">Please provide your Mobile Number or Email to Login</div>
            </div>
            <div class="modal-body">
                <form name="loginform" method="post" id="loginForm">
                    <div class="form-group">
                        <input type="text" name="content" id="loginContent" class="form-control" placeholder="Mobile Number/Email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="pass" id="loginPass" class="form-control" placeholder="Password" required>
                    </div>
                    <button type="submit" id="login" name="login" class="btn btn-danger" style="width: 100%; background-color: #e40046; color: white;" disabled>Continue</button>
                </form>
                <br><br>
                <div class="row smalltext">or Login using (not working)</div>
                <div class="row smalltext">
                    <div class="col-lg-4">
                        <button class="btn btn-primary btn-block"><i class="fa fa-facebook-official"></i> Facebook</button>
                    </div>
                    <div class="col-lg-4">
                        <button class="btn btn-danger btn-block"><i class="fa fa-google-plus-official"></i> Google</button>
                    </div>
                    <div class="col-lg-4">
                        <button class="btn btn-warning btn-block" data-toggle="modal" data-target="#signupModal" data-dismiss="modal">
                            <i class="fa fa-user-circle-o"></i> Signup
                        </button>
                    </div>
                </div>
                <br><br>
            </div>
        </div>
    </div>
</div>