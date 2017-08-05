<?php
    require("essential/db/db.php");
    require("essential/ses/session.php");
    if($id != '') {
        $tru = mysqli_query($con, "select * from verified_user where user_id=$id");
        $num1 = mysqli_num_rows($tru);
        if($num1 <= 0){
            $_SESSION['login_id'] = NULL;
        }else{
            $fet = mysqli_fetch_array($tru);
            $email = $fet[2];
            $ot = mysqli_query($con,"select * from otp_signup where user=$id");
            $num2 = mysqli_num_rows($ot);
            if($num2 > 0){
                $otp_gen = randomStringotpp();
                $create_otp_query = mysqli_query($con,"update otp_signup set OTP_VAL=$otp_gen where user=$id");
                $mailed = sendmailrr($email,"opadmin1@gmail.com",$otp_gen);
                if($mailed == 'send') {
                    echo "<script>window.location.assign('forward/signup/otp/');</script>";
                }else{
                    $_SESSION['login_id'] = NULL;
                }
            }
        }
    }
    $categoryid = $_GET['categoryId'];
    $city = $_GET['city'];
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Optimus Web Project</title>
        <?php
        require("include/imp/AllStylesheets.php");
        require("include/imp/topscripts.php");
        ?>
	</head>
	<body>
    <?php
    //login/signup modal
        require("forward/modal.php");
    //header
        include("include/head/header.php");
        ?>
    <div class="container-fluid mainBar-fluid">
        <?php
        //maincontent
            require("forward/dataindex.php");
        ?>
    </div>
    <?php
    //footer
        require("include/foot/footer.php");
        require("include/imp/bottomscripts.php");
    ?>
	</body>
</html>
<?php
function randomStringotpp() {
    $length = 4;
    $characters = '12356789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function sendmailrr($one,$two,$three){
    require("mail/PHPMailerAutoload.php");
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