<?php
require("../../essential/db/db.php");
$login_id=$_POST['login_id'];
$password=$_POST['login_pass'];

$verifyuser=mysqli_query($con,"select * from verified_user where user_login_id='$login_id'");
if(mysqli_num_rows($verifyuser)>0){
    $fetch=mysqli_fetch_array($verifyuser);
    $fetched_pass=$fetch[3];
    if (password_verify($password, $fetched_pass)) {
        $fetched_login_id=$fetch[0];
        mysqli_query($con,"UPDATE status SET status = 1 WHERE user_id = $fetched_login_id");
        session_start();
        $_SESSION['login_id'] = $fetched_login_id;
        echo "registered user";
    } else {
        echo 'Invalid password.';
    }
}else{
    echo mysqli_error($con);
}