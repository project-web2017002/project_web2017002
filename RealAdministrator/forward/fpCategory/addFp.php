<?php
error_reporting(0);
require("../../essential/db/db.php");
require("../../essential/session/session.php");
$category = $_GET['categoryID'];
if($category == ''){
    echo "<script>window.location.assign('../../');</script>";
}else{
    if($aid == ''){
        echo "<script>window.location.assign('../../');</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Featured Product</title>
    <?php
    require("../../include/imp/Allcss.php");
    require("../../include/imp/topjs.php");
    ?>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <ul class="nav navbar-nav">
            <li class="active"><a id="goback">Go Back</a></li>
        </ul>
    </div>
</nav>
<div id="message" style="text-align: center; font-size: large" class="text-success"></div>
    <div class="container well">
        <div class="row">
            <table class="table">
                <tr>
                    <th>Date</th><th>Time</th><th>Title</th><th>User Id</th><th>Action</th>
                </tr>
            <?php
            $files = glob("../../../Category/categoryID/".$category."/*.csv");
            $count = count($files);
            if($count <= 0){
                echo "<script>alert('No products in this Category to Add into Featured Products');window.location.assign('../../');</script>";
            }else{
                foreach ($files as $file){
                    if(($handle = fopen($file,"r")) !== false){
                        while (($data = fgetcsv($handle, 4096, ",")) !== FALSE) {
                            $row++;
                            if ($row == 1) {
                                continue;
                            } else {
                                $field = implode(",", $data);
                                $row_arr = explode(",",$field);
                                $us_er_id = $row_arr[1];
                                if($category == 10001){
                                    $title = $row_arr[4];
                                    $da_te_ti_me = $row_arr[13];
                                    $adver_type = $row_arr[12];
                                    $date=substr($da_te_ti_me,0,-11);
                                    $time = substr($da_te_ti_me,11);
                                }
                                elseif ($category == 10002 || $category == 10012){
                                    $title = $row_arr[2];
                                    $da_te_ti_me = $row_arr[16];
                                    $adver_type = $row_arr[15];
                                    $date=substr($da_te_ti_me,0,-11);
                                    $time = substr($da_te_ti_me,11);
                                }
                                elseif ($category == 10003){
                                    $title = $row_arr[2];
                                    $da_te_ti_me = $row_arr[14];
                                    $adver_type = $row_arr[13];
                                    $date=substr($da_te_ti_me,0,-11);
                                    $time = substr($da_te_ti_me,11);
                                }
                                elseif ($category == 10004){
                                    $title = $row_arr[3];
                                    $da_te_ti_me = $row_arr[13];
                                    $adver_type = $row_arr[12];
                                    $date=substr($da_te_ti_me,0,-11);
                                    $time = substr($da_te_ti_me,11);
                                }
                                elseif ($category == 10005){
                                    $title = $row_arr[3];
                                    $da_te_ti_me = $row_arr[13];
                                    $adver_type = $row_arr[12];
                                    $date=substr($da_te_ti_me,0,-11);
                                    $time = substr($da_te_ti_me,11);
                                }
                                elseif ($category == 10006){
                                    $title = $row_arr[4];
                                    $da_te_ti_me = $row_arr[14];
                                    $adver_type = $row_arr[13];
                                    $date=substr($da_te_ti_me,0,-11);
                                    $time = substr($da_te_ti_me,11);
                                }
                                elseif ($category == 10007 || $category == 10016){
                                    $title = $row_arr[4];
                                    $da_te_ti_me = $row_arr[17];
                                    $adver_type = $row_arr[16];
                                    $date=substr($da_te_ti_me,0,-11);
                                    $time = substr($da_te_ti_me,11);
                                }
                                elseif ($category == 10008 || $category == 10017 || $category == 10010 || $category == 10011 || $category == 10013){
                                    $title = $row_arr[8];
                                    $da_te_ti_me = $row_arr[19];
                                    $adver_type = $row_arr[18];
                                    $date=substr($da_te_ti_me,0,-11);
                                    $time = substr($da_te_ti_me,11);
                                }
                                elseif ($category == 10009){
                                    $title = $row_arr[4];
                                    $da_te_ti_me = $row_arr[17];
                                    $adver_type = $row_arr[16];
                                    $date=substr($da_te_ti_me,0,-11);
                                    $time = substr($da_te_ti_me,11);
                                }
                                else{
                                    echo "<script>alert('Category Products are not available for Featuring');window.location.assign('../../');</script>";
                                }
                                ?>
                                <tr>
                                    <td><?php echo $date ?></td>
                                    <td><?php echo $time ?></td>
                                    <td><?php echo $title ?></td>
                                    <td><?php echo $us_er_id ?></td>
                                    <?php
                                    if($adver_type != 'Free') {
                                        ?>
                                        <td id="<?php echo $da_te_ti_me . "-" . $us_er_id ?>" class="text-success" style="cursor: pointer;" onclick="addNow(this.id,'<?php echo $category ?>');">Add this To featured</td>
                                        <?php
                                    }
                                    ?>
                                </tr>
            <?php

                            }
                        }
                    }
                }
            }
            ?>
            </table>
        </div>
    </div>

<?php
require("../../include/imp/bottomjs.php");
?>
</body>
</html>