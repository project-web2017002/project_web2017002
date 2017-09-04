<?php
// login modal
$path = $_SERVER['DOCUMENT_ROOT'];
if($_SESSION['userData'] == '' && $_SESSION['userDatafb'] == '' && $_SESSION['login_id'] == '') { // checks if any user is not logged in
//Include GP config file && User class
    include_once($path.'/optimus/forward/login/GoogleLogin/gpConfig.php');
    include_once($path.'/optimus/forward/login/User.php');

    if (isset($_GET['code']) && !$_GET['state']) {
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
            'oauth_uid' => $gpUserProfile['id'],
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

// Include FB config file && User class
    require_once($path.'/optimus/forward/login/fbLogin/fbConfig.php');
    if (isset($accessToken)) {
        if (isset($_SESSION['facebook_access_token'])) {
            $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
        } else {
            // Put short-lived access token in session
            $_SESSION['facebook_access_token'] = (string)$accessToken;

            // OAuth 2.0 client handler helps to manage access tokens
            $oAuth2Client = $fb->getOAuth2Client();

            // Exchanges a short-lived access token for a long-lived one
            $longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken($_SESSION['facebook_access_token']);
            $_SESSION['facebook_access_token'] = (string)$longLivedAccessToken;

            // Set default access token to be used in script
            $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
        }

        if (isset($_GET['code']) && $_GET['state']) {
            header('Location: ./');
        }

        // Getting user facebook profile info
        try {
            $profileRequest = $fb->get('/me?fields=name,first_name,last_name,email,link,gender,locale,picture');
            $fbUserProfile = $profileRequest->getGraphNode()->asArray();
        } catch (FacebookResponseException $e) {
            echo 'Graph returned an error: ' . $e->getMessage();
            session_destroy();
            // Redirect user back to app login page
            header("Location: ./");
            exit;
        } catch (FacebookSDKException $e) {
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }

        // Initialize User class
        $user2 = new User();

        // Insert or update user data to the database
        $fbUserData = array(
            'oauth_provider' => 'facebook',
            'oauth_uid' => $fbUserProfile['id'],
            'first_name' => $fbUserProfile['first_name'],
            'last_name' => $fbUserProfile['last_name'],
            'email' => $fbUserProfile['email'],
            'gender' => $fbUserProfile['gender'],
            'locale' => $fbUserProfile['locale'],
            'picture' => $fbUserProfile['picture']['url'],
            'link' => $fbUserProfile['link']
        );
        $userData2 = $user2->checkUserfb($fbUserData);

        // Put user data into session
        $_SESSION['userDatafb'] = $userData2['id'];

        // Render facebook profile data
        if (!empty($userData2)) {
            //do noting
        } else {
            $output2 = '<h3 style="color:red">Some problem occurred, please try again.</h3>';
        }

    } else {
        // Get login url
        $loginURL = $helper->getLoginUrl($redirectURL, $fbPermissions);

        // Render facebook login button
        $output2 = htmlspecialchars($loginURL);
    }
}
?>
<div id="loginModal" class="modal fade" role="dialog">
    <div class="modal-dialog" id="moda">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" onclick="closed();">&times;</button>
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
                    <!--^ executed through ajax-->
                </form>
                <br><br>
                <div class="row smalltext">or Login using</div>
                <div class="row smalltext">
                    <div class="col-lg-4">
                        <a href="<?php echo $output2 ?>" class="btn btn-primary btn-block"><i class="fa fa-facebook-official"></i> Facebook</a>
                    </div>
                    <div class="col-lg-4">
                        <a href="<?php echo $output ?>" class="btn btn-danger btn-block"><i class="fa fa-google-plus-official"></i> Google</a>
                    </div>
                    <div class="col-lg-4">
                        <button class="btn btn-warning btn-block" onclick="two()">
                            <i class="fa fa-user-circle-o"></i> Signup
                        </button>
                    </div>
                </div>
                <br><br>
            </div>
        </div>
    </div>
</div>