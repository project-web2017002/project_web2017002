<?php
error_reporting(0);
include("../db/db.php");
require("session.php");
$updatestatus=mysqli_query($con,"UPDATE status SET status = 0 WHERE user_id = $id");
if($updatestatus){
    session_start();
    $_SESSION['login_id']=NULL;
    session_destroy();
    echo "destroyed!".$_SESSION['login_id'];
    header("location:/optimus");
}else{
    $err ="Some Error! ".mysqli_error($con);
}