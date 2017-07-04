//Services Form
$("#submitservicesForm").click(function(){
    var category_id=$("#adv_cat").val();
    var service_type=$("#ser-type").val();
    var service_fees=$("#ser-fee").val();
    var service_name=$("#Exact-Service-name").val();
    var user_name=$("#user-name").val();
    var user_email=$("#user-email").val();
    var user_type=$("input[name=user-type]:checked").val();
    var company_name=$("#company-name").val();
    var company_email=$("#company-email").val();
    var adv_type=$("input[name=adv-type]:checked").val();
    if(adv_type=="Paid"){
        var advt_type=$("input[name=paidser-type]:checked").val();
    }else{
        var advt_type=adv_type;
    }

    alert(category_id + " " + service_type + " " + service_fees + " " + service_name + " " + user_name + " " + user_email + " " +
    user_type + " " + company_name + " " + company_email + " " + advt_type);
});

//Bike Form
$("#submitbikeForm").click(function(){
    var category_id=$("#adv_cat").val();
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
    if(adv_type=="Paid"){
        var advt_type=$("input[name=paidser-type]:checked").val();
    }else{
        var advt_type=adv_type;
    }
});

//Car Form
$("#submitcarForm").click(function(){
    var category_id=$("#adv_cat").val();
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
    if(adv_type=="Paid"){
        var advt_type=$("input[name=paidser-type]:checked").val();
    }else{
        var advt_type=adv_type;
    }
});

//Education Form
$("#submiteducationForm").click(function(){
    var category_id=$("#adv_cat").val();
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
    if(adv_type=="Paid"){
        var advt_type=$("input[name=paidser-type]:checked").val();
    }else{
        var advt_type=adv_type;
    }
});

//Home & Real estate Form
$("#submithomeForm").click(function(){
    var category_id=$("#adv_cat").val();
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
    var adv_type=$("input[name=adv-type]:checked").val();
    if(adv_type=="Paid"){
        var advt_type=$("input[name=paidser-type]:checked").val();
    }else{
        var advt_type=adv_type;
    }
});

//Jobs Form
$("#submitJobForm").click(function(){
    var category_id=$("#adv_cat").val();
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
    if(adv_type=="Paid"){
        var advt_type=$("input[name=paidser-type]:checked").val();
    }else{
        var advt_type=adv_type;
    }
});

//Mobile & Tablets Form
$("#submitmobilesForm").click(function(){
    var category_id=$("#adv_cat").val();
    var mobile_want = $("#mobiles-want").val();
    var mobile_subcategory = $("#mobile-subcategory").val();
    var mob_ad_title = $("#mobile-ad-title").val();
    var mob_condition = $("#mobiles-condition").val();
    var mobile_cost = $("#Mobile-cost").val();
    var mobile_used = $("#used-mobile-months").val();
    var mob_bill = $("#mobile-bill").val();
    var mob_brand = $("#Mobile-brand").val();
    var mob_model = $("#mobile-model").val();
    var mob_user_contact = $("#mobile-user-contact").val();
    var mob_user_email = $("#user-email").val();
    var mob_includes = $("#mobile-includes").val();
    var mob_desc = $("#Mobile-desc").val();
    var adv_type=$("input[name=adv-type]:checked").val();
    if(adv_type=="Paid"){
        var advt_type=$("input[name=paidser-type]:checked").val();
    }else{
        var advt_type=adv_type;
    }
});

//Electronics & appliances Form
$("#submitelectronicsForm").click(function(){
    var category_id=$("#adv_cat").val();
    var elect_want = $("#elect-want").val();
    var elect_subcategory = $("#electronics-subcategory").val();
    var elect_other = $("#electronics-other").val();
    var elect_ad_title = $("#electronics-ad-title").val();
    var elect_condition = $("#electronics-other").val();
    var elect_cost = $("#elect-cost").val();
    var elect_used = $("#used-elect-months").val();
    var elect_bill = $("#elect-bill").val();
    var elect_brand = $("#elect-brand").val();
    var elect_model = $("#elect-model").val();
    var elect_user_contact = $("#elect-user-contact").val();
    var elect_user_email = $("#user-email").val();
    var elect_includes = $("#elect-includes").val();
    var elect_desc = $("#elect-desc").val();
    var adv_type=$("input[name=adv-type]:checked").val();
    if(adv_type=="Paid"){
        var advt_type=$("input[name=paidser-type]:checked").val();
    }else{
        var advt_type=adv_type;
    }
});

//Furniture & decoration Form
$("#submithomelifestyleForm").click(function(){
    var category_id=$("#adv_cat").val();
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
    var homelife_user_contact = $("#homelife-user-contact").val();
    var homelife_user_email = $("#user-email").val();
    var homelife_includes = $("#homelife-includes").val();
    var homelife_desc = $("#homelife-desc").val();
    var adv_type=$("input[name=adv-type]:checked").val();
    if(adv_type=="Paid"){
        var advt_type=$("input[name=paidser-type]:checked").val();
    }else{
        var advt_type=adv_type;
    }
});

//Pets Form
$("#submitpetsForm").click(function(){
    var category_id=$("#adv_cat").val();
    var pet_user_contact = $("#pet-cat-user-contact").val();
    var pet_user_email = $("#user-email").val();
});

//Community Form
$("#submitcommunitylForm").click(function(){
    var category_id=$("#adv_cat").val();
    var comm_user_contact = $("#community-user-contact").val();
    var comm_user_email = $("#user-email").val();
});

//Entertainment Form
$("#submitentertainmentForm").click(function(){
    var category_id=$("#adv_cat").val();
    var enter_user_contact = $("#entertainment-user-contact").val();
    var enter_user_email = $("#user-email").val();
});

//Events Form
$("#submiteventForm").click(function(){
    var category_id=$("#adv_cat").val();
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
    if(adv_type=="Paid"){
        var advt_type=$("input[name=paidser-type]:checked").val();
    }else{
        var advt_type=adv_type;
    }
});

//Matrimonial Form
$("#submitmatrimonialForm").click(function(){
    var category_id=$("#adv_cat").val();
    var matri_user_contact = $("#matrimonial-user-contact").val();
    var enter_user_email = $("#user-email").val();
});