<?php
error_reporting(0);
require("../../essential/db/db.php");
require("../../essential/session/session.php");
if($aid == ''){
    echo "<script>window.location.assign('../../')</script>";
}
else{
    $filename = $_GET['file'];
    $category = $_GET['categoryId'];
    if($filename != ''){
        $file = glob("../../../Category/categoryID/".$category."/".$filename.".csv");
        $count = count($file);
        if($count <= 0){
            $response = "Product Doesn't Exist";
            echo $response;
        }else{
            $query = mysqli_query($con,"select * from featpro where file='$filename'");
            $numrows = mysqli_num_rows($query);
            if($numrows > 0){
                $response ="Product is already Featured";
                echo $response;
            }else{
                $insert = mysqli_query($con,"insert into featpro (byAdmin,file) values ($aid, '$filename')");
                if($insert){
                    copy("../../../Category/categoryID/".$category."/".$filename.".csv","../../../Category/FeaturedProduct/".$filename.".csv");
                    $response = "Product Featured Successfully";
                    echo $response;
                }else{
                    $response = "Problem While Featuring Product";
                    echo $response;
                }
            }
        }
    }
}