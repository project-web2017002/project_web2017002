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

    $row = 0;
    $total = 0;
    $getALL_products = mysqli_query($con, "Select * from listed_products");
    $num = mysqli_num_rows($getALL_products);
    if ($num <= 0) {
        ?>
        <div class="jumbotron">No products Found</div>
        <?php
    } else {
        ?>
        <div class="row">
            <div class="col-xs-12" style="text-align: center; text-transform: capitalize; color: #e40046;">
                <h3>Showing Results In: <strong><?php echo $categoryname . " > " . $city ?></strong></h3>
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
                                        <div class="col-lg-4 col-md-6 col-sm-12" style="float: left; height:450px;">
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
                                                         src="http://www.crouzet.com/wp-content/themes/innovistasensors_wp-theme_crouzet-portal/assets/algolia/img/no-image-available.jpg">
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
                ?>
            </div>
        </div>
        <div class="well"><?php echo "Total Products in " . $categoryname . " > " . $city . " category: " . $total ?></div>
        <?php
    }
?>