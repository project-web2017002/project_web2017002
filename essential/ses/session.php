<?php
error_reporting(0);
session_start();
if($_SESSION['login_id']){
    $id = $_SESSION['login_id'];
}elseif($_SESSION['userData']){
    $googleid = $_SESSION['userData'];
}elseif($_SESSION['userDatafb']){
    $fbid = $_SESSION['userDatafb'];
}