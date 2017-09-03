<?php
// this will remove the featured product from website
error_reporting(0);
require("../../essential/db/db.php");
require("../../essential/session/session.php");
$num = $_POST['num'];
if($num == ''){
    echo "Didn't Get Product Info";
}else{
    $getfile = mysqli_query($con,"Select * from featpro where num=$num");
    $numrows = mysqli_num_rows($getfile);
    if($numrows <= 0){
        echo "No such product Available to delete";
    }else{
        $fetch = mysqli_fetch_array($getfile);
        $file = $fetch[2];
        $copy = copy("../../../Category/FeaturedProduct/".$file.".csv","../../BIN/FeaturedProducts/".$file.".csv"); // copy file to bin folder in admin
        if(!$copy){
            echo "Failed to perform Operation";
        }else{
            $delete = unlink("../../../Category/FeaturedProduct/".$file.".csv"); // remove file from featured product category
            if(!$delete){
                echo "Failed to perform Operation";
            }else{
                $querydelete = mysqli_query($con,"delete from featpro where num=$num"); // delete from db
                if(!$querydelete){
                    echo "Failed To delete";
                }else{
                    echo "Success";
                }
            }
        }
    }
}