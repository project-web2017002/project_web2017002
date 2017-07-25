<?php
error_reporting(0);
    require("essential/db/db.php");
    require("essential/ses/session.php");
    $files = glob("Category/categoryId/$cateory/*.csv");
    $count = count($files);
    $counter = 0;
    $row = 0;
    ?>
    <div class="row">
        <div class="col-xs-12" style="text-align: center; text-transform: capitalize; color: #e40046;">
            <h3>Showing Results In: <strong><?php echo $categoryname; ?></strong></h3>
        </div>
    </div>
    <?php
    if ($count == 0) { ?>
        <div class="well">No Ad posted in this category</div>
    <?php } else { ?>
        <div class="container">
            <div class="row" style="text-align: -webkit-center; text-transform: capitalize">
                <?php
                foreach ($files as $file) {
                    $counter++;
                    if ($counter == 6) {
                        break;
                    } else {
                        if (($handle = fopen($file, "r")) !== FALSE) {
                            while (($data = fgetcsv($handle, 4096, ",")) !== FALSE) {
                                $row++;
                                if ($row == 1) {
                                    continue;
                                } else {
                                    $row = 0;
                                    $getimage = mysqli_query($con, "SELECT * FROM `listed_products` WHERE `pro_description_file`='//localhost/optimus/" . $file . "'");
                                    $fetch = mysqli_fetch_array($getimage);
                                    $this_pro_id = $fetch[0];
                                    $image = $fetch[3];
                                    $field = implode(",", $data);
                                    $row_arr = explode(",", $field);
                                    $category = $row_arr[0];
                                    if ($category == 10001) {
                                        $title = $row_arr[4];
                                        $cost = $row_arr[3];
                                        $use_r_name = $row_arr[6];
                                        $da_te = $row_arr[14];
                                    } elseif ($category == 10002 || $category == 10012) {
                                        $title = "Home for " . $row_arr[2];
                                        $cost = $row_arr[7];
                                        $use_r_name = $row_arr[8];
                                        $da_te = $row_arr[17];
                                    } elseif ($category == 10003) {
                                        $title = $row_arr[2];
                                        $cost = $row_arr[6];
                                        $use_r_name = $row_arr[7];
                                        $da_te = $row_arr[14];
                                    } elseif ($category == 10004 || $category == 10005) {
                                        $title = "Car for " . $row_arr[2];
                                        $cost = $row_arr[4];
                                        $use_r_name = $row_arr[7];
                                        $da_te = $row_arr[14];
                                    } elseif ($category == 10006) {
                                        $title = $row_arr[4];
                                        $cost = $row_arr[6];
                                        $use_r_name = $row_arr[8];
                                        $da_te = $row_arr[14];
                                    } elseif ($category == 10007 || $category == 10016 || $category == 10009) {
                                        $title = $row_arr[4];
                                        $cost = $row_arr[7];
                                        $use_r_name = $row_arr[12];
                                        $da_te = $row_arr[18];
                                    } elseif ($category == 10008 || $category == 10010 || $category == 10011 || $category == 10013 || $category == 10017) {
                                        $title = $row_arr[8];
                                        $cost = $row_arr[11];
                                        $use_r_name = $row_arr[14];
                                        $da_te = $row_arr[20];
                                    }
                                    /*elseif ($category == 10014){
                                        $title = $row_arr[4];
                                        $cost = $row_arr[7];
                                        $use_r_name = $row_arr[12];
                                        $da_te = $row_arr[18];
                                    }*/
                                    /*elseif ($category == 10018){
                                        $title = $row_arr[4];
                                        $cost = $row_arr[7];
                                        $use_r_name = $row_arr[12];
                                        $da_te = $row_arr[18];
                                    }*/
                                    /*elseif ($category == 10019){
                                        $title = $row_arr[4];
                                        $cost = $row_arr[7];
                                        $use_r_name = $row_arr[12];
                                        $da_te = $row_arr[18];
                                    }*/
                                    elseif ($category == 10020) {
                                        $title = "Event Type " . $row_arr[2];
                                        $cost = $row_arr[6];
                                        $use_r_name = $row_arr[7];
                                        $da_te = $row_arr[13];
                                    } /*elseif ($category == 10021){
                                    $title = $row_arr[4];
                                    $cost = $row_arr[7];
                                    $use_r_name = $row_arr[12];
                                    $da_te = $row_arr[18];
                                }*/
                                    else {
                                        $title = '';
                                        $cost = '';
                                        $use_r_name = '';
                                        $da_te = '';
                                    }
                                    ?>
                                    <div class="col-lg-4 col-md-6 col-sm-12" style="float: left; height:450px;">
                                        <div class="row" style="cursor: pointer"
                                             onclick="ViewProduct(<?php echo $this_pro_id; ?>);">
                                            <?php if ($image != NULL) { ?>
                                                <img class="img-responsive img-thumbnail img-rounded"
                                                     src="<?php echo 'Category/images/' . $image; ?>">
                                            <?php } else { ?>
                                                <img class="img-responsive img-thumbnail img-rounded"
                                                     src="http://www.crouzet.com/wp-content/themes/innovistasensors_wp-theme_crouzet-portal/assets/algolia/img/no-image-available.jpg">
                                            <?php } ?>
                                        </div>
                                        <div class="row">
                                            <h3><?php echo $title ?></h3>
                                            <h6>posted on: <?php echo substr($da_te, 0, -11); ?></h6>
                                            <h6>posted by: <?php echo $use_r_name ?></h6>
                                            <h6>Cost: <i class="fa fa-rupee"></i><?php echo $cost ?></h6>
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
                ?>
            </div>
        </div>
        <?php
    }