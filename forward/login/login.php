<?php
if($_SESSION['userData'] == '') {
//Include GP config file && User class
    include_once 'forward/login/GoogleLogin/gpConfig.php';
    include_once 'forward/login/GoogleLogin/User.php';

    if (isset($_GET['code'])) {
        $gClient->authenticate($_GET['code']);
        $_SESSION['token'] = $gClient->getAccessToken();
        header('Location: ' . filter_var($redirectURL, FILTER_SANITIZE_URL));
    }

    if (isset($_SESSION['token'])) {
        $gClient->setAccessToken($_SESSION['token']);
    }

    if ($gClient->getAccessToken()) {
        //Get user profile data from google
        $gpUserProfile = $google_oauthV2->userinfo->get();

        //Initialize User class
        $user = new User();

        //Insert or update user data to the database
        $gpUserData = array(
            'oauth_provider' => 'google',
            'oauth_uid'     => $gpUserProfile['id'],
            'first_name' => $gpUserProfile['given_name'],
            'last_name' => $gpUserProfile['family_name'],
            'email' => $gpUserProfile['email'],
            'gender' => $gpUserProfile['gender'],
            'locale' => $gpUserProfile['locale'],
            'picture' => $gpUserProfile['picture'],
            'link' => $gpUserProfile['link']
        );
        $userData = $user->checkUser($gpUserData);

        //Storing user data into session
        $_SESSION['userData'] = $userData['id'];


//Render google profile data
        if (!empty($userData)) {
//do nothing
        } else {
            $output = '<h3 style="color:red">Some problem occurred, please try again.</h3>';
        }
    } else {
        $authUrl = $gClient->createAuthUrl();
        $output = filter_var($authUrl, FILTER_SANITIZE_URL);
    }
}
?>
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
                        <input type="text" name="content" id="loginContent" class="form-control" placeholder="Mobile Number/Email" required autofocus>
                    </div>
                    <div class="form-group">
                        <input type="password" name="pass" id="loginPass" class="form-control" placeholder="Password" required>
                    </div>
                    <button type="submit" id="login" name="login" class="btn btn-danger" style="width: 100%; background-color: #e40046; color: white;" disabled>Continue</button>
                </form>
                <br><br>
                <div class="row smalltext">or Login using</div>
                <div class="row smalltext">
                    <div class="col-lg-4">
<!--                        <div class="fb-login-button" data-max-rows="1" data-size="medium" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="true" data-use-continue-as="true"></div>-->
                          <!--fb:login-button scope="public_profile,email" onlogin="checkLoginState();"></fb:login-button-->
                        <button class="btn btn-primary btn-block"><i class="fa fa-facebook-official"></i> Facebook</button>
                    </div>
                    <div class="col-lg-4">
                        <a href="<?php echo $output ?>" class="btn btn-danger btn-block"><i class="fa fa-google-plus-official"></i> Google</a>
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