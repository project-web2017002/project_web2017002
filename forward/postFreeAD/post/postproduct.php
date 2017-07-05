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
    $posted_data = $GLOBALS['posted_data'];
    $category_id = $GLOBALS['category_id'];
    $user_id = $posted_data['userid'];
    $service_type = $posted_data['servicetype'];
    $service_fees = $posted_data['servicefees'];
    $service_name = $posted_data['servicename'];
    $user_name = $posted_data['username'];
    $user_email = $posted_data['useremail'];
    $user_contact = $posted_data['usercontact'];
    $user_type = $posted_data['usertype'];
    $company_name = $posted_data['companyname'];
    $company_email = $posted_data['companyemail'];
    $company_contact = $posted_data['companycontact'];
    $advt_type = $posted_data['advtype'];
}
function two(){
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
    $company_email = $posted_data['companyemail'];
    $user_contact = $posted_data['usercontact'];
    $company_conatct = $posted_data['companycontact'];
    $advt_type = $posted_data['advtype'];
}
function three(){
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
}
function four(){
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
    $advt_type = $posted_data['advtype'];
}
function five(){
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
    $advt_type = $posted_data['advtype'];
}
function six(){
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
}
function seven(){
    $posted_data = $GLOBALS['posted_data'];
    $category_id = $GLOBALS['category_id'];
    $user_id = $posted_data['userid'];
    $mob_want = $posted_data['mobwant'];
    $mob_subcat = $posted_data['mobsubcategory'];
    $mob_ad_title = $posted_data['mobadtitle'];
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
}
function eight(){
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
}
function nine(){
    $posted_data = $GLOBALS['posted_data'];
    $category_id = $GLOBALS['category_id'];
    $user_id = $posted_data['userid'];
    $elect_want = $posted_data['elecwant'];
    $elect_subcat = $posted_data['elecsubcat'];
    $elect_ad_title = $posted_data['elecadtitle'];
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
}

function ten(){
    $posted_data = $GLOBALS['posted_data'];
    $category_id = $GLOBALS['category_id'];
    $user_id = $posted_data['userid'];
    $user_name = $posted_data['username'];
    $user_email = $posted_data['useremail'];
    $user_contact = $posted_data['usercontact'];
    $date = date("Y-m-d-h-i-sa");
    $name = $date."-".$user_id;

    $path = "../../../Category/categoryID/".$category_id."/";
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
}
function eleven(){
    $posted_data = $GLOBALS['posted_data'];
    $category_id = $GLOBALS['category_id'];
    $user_id = $posted_data['userid'];
    $user_name = $posted_data['username'];
    $user_email = $posted_data['useremail'];
    $user_contact = $posted_data['usercontact'];
    $date = date("Y-m-d-h-i-sa");
    $name = $date."-".$user_id;

    $path = "../../../Category/categoryID/".$category_id."/";
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

}
function twelve(){
    $posted_data = $GLOBALS['posted_data'];
    $category_id = $GLOBALS['category_id'];
    $user_id = $posted_data['userid'];
    $user_name = $posted_data['username'];
    $user_email = $posted_data['useremail'];
    $user_contact = $posted_data['usercontact'];
    $date = date("Y-m-d-h-i-sa");
    $name = $date."-".$user_id;

    $path = "../../../Category/categoryID/".$category_id."/";
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

}
function thirteen(){
    $posted_data = $GLOBALS['posted_data'];
    $category_id = $GLOBALS['category_id'];
    $user_id = $posted_data['userid'];
    $event_type = $posted_data['eventtype'];
    $manage_event_type = $posted_data['eventmantype'];
    $live_event_type = $posted_data['eventlivetype'];
    $other_event_type = $posted_data['eventothertype'];
    $event_city = $posted_data['eventcity'];
    $event_cost = $posted_data['eventcost'];
    $user_name = $posted_data['username'];
    $user_email = $posted_data['useremail'];
    $event_ser_type = $posted_data['eventsertype'];
    $user_contact = $posted_data['usercontact'];
    $event_desc = $posted_data['eventdesc'];
    $advt_type = $posted_data['advtype'];
}
function fourteen(){
    $posted_data = $GLOBALS['posted_data'];
    $category_id = $GLOBALS['category_id'];
    $user_id = $posted_data['userid'];
    $user_name = $posted_data['username'];
    $user_email = $posted_data['useremail'];
    $user_contact = $posted_data['usercontact'];
    $date = date("Y-m-d-h-i-sa");
    $name = $date."-".$user_id;

    $path = "../../../Category/categoryID/".$category_id."/";
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

}