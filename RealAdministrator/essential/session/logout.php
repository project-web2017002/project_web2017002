<?php
error_reporting(0);
include("../db/db.php");
require("session.php");
$updatestatus=mysqli_query($con,"UPDATE admin_status SET status = 0 WHERE admin_id = $aid");
if($updatestatus){
    session_start();
    $_SESSION['admin_login_id']=NULL;
    session_destroy();
    echo "destroyed!".$_SESSION['admin_login_id'];
    header("location:/optimus/RealAdministrator");
}else{
    echo "<script>console.log('".mysqli_error($con)."');</script>";
}