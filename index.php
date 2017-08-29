<?php
    require("essential/db/db.php"); // db file
    require("essential/ses/session.php"); // session file

    // if our registered user id is not null
    if($id != '') {
        $tru = mysqli_query($con, "select * from verified_user where user_id=$id");
        $num1 = mysqli_num_rows($tru);
        if($num1 <= 0){
            $_SESSION['login_id'] = NULL; // set our session id to null
        }else{
            $fet = mysqli_fetch_array($tru);
            $email = $fet[2];
            $ot = mysqli_query($con,"select * from otp_signup where user=$id"); // verification of otp
            $num2 = mysqli_num_rows($ot);
            if($num2 > 0){ // if user found unverified
                $otp_gen = randomStringotpp();
                $create_otp_query = mysqli_query($con,"update otp_signup set OTP_VAL=$otp_gen where user=$id"); //create a random otp
                $mailed = sendmailrr($email,"opadmin1@gmail.com",$otp_gen); // send mail to user and admin about otp
                if($mailed == 'send') {
                    echo "<script>window.location.assign('forward/signup/otp/');</script>"; // forward user to otp verification
                }else{
                    $_SESSION['login_id'] = NULL; // set our session id to null
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
        require("include/imp/AllStylesheets.php"); // all stylesheets included
        require("include/imp/topscripts.php"); // some js files
        ?>
	</head>
	<body>
    <?php
        require("forward/modal.php"); // modal windows
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
        require("include/imp/bottomscripts.php"); // bottom scripts to load after content loads
    ?>
	</body>
</html>
<?php
// function to generate random otp string
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


//otp mail send
function sendmailrr($one,$two,$three){
    require("mail/PHPMailerAutoload.php"); // mail api included
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