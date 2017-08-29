<?php
//for session setting

error_reporting(0);
session_start();
// for iur registered user
if($_SESSION['login_id']){
    $id = $_SESSION['login_id'];
}elseif($_SESSION['userData']){ // for user registered from google
    $googleid = $_SESSION['userData'];
}elseif($_SESSION['userDatafb']){ // for user registered user from fb
    $fbid = $_SESSION['userDatafb'];
}