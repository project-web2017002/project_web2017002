<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog" id="moda">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Login </h4>
                <div class="row smalltext">Please provide your Mobile Number or Email to Login</div>
            </div>
            <div class="modal-body">
                <form name="loginform" method="post" action="data/login/login.php">
                    <div class="form-group">
                        <input type="text" name="content" class="form-control" placeholder="Mobile Number/Email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="pass" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <input type="radio" name="typeofuser" value="buyer" checked> Buyer<br>
                        <input type="radio" name="typeofuser" value="seller"> Seller<br>
                    </div>
                    <button type="submit" name="login" class="btn btn-danger" style="width: 100%; background-color: #e40046; color: white;">Continue</button>
                </form>
                <br><br>
                <div class="row smalltext">or Login using (not working)</div>
                <div class="row smalltext">
                    <div class="col-lg-5 fb"><img src="include/media/images/fb.png" width="20" height="20" style="background-color: white"> Facebook</div>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-5 gp"><img src="include/media/images/g+.png" width="20" height="20"> Google</div>
                </div>
                <br><br>
            </div>
        </div>
    </div>
</div>