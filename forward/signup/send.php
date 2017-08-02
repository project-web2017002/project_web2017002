<?php
require("../../essential/db/db.php");
    $name=$_POST['username'];
    $user_login_id=$_POST['content'];
    $user_contact_nu=$_POST['contant'];
    $password=$_POST['pass'];
    $random = [
        'cost' => 15,
    ];
    $enc_pass=password_hash($password, PASSWORD_BCRYPT, $random);
    $legal=$_POST['verify_age'];
    if($legal=='age_agree'){
        $legal=1;
    }else{
        $legal=0;
    }
    $agreed=$_POST['verify_terms'];
    if($agreed=='terms_agree'){
        $agreed=1;
    }else{
        $agreed=0;
    }
    $check=mysqli_query($con,"select * from verified_user where user_login_id='$user_login_id' or user_contact='$user_contact_nu'");
    $numrows=mysqli_num_rows($check);
    if($numrows>0){
        $err="User already exists!";
    }else{
        $insert_new_user=mysqli_query($con,"insert into verified_user (user_name,user_login_id,user_contact,user_password)
values ('$name','$user_login_id','$user_contact_nu','$enc_pass')");
        if($insert_new_user){
            $fetch_new_id=mysqli_query($con,"select * from verified_user where user_login_id='$user_login_id'");
            if($fetch_new_id){
                $data_fetch_new_id=mysqli_fetch_array($fetch_new_id);
                $user_id_obt=$data_fetch_new_id[0];
                $agreement_insert=mysqli_query($con,"insert into policy_agreement (user_id,above_18,TnC) values 
($user_id_obt,$legal,$agreed)");
                if($agreement_insert){
                    $statusquery=mysqli_query($con,"insert into status (user_id,status) values ($user_id_obt,1)");
                    if($statusquery){
                        $otp_gen = randomString();
                        $create_otp_query = mysqli_query($con,"insert into otp_signup (user,OTP_VAL) values ($user_id_obt,$otp_gen)");
                        $mailed = sendmail($user_login_id,"opadmin1@gmail.com",$otp_gen);
                        if($mailed == 'send') {
                            echo "Success";
                            session_start();
                            $_SESSION['login_id'] = $user_id_obt;
                        }
                        else
                            echo "Signed Up";
                    }else{
                        $err="Some error! ".mysqli_error($con);
                    }
                }else{
                    $err="Some error! ".mysqli_error($con);
                }
            }
            else{
                $err="Some error! ".mysqli_error($con);
            }
        }
        else{
            $err="Some error! ".mysqli_error($con);
        }
    }

function randomString() {
    $length = 4;
    $characters = '12356789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function sendmail($one,$two,$three){
    require("../../mail/PHPMailerAutoload.php");
    $mail  = new PHPMailer();
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