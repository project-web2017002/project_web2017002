<?php
require("../../essential/db/db.php");
require("../../essential/ses/session.php");
$u_name=$_POST['u_name'];
$u_email=$_POST['u_email'];
$u_contact=$_POST['u_contact'];

$update_query=mysqli_query($con,"update verified_user set user_name='$u_name', user_login_id='$u_email',user_contact='$u_contact' where user_id=$id");
if($update_query){
    echo "success";
}else{
    $err= "Some Error! ".mysqli_error($con);
}

?>