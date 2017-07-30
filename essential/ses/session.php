<?php
error_reporting(0);
session_start();
if($_SESSION['login_id']){
    $id = $_SESSION['login_id'];
}elseif($_SESSION['userData']){
    $googleid = $_SESSION['userData'];
}