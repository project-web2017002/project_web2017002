<?php
error_reporting(0);
require("essential/db/db.php");

$files = glob("Category/FeaturedProduct/*.csv");
$count = count($files);
$row = 0;
    if($count == 0){
        ?>
        <div style="text-align: center">No Featured Product</div>
        <?php
    }else{
        foreach($files as $file) {
            $filename_dummy = substr($file, 25);
            $filename = substr($filename_dummy, 0, -4);
            $check = mysqli_query($con, "select * from featpro where file='$filename'");
            $numrows = mysqli_num_rows($check);
            if ($check == 0) {
                continue;
            } else {
            if (($handle = fopen($file, "r")) !== FALSE) {
                while (($data = fgetcsv($handle, 4096, ",")) !== FALSE) {
                    $row++;
                    if ($row == 1) {
                        continue;
                    } else {
                        $field = implode(",", $data);
                        $row_arr = explode(",", $field);
                        $category = $row_arr[0];
                        $us_er_id = $row_arr[1];
                        if ($category == 10001) {
                            $title = $row_arr[4];
                            $cost = $row_arr[3];
                        } elseif ($category == 10002 || $category == 10012) {
                            $title = $row_arr[2];
                            $cost = $row_arr[7];
                        } elseif ($category == 10003) {
                            $title = $row_arr[2];
                            $cost = $row_arr[6];
                        } elseif ($category == 10004) {
                            $title = $row_arr[3];
                            $cost = $row_arr[4];
                        } elseif ($category == 10005) {
                            $title = $row_arr[3];
                            $cost = $row_arr[4];
                        } elseif ($category == 10006) {
                            $title = $row_arr[4];
                            $cost = $row_arr[6];
                        } elseif ($category == 10007 || $category == 10016) {
                            $title = $row_arr[4];
                            $cost = $row_arr[6];
                        } elseif ($category == 10008 || $category == 10017 || $category == 10010 || $category == 10011 || $category == 10013) {
                            $title = $row_arr[8];
                            $cost = $row_arr[10];
                        } elseif ($category == 10009) {
                            $title = $row_arr[4];
                            $cost = $row_arr[6];
                        } else {
                            $title = "Dummy";
                            $cost = 0000;
                        }
                        ?>
                        <div>
                            <div class="row" style="text-align: -webkit-center; text-transform: capitalize">
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="row">
                                        <img class="img-responsive img-thumbnail img-rounded"
                                             src="http://www.crouzet.com/wp-content/themes/innovistasensors_wp-theme_crouzet-portal/assets/algolia/img/no-image-available.jpg">
                                    </div>
                                    <div class="row">
                                        <h3><?php echo $title ?></h3>
                                        <h6>Cost: <i class="fa fa-rupee"></i><?php echo $cost ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                fclose($handle);
            } else {
                echo "Could not open file: " . $file;
            }
        }
        }
    }
