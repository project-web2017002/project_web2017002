<?php
error_reporting(0);
    require("essential/db/db.php");
    require("essential/ses/session.php");
    $page = $_GET['page'];
    if($page == '' || $page == 1){
        $start = 0;
    }else{
        $start = ($page*6)-6;
    }
    //$files = glob("Category/categoryId/$cateory/*.csv");
    $files = mysqli_query($con,"select * from listed_products where pro_description_file like '%$cateory%' limit $start,6");
    $count = mysqli_num_rows($files);
    $row = 0;
    ?>
    <div class="row">
        <div class="col-xs-12" style="text-align: center; text-transform: capitalize; color: #e40046;">
            <h3>Showing Results In: <strong><?php echo $categoryname; ?></strong></h3>
        </div>
    </div>
    <?php
    if ($count == 0) { ?>
        <div class="container well" style="text-align: -webkit-center">
            <img src="include/media/images/nothing_found.png" class="img-responsive img-rounded">
        </div>
    <?php } else {
        $files2 = mysqli_query($con,"select * from listed_products where pro_description_file like '%$cateory%'");
        $count2 = mysqli_num_rows($files2);
        $pages = ceil($count2/6);
        if($count2 > 0) {
            ?>
            <div class="container row" style="text-align: center">
                <ul class="pagination pagination-lg">
                    <?php
                    if ($pages <= 10) {
                        for ($x = 1; $x <= $pages; $x++) {
                            if ($x == $page || $page == '') {
                                ?>
                                <li class="active" onclick="changepage(<?php echo $x ?>)"><a
                                            href="#"><?php echo $x ?></a></li>
                                <?php
                            } else {
                                ?>
                                <li onclick="changepage(<?php echo $x ?>)"><a href="#"><?php echo $x ?></a></li>
                                <?php
                            }
                        }
                    } else {
                        if ($pages > 10) {
                            for ($x = $page; $x <= $page + 9; $x++) {
                                if ($x == $page || $page == '') {
                                    ?>
                                    <li class="active" onclick="changepage(<?php echo $x ?>)"><a
                                                href="#"><?php echo $x ?></a></li>
                                    <?php
                                } else {
                                    ?>
                                    <li onclick="changepage(<?php echo $x ?>)"><a href="#"><?php echo $x ?></a></li>
                                    <?php
                                }
                            }

                        }
                    }
                    ?>
                </ul>
            </div>
            <?php
        }
            ?>
        <div class="container">
            <div class="row" style="text-align: -webkit-center; text-transform: capitalize">
                <?php
                while($fetchfilenames = mysqli_fetch_array($files)){
                    $file = substr($fetchfilenames[2],20);
                        if (($handle = fopen($file, "r")) !== FALSE) {
                            while (($data = fgetcsv($handle, 4096, ",")) !== FALSE) {
                                $row++;
                                if ($row == 1) {
                                    continue;
                                } else {
                                    $row = 0;
                                    //$getimage = mysqli_query($con, "SELECT * FROM `listed_products` WHERE `pro_description_file`='//localhost/optimus/" . $file . "'");
                                    //$fetch = mysqli_fetch_array($getimage);
                                    $this_pro_id = $fetchfilenames[0];
                                    $image = $fetchfilenames[3];
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
                                                     src="include/media/images/no-image-available.jpg">
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
                ?>
            </div>
        </div>
        <?php
        if($count2 > 0) {
            ?>
            <div class="container row" style="text-align: center">
                <ul class="pagination pagination-lg">
                    <?php
                    if ($pages <= 10) {
                        for ($x = 1; $x <= $pages; $x++) {
                            if ($x == $page || $page == '') {
                                ?>
                                <li class="active" onclick="changepage(<?php echo $x ?>)"><a
                                            href="#"><?php echo $x ?></a></li>
                                <?php
                            } else {
                                ?>
                                <li onclick="changepage(<?php echo $x ?>)"><a href="#"><?php echo $x ?></a></li>
                                <?php
                            }
                        }
                    } else {
                        if ($pages > 10) {
                            for ($x = $page; $x <= $page + 9; $x++) {
                                if ($x == $page || $page == '') {
                                    ?>
                                    <li class="active" onclick="changepage(<?php echo $x ?>)"><a
                                                href="#"><?php echo $x ?></a></li>
                                    <?php
                                } else {
                                    ?>
                                    <li onclick="changepage(<?php echo $x ?>)"><a href="#"><?php echo $x ?></a></li>
                                    <?php
                                }
                            }

                        }
                    }
                    ?>
                </ul>
            </div>
            <?php
        }else{
            ?>
            <div class="container well" style="text-align: -webkit-center">
                <img src="include/media/images/nothing_found.png" class="img-responsive img-rounded">
            </div>
<?php
        }
    }
    ?>