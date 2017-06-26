<div id="signupModal" class="modal fade" role="dialog">
    <div class="modal-dialog" id="moda">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><i class="fa fa-user-circle"></i> Signup</h4>
                <div class="row smalltext">Please provide your Mobile Number or Email to Signup</div>
            </div>
            <div class="modal-body">
                <form id="Signupform" method="post" autocomplete="off">
                    <div class="form-group">
                        <input type="text" name="username" id="username" class="form-control" placeholder="Enter Your Name" required pattern="[a-zA-Z]{3,}"
                        title="Username contains only alphabets">
                    </div>
                    <div class="form-group">
                        <input type="text" name="content" id="content" class="form-control" placeholder="Enter Mobile Number/Email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="pass" id="pass" class="form-control" placeholder="Enter Password" required pattern=".{6,8}"
                        title="Password length should be min 6 characters to max 8 characters">
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="verify_terms" id="verify_terms" value="terms_agree" checked required> I agree to terms and conditions<br>
                        <input type="checkbox" name="verify_age" id="verify_age" value="age_agree" checked required> I am above 18
                    </div>
                    <button type="submit" name="signup" id="signup" class="btn btn-danger" disabled="disabled" style="width: 100%; background-color: #e40046; color: white;">Continue</button>
                </form>
                <br><br>
                <div class="row smalltext">or Signup using (not working)</div>
                <div class="row smalltext">
                    <div class="col-lg-4">
                        <button class="btn btn-primary"><i class="fa fa-facebook-official"></i> Facebook</button>
                    </div>
                    <div class="col-lg-4">
                        <button class="btn btn-danger"><i class="fa fa-google-plus-official"></i> Google</button>
                    </div>
                    <div class="col-lg-4">
                        <button class="btn btn-warning" data-toggle="modal" data-target="#loginModal" data-dismiss="modal">
                            <i class="fa fa-user-circle-o"></i> Login
                        </button>
                    </div>
                </div>
                <br><br>
            </div>
        </div>
    </div>
</div>