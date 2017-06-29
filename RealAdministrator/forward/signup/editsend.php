<?php

require("../../essential/db/db.php");
require("../../essential/session/session.php");

$ad_name=$_POST['ad_name'];
$ad_email=$_POST['ad_email'];
$ad_contact=$_POST['ad_contact'];

$update_query=mysqli_query($con,"update realadmin set admin_name='$ad_name',admin_email='$ad_email',admin_contact='$ad_contact' where admin_id=$aid");
if($update_query){
    echo "success";
}else{
    $err= "Some Error! ".mysqli_error($con);
}

?>