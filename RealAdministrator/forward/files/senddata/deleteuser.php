<?php
// this will remove a user
require("../../../essential/db/db.php");
require("../../../essential/session/session.php");

$secret_id=$_POST['secretId'];

$deleteuser_query=mysqli_query($con,"delete from verified_user where user_id=$secret_id");
if($deleteuser_query){
    echo "<script>console.log('User deleted');</script>";
}
else{
    echo "<script>console.log('".mysqli_error($con)."');</script>";
}