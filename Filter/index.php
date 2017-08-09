<?php
error_reporting(0);
require("forward/OtherFiles/viewProduct/index.php");
    if ($categoryid == 10001) {
        $categoryname = "Services";
    } elseif ($categoryid == 10002 || $categoryid == 10012) {
        $categoryname = "Homes & Commercial Real Estate";
    } elseif ($categoryid == 10003) {
        $categoryname = "Jobs";
    } elseif ($categoryid == 10004) {
        $categoryname = "Cars";
    } elseif ($categoryid == 10005) {
        $categoryname = "Bikes";
    } elseif ($categoryid == 10006) {
        $categoryname = "Education";
    } elseif ($categoryid == 10007 || $categoryid == 10016) {
        $categoryname = "Mobiles & Tablets";
    } elseif ($categoryid == 10008 || $categoryid == 10010 || $categoryid == 10011 || $categoryid == 10013 || $categoryid == 10017) {
        $categoryname = "Home Essentials";
    } elseif ($categoryid == 10009) {
        $categoryname = "Electronics & Appliances";
    } elseif ($categoryid == 10014) {
        $categoryname = "Pets & Pet Care";
    } elseif ($categoryid == 10018) {
        $categoryname = "Entertainment";
    } elseif ($categoryid == 10019) {
        $categoryname = "Community";
    } elseif ($categoryid == 10020) {
        $categoryname = "Events";
    } elseif ($categoryid == 10021) {
        $categoryname = "Matrimonial";
    } else {
        echo "<script>window.location.assign('/optimus/');</script>";
    }

    if($city == ''){
        echo "<script>window.location.assign('/optimus/');</script>";
    }

$page = $_GET['page'];
if($page == '' || $page == 1){
    $start = 0;
}else{
    $start = ($page*6)-6;
}

    $row = 0;
    $total = 0;
    $getALL_products = mysqli_query($con, "Select * from listed_products limit $start,6");
    $num = mysqli_num_rows($getALL_products);
    if ($num <= 0) {
        ?>
        <div class="container well" style="text-align: -webkit-center">
            <img src="include/media/images/nothing_found.png" class="img-responsive img-rounded">
        </div>
        <?php
    } else {
        ?>
        <div class="row">
            <div class="col-xs-12" style="text-align: center; text-transform: capitalize; color: #e40046;">
                <h5>Showing Results In: <strong><?php echo $categoryname . " under " . $city ." City" ?></strong></h5>
            </div>
        </div>
        <div class="container">
            <div class="row" style="text-align: -webkit-center; text-transform: capitalize">
                <?php
                while ($getdata = mysqli_fetch_array($getALL_products)) {
                    $file = substr($getdata[2], 20);
                    if (($handle = fopen($file, "r")) !== FALSE) {
                        while (($data = fgetcsv($handle, 4096, ",")) !== FALSE) {
                            $row++;
                            if ($row == 1) {
                                continue;
                            } else {
                                $row = 0;
                                $this_pro_id = $getdata[0];
                                $image = $getdata[3];
                                $field = implode(",", $data);
                                $row_arr = explode(",", $field);
                                for ($i = 0; $i < sizeof($row_arr); $i++) {
                                    $getcity = $row_arr[$i];
                                    if ($getcity != $city) {
                                        continue;
                                    } else {
                                        $categoryofad = $row_arr[0];
                                        if ($categoryofad != $categoryid) {
                                            continue;
                                        } else {
                                            $total++;
                                            if ($categoryofad == 10001) {
                                                $cost = $row_arr[3];
                                                $title = $row_arr[4];
                                                $use_r_name = $row_arr[6];
                                                $da_te = $row_arr[14];
                                            } elseif ($categoryofad == 10002 || $categoryofad == 10012) {
                                                $title = $row_arr[2];
                                                $cost = $row_arr[7];
                                                $use_r_name = $row_arr[8];
                                                $da_te = $row_arr[17];
                                            } elseif ($categoryofad == 10003) {
                                                $title = $row_arr[2];
                                                $cost = $row_arr[6];
                                                $use_r_name = $row_arr[7];
                                                $da_te = $row_arr[15];
                                            } elseif ($categoryofad == 10004) {
                                                $title = $row_arr[3];
                                                $cost = $row_arr[4];
                                                $use_r_name = $row_arr[7];
                                                $da_te = $row_arr[14];
                                            } elseif ($categoryofad == 10005) {
                                                $title = $row_arr[3];
                                                $cost = $row_arr[4];
                                                $use_r_name = $row_arr[4];
                                                $da_te = $row_arr[14];
                                            } elseif ($categoryofad == 10006) {
                                                $title = $row_arr[4];
                                                $cost = $row_arr[6];
                                                $use_r_name = $row_arr[8];
                                                $da_te = $row_arr[14];
                                            } elseif ($categoryofad == 10007 || $categoryofad == 10016) {
                                                $title = $row_arr[4];
                                                $cost = $row_arr[7];
                                                $use_r_name = $row_arr[12];
                                                $da_te = $row_arr[18];
                                            } elseif ($categoryofad == 10008 || $categoryofad == 10010 || $categoryofad == 10011 || $categoryofad == 10013 || $categoryofad == 10017) {
                                                $title = $row_arr[8];
                                                $cost = $row_arr[11];
                                                $use_r_name = $row_arr[14];
                                                $da_te = $row_arr[20];
                                            } elseif ($categoryofad == 10009) {
                                                $title = $row_arr[4];
                                                $cost = $row_arr[7];
                                                $use_r_name = $row_arr[12];
                                                $da_te = $row_arr[18];
                                            } elseif ($categoryofad == 10020) {
                                                $title = $row_arr[2];
                                                $cost = $row_arr[6];
                                                $use_r_name = $row_arr[7];
                                                $da_te = $row_arr[13];
                                            } else {
                                                continue;
                                            }
                                        }
                                        ?>
                                        <div class="col-lg-3 col-md-6 col-sm-12" style="float: left; height:450px; padding: 10px" id="tes4">
                                            <div class="row" style="cursor: pointer"
                                                 onclick="ViewProduct(<?php echo $this_pro_id; ?>);">
                                                <?php
                                                if ($image != NULL) {
                                                    ?>
                                                    <img class="img-responsive img-thumbnail img-rounded"
                                                         src="<?php echo 'Category/images/' . $image; ?>">
                                                    <?php
                                                } else {
                                                    ?>
                                                    <img class="img-responsive img-thumbnail img-rounded"
                                                         src="include/media/images/no-image-available.jpg">
                                                    <?php
                                                }
                                                ?>
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
                            }
                        }
                    }
                }
                $pages = ceil($total/6);
                ?>
            </div>
        </div>
        <?php
        if($total > 0) {
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
        } else {
            ?>
            <div class="container well" style="text-align: -webkit-center">
                <img src="include/media/images/nothing_found.png" class="img-responsive img-rounded">
            </div>
            <?php
        }
            ?>
        <div class="well"><?php echo "Total Products in " . $categoryname . " > " . $city . " category: " . $total ?></div>
        <?php
    }
?>