<?php
error_reporting(0);
    require("essential/db/db.php");
    require("essential/ses/session.php");

    // paging
    $page = $_GET['page'];
    if($page == '' || $page == 1){
        $start = 0;
    }else{
        $start = ($page*6)-6;
    }
    //query to select all products with limit
    $query = "select * from listed_products where pro_description_file like '%$cateory%' limit $start,6";
    $files = mysqli_query($con,$query);
    $files2 = mysqli_query($con,$query);
    $count = mysqli_num_rows($files);
    $row = 0;
    ?>
    <div class="row">
        <div class="col-xs-12" style="text-align: center; text-transform: capitalize; color: #e40046;">
            <h3>Showing Results In: <strong><?php echo $categoryname; ?></strong></h3>
        </div>
    </div>

    <?php
    if ($count <= 0) { // if no product found?>
        <div class="container well" style="text-align: -webkit-center">
            <img src="include/media/images/nothing_found.png" class="img-responsive img-rounded">
        </div>
    <?php } else {
        $files2 = mysqli_query($con,"select * from listed_products where pro_description_file like '%$cateory%'"); //get filename
        $count2 = mysqli_num_rows($files2);
        $pages = ceil($count2/6); // count page numbers
        if($count2 > 0) {
            $nextquery = mysqli_query($con,"select MAX(cost) from listed_products where pro_description_file like '%$cateory%'"); // maximum cost of that products category
            $vann = mysqli_fetch_array($nextquery);
            $ostc = $vann[0];
        }
        ?>
        <div class="row">
            <!--Side filter begins-->
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
            <!--Side filter ends-->
            <!--Product list begins-->
            <div class="col-md-9 col-sm-12" id="_funcid">
                <div class="container">
                    <div class="row" style="text-align: -webkit-center; text-transform: capitalize">
                        <?php
                        while($fetchfilenames = mysqli_fetch_array($files)) { // getting each file
                            $file = substr($fetchfilenames[2], 20); // substituting file name fetched from db
                            if (($handle = fopen($file, "r")) !== FALSE) {
                                while (($data = fgetcsv($handle, 4096, ",")) !== FALSE) { // getting data
                                    $row++; // increments row for next row of file
                                    if ($row == 1) {
                                        continue; // for first row we skip
                                    } else {
                                        $row = 0; // setting row to 0 for next file
                                        $this_pro_id = $fetchfilenames[0]; // fetching product id from db
                                        $image = $fetchfilenames[3]; // fetching product image name from db
                                        $field = implode(",", $data);
                                        $row_arr = explode(",", $field); // storing file data in row
                                        $category = $row_arr[0]; // verify ad file category

                                        //getting file details needed
                                        if ($category == 10001) {
                                            $title = $row_arr[4]; $cost = $row_arr[3]; $use_r_name = $row_arr[6]; $da_te = $row_arr[14];
                                        } elseif ($category == 10002 || $category == 10012) {
                                            $title = $row_arr[3]." for " . $row_arr[2]; $cost = $row_arr[7]; $use_r_name = $row_arr[8]; $da_te = $row_arr[17];
                                        } elseif ($category == 10003) {
                                            $title = $row_arr[2]; $cost = $row_arr[6]; $use_r_name = $row_arr[7]; $da_te = $row_arr[14];
                                        } elseif ($category == 10004 || $category == 10005) {
                                            $title = "Car for " . $row_arr[2]; $cost = $row_arr[4]; $use_r_name = $row_arr[7]; $da_te = $row_arr[14];
                                        } elseif ($category == 10006) {
                                            $title = $row_arr[4]; $cost = $row_arr[6]; $use_r_name = $row_arr[8]; $da_te = $row_arr[14];
                                        } elseif ($category == 10007 || $category == 10016 || $category == 10009) {
                                            $title = $row_arr[4]; $cost = $row_arr[7]; $use_r_name = $row_arr[12]; $da_te = $row_arr[18];
                                        } elseif ($category == 10008 || $category == 10010 || $category == 10011 || $category == 10013 || $category == 10017) {
                                            $title = $row_arr[8]; $cost = $row_arr[11]; $use_r_name = $row_arr[14]; $da_te = $row_arr[20];
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
                                            $title = "Event Type " . $row_arr[2]; $cost = $row_arr[6]; $use_r_name = $row_arr[7]; $da_te = $row_arr[13];
                                        }
                                        /*elseif ($category == 10021){
                                            $title = $row_arr[4];
                                            $cost = $row_arr[7];
                                            $use_r_name = $row_arr[12];
                                            $da_te = $row_arr[18];
                                        }*/
                                        else {
                                            $title = ''; $cost = ''; $use_r_name = ''; $da_te = '';
                                        }
                                        // changing date format
                                        $date1 = explode("-",$da_te);
                                        if(stripos($date1[5],"pm") !== false) {
                                            $date1[3] = $date1[3]+12;
                                        }
                                        $date1[5] = substr($date1[5],0,2);
                                        $dval = $date1[0]."-".$date1[1]."-".$date1[2]." ".$date1[3].":".$date1[4].":".$date1[5]; // date format changed
                                        ?>
                                        <!--displaying product-->
                                        <div class="col-lg-4 col-md-6 col-sm-12" id="tes2">
                                            <div class="row" style="cursor: pointer" onclick="ViewProduct(<?php echo $this_pro_id; ?>);">
                                                <?php if ($image != NULL) { ?>
                                                    <img style="max-height: 250px;" class="img-responsive img-rounded"
                                                         src="<?php echo 'Category/images/' . $image; ?>"/>
                                                <?php } else { ?>
                                                    <img style="max-height: 250px;" class="img-responsive img-rounded"
                                                         src="include/media/images/no-image-available.jpg"/>
                                                <?php } ?>
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
                                fclose($handle); //closing opened file
                            } else {
                                echo "Could not open file: " . $file;
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <!--Product list ends-->
        </div>
        <!--PAGINATION STARTS-->
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
            <!--PAGINATION STARTS-->
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
