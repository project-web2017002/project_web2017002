<?php
// verifies admin info and logged admin in
require("../../essential/db/db.php");
require("../../essential/session/session.php");

$ad_uname=$_POST['ad_uname'];
$ad_pass=$_POST['ad_pass'];

$get_verify=mysqli_query($con,"select * from realadmin where admin_name='$ad_uname' or admin_email='$ad_uname' or admin_contact='$ad_uname'");
$num_get_verify=mysqli_num_rows($get_verify);
if($num_get_verify>0){
    $fetch_verify=mysqli_fetch_array($get_verify);
    $pass=$fetch_verify[4];
    if(password_verify($ad_pass,$pass)){
        $admin_id=$fetch_verify[0];
        $status_update=mysqli_query($con,"update admin_status set status=1 where admin_id=$admin_id");
        if($status_update){
            session_start();
            $_SESSION['admin_login_id']=$admin_id;
        }else{
            echo "<script>console.log('".mysqli_error($con)."');</script>";
        }
    }
    else{
        echo "<script>console.log('password didn\'t match');</script>";
    }
}else{
    echo "<script>console.log('".mysqli_error($con)."');</script>";
}