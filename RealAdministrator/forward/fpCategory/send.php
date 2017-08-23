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
    $prid = $_GET['secret'];
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
                $sel_pr_id = mysqli_query($con,"select * from listed_products where pro_description_file='$prid'");
                if($sel_pr_id) {
                    $fet_id = mysqli_fetch_array($sel_pr_id);
                    $id = $fet_id[0];
                    $insert = mysqli_query($con, "insert into featpro (byAdmin,file,prod_id) values ($aid, '$filename',$id)");
                    if ($insert) {
                        copy("../../../Category/categoryID/" . $category . "/" . $filename . ".csv", "../../../Category/FeaturedProduct/" . $filename . ".csv");
                        $response = "Product Featured Successfully";
                        echo $response;
                    } else {
                        $response = "Problem While Featuring Product";
                        echo $response;
                    }
                }else{
                    $response = "Product not available on Website";
                    echo $response;
                }
            }
        }
    }
}