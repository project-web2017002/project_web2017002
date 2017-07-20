<?php
error_reporting(0);
require("essential/db/db.php");
require("essential/ses/session.php");
$files = glob("Category/categoryId/10007/*.csv");
$count = count($files);
$counter = 0;
$row = 0;
if($count == 0){
    ?>
    <div class="well">No products in this category</div>
    <?php
}else{
    ?>
    <div class="row">
        <div class="col-xs-12" style="text-align: center; text-transform: capitalize; color: #e40046;">
            <h3>Showing Results In: <strong>Mobiles & Tablets</strong></h3>
        </div>
    </div>
    <div class="container">
        <div class="row" style="text-align: -webkit-center; text-transform: capitalize">
            <?php
            foreach($files as $file) {
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
                                $row=0;
                                $getimage = mysqli_query($con,"SELECT * FROM `listed_products` WHERE `pro_description_file`='//localhost/optimus/".$file."'");
                                $fetch = mysqli_fetch_array($getimage);
                                $this_pro_id = $fetch[0];
                                $image = $fetch[3];
                                $field = implode(",", $data);
                                $row_arr = explode(",", $field);
                                $title = $row_arr[4];
                                $cost = $row_arr[7];
                                $use_r_name = $row_arr[12];
                                $da_te = $row_arr[18];
                                ?>
                                <div class="col-lg-4 col-md-6 col-sm-12" style="float: left; height:450px;">
                                    <div class="row" style="cursor: pointer" onclick="ViewProduct(<?php echo $this_pro_id; ?>);">
                                        <?php
                                        if($image != NULL){
                                            ?>
                                            <img class="img-responsive img-thumbnail img-rounded" src="<?php echo 'Category/images/'.$image; ?>">
                                            <?php
                                        }else {
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