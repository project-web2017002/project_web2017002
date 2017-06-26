<?php
require("../../essential/db/db.php");
    $name=$_POST['username'];
    $user_login_id=$_POST['content'];
    $password=$_POST['pass'];
    $random = [
        'cost' => 15,
    ];
    $enc_pass=password_hash($password, PASSWORD_BCRYPT, $random);
    $legal=$_POST['verify_age'];
    if($legal=='age_agree'){
        $legal=1;
    }else{
        $legal=0;
    }
    $agreed=$_POST['verify_terms'];
    if($agreed=='terms_agree'){
        $agreed=1;
    }else{
        $agreed=0;
    }
    $check=mysqli_query($con,"select * from verified_user where user_login_id='$user_login_id'");
    $numrows=mysqli_num_rows($check);
    if($numrows>0){
        $err="User already exists!";
    }else{
        $insert_new_user=mysqli_query($con,"insert into verified_user (user_name,user_login_id,user_password)
values ('$name','$user_login_id','$enc_pass')");
        if($insert_new_user){
            $fetch_new_id=mysqli_query($con,"select * from verified_user where user_login_id='$user_login_id'");
            if($fetch_new_id){
                $data_fetch_new_id=mysqli_fetch_array($fetch_new_id);
                $user_id_obt=$data_fetch_new_id[0];
                $agreement_insert=mysqli_query($con,"insert into policy_agreement (user_id,above_18,TnC) values 
($user_id_obt,$legal,$agreed)");
                if($agreement_insert){
                    echo "Success";
                }else{
                    $err="Some error! ".mysqli_error($con);
                }
            }
            else{
                $err="Some error! ".mysqli_error($con);
            }
        }
        else{
            $err="Some error! ".mysqli_error($con);
        }
    }
?>