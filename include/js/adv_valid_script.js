$(function(){
//Services form Validation

    $("#validateservicesForm").click(function(){
        var category_id=$("#adv_cat");
        var user_id = $("#user-id");
        var service_type=$("#ser-type");
        var service_fees=$("#ser-fee");
        var service_name=$("#Exact-Service-name");
        var user_name=$("#user-name");
        var user_email=$("#user-email");
        var user_contact = $("#user-contact");
        var user_type=$("input[name=user-type]:checked");
        var company_name=$("#company-name");
        var company_email=$("#company-email");
        var company_contact = $("#company-contact");
        var adv_type=$("input[name=adv-type]:checked");
        var advt_type;
        if(adv_type=="Paid"){
            advt_type=$("input[name=paidser-type]:checked");
        }else{
            advt_type=adv_type;
        }
    });

//Job form Validation

    $("#validatejobForm").click(function(){
        var category_id=$("#adv_cat");
        var user_id = $("#user-id");
        var job_title = $("#job-title");
        var job_type = $("#job-type");
        var job_role = $("#job-role");
        var min_sal = $("#min-sal");
        var max_sal = $("#max-sal");
        var job_company_name = $("#job-company-name");
        var job_company_email = $("#job-company-email");
        var job_location = $("#job-location");
        var job_experience = $("#job-exp");
        var job_recruiter_number = $("#recruit-number");
        var job_desc = $("#job-desc");
        var adv_type=$("input[name=adv-type]:checked");
        var advt_type;
        if(adv_type=="Paid"){
            advt_type=$("input[name=paidser-type]:checked");
        }else{
            advt_type=adv_type;
        }
    });

//Home & real estate form Validation

    $("#validatehomeForm").click(function(){
        var category_id=$("#adv_cat");
        var user_id = $("#user-id");
        var home_todo = $("input[name=home-todo]:checked");
        var home_sell_type = $("input[name=home-sell-type]:checked");
        var home_buy_type = $("input[name=home-buy-type]:checked");
        var home_rent_type = $("input[name=home-rent-type]:checked");
        var home_size = $("#home-size");
        var home_cost = $("#home-cost");
        var home_user_name = $("#user-name");
        var home_user_email = $("#user-email");
        var home_user_type = $("input[name=user-type]:checked");
        var home_company_name = $("#company-name");
        var home_company_email = $("#company-email");
        var user_contact = $("#user-contact");
        var company_contact = $("#company-contact");
        var adv_type=$("input[name=adv-type]:checked");
        var advt_type;
        if(adv_type=="Paid"){
            advt_type=$("input[name=paidser-type]:checked");
        }else{
            advt_type=adv_type;
        }
    });

//Home & lifestyle form Validation

    $("#validatehomelifestyleForm").click(function(){
        var category_id=$("#adv_cat");
        var user_id = $("#user-id");
        var home_category = $("#home-cat");
        var furn_subcategory = $("#furni-subcategory");
        var kids_subcategory = $("#kids-subcategory");
        var sports_subcategory = $("#sports-subcategory");
        var fashion_subcategory = $("#fashion-subcategory");
        var other_subcategory = $("#otherlifehome");
        var homelife_ad_title = $("#homelife-ad-title");
        var homelife_condition = $("#homelife-condition");
        var homelife_cost = $("#homelife-cost");
        var homelife_used = $("#used-homelife-months");
        var homelife_bill = $("#homelife-bill");
        var user_name=$("#user-name");
        var homelife_user_contact = $("#homelife-user-contact");
        var homelife_user_email = $("#user-email");
        var homelife_includes = $("#homelife-includes");
        var homelife_desc = $("#homelife-desc");
        var adv_type=$("input[name=adv-type]:checked");
        var advt_type;
        if(adv_type=="Paid"){
            advt_type=$("input[name=paidser-type]:checked");
        }else{
            advt_type=adv_type;
        }
    });

//Electronics form Validation

    $("#validateelectronicsForm").click(function(){
        var category_id=$("#adv_cat");
        var user_id = $("#user-id");
        var elect_want = $("#elect-want");
        var elect_subcategory = $("#electronics-subcategory");
        var elect_other = $("#electronics-other");
        var elect_ad_title = $("#electronics-ad-title");
        var elect_condition = $("#elect-condition");
        var elect_cost = $("#elect-cost");
        var elect_used = $("#used-elect-months");
        var elect_bill = $("#elect-bill");
        var elect_brand = $("#elect-brand");
        var elect_model = $("#elect-model");
        var user_name=$("#user-name");
        var elect_user_contact = $("#elect-user-contact");
        var elect_user_email = $("#user-email");
        var elect_includes = $("#elect-includes");
        var elect_desc = $("#elect-desc");
        var adv_type=$("input[name=adv-type]:checked");
        var advt_type;
        if(adv_type=="Paid"){
            advt_type=$("input[name=paidser-type]:checked");
        }else{
            advt_type=adv_type;
        }
    });

//Bike form Validation

    $("#validatebikeForm").click(function(){
        var category_id=$("#adv_cat");
        var user_id = $("#user-id");
        var bike_cat_type = $("input[name=bike-cat-type]:checked");
        var bike_brand = $("#bike-brand");
        var bike_cost = $("#bike-cost");
        var bike_reg_year = $("#bike-reg-year");
        var bike_city = $("#bike-city");
        var bike_user_name = $("#user-name");
        var bike_user_email = $("#user-email");
        var bike_user_contact = $("#bike-user-contact");
        var bike_user_type = $("input[name=bike-user-type]:checked");
        var bike_kms_driven = $("#bike-driven");
        var adv_type=$("input[name=adv-type]:checked");
        var advt_type;
        if(adv_type=="Paid"){
            advt_type=$("input[name=paidser-type]:checked");
        }else{
            advt_type=adv_type;
        }
    });

//Car form Validation

    $("#validatecarForm").click(function(){
        var category_id=$("#adv_cat");
        var user_id = $("#user-id");
        var car_cat_type = $("input[name=car-cat-type]:checked");
        var car_brand = $("#car-brand");
        var car_cost = $("#car-cost");
        var car_reg_year = $("#car-reg-year");
        var car_city = $("#car-city");
        var car_user_name = $("#user-name");
        var car_user_email = $("#user-email");
        var car_user_contact = $("#car-user-contact");
        var car_user_type = $("input[name=car-user-type]:checked");
        var car_kms_driven = $("#car-driven");
        var adv_type=$("input[name=adv-type]:checked");
        var advt_type;
        if(adv_type=="Paid"){
            advt_type=$("input[name=paidser-type]:checked");
        }else{
            advt_type=adv_type;
        }
    });

//Education form Validation

    $("#validateeducationForm").click(function(){
        var category_id=$("#adv_cat");
        var user_id = $("#user-id");
        var education_type = $("input[name=education-type]:checked");
        var other_education_type = $("#other-edu-val");
        var edu_title = $("#edu-title");
        var edu_city = $("#edu-city");
        var edu_fees = $("#edu-fees");
        var edu_stream = $("#edu-stream");
        var edu_insti_name = $("#edu-insti-name");
        var edu_insti_address = $("#edu-insti-address");
        var edu_insti_contact = $("#edu-insti-contact");
        var edu_insti_email = $("#edu-insti-email");
        var edu_desc = $("#edu-desc");
        var adv_type=$("input[name=adv-type]:checked");
        var advt_type;
        if(adv_type=="Paid"){
            advt_type=$("input[name=paidser-type]:checked");
        }else{
            advt_type=adv_type;
        }
    });

//Mobile & Tablets form Validation

    $("#validatemobilesForm").click(function(){
        var category_id=$("#adv_cat");
        var user_id = $("#user-id");
        var mobile_want = $("#mobiles-want");
        var mobile_subcategory = $("#mobile-subcategory");
        var mob_ad_title = $("#mobile-ad-title");
        var mob_condition = $("#mobiles-condition");
        var mobile_cost = $("#Mobile-cost");
        var mobile_used = $("#used-mobile-months");
        var mob_bill = $("#mobile-bill");
        var mob_brand = $("#Mobile-brand");
        var mob_model = $("#mobile-model");
        var user_name=$("#user-name");
        var mob_user_contact = $("#mobile-user-contact");
        var mob_user_email = $("#user-email");
        var mob_includes = $("#mobile-includes");
        var mob_desc = $("#Mobile-desc");
        var adv_type=$("input[name=adv-type]:checked");
        var advt_type;
        if(adv_type=="Paid"){
            advt_type=$("input[name=paidser-type]:checked");
        }else{
            advt_type=adv_type;
        }
    });

//Event form Validation

    $("#validateeventForm").click(function(){
        var category_id=$("#adv_cat");
        var user_id = $("#user-id");
        var event_type = $("#event-type");
        var event_manag_type = $("#management-event-ser-type");
        var event_live_type = $("#live-event-ser-type");
        var event_other_type = $("#other-event-ser");
        var event_city = $("#event-city");
        var event_cost = $("#event-cost");
        var event_user_name = $("#user-name");
        var event_user_email = $("#user-email");
        var event_ser_type = $("input[name=event-ser-type]:checked");
        var event_user_contact = $("#event-user-contact");
        var event_desc = $("#event-desc");
        var adv_type=$("input[name=adv-type]:checked");
        var advt_type;
        if(adv_type=="Paid"){
            advt_type=$("input[name=paidser-type]:checked");
        }else{
            advt_type=adv_type;
        }
    });

//Pets form Validation

    $("#validatepetsForm").click(function(){
        //getting fields
        var category_id=$("#adv_cat");
        var user_id = $("#user_id");
        var user_contact = $("#pet-cat-user-contact");
        var user_name=$("#user-name");
        var pet_user_email = $("#user-email");

        if(category_id.val() == ""){
            $("#alert").text("Unable To fetch Category! Please Select a Category Again...");
        }
        else{
            if(user_id.val() == ""){
                $("#alert").text("Unable To fetch User Info! Please login Again...");
            }
            else{
                if(user_contact.val() == "" || isNaN(user_contact.val()) || !user_contact.val().match("[789][0-9]{9}") || user_contact.val().length != 10){
                    $("#alert").text("User Contact Input is Invalid. It should be 10 digits");
                    user_contact.focus();
                }
                else{
                    if(pet_user_email.val() == "" || !pet_user_email.val().match("([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})")){
                        $("#alert").text("User Email Input is Invalid. It should be like example@domain.com");
                        pet_user_email.focus();
                    }
                    else{
                        if(user_name.val() == "" || !user_name.val().match("[a-zA-Z_-]{3,15}") || (user_name.val().lenght >= 3 && user_name.val().lenght <= 15)){
                            $("#alert").text("User Name is invalid. It must contain 3 to 15 characters.");
                            user_name.focus();
                        }
                        else{
                            $("#validatepetsForm").addClass("hidden");
                            $("#submitpetsForm").removeClass("hidden");
                            user_contact.prop("disabled",true);
                            pet_user_email.prop("disabled",true);
                            user_name.prop("disabled",true);
                            $("#alert").text("");
                        }
                    }
                }
            }
        }

    });

//Community form Validation

    $("#validatecommunityForm").click(function(){
        //getting fields
        var category_id=$("#adv_cat");
        var user_id = $("#user_id");
        var user_contact = $("#community-user-contact");
        var user_name=$("#user-name");
        var pet_user_email = $("#user-email");

        if(category_id.val() == ""){
            $("#alert").text("Unable To fetch Category! Please Select a Category Again...");
        }
        else{
            if(user_id.val() == ""){
                $("#alert").text("Unable To fetch User Info! Please login Again...");
            }
            else{
                if(user_contact.val() == "" || isNaN(user_contact.val()) || !user_contact.val().match("[789][0-9]{9}") || user_contact.val().length != 10){
                    $("#alert").text("User Contact Input is Invalid. It should be 10 digits");
                    user_contact.focus();
                }
                else{
                    if(pet_user_email.val() == "" || !pet_user_email.val().match("([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})")){
                        $("#alert").text("User Email Input is Invalid. It should be like example@domain.com");
                        pet_user_email.focus();
                    }
                    else{
                        if(user_name.val() == "" || !user_name.val().match("[a-zA-Z_-]{3,15}") || (user_name.val().lenght >= 3 && user_name.val().lenght <= 15)){
                            $("#alert").text("User Name is invalid. It must contain 3 to 15 characters.");
                            user_name.focus();
                        }
                        else{
                            $("#validatecommunityForm").addClass("hidden");
                            $("#submitcommunityForm").removeClass("hidden");
                            user_contact.prop("disabled",true);
                            pet_user_email.prop("disabled",true);
                            user_name.prop("disabled",true);
                            $("#alert").text("");
                        }
                    }
                }
            }
        }

    });

//Matrimonial form Validation

    $("#validatematrimonialForm").click(function(){
        //getting fields
        var category_id=$("#adv_cat");
        var user_id = $("#user_id");
        var user_contact = $("#matrimonial-user-contact");
        var user_name=$("#user-name");
        var pet_user_email = $("#user-email");

        if(category_id.val() == ""){
            $("#alert").text("Unable To fetch Category! Please Select a Category Again...");
        }
        else{
            if(user_id.val() == ""){
                $("#alert").text("Unable To fetch User Info! Please login Again...");
            }
            else{
                if(user_contact.val() == "" || isNaN(user_contact.val()) || !user_contact.val().match("[789][0-9]{9}") || user_contact.val().length != 10){
                    $("#alert").text("User Contact Input is Invalid. It should be 10 digits");
                    user_contact.focus();
                }
                else{
                    if(pet_user_email.val() == "" || !pet_user_email.val().match("([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})")){
                        $("#alert").text("User Email Input is Invalid. It should be like example@domain.com");
                        pet_user_email.focus();
                    }
                    else{
                        if(user_name.val() == "" || !user_name.val().match("[a-zA-Z_-]{3,15}") || (user_name.val().lenght >= 3 && user_name.val().lenght <= 15)){
                            $("#alert").text("User Name is invalid. It must contain 3 to 15 characters.");
                            user_name.focus();
                        }
                        else{
                            $("#validatematrimonialForm").addClass("hidden");
                            $("#submitmatrimonialForm").removeClass("hidden");
                            user_contact.prop("disabled",true);
                            pet_user_email.prop("disabled",true);
                            user_name.prop("disabled",true);
                            $("#alert").text("");
                        }
                    }
                }
            }
        }

    });

//Entertainment form Validation

    $("#validateentertainmentForm").click(function(){
        //getting fields
        var category_id=$("#adv_cat");
        var user_id = $("#user_id");
        var user_contact = $("#entertainment-user-contact");
        var user_name=$("#user-name");
        var pet_user_email = $("#user-email");

        if(category_id.val() == ""){
            $("#alert").text("Unable To fetch Category! Please Select a Category Again...");
        }
        else{
            if(user_id.val() == ""){
                $("#alert").text("Unable To fetch User Info! Please login Again...");
            }
            else{
                if(user_contact.val() == "" || isNaN(user_contact.val()) || !user_contact.val().match("[789][0-9]{9}") || user_contact.val().length != 10){
                    $("#alert").text("User Contact Input is Invalid. It should be 10 digits");
                    user_contact.focus();
                }
                else{
                    if(pet_user_email.val() == "" || !pet_user_email.val().match("([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})")){
                        $("#alert").text("User Email Input is Invalid. It should be like example@domain.com");
                        pet_user_email.focus();
                    }
                    else{
                        if(user_name.val() == "" || !user_name.val().match("[a-zA-Z_-]{3,15}") || (user_name.val().lenght >= 3 && user_name.val().lenght <= 15)){
                            $("#alert").text("User Name is invalid. It must contain 3 to 15 characters.");
                            user_name.focus();
                        }
                        else{
                            $("#validateentertainmentForm").addClass("hidden");
                            $("#submitentertainmentForm").removeClass("hidden");
                            user_contact.prop("disabled",true);
                            pet_user_email.prop("disabled",true);
                            user_name.prop("disabled",true);
                            $("#alert").text("");
                        }
                    }
                }
            }
        }

    });


});