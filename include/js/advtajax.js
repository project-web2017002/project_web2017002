//Services Form
$("#submitservicesForm").click(function(){
    var category_id=$("#adv_cat").val();
    var user_id = $("#user_id").val();
    var service_type=$("#ser-type").val();
    var service_fees=$("#ser-fee").val();
    var service_name=$("#Exact-Service-name").val();
    var user_name=$("#user-name").val();
    var user_email=$("#user-email").val();
    var user_contact = $("#user-contact").val();
    var user_type=$("input[name=user-type]:checked").val();
    var company_name=$("#company-name").val();
    var company_email=$("#company-email").val();
    var company_contact = $("#company-contact").val();
    var adv_type=$("input[name=adv-type]:checked").val();
    var advt_type;
    if(adv_type=="Paid"){
        advt_type=$("input[name=paidser-type]:checked").val();
    }else{
        advt_type=adv_type;
    }
    var data = "categoryid="+ category_id +"&userid="+ user_id +"&servicetype="+ service_type +"&servicefees="+ service_fees +
        "&servicename="+ service_name +"&username="+ user_name +"&useremail="+ user_email +"&usercontact="+ user_contact +
        "&usertype="+ user_type +"&companyname="+ company_name +"&companyemail="+ company_email +"&companycontact="+
        company_contact +"&advtype=" + advt_type;
    $.ajax({
        type:"post",
        data:data,
        url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
        beforeSend: function(){
            $("#submitservicesForm").prop('disabled',true);
        },
        success: function(data) {
            window.location.reload(true);
        },
        error: function(data){
            alert("Form didn't submit!");
        }
    });
});

//Bike Form
$("#submitbikeForm").click(function(){
    var category_id=$("#adv_cat").val();
    var user_id = $("#user_id").val();
    var bike_cat_type = $("input[name=bike-cat-type]:checked").val();
    var bike_brand = $("#bike-brand").val();
    var bike_cost = $("#bike-cost").val();
    var bike_reg_year = $("#bike-reg-year").val();
    var bike_city = $("#bike-city").val();
    var bike_user_name = $("#user-name").val();
    var bike_user_email = $("#user-email").val();
    var bike_user_contact = $("#bike-user-contact").val();
    var bike_user_type = $("input[name=bike-user-type]:checked").val();
    var bike_kms_driven = $("#bike-driven").val();
    var adv_type=$("input[name=adv-type]:checked").val();
    var advt_type;
    if(adv_type=="Paid"){
        advt_type=$("input[name=paidser-type]:checked").val();
    }else{
        advt_type=adv_type;
    }
    var data = "categoryid="+ category_id +"&userid="+ user_id +"&bikecattype="+ bike_cat_type +"&bikebrand="+ bike_brand +"&bikecost="+
        bike_cost +"&bikeregyear="+ bike_reg_year +"&bikecity="+ bike_city +"&username="+ bike_user_name +"&useremail="+ bike_user_email +
        "&usercontact="+ bike_user_contact + "&usertype="+ bike_user_type +"&bikekmsdriven="+ bike_kms_driven +"&advtype="+ advt_type;
    $.ajax({
        type:"post",
        data:data,
        url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
        beforeSend: function(){
            $("#submitbikeForm").prop('disabled',true);
        },
        success: function(data) {
            window.location.reload(true);
        },
        error: function(data){
            alert("Form didn't submit!");
        }
    });
});

//Car Form
$("#submitcarForm").click(function(){
    var category_id=$("#adv_cat").val();
    var user_id = $("#user_id").val();
    var car_cat_type = $("input[name=car-cat-type]:checked").val();
    var car_brand = $("#car-brand").val();
    var car_cost = $("#car-cost").val();
    var car_reg_year = $("#car-reg-year").val();
    var car_city = $("#car-city").val();
    var car_user_name = $("#user-name").val();
    var car_user_email = $("#user-email").val();
    var car_user_contact = $("#car-user-contact").val();
    var car_user_type = $("input[name=car-user-type]:checked").val();
    var car_kms_driven = $("#car-driven").val();
    var adv_type=$("input[name=adv-type]:checked").val();
    var advt_type;
    if(adv_type=="Paid"){
        advt_type=$("input[name=paidser-type]:checked").val();
    }else{
        advt_type=adv_type;
    }
    var data = "categoryid="+ category_id +"&userid="+ user_id +"&carcattype="+ car_cat_type +"&carbrand="+ car_brand +"&carcost="+
        car_cost +"&carregyear="+ car_reg_year +"&carcity="+ car_city +"&username="+ car_user_name +"&useremail="+ car_user_email +
        "&usercontact="+ car_user_contact + "&usertype="+ car_user_type +"&carkmsdriven="+ car_kms_driven +"&advtype="+ advt_type;
    $.ajax({
        type:"post",
        data:data,
        url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
        beforeSend: function(){
            $("#submitcarForm").prop('disabled',true);
        },
        success: function(data) {
            window.location.reload(true);
        },
        error: function(data){
            alert("Form didn't submit!");
        }
    });
});

//Education Form
$("#submiteducationForm").click(function(){
    var category_id=$("#adv_cat").val();
    var user_id = $("#user_id").val();
    var education_type = $("input[name=education-type]:checked").val();
    var other_education_type = $("#other-edu-val").val();
    var edu_title = $("#edu-title").val();
    var edu_city = $("#edu-city").val();
    var edu_fees = $("#edu-fees").val();
    var edu_stream = $("#edu-stream").val();
    var edu_insti_name = $("#edu-insti-name").val();
    var edu_insti_address = $("#edu-insti-address").val();
    var edu_insti_contact = $("#edu-insti-contact").val();
    var edu_insti_email = $("#edu-insti-email").val();
    var edu_desc = $("#edu-desc").val();
    var adv_type=$("input[name=adv-type]:checked").val();
    var advt_type;
    if(adv_type=="Paid"){
        advt_type=$("input[name=paidser-type]:checked").val();
    }else{
        advt_type=adv_type;
    }
    var data = "categoryid="+ category_id +"&userid="+ user_id +"&edutype="+ education_type +"&otheredutype="+ other_education_type +
        "&edutitle="+ edu_title +"&educity="+ edu_city + "&edufees="+ edu_fees +"&edustream="+ edu_stream +"&eduinstiname="+
        edu_insti_name +"&eduinstiaddress="+ edu_insti_address +"&insticontact="+ edu_insti_contact +"&instiemail="+ edu_insti_email +
        "&edudesc="+ edu_desc +"&advtype="+ advt_type;
    $.ajax({
        type:"post",
        data:data,
        url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
        beforeSend: function(){
            $("#submiteducationForm").prop('disabled',true);
        },
        success: function(data) {
            window.location.reload(true);
        },
        error: function(data){
            alert("Form didn't submit!");
        }
    });
});

//Home & Real estate Form
$("#submithomeForm").click(function(){
    var category_id=$("#adv_cat").val();
    var user_id = $("#user_id").val();
    var home_todo = $("input[name=home-todo]:checked").val();
    var home_sell_type = $("input[name=home-sell-type]:checked").val();
    var home_buy_type = $("input[name=home-buy-type]:checked").val();
    var home_rent_type = $("input[name=home-rent-type]:checked").val();
    var home_size = $("#home-size").val();
    var home_cost = $("#home-cost").val();
    var home_user_name = $("#user-name").val();
    var home_user_email = $("#user-email").val();
    var home_user_type = $("input[name=user-type]:checked").val();
    var home_company_name = $("#company-name").val();
    var home_company_email = $("#company-email").val();
    var user_contact = $("#user-contact").val();
    var company_contact = $("#company-contact").val();
    var adv_type=$("input[name=adv-type]:checked").val();
    var advt_type;
    if(adv_type=="Paid"){
        advt_type=$("input[name=paidser-type]:checked").val();
    }else{
        advt_type=adv_type;
    }
    var data = "categoryid="+ category_id +"&userid="+ user_id +"&hometodo="+ home_todo +"&homeselltype="+ home_sell_type +
        "&homebuytype="+ home_buy_type +"&homerenttype="+ home_rent_type +"&homesize="+ home_size +"&homecost="+ home_cost +
        "&username="+ home_user_name +"&useremail="+ home_user_email +"&usertype="+ home_user_type +"&companyname="+ home_company_name +
        "&companyemail="+ home_company_email +"&usercontact="+ user_contact +"&companycontact="+ company_contact +"&advtype="+advt_type;
    $.ajax({
        type:"post",
        data:data,
        url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
        beforeSend: function(){
            $("#submithomeForm").prop('disabled',true);
        },
        success: function(data) {
            window.location.reload(true);
        },
        error: function(data){
            alert("Form didn't submit!");
        }
    });
});

//Jobs Form
$("#submitJobForm").click(function(){
    var category_id=$("#adv_cat").val();
    var user_id = $("#user_id").val();
    var job_title = $("#job-title").val();
    var job_type = $("#job-type").val();
    var job_role = $("#job-role").val();
    var min_sal = $("#min-sal").val();
    var max_sal = $("#max-sal").val();
    var job_company_name = $("#job-company-name").val();
    var job_company_email = $("#job-company-email").val();
    var job_location = $("#job-location").val();
    var job_experience = $("#job-exp").val();
    var job_recruiter_number = $("#recruit-number").val();
    var job_desc = $("#job-desc").val();
    var adv_type=$("input[name=adv-type]:checked").val();
    var advt_type;
    if(adv_type=="Paid"){
        advt_type=$("input[name=paidser-type]:checked").val();
    }else{
        advt_type=adv_type;
    }
    var data = "categoryid="+ category_id +"&userid="+ user_id +"&jobtitle="+ job_title +"&jobtype="+ job_type +"&jobrole="+ job_role +
        "&minsal="+ min_sal +"&maxsal="+ max_sal +"&companyname="+ job_company_name +"&companyemail="+ job_company_email +
        "&joblocation="+ job_location +"&jobexp="+ job_experience +"&recruiternumber="+ job_recruiter_number +"&jobdesc="+ job_desc +
        "&advtype="+advt_type;
    $.ajax({
        type:"post",
        data:data,
        url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
        beforeSend: function(){
            $("#submitJobForm").prop('disabled',true);
        },
        success: function(data) {
            window.location.reload(true);
        },
        error: function(data){
            alert("Form didn't submit!");
        }
    });
});

//Mobile & Tablets Form
$("#submitmobilesForm").click(function(){
    var category_id=$("#adv_cat").val();
    var user_id = $("#user_id").val();
    var mobile_want = $("#mobiles-want").val();
    var mobile_subcategory = $("#mobile-subcategory").val();
    var mob_ad_title = $("#mobile-ad-title").val();
    var mob_condition = $("#mobiles-condition").val();
    var mobile_cost = $("#Mobile-cost").val();
    var mobile_used = $("#used-mobile-months").val();
    var mob_bill = $("#mobile-bill").val();
    var mob_brand = $("#Mobile-brand").val();
    var mob_model = $("#mobile-model").val();
    var user_name=$("#user-name").val();
    var mob_user_contact = $("#mobile-user-contact").val();
    var mob_user_email = $("#user-email").val();
    var mob_includes = $("#mobile-includes").val();
    var mob_desc = $("#Mobile-desc").val();
    var adv_type=$("input[name=adv-type]:checked").val();
    var advt_type;
    if(adv_type=="Paid"){
        advt_type=$("input[name=paidser-type]:checked").val();
    }else{
        advt_type=adv_type;
    }
    var data= "categoryid="+ category_id +"&userid="+ user_id +"&mobwant="+ mobile_want +"&mobsubcategory="+ mobile_subcategory +
        "&mobadtitle="+ mob_ad_title +"&mobcondition="+ mob_condition +"&mobcost="+ mobile_cost +"&mobused="+ mobile_used +
        "&mobbill="+ mob_bill +"&mobbrand="+ mob_brand +"&mobmodel&="+ mob_model +"&username="+ user_name +"&useremail="+ mob_user_email +
        "&usercontact="+ mob_user_contact +"&mobinclude="+ mob_includes +"&mobdesc="+ mob_desc +"&advtype="+advt_type;
    $.ajax({
        type:"post",
        data:data,
        url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
        beforeSend: function(){
            $("#submitmobilesForm").prop('disabled',true);
        },
        success: function(data) {
            window.location.reload(true);
        },
        error: function(data){
            alert("Form didn't submit!");
        }
    });
});

//Electronics & appliances Form
$("#submitelectronicsForm").click(function(){
    var category_id=$("#adv_cat").val();
    var user_id = $("#user_id").val();
    var elect_want = $("#elect-want").val();
    var elect_subcategory = $("#electronics-subcategory").val();
    var elect_other = $("#electronics-other").val();
    var elect_ad_title = $("#electronics-ad-title").val();
    var elect_condition = $("#elect-condition").val();
    var elect_cost = $("#elect-cost").val();
    var elect_used = $("#used-elect-months").val();
    var elect_bill = $("#elect-bill").val();
    var elect_brand = $("#elect-brand").val();
    var elect_model = $("#elect-model").val();
    var user_name=$("#user-name").val();
    var elect_user_contact = $("#elect-user-contact").val();
    var elect_user_email = $("#user-email").val();
    var elect_includes = $("#elect-includes").val();
    var elect_desc = $("#elect-desc").val();
    var adv_type=$("input[name=adv-type]:checked").val();
    var advt_type;
    if(adv_type=="Paid"){
        advt_type=$("input[name=paidser-type]:checked").val();
    }else{
        advt_type=adv_type;
    }
    var data= "categoryid="+ category_id +"&userid="+ user_id +"&elecwant="+ elect_want +"&elecsubcat="+ elect_subcategory +
        "&elecother="+ elect_other +"&elecadtitle="+ elect_ad_title +"&eleccondition="+ elect_condition +"&eleccost="+ elect_cost +
        "&elecused="+ elect_used +"&elecbill="+ elect_bill +"&elecbrand="+ elect_brand +"&elecmodel="+ elect_model +
        "&username="+ user_name +"&useremail="+ elect_user_email +"&usercontact="+ elect_user_contact +"&elecinclude="+ elect_includes +
        "&elecdesc="+ elect_desc +"&advtype="+advt_type;
    $.ajax({
        type:"post",
        data:data,
        url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
        beforeSend: function(){
            $("#submitelectronicsForm").prop('disabled',true);
        },
        success: function(data) {
            window.location.reload(true);
        },
        error: function(data){
            alert("Form didn't submit!");
        }
    });
});

//Furniture & decoration Form
$("#submithomelifestyleForm").click(function(){
    var category_id=$("#adv_cat").val();
    var user_id = $("#user_id").val();
    var home_category = $("#home-cat").val();
    var furn_subcategory = $("#furni-subcategory").val();
    var kids_subcategory = $("#kids-subcategory").val();
    var sports_subcategory = $("#sports-subcategory").val();
    var fashion_subcategory = $("#fashion-subcategory").val();
    var other_subcategory = $("#otherlifehome").val();
    var homelife_ad_title = $("#homelife-ad-title").val();
    var homelife_condition = $("#homelife-condition").val();
    var homelife_cost = $("#homelife-cost").val();
    var homelife_used = $("#used-homelife-months").val();
    var homelife_bill = $("#homelife-bill").val();
    var user_name=$("#user-name").val();
    var homelife_user_contact = $("#homelife-user-contact").val();
    var homelife_user_email = $("#user-email").val();
    var homelife_includes = $("#homelife-includes").val();
    var homelife_desc = $("#homelife-desc").val();
    var adv_type=$("input[name=adv-type]:checked").val();
    var advt_type;
    if(adv_type=="Paid"){
        advt_type=$("input[name=paidser-type]:checked").val();
    }else{
        advt_type=adv_type;
    }
    var data= "categoryid="+ category_id +"&userid="+ user_id +"&homecat="+ home_category +"&fursubcat="+ furn_subcategory +
        "&kidsubcat="+ kids_subcategory +"&sportsubcat="+ sports_subcategory +"&fashionsubcat="+ fashion_subcategory +
        "&othersubcat="+ other_subcategory +"&homelifeadtitle="+ homelife_ad_title +"&homelifecondition="+ homelife_condition +
        "&homelifecost="+ homelife_cost +"&homelifeused="+ homelife_used +"&homelifebill="+ homelife_bill +"&username="+ user_name +
        "&useremail="+ homelife_user_email +"&usercontact="+ homelife_user_contact +"&homelifeinclude="+ homelife_includes +
        "&homelifedesc="+ homelife_desc +"&advtype="+advt_type;
    $.ajax({
        type:"post",
        data:data,
        url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
        beforeSend: function(){
            $("#submithomelifestyleForm").prop('disabled',true);
        },
        success: function(data) {
            window.location.reload(true);
        },
        error: function(data){
            alert("Form didn't submit!");
        }
    });
});

//Pets Form
$("#submitpetsForm").click(function(){
    var category_id=$("#adv_cat").val();
    var user_id = $("#user_id").val();
    var user_contact = $("#pet-cat-user-contact").val();
    var user_name=$("#user-name").val();
    var pet_user_email = $("#user-email").val();

    $.ajax({
        type:"post",
        data: "categoryid="+ category_id +"&userid="+ user_id +"&usercontact="+ user_contact +"&username="+ user_name +"&useremail="+ pet_user_email,
        url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
        beforeSend: function(){
            $("#submitpetsForm").prop('disabled',true);
        },
        success: function(data) {
            window.location.reload(true);
        },
        error: function(data){
            alert("Form didn't submit!");
        }
    });
});

//Community Form
$("#submitcommunitylForm").click(function(){
    var category_id=$("#adv_cat").val();
    var user_id = $("#user_id").val();
    var user_contact = $("#community-user-contact").val();
    var user_name=$("#user-name").val();
    var comm_user_email = $("#user-email").val();
    var data = "categoryid="+ category_id +"&userid="+ user_id +"&usercontact="+ user_contact +"&username="+
        user_name +"&useremail="+ comm_user_email;
    $.ajax({
        type:"post",
        data:data,
        url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
        beforeSend: function(){
            $("#submitcommunitylForm").prop('disabled',true);
        },
        success: function(data) {
            window.location.reload(true);
        },
        error: function(data){
            alert("Form didn't submit!");
        }
    });
});

//Entertainment Form
$("#submitentertainmentForm").click(function(){
    var category_id=$("#adv_cat").val();
    var user_id = $("#user_id").val();
    var user_contact = $("#entertainment-user-contact").val();
    var user_name=$("#user-name").val();
    var enter_user_email = $("#user-email").val();
    var data = "categoryid="+ category_id +"&userid="+ user_id +"&usercontact="+ user_contact +"&username="+
        user_name +"&useremail="+ enter_user_email;
    $.ajax({
        type:"post",
        data:data,
        url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
        beforeSend: function(){
            $("#submitentertainmentForm").prop('disabled',true);
        },
        success: function(data) {
            window.location.reload(true);
        },
        error: function(data){
            alert("Form didn't submit!");
        }
    });
});

//Events Form
$("#submiteventForm").click(function(){
    var category_id=$("#adv_cat").val();
    var user_id = $("#user_id").val();
    var event_type = $("#event-type").val();
    var event_manag_type = $("#management-event-ser-type").val();
    var event_live_type = $("#live-event-ser-type").val();
    var event_other_type = $("#other-event-ser").val();
    var event_city = $("#event-city").val();
    var event_cost = $("#event-cost").val();
    var event_user_name = $("#user-name").val();
    var event_user_email = $("#user-email").val();
    var event_ser_type = $("input[name=event-ser-type]:checked").val();
    var event_user_contact = $("#event-user-contact").val();
    var event_desc = $("#event-desc").val();
    var adv_type=$("input[name=adv-type]:checked").val();
    var advt_type;
    if(adv_type=="Paid"){
        advt_type=$("input[name=paidser-type]:checked").val();
    }else{
        advt_type=adv_type;
    }
    var data = "categoryid="+ category_id +"&userid="+ user_id +"&eventtype="+ event_type +"&eventmantype="+ event_manag_type +
        "&eventlivetype="+ event_live_type +"&eventothertype="+ event_other_type +"&eventcity="+ event_city +"&eventcost="+ event_cost +
        "&username="+ event_user_name +"&useremail="+ event_user_email +"&eventsertype="+ event_ser_type +"&usercontact="+ event_user_contact +
        "&eventdesc="+ event_desc +"&advtype="+advt_type;
    $.ajax({
        type:"post",
        data:data,
        url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
        beforeSend: function(){
            $("#submiteventForm").prop('disabled',true);
        },
        success: function(data) {
            window.location.reload(true);
        },
        error: function(data){
            alert("Form didn't submit!");
        }
    });
});

//Matrimonial Form
$("#submitmatrimonialForm").click(function(){
    var category_id=$("#adv_cat").val();
    var user_id = $("#user_id").val();
    var user_contact = $("#matrimonial-user-contact").val();
    var user_name=$("#user-name").val();
    var matri_user_email = $("#user-email").val();
    var data = "categoryid="+ category_id +"&userid="+ user_id +"&usercontact="+ user_contact +"&username="+
        user_name +"&useremail="+ matri_user_email;
    $.ajax({
        type:"post",
        data:data,
        url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
        beforeSend: function(){
            $("#submitmatrimonialForm").prop('disabled',true);
        },
        success: function(data) {
            window.location.reload(true);
        },
        error: function(data){
            alert("Form didn't submit!");
        }
    });
});