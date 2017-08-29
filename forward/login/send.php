<?php
// to login a user
// called though ajax

require("../../essential/db/db.php");
$login_id=$_POST['login_id']; // getting logged in email or contact number enter by user
$password=$_POST['login_pass']; // getting password enter by user
$verifyuser=mysqli_query($con,"select * from verified_user where user_login_id='$login_id' or user_contact='$login_id'"); // checking if user exists
$numrows=mysqli_num_rows($verifyuser);
if($numrows>0){
    $fetch=mysqli_fetch_array($verifyuser);
    $fetched_pass=$fetch[4];
    if (password_verify($password, $fetched_pass)) { // comparing entered password with db encrypted password, recommend to change encryption method during signup
        $fetched_login_id=$fetch[0];
        $verifiedornot = mysqli_query($con,"select * from otp_signup where user=$fetched_login_id"); // if user exists, checks if user is verified
        $num3=mysqli_num_rows($verifiedornot);
        if($num3<=0){ // if user is verified
            mysqli_query($con,"UPDATE status SET status = 1 WHERE user_id = $fetched_login_id"); // update user status to login
            session_start();
            $_SESSION['login_id'] = $fetched_login_id;
            echo "Success";
        }else{ // if not verified user
            $otp_gen = randomStringot(); // generate otp
            $create_otp_query = mysqli_query($con,"update otp_signup set OTP_VAL=$otp_gen where user=$fetched_login_id"); // store otp in db
            $mailed = sendmailr($login_id,"opadmin1@gmail.com",$otp_gen); // send otp to user and one of the admin
            if($mailed == 'send') {
                session_start();
                $_SESSION['login_id'] = $fetched_login_id;
            }else{
                $_SESSION['login_id'] = NULL;
            }
            echo "OTP";
        }
    } else {
        echo "Invalid Password";
    }
}else{
    echo "Error";
}

function randomStringot() {
    $length = 4;
    $characters = '12356789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
// send mail function
function sendmailr($one,$two,$three){
    require("../../mail/PHPMailerAutoload.php"); // including mail api
    $mail = new PHPMailer();
    $mail->Host = "smtp.gmail.com";
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Username = "optimustechprojectweb201702@gmail.com";
    $mail->Password = "Pass@1234";
    $mail->SMTPSecure = "tls"; //or ssl
    $mail->Port = 587;//465 for ssl
    $mail->Subject = "OTP for account verification";
    $mail->Body = "Enter the Following OTP:<br><br>".$three;
    $mail->setFrom("optimustechprojectweb201702@gmail.com","Welcome");
    $mail->addAddress($one);
    $mail->addCC($two);
    $mail->WordWrap = 50;
    $mail->isHTML(true);
    if($mail->send())
        return "send";
    else
        return "Failure".$mail->ErrorInfo;
}
?>