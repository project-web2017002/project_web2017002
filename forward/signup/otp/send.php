<?php
require("../../../essential/db/db.php");
require("../../../essential/ses/session.php");
$b = $_POST['b'];
$checkuser = mysqli_query($con,"select * from verified_user where user_id=$id");
$num2 = mysqli_num_rows($checkuser);
if($num2 <= 0){
    echo "User Does not Exist";
    $_SESSION['login_id'] = NULL;
}else {
    $verify = mysqli_query($con, "select * from otp_signup where user=$id");
    $num1 = mysqli_num_rows($verify);
    if ($num1 <= 0) {
        echo "Verified User";
    } else {
        $verifycode = mysqli_fetch_array($verify);
        $code = $verifycode[2];
        if ($code === $b) {
            mysqli_query($con, "delete from otp_signup where user=$id");
            echo "Success";
        } else {
            echo "Invalid OTP";
        }
    }
}
?>