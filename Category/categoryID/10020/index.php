<?php
$files = glob("Category/categoryId/10020/*.csv");
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
            <h3>Showing Results In: <strong>Events</strong></h3>
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
                                $field = implode(",", $data);
                                $row_arr = explode(",", $field);
                                $title = $row_arr[2];
                                $cost = $row_arr[6];
                                $use_r_name = $row_arr[7];
                                $da_te = $row_arr[13];
                                ?>
                                <div class="col-lg-4 col-md-6 col-sm-12" style="float: left; height:450px;">
                                    <div class="row">
                                        <img class="img-responsive img-thumbnail img-rounded"
                                             src="http://www.crouzet.com/wp-content/themes/innovistasensors_wp-theme_crouzet-portal/assets/algolia/img/no-image-available.jpg">
                                    </div>
                                    <div class="row">
                                        <h3><?php echo "Event Type: ".$title ?></h3>
                                        <h6>posted on: <?php echo substr($da_te, 0, -11); ?></h6>
                                        <h6>posted by: <?php echo $use_r_name ?></h6>
                                        <h6>Cost: <i class="fa fa-rupee"></i><?php echo $cost ?></h6>
                                    </div>
                                </div>

                                <?php
                            }
                        }
                        echo "<br>";
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