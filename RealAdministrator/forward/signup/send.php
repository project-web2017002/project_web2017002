<?php
// this will create a new admin
require("../../essential/db/db.php");
$name=$_POST['adminname'];
$user_login_id=$_POST['adminemail'];
$user_contact_nu=$_POST['admincontact'];
$password=$_POST['pass'];
$enc_pass=password_hash($password, PASSWORD_DEFAULT);

$check=mysqli_query($con,"select * from realadmin where admin_name='$name' or admin_email='$user_login_id' or admin_contact='$user_contact_nu''");
$numrows=mysqli_num_rows($check);
if($numrows>0){
    $err="User already exists!";
}else{
    $insert_new_user=mysqli_query($con,"insert into realadmin (admin_name,admin_email,admin_contact,admin_password)
values ('$name','$user_login_id','$user_contact_nu','$enc_pass')");
    if($insert_new_user){
        $fetch_new_id=mysqli_query($con,"select * from realadmin where admin_email='$user_login_id'");
        if($fetch_new_id) {
            $data_fetch_new_id = mysqli_fetch_array($fetch_new_id);
            $user_id_obt = $data_fetch_new_id[0];
            $statusquery = mysqli_query($con, "insert into admin_status (admin_id,status) values ($user_id_obt,0)");
            if ($statusquery) {
                echo "<script>console.log('Success');</script>";
            } else {
                echo "<script>console.log('".mysqli_error($con)."');</script>";
            }
        }
        else{
            echo "<script>console.log('".mysqli_error($con)."');</script>";
        }
    }
    else{
        echo "<script>console.log('".mysqli_error($con)."');</script>";
    }
}
?>