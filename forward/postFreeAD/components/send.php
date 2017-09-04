<?php
//this file uploads one reference image of ad posted in db

error_reporting(0);
require("../../../essential/db/db.php");
require("../../../essential/ses/session.php");
if(isset($_POST) == true){
    $pr = $_GET['pr'];
    $fileName = time().'_'.basename($_FILES["file"]["name"]); // get file name and create give it a new name
    $targetDir = "../../../Category/images/"; // directory to store images of post
    $targetFilePath = $targetDir . $fileName; // file path with file
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    $allowTypes = array('jpg','png','jpeg'); // only these file are allowed to upload
    if(in_array($fileType, $allowTypes)){
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){ //move file into directory
            $insertintodb = mysqli_query($con,"update listed_products set ref_img='$fileName' where product_id=$pr"); // upload to db
            if($insertintodb){
                $response['status'] = 'ok';
            }else{
                $response['status'] = 'err';
            }
        }else{
            $response['status'] = 'err';
        }
    }else{
        $response['status'] = 'type_err';
    }
    echo json_encode($response); //response to user
}
