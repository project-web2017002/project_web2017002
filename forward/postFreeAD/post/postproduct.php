<?php

require("../../../essential/db/db.php");
require("../../../essential/ses/session.php");
$posted_data = $_POST;
$category_id = $_POST['categoryid'];

switch($category_id){
    case 10001: one(); break;
    case 10002: two(); break;
    case 10012: two(); break;
    case 10003: three(); break;
    case 10004: four(); break;
    case 10005: five(); break;
    case 10006: six(); break;
    case 10007: seven(); break;
    case 10016: seven(); break;
    case 10008: eight(); break;
    case 10010: eight(); break;
    case 10011: eight(); break;
    case 10013: eight(); break;
    case 10017: eight(); break;
    case 10009: nine(); break;
    case 10014: ten(); break;
    case 10018: eleven(); break;
    case 10019: twelve(); break;
    case 10020: thirteen(); break;
    case 10021: fourteen(); break;
    default: exit();
}

function one(){
    $con = $GLOBALS['con'];
    $posted_data = $GLOBALS['posted_data'];
    $category_id = $GLOBALS['category_id'];
    $user_id = $posted_data['userid'];
    $service_type = $posted_data['servicetype'];
    $service_fees = $posted_data['servicefees'];
    $service_name = $posted_data['servicename'];
    $city = $posted_data['city'];
    $user_name = $posted_data['username'];
    $user_email = $posted_data['useremail'];
    $user_contact = $posted_data['usercontact'];
    $user_type = $posted_data['usertype'];
    $company_name = $posted_data['companyname'];
    $company_email = $posted_data['companyemail'];
    $company_contact = $posted_data['companycontact'];
    $advt_type = $posted_data['advtype'];
    $date = date("Y-m-d-h-i-sa");
    $name = $date."-".$user_id;

    $path = "../../../Category/categoryID/10001/";
    mkdir($path,0,true);
    $filename = $name.".csv";

    $fileopen = fopen($path."/".$filename,"x");
    $fileheadings = array("Category ID","User ID","Service Type","Service Fees","Service Name","City","User Name","User Email","User Contact",
    "User Type","Company Name","Company Email","Company Contact","Advertisement Type","Date");
    fputcsv($fileopen,$fileheadings);
    fclose($fileopen);

    $fileopen2=fopen($path."/".$filename,"a");
    $fileheadings2 = array($category_id,$user_id,$service_type,$service_fees,$service_name,$city,$user_name,$user_email,$user_contact,
        $user_type,$company_name,$company_email,$company_contact,$advt_type,$date);
    fputcsv($fileopen2,$fileheadings2);
    fclose($fileopen2);

    $url = "//localhost/optimus/Category/categoryId/10001/".$filename;

    $insertQuery = mysqli_query($con,"insert into listed_products (product_title,pro_description_file) values 
('$service_name','$url')")or die("Error in uploading");
    if($insertQuery){
        $getprid = mysqli_query($con,"select * from listed_products where pro_description_file='$url'");
        $fetch = mysqli_fetch_array($getprid);
        $pr_id = $fetch[0];
        $mailed = sendmail($user_email,"opadmin1@gmail.com");
        if($mailed == 'send')
            echo $pr_id;
        else
            echo "Post Posted";
    }else{
        echo "Failure";
    }
}
function two(){
    $con = $GLOBALS['con'];
    $posted_data = $GLOBALS['posted_data'];
    $category_id = $GLOBALS['category_id'];
    $user_id = $posted_data['userid'];
    $home_todo = $posted_data['hometodo'];
    $home_sell = $posted_data['homeselltype'];
    $home_buy = $posted_data['homebuytype'];
    $home_rent = $posted_data['homerenttype'];
    $home_size = $posted_data['homesize'];
    $home_cost = $posted_data['homecost'];
    $user_name = $posted_data['username'];
    $user_email = $posted_data['useremail'];
    $user_type = $posted_data['usertype'];
    $company_name = $posted_data['companyname'];
    $city = $posted_data['city'];
    $company_email = $posted_data['companyemail'];
    $user_contact = $posted_data['usercontact'];
    $company_contact = $posted_data['companycontact'];
    $advt_type = $posted_data['advtype'];
    $date = date("Y-m-d-h-i-sa");
    $name = $date."-".$user_id;

    $path = "../../../Category/categoryID/10002/";
    mkdir($path,0,true);
    $filename = $name.".csv";

    $fileopen = fopen($path."/".$filename,"x");
    $fileheadings = array("Category ID","User ID","Home Needed To","Home Sell","Home Buy","Home Rent","Home Size","Home Cost","User Name",
        "User Email","User Type","Company Name","City","Company Email","User Contact","Company Contact","Advertisement Type","Date");
    fputcsv($fileopen,$fileheadings);
    fclose($fileopen);

    $fileopen2=fopen($path."/".$filename,"a");
    $fileheadings2 = array($category_id,$user_id,$home_todo,$home_sell,$home_buy,$home_rent,$home_size,$home_cost,$user_name,$user_email,
    $user_type,$company_name,$city,$company_email,$user_contact,$company_contact,$advt_type,$date);
    fputcsv($fileopen2,$fileheadings2);
    fclose($fileopen2);

    $url = "//localhost/optimus/Category/categoryId/10002/".$filename;

    $insertQuery = mysqli_query($con,"insert into listed_products (product_title,pro_description_file) values 
('$home_todo','$url')")or die("Error in uploading");
    if($insertQuery){
        $getprid = mysqli_query($con,"select * from listed_products where pro_description_file='$url'");
        $fetch = mysqli_fetch_array($getprid);
        $pr_id = $fetch[0];
        $mailed = sendmail($user_email,"opadmin1@gmail.com");
        if($mailed == 'send')
            echo $pr_id;
        else
            echo "Post Posted";
    }else{
        echo "Failure";
    }
}
function three(){
    $con = $GLOBALS['con'];
    $posted_data = $GLOBALS['posted_data'];
    $category_id = $GLOBALS['category_id'];
    $user_id = $posted_data['userid'];
    $job_title = $posted_data['jobtitle'];
    $job_type = $posted_data['jobtype'];
    $job_role = $posted_data['jobrole'];
    $min_sal = $posted_data['minsal'];
    $max_sal = $posted_data['maxsal'];
    $company_name = $posted_data['companyname'];
    $company_email = $posted_data['companyemail'];
    $job_location = $posted_data['joblocation'];
    $job_exp = $posted_data['jobexp'];
    $recruiter_number = $posted_data['recruiternumber'];
    $job_desc = $posted_data['jobdesc'];
    $advt_type = $posted_data['advtype'];
    $date = date("Y-m-d-h-i-sa");
    $name = $date."-".$user_id;

    $path = "../../../Category/categoryID/10003/";
    mkdir($path,0,true);
    $filename = $name.".csv";

    $fileopen = fopen($path."/".$filename,"x");
    $fileheadings = array("Category ID","User ID","Job Title","Job Type","Job Role","Min Salary","Max Salary","Company Name","Company Email",
    "City","Job Experience","Recruiter Contact","Job Description","Advertisement Type","Date");
    fputcsv($fileopen,$fileheadings);
    fclose($fileopen);

    $fileopen2=fopen($path."/".$filename,"a");
    $fileheadings2 = array($category_id,$user_id,$job_title,$job_type,$job_role,$min_sal,$max_sal,$company_name,$company_email,$job_location,
    $job_exp,$recruiter_number,$job_desc,$advt_type,$date);
    fputcsv($fileopen2,$fileheadings2);
    fclose($fileopen2);

    $url = "//localhost/optimus/Category/categoryId/10003/".$filename;

    $insertQuery = mysqli_query($con,"insert into listed_products (product_title,pro_description_file) values 
('$job_title','$url')")or die("Error in uploading");
    if($insertQuery){
        $getprid = mysqli_query($con,"select * from listed_products where pro_description_file='$url'");
        $fetch = mysqli_fetch_array($getprid);
        $pr_id = $fetch[0];
        $mailed = sendmail($company_email,"opadmin1@gmail.com");
        if($mailed == 'send')
            echo $pr_id;
        else
            echo "Post Posted";
    }else{
        echo "Failure";
    }
}
function four(){
    $con = $GLOBALS['con'];
    $posted_data = $GLOBALS['posted_data'];
    $category_id = $GLOBALS['category_id'];
    $user_id = $posted_data['userid'];
    $car_cat_type = $posted_data['carcattype'];
    $car_brand = $posted_data['carbrand'];
    $car_cost = $posted_data['carcost'];
    $car_reg_year = $posted_data['carregyear'];
    $car_city = $posted_data['carcity'];
    $user_name = $posted_data['username'];
    $user_email = $posted_data['useremail'];
    $user_contact = $posted_data['usercontact'];
    $user_type = $posted_data['usertype'];
    $car_kms_driven = $posted_data['carkmsdriven'];
    $car_desc = $posted_data['cardesc'];
    $advt_type = $posted_data['advtype'];
    $date = date("Y-m-d-h-i-sa");
    $name = $date."-".$user_id;

    $path = "../../../Category/categoryID/10004/";
    mkdir($path,0,true);
    $filename = $name.".csv";

    $fileopen = fopen($path."/".$filename,"x");
    $fileheadings = array("Category ID","User ID","Car Category Type","Car Brand","Car Cost","Car Registration Year","City","User Name",
        "User Email","User Contact","User Type","Car Kms Driven","Car Description","Advertisement Type","Date");
    fputcsv($fileopen,$fileheadings);
    fclose($fileopen);

    $fileopen2=fopen($path."/".$filename,"a");
    $fileheadings2 = array($category_id,$user_id,$car_cat_type,$car_brand,$car_cost,$car_reg_year,$car_city,$user_name,$user_email,$user_contact,
        $user_type,$car_kms_driven,$car_desc,$advt_type,$date);
    fputcsv($fileopen2,$fileheadings2);
    fclose($fileopen2);

    $url = "//localhost/optimus/Category/categoryId/10004/".$filename;

    $insertQuery = mysqli_query($con,"insert into listed_products (product_title,pro_description_file) values 
('$car_cat_type $car_brand','$url')")or die("Error in uploading");
    if($insertQuery){
        $getprid = mysqli_query($con,"select * from listed_products where pro_description_file='$url'");
        $fetch = mysqli_fetch_array($getprid);
        $pr_id = $fetch[0];
        $mailed = sendmail($user_email,"opadmin1@gmail.com");
        if($mailed == 'send')
            echo $pr_id;
        else
            echo "Post Posted";
    }else{
        echo "Failure";
    }
}
function five(){
    $con = $GLOBALS['con'];
    $posted_data = $GLOBALS['posted_data'];
    $category_id = $GLOBALS['category_id'];
    $user_id = $posted_data['userid'];
    $bike_cat_type = $posted_data['bikecattype'];
    $bike_brand = $posted_data['bikebrand'];
    $bike_cost = $posted_data['bikecost'];
    $bike_reg_year = $posted_data['bikeregyear'];
    $bike_city = $posted_data['bikecity'];
    $user_name = $posted_data['username'];
    $user_email = $posted_data['useremail'];
    $user_contact = $posted_data['usercontact'];
    $user_type = $posted_data['usertype'];
    $bike_kms_driven = $posted_data['bikekmsdriven'];
    $bike_desc = $posted_data['bikedesc'];
    $advt_type = $posted_data['advtype'];
    $date = date("Y-m-d-h-i-sa");
    $name = $date."-".$user_id;

    $path = "../../../Category/categoryID/10005/";
    mkdir($path,0,true);
    $filename = $name.".csv";

    $fileopen = fopen($path."/".$filename,"x");
    $fileheadings = array("Category ID","User ID","Bike Category Type","Bike Brand","Bike Cost","Bike Registration Year","City","User Name",
        "User Email","User Contact","User Type","Bike Kms Driven","Bike Description","Advertisement Type","Date");
    fputcsv($fileopen,$fileheadings);
    fclose($fileopen);

    $fileopen2=fopen($path."/".$filename,"a");
    $fileheadings2 = array($category_id,$user_id,$bike_cat_type,$bike_brand,$bike_cost,$bike_reg_year,$bike_city,$user_name,$user_email,$user_contact,
        $user_type,$bike_kms_driven,$bike_desc,$advt_type,$date);
    fputcsv($fileopen2,$fileheadings2);
    fclose($fileopen2);

    $url = "//localhost/optimus/Category/categoryId/10005/".$filename;

    $insertQuery = mysqli_query($con,"insert into listed_products (product_title,pro_description_file) values 
('$bike_brand','$url')")or die("Error in uploading");
    if($insertQuery){
        $getprid = mysqli_query($con,"select * from listed_products where pro_description_file='$url'");
        $fetch = mysqli_fetch_array($getprid);
        $pr_id = $fetch[0];
        $mailed = sendmail($user_email,"opadmin1@gmail.com");
        if($mailed == 'send')
            echo $pr_id;
        else
            echo "Post Posted";
    }else{
        echo "Failure";
    }
}
function six(){
    $con = $GLOBALS['con'];
    $posted_data = $GLOBALS['posted_data'];
    $category_id = $GLOBALS['category_id'];
    $user_id = $posted_data['userid'];
    $edu_type = $posted_data['edutype'];
    $other_edu_type = $posted_data['otheredutype'];
    $edu_title = $posted_data['edutitle'];
    $edu_city = $posted_data['educity'];
    $edu_fees = $posted_data['edufees'];
    $edu_stream = $posted_data['edustream'];
    $edu_insti_name = $posted_data['eduinstiname'];
    $edu_insti_address = $posted_data['eduinstiaddress'];
    $edu_insti_contact = $posted_data['insticontact'];
    $edu_insti_email = $posted_data['instiemail'];
    $edu_desc = $posted_data['edudesc'];
    $advt_type = $posted_data['advtype'];
    $date = date("Y-m-d-h-i-sa");
    $name = $date."-".$user_id;

    $path = "../../../Category/categoryID/10006/";
    mkdir($path,0,true);
    $filename = $name.".csv";

    $fileopen = fopen($path."/".$filename,"x");
    $fileheadings = array("Category ID","User ID","Education Type","Other Education Type","Education Title","City","Education Fees",
    "Education Stream","Education Institute Name","Education Institute Address","Education Institute Contact","Education Institure Email",
        "Education Description","Advertisement Type","Date");
    fputcsv($fileopen,$fileheadings);
    fclose($fileopen);

    $fileopen2=fopen($path."/".$filename,"a");
    $fileheadings2 = array($category_id,$user_id,$edu_type,$other_edu_type,$edu_title,$edu_city,$edu_fees,$edu_stream,$edu_insti_name,
        $edu_insti_address,$edu_insti_contact,$edu_insti_email,$edu_desc,$advt_type,$date);
    fputcsv($fileopen2,$fileheadings2);
    fclose($fileopen2);

    $url = "//localhost/optimus/Category/categoryId/10006/".$filename;

    $insertQuery = mysqli_query($con,"insert into listed_products (product_title,pro_description_file) values 
('$edu_title','$url')")or die("Error in uploading");
    if($insertQuery){
        $getprid = mysqli_query($con,"select * from listed_products where pro_description_file='$url'");
        $fetch = mysqli_fetch_array($getprid);
        $pr_id = $fetch[0];
        $mailed = sendmail($edu_insti_email,"opadmin1@gmail.com");
        if($mailed == 'send')
            echo $pr_id;
        else
            echo "Post Posted";
    }else{
        echo "Failure";
    }
}
function seven(){
    $con = $GLOBALS['con'];
    $posted_data = $GLOBALS['posted_data'];
    $category_id = $GLOBALS['category_id'];
    $user_id = $posted_data['userid'];
    $mob_want = $posted_data['mobwant'];
    $mob_subcat = $posted_data['mobsubcategory'];
    $mob_ad_title = $posted_data['mobadtitle'];
    $city = $posted_data['city'];
    $mob_condition = $posted_data['mobcondition'];
    $mob_cost = $posted_data['mobcost'];
    $mob_used = $posted_data['mobused'];
    $mob_bill = $posted_data['mobbill'];
    $mob_brand = $posted_data['mobbrand'];
    $mob_model = $posted_data['mobmodel'];
    $user_name = $posted_data['username'];
    $user_email = $posted_data['useremail'];
    $user_contact = $posted_data['usercontact'];
    $mob_include = $posted_data['mobinclude'];
    $mob_desc = $posted_data['mobdesc'];
    $advt_type = $posted_data['advtype'];
    $date = date("Y-m-d-h-i-sa");
    $name = $date."-".$user_id;

    $path = "../../../Category/categoryID/10007/";
    mkdir($path,0,true);
    $filename = $name.".csv";

    $fileopen = fopen($path."/".$filename,"x");
    $fileheadings = array("Category ID","User ID","User want To","Mobile Subcategory","Mobile Ad title","City","Mobile Condition","Mobile Cost",
        "Mobile Used","Mobile Bill","Mobile Brand","Mobile Model","User Name","User Email","User Contact","Package Include","Mobile Description",
        "Advertisement Type","Date");
    fputcsv($fileopen,$fileheadings);
    fclose($fileopen);

    $fileopen2=fopen($path."/".$filename,"a");
    $fileheadings2 = array($category_id,$user_id,$mob_want,$mob_subcat,$mob_ad_title,$city,$mob_condition,$mob_cost,$mob_used,$mob_bill,$mob_brand,
    $mob_model,$user_name,$user_email,$user_contact,$mob_include,$mob_desc,$advt_type,$date);
    fputcsv($fileopen2,$fileheadings2);
    fclose($fileopen2);

    $url = "//localhost/optimus/Category/categoryId/10007/".$filename;

    $insertQuery = mysqli_query($con,"insert into listed_products (product_title,pro_description_file) values 
('$mob_ad_title','$url')")or die("Error in uploading");
    if($insertQuery){
        $getprid = mysqli_query($con,"select * from listed_products where pro_description_file='$url'");
        $fetch = mysqli_fetch_array($getprid);
        $pr_id = $fetch[0];
        $mailed = sendmail($user_email,"opadmin1@gmail.com");
        if($mailed == 'send')
            echo $pr_id;
        else
            echo "Post Posted";
    }else{
        echo "Failure";
    }
}
function eight(){
    $con = $GLOBALS['con'];
    $posted_data = $GLOBALS['posted_data'];
    $category_id = $GLOBALS['category_id'];
    $user_id = $posted_data['userid'];
    $home_cat = $posted_data['homecat'];
    $kid_cat = $posted_data['kidsubcat'];
    $fur_cat = $posted_data['fursubcat'];
    $sports_cat = $posted_data['sportsubcat'];
    $fashion_cat = $posted_data['fashionsubcat'];
    $other_cat = $posted_data['othersubcat'];
    $homelife_ad_title = $posted_data['homelifeadtitle'];
    $city = $posted_data['city'];
    $homelife_condition = $posted_data['homelifecondition'];
    $homelife_cost = $posted_data['homelifecost'];
    $homelife_used = $posted_data['homelifeused'];
    $homelife_bill = $posted_data['homelifebill'];
    $user_name = $posted_data['username'];
    $user_email = $posted_data['useremail'];
    $user_contact = $posted_data['usercontact'];
    $homelife_includes = $posted_data['homelifeinclude'];
    $homelife_desc = $posted_data['homelifedesc'];
    $advt_type = $posted_data['advtype'];
    $date = date("Y-m-d-h-i-sa");
    $name = $date."-".$user_id;

    $path = "../../../Category/categoryID/10008/";
    mkdir($path,0,true);
    $filename = $name.".csv";

    $fileopen = fopen($path."/".$filename,"x");
    $fileheadings = array("Category ID","User ID","Home Category","Kids","Furniture","Sports","Fashion","Other Category","Ad Title","City","Product Condition",
        "Product cost","Product Used For","Product Bill","User Name","User Email","User Contact","Product Include","Product Description",
    "Advertisement Type","Date");
    fputcsv($fileopen,$fileheadings);
    fclose($fileopen);

    $fileopen2=fopen($path."/".$filename,"a");
    $fileheadings2 = array($category_id,$user_id,$home_cat,$kid_cat,$fur_cat,$sports_cat,$fashion_cat,$other_cat,$homelife_ad_title,$city,$homelife_condition,
    $homelife_cost,$homelife_used,$homelife_bill,$user_name,$user_email,$user_contact,$homelife_includes,$homelife_desc,$advt_type,$date);
    fputcsv($fileopen2,$fileheadings2);
    fclose($fileopen2);

    $url = "//localhost/optimus/Category/categoryId/10008/".$filename;

    $insertQuery = mysqli_query($con,"insert into listed_products (product_title,pro_description_file) values 
('$homelife_ad_title','$url')")or die("Error in uploading");
    if($insertQuery){
        $getprid = mysqli_query($con,"select * from listed_products where pro_description_file='$url'");
        $fetch = mysqli_fetch_array($getprid);
        $pr_id = $fetch[0];
        $mailed = sendmail($user_email,"opadmin1@gmail.com");
        if($mailed == 'send')
            echo $pr_id;
        else
            echo "Post Posted";
    }else{
        echo "Failure";
    }
}
function nine(){
    $con = $GLOBALS['con'];
    $posted_data = $GLOBALS['posted_data'];
    $category_id = $GLOBALS['category_id'];
    $user_id = $posted_data['userid'];
    $elect_want = $posted_data['elecwant'];
    $elect_subcat = $posted_data['elecsubcat'];
    $elect_ad_title = $posted_data['elecadtitle'];
    $city = $posted_data['city'];
    $elect_condition = $posted_data['eleccondition'];
    $elect_cost = $posted_data['eleccost'];
    $elect_used = $posted_data['elecused'];
    $elect_bill = $posted_data['elecbill'];
    $elect_brand = $posted_data['elecbrand'];
    $elect_model = $posted_data['elecmodel'];
    $user_name = $posted_data['username'];
    $user_email = $posted_data['useremail'];
    $user_contact = $posted_data['usercontact'];
    $elect_include = $posted_data['elecinclude'];
    $elect_desc = $posted_data['elecdesc'];
    $advt_type = $posted_data['advtype'];
    $date = date("Y-m-d-h-i-sa");
    $name = $date."-".$user_id;

    $path = "../../../Category/categoryID/10009/";
    mkdir($path,0,true);
    $filename = $name.".csv";

    $fileopen = fopen($path."/".$filename,"x");
    $fileheadings = array("Category ID","User ID","Electronics Needed to","Electronics Subcategory","Electronics Ad title","City","Electronics Condition",
    "Electronics Cost","Electronics Used For","Electronics Bill","Electronics Brand","Electronics Model","User Name","User Email","User Contact",
    "Electronics Includes","Electronics Description","Advertisement Type","Date");
    fputcsv($fileopen,$fileheadings);
    fclose($fileopen);

    $fileopen2=fopen($path."/".$filename,"a");
    $fileheadings2 = array($category_id,$user_id,$elect_want,$elect_subcat,$elect_ad_title,$city,$elect_condition,$elect_cost,$elect_used,$elect_bill,
    $elect_brand,$elect_model,$user_name,$user_email,$user_contact,$elect_include,$elect_desc,$advt_type,$date);
    fputcsv($fileopen2,$fileheadings2);
    fclose($fileopen2);

    $url = "//localhost/optimus/Category/categoryId/10009/".$filename;

    $insertQuery = mysqli_query($con,"insert into listed_products (product_title,pro_description_file) values 
('$elect_ad_title','$url')")or die("Error in uploading");
    if($insertQuery){
        $getprid = mysqli_query($con,"select * from listed_products where pro_description_file='$url'");
        $fetch = mysqli_fetch_array($getprid);
        $pr_id = $fetch[0];
        $mailed = sendmail($user_email,"opadmin1@gmail.com");
        if($mailed == 'send')
            echo $pr_id;
        else
            echo "Post Posted";
    }else{
        echo "Failure";
    }
}

function ten(){
    $con = $GLOBALS['con'];
    $posted_data = $GLOBALS['posted_data'];
    $category_id = $GLOBALS['category_id'];
    $user_id = $posted_data['userid'];
    $user_name = $posted_data['username'];
    $user_email = $posted_data['useremail'];
    $user_contact = $posted_data['usercontact'];
    $date = date("Y-m-d-h-i-sa");
    $name = $date."-".$user_id;

    $path = "../../../Category/categoryID/10014/";
    mkdir($path,0,true);
    $filename = $name.".csv";

    $fileopen = fopen($path."/".$filename,"x");
    $fileheadings = array("Category ID","User ID","User Name","User Email","User Contact","Date");
    fputcsv($fileopen,$fileheadings);
    fclose($fileopen);

    $fileopen2=fopen($path."/".$filename,"a");
    $fileheadings2 = array($category_id,$user_id,$user_name,$user_email,$user_contact,$date);
    fputcsv($fileopen2,$fileheadings2);
    fclose($fileopen2);

    $url = "//localhost/optimus/Category/categoryId/10014/".$filename;

    $insertQuery = mysqli_query($con,"insert into listed_products (product_title,pro_description_file) values 
('$category_id','$url')")or die("Error in uploading");
    if($insertQuery){
        $mailed = sendmail($user_email,"opadmin1@gmail.com");
        if($mailed == 'send')
            echo "Success";
        else
            echo "Post Posted";
    }else{
        echo "Failure";
    }
}
function eleven(){
    $con = $GLOBALS['con'];
    $posted_data = $GLOBALS['posted_data'];
    $category_id = $GLOBALS['category_id'];
    $user_id = $posted_data['userid'];
    $user_name = $posted_data['username'];
    $user_email = $posted_data['useremail'];
    $user_contact = $posted_data['usercontact'];
    $date = date("Y-m-d-h-i-sa");
    $name = $date."-".$user_id;

    $path = "../../../Category/categoryID/10018/";
    mkdir($path,0,true);
    $filename = $name.".csv";

    $fileopen = fopen($path."/".$filename,"x");
    $fileheadings = array("Category ID","User ID","User Name","User Email","User Contact","Date");
    fputcsv($fileopen,$fileheadings);
    fclose($fileopen);

    $fileopen2=fopen($path."/".$filename,"a");
    $fileheadings2 = array($category_id,$user_id,$user_name,$user_email,$user_contact,$date);
    fputcsv($fileopen2,$fileheadings2);
    fclose($fileopen2);

    $url = "//localhost/optimus/Category/categoryId/10018/".$filename;

    $insertQuery = mysqli_query($con,"insert into listed_products (product_title,pro_description_file) values 
('$category_id','$url')")or die("Error in uploading");
    if($insertQuery){
        $mailed = sendmail($user_email,"opadmin1@gmail.com");
        if($mailed == 'send')
            echo "Success";
        else
            echo "Post Posted";
    }else{
        echo "Failure";
    }

}
function twelve(){
    $con = $GLOBALS['con'];
    $posted_data = $GLOBALS['posted_data'];
    $category_id = $GLOBALS['category_id'];
    $user_id = $posted_data['userid'];
    $user_name = $posted_data['username'];
    $user_email = $posted_data['useremail'];
    $user_contact = $posted_data['usercontact'];
    $date = date("Y-m-d-h-i-sa");
    $name = $date."-".$user_id;

    $path = "../../../Category/categoryID/10019/";
    mkdir($path,0,true);
    $filename = $name.".csv";

    $fileopen = fopen($path."/".$filename,"x");
    $fileheadings = array("Category ID","User ID","User Name","User Email","User Contact","Date");
    fputcsv($fileopen,$fileheadings);
    fclose($fileopen);

    $fileopen2=fopen($path."/".$filename,"a");
    $fileheadings2 = array($category_id,$user_id,$user_name,$user_email,$user_contact,$date);
    fputcsv($fileopen2,$fileheadings2);
    fclose($fileopen2);

    $url = "//localhost/optimus/Category/categoryId/10019/".$filename;

    $insertQuery = mysqli_query($con,"insert into listed_products (product_title,pro_description_file) values 
('$category_id','$url')")or die("Error in uploading");
    if($insertQuery){
        $mailed = sendmail($user_email,"opadmin1@gmail.com");
        if($mailed == 'send')
            echo "Success";
        else
            echo "Post Posted";
    }else{
        echo "Failure";
    }

}
function thirteen(){
    $con = $GLOBALS['con'];
    $posted_data = $GLOBALS['posted_data'];
    $category_id = $GLOBALS['category_id'];
    $user_id = $posted_data['userid'];
    $event_type = $posted_data['eventtype'];
    $manage_event_type = $posted_data['eventmantype'];
    $live_event_type = $posted_data['eventlivetype'];
    $event_city = $posted_data['eventcity'];
    $event_cost = $posted_data['eventcost'];
    $user_name = $posted_data['username'];
    $user_email = $posted_data['useremail'];
    $event_ser_type = $posted_data['eventsertype'];
    $user_contact = $posted_data['usercontact'];
    $event_desc = $posted_data['eventdesc'];
    $advt_type = $posted_data['advtype'];
    $date = date("Y-m-d-h-i-sa");
    $name = $date."-".$user_id;

    $path = "../../../Category/categoryID/10020/";
    mkdir($path,0,true);
    $filename = $name.".csv";

    $fileopen = fopen($path."/".$filename,"x");
    $fileheadings = array("Category ID","User ID","Event Type","Management Event Type","Live Event Type","City","Event Cost",
    "User Name","User Email","Event Service Type","User Contact","Event Description","Advertisement Type","Date");
    fputcsv($fileopen,$fileheadings);
    fclose($fileopen);

    $fileopen2=fopen($path."/".$filename,"a");
    $fileheadings2 = array($category_id,$user_id,$event_type,$manage_event_type,$live_event_type,$event_city,$event_cost,$user_name,
        $user_email,$event_ser_type,$user_contact,$event_desc,$advt_type,$date);
    fputcsv($fileopen2,$fileheadings2);
    fclose($fileopen2);

    $url = "//localhost/optimus/Category/categoryId/10020/".$filename;

    $insertQuery = mysqli_query($con,"insert into listed_products (product_title,pro_description_file) values 
('$event_type','$url')")or die("Error in uploading");
    if($insertQuery){
        $getprid = mysqli_query($con,"select * from listed_products where pro_description_file='$url'");
        $fetch = mysqli_fetch_array($getprid);
        $pr_id = $fetch[0];
        $mailed = sendmail($user_email,"opadmin1@gmail.com");
        if($mailed == 'send')
            echo $pr_id;
        else
            echo "Post Posted";
    }else{
        echo "Failure";
    }
}
function fourteen(){
    $con = $GLOBALS['con'];
    $posted_data = $GLOBALS['posted_data'];
    $category_id = $GLOBALS['category_id'];
    $user_id = $posted_data['userid'];
    $user_name = $posted_data['username'];
    $user_email = $posted_data['useremail'];
    $user_contact = $posted_data['usercontact'];
    $date = date("Y-m-d-h-i-sa");
    $name = $date."-".$user_id;

    $path = "../../../Category/categoryID/10021/";
    mkdir($path,0,true);
    $filename = $name.".csv";

    $fileopen = fopen($path."/".$filename,"x");
    $fileheadings = array("Category ID","User ID","User Name","User Email","User Contact","Date");
    fputcsv($fileopen,$fileheadings);
    fclose($fileopen);

    $fileopen2=fopen($path."/".$filename,"a");
    $fileheadings2 = array($category_id,$user_id,$user_name,$user_email,$user_contact,$date);
    fputcsv($fileopen2,$fileheadings2);
    fclose($fileopen2);

    $url = "//localhost/optimus/Category/categoryId/10021/".$filename;

    $insertQuery = mysqli_query($con,"insert into listed_products (product_title,pro_description_file) values 
('$category_id','$url')")or die("Error in uploading");
    if($insertQuery){
        $mailed = sendmail($user_email,"opadmin1@gmail.com");
        if($mailed == 'send')
            echo "Success";
        else
            echo "Post Posted";
    }else{
        echo "Failure";
    }
}

function sendmail($one,$two){
    require("../../../mail/PHPMailerAutoload.php");
    $mail  = new PHPMailer();
    $mail->Host = "smtp.gmail.com";
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Username = "optimustechprojectweb201702@gmail.com";
    $mail->Password = "Pass@1234";
    $mail->SMTPSecure = "tls"; //or ssl
    $mail->Port = 587;//465 for ssl
    $mail->Subject = "Your Product Has been Successfully Posted!";
    $mail->Body = "You have posted an Post...";
    $mail->setFrom("optimustechprojectweb201702@gmail.com","Welcome");
    $mail->addAddress($one);
    $mail->addCC($two);
    $mail->WordWrap = 50;
    $mail->isHTML(true);
    if($mail->send())
        return "send";
    else
        return "Failure".$mail->ErrorInfo;
}