<?php

// ask admin to login to access admin panel

?>
<div class="container" id="positioned">
    <div class="row">
        <div class="col-md-3 col-sm-12"></div>
        <div class="col-md-6 col-sm-12" id="Admin-form">
            <form id="AdminLoginForm" name="AdminLoginForm" method="post" autocomplete="off">
                <div class="form-group">
                    <img src="https://www.w3schools.com/howto/img_avatar2.png" alt="Avatar" class="avatar">
                </div>

                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Enter Username" id="uname" name="uname" required autofocus>
                </div>

                <div class="form-group">
                    <input class="form-control" type="password" placeholder="Enter Password" id="psw" name="psw" required>
                </div>

                <div class="form-group">
                    <button class="btn btn-success btn-block" name="ad-login" id="ad-login" type="submit">Login</button>
                </div>
            </form>
        </div>
        <div class="col-md-3 col-sm-12"></div>
    </div>
</div>