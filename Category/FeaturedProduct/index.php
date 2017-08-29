<?php
//featured product file
//maximum eight products to be displayed in featured product

error_reporting(0);
    require("essential/db/db.php");
    require("forward/OtherFiles/viewProduct/index.php");
    $files = glob("Category/FeaturedProduct/*.csv"); // getting all files from featured product directory
    $count = count($files);
    $row = 0;
    $itm = 0;
    $itm2 = 0;
    if ($count == 0) {
        ?>
        <div style="text-align: center">No Featured Product</div>
        <?php
    } else {
        ?>
        <!--Featured product carousel-->
<div class="carousel-inner">
        <div class="item active">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row" style="text-align: -webkit-center; text-transform: capitalize">
                        <?php
                        //displaying first four files
                        foreach ($files as $file) {
                            $itm++;
                            if($itm > 4){
                                break;
                            } else {
                                $filename_dummy = substr($file, 25);
                                $filename = substr($filename_dummy, 0, -4);
                                $check = mysqli_query($con, "select * from featpro where file='$filename'"); //verifying file name with db
                                $numrows = mysqli_num_rows($check);
                                if ($check == 0) {
                                    continue; // if file not found in db, skip it
                                } else {
                                    if (($handle = fopen($file, "r")) !== FALSE) { //opening file
                                        while (($data = fgetcsv($handle, 4096, ",")) !== FALSE) {
                                            $row++;
                                            if ($row == 1) {
                                                continue; // skips first row
                                            } else {
                                                $row = 0; //reset row to 0 for next file
                                                $field = implode(",", $data);
                                                $row_arr = explode(",", $field);
                                                $category = $row_arr[0]; // getting category id from file's first field
                                                // verifying file from listed products on website
                                                $get_this_pro_ID = mysqli_query($con, "select * from listed_products where pro_description_file='//localhost/optimus/Category/categoryId/$category/$filename.csv'");
                                                $fetchthis = mysqli_fetch_array($get_this_pro_ID);
                                                $this_pro_id = $fetchthis[0]; // product id from db
                                                $us_er_id = $row_arr[1]; // user id from file
                                                $image = $fetchthis[3]; // image from db
                                                // getting data from file according to files
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
                                                    $cost = $row_arr[7];
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
                                                <!-- displaying product-->
                                                <div class="col-lg-3 col-md-6 col-sm-12" id="test">
                                                    <div class="row" style="cursor: pointer"
                                                         onclick="ViewProduct(<?php echo $this_pro_id; ?>);">
                                                        <?php
                                                        if ($image == '') {
                                                            ?>
                                                            <img class="img-responsive img-rounded"
                                                                 src="include/media/images/no-image-available.jpg"
                                                                 style="max-height: 250px">
                                                            <span class="price"><i class="fa fa-rupee"></i><?php echo " ".$cost ?></span>
                                                            <?php
                                                        } else {
                                                            ?>
                                                            <img class="img-responsive img-rounded"
                                                                 src="Category/images/<?php echo $image ?>"
                                                                 style="max-height: 250px">
                                                            <span class="price"><i class="fa fa-rupee"></i><?php echo " ".$cost ?></span>
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                                    <div class="row">
                                                        <h3><?php echo $title ?></h3>
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
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row" style="text-align: -webkit-center; text-transform: capitalize">
                        <?php
                        // showing results for 5 to 8 products or second row
                        // else details are same as first row
                        foreach ($files as $file) {
                            $itm2++;
                            if($itm2 < 5){
                                continue; // for first 4 products skip
                            } elseif ($itm2 > 8){
                                break; // after eight products break;
                            } else {
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
                                                $row = 0;
                                                $field = implode(",", $data);
                                                $row_arr = explode(",", $field);
                                                $category = $row_arr[0];
                                                $get_this_pro_ID = mysqli_query($con, "select * from listed_products where pro_description_file='//localhost/optimus/Category/categoryId/$category/$filename.csv'");
                                                $fetchthis = mysqli_fetch_array($get_this_pro_ID);
                                                $this_pro_id = $fetchthis[0];
                                                $us_er_id = $row_arr[1];
                                                $image = $fetchthis[3];
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
                                                    $cost = $row_arr[7];
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
                                                <!--Displaying product-->
                                                <div class="col-lg-3 col-md-6 col-sm-12" id="test">
                                                    <div class="row" style="cursor: pointer"
                                                         onclick="ViewProduct(<?php echo $this_pro_id; ?>);">
                                                        <?php
                                                        if ($image == '') {
                                                            ?>
                                                            <img class="img-responsive img-rounded"
                                                                 src="include/media/images/no-image-available.jpg"
                                                                 style="max-height: 250px"/>
                                                            <span class="price"><i class="fa fa-rupee"></i><?php echo " ".$cost ?></span>
                                                            <?php
                                                        } else {
                                                            ?>
                                                            <img class="img-responsive img-rounded"
                                                                 src="Category/images/<?php echo $image ?>"
                                                                 style="max-height: 250px"/>
                                                            <span class="price"><i class="fa fa-rupee"></i><?php echo " ".$cost ?></span>
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                                    <div class="row">
                                                        <h3><?php echo $title ?></h3>
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
                        ?>
                    </div>
                </div>
            </div>
        </div>
</div>
        <!--Featured product carousel ends-->
        <?php
    }
?>
