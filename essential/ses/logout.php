<?php
// for logging out the user
error_reporting(0);
include("../db/db.php"); // include db file
require("session.php"); // session file
if($id == ''){

//Unset token and user data from session
    $_SESSION['token'] = NULL;
    $_SESSION['facebook_access_token'] = NULL;
    $_SESSION['userData'] = NULL;
    $_SESSION['userDatafb'] = NULL;

//Destroy entire session
    session_destroy();

//Redirect to homepage
    header("location:/optimus");
}else {
    $updatestatus = mysqli_query($con, "UPDATE status SET status = 0 WHERE user_id = $id");
    if ($updatestatus) {
        $_SESSION['login_id'] = NULL;
        session_destroy();
        echo "destroyed!" . $_SESSION['login_id'];
        header("location:/optimus");
    } else {
        $err = "Some Error! " . mysqli_error($con);
    }
}