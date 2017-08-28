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
    $que = "Select * from listed_products limit $start,6";
    $getALL_products = mysqli_query($con,$que);
    $getALL_products1 = mysqli_query($con,$que);
    $num = mysqli_num_rows($getALL_products);
    if ($num <= 0) {
        ?>
        <div class="container well" style="text-align: -webkit-center">
            <img src="include/media/images/nothing_found.png" class="img-responsive img-rounded">
        </div>
        <?php
    } else {
        $nextquery = mysqli_query($con,"select MAX(cost) from listed_products where pro_description_file like '%$categoryid%'");
        $vann = mysqli_fetch_array($nextquery);
        $ostc = $vann[0];
        ?>
        <div class="row">
            <div class="col-xs-12" style="text-align: center; text-transform: capitalize; color: #e40046;">
                <h5>Showing Results In: <strong><?php echo $categoryname . " under " . $city ." City" ?></strong></h5>
            </div>
        </div>
        <!--div class="row">
            <div class="col-md-4 col-sm-12"></div>
            <div class="col-md-4 col-sm-12"></div>
            <div class="col-md-4 col-sm-12 btn-pref" style="font-size: larger; padding: 25px;">
                Change View:&nbsp;
                <i class="fa fa-th-large btn btn-primary atn" style="cursor: pointer;" href="#test7" data-toggle="tab"></i>&nbsp;
                <i class="fa fa-th-list btn btn-default atn" style="cursor: pointer" href="#test8" data-toggle="tab"></i>
            </div>
        </div-->
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="srchitem" id="srchitem" placeholder="Name Contains"/>
                            <div class="btn btn-primary btn-block">Search</div>
                        </div>
                    </div><hr><br>
                    <div class="row">
                        <div class="col-sm-12">
                            <p>
                                <input type="hidden" id="pi" value="<?php echo $ostc; ?>"/>
                                <label for="price">Price range:</label>
                                <input type="text" id="price" style="border:0; color:#b9cd6d; font-weight:bold;"/>
                            </p>
                            <div id="slider"></div>
                        </div>
                        <script>
                            $(function() {
                                var mm = $('#pi').val();
                                $("#slider").slider({
                                    range:true,
                                    min: 0,
                                    max: mm,
                                    step: 500,
                                    values: [ 0, mm ],
                                    slide: function( event, ui ) {
                                        $("#price").val( "Rs." + ui.values[ 0 ] + " - Rs." + ui.values[ 1 ] );
                                    }
                                });
                                $("#price").val("Rs." + $("#slider").slider("values", 0) +
                                    " - Rs." + $("#slider").slider("values", 1));
                            });
                        </script>
                    </div><hr><br>
                </div>
            </div>
            <div class="col-md-9 col-sm-12">
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

                                                    $date1 = explode("-",$da_te);
                                                    if(stripos($date1[5],"pm") !== false) {
                                                        $date1[3] = $date1[3]+12;
                                                    }
                                                    $date1[5] = substr($date1[5],0,2);
                                                    $dval = $date1[0]."-".$date1[1]."-".$date1[2]." ".$date1[3].":".$date1[4].":".$date1[5];
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
                                                        <h6>posted : <?php echo time_elapsed_string($dval); ?></h6>
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
                    }else{
                        ?>
                        <div class="container well" style="text-align: -webkit-center">
                            <img src="include/media/images/nothing_found.png" class="img-responsive img-rounded">
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="well"><?php echo "Total Products in " . $categoryname . " > " . $city . " category: " . $total ?></div>
        <?php
    }
?>