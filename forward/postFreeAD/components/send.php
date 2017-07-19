<?php
error_reporting(0);
require("../../../essential/db/db.php");
require("../../../essential/ses/session.php");
if(isset($_POST) == true){
    $pr = $_GET['pr'];
    $fileName = time().'_'.basename($_FILES["file"]["name"]);
    $targetDir = "../../../Category/images/";
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    $allowTypes = array('jpg','png','jpeg');
    if(in_array($fileType, $allowTypes)){
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            $insertintodb = mysqli_query($con,"update listed_products set ref_img='$fileName' where product_id=$pr");
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
    echo json_encode($response);
}
