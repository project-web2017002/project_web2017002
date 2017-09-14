// this file will get form data from users when user clicks on submit button


var alert = document.getElementById('alert');

$("#submitForm").click(function(){
    var formCat = $('.postform').attr('name'); // get form name
    if(formCat == '' || formCat == undefined){
        alert.innerHTML = err[43]; // get error from errorlog.js
    }else{
        var usertype;
        var data;
        var company_contact;
        var category_id=$("#adv_cat").val();
        var user_id = $("#user_id").val();
        var user_name=$("#user-name").val();
        var user_email=$("#user-email").val();
        var user_contact = $("#user-contact").val();
        var pos_city=$("#pocity").val();
        var post_city = pos_city.replace(/,/gi,"-");
        var adv_type=$("input[name=adv-type]:checked").val();
        var descc = editableDESC.document.body.innerHTML;
        var advt_type;
        if(adv_type=="Paid"){
            advt_type=$("input[name=paidser-type]:checked").val();
        }else {
            advt_type = adv_type;
        }

        if(category_id == '' || category_id == undefined){
            alert.innerHTML = err[0];
        }else{
            if(user_id == '' || user_id == undefined){
                alert.innerHTML = err[1];
            }else{
                var subs = user_id.substring(0,1);
                if(subs == 'o'){
                    usertype = "Our";
                    user_id = user_id.substring(12);
                }else if(subs == 'g'){
                    usertype = "Google";
                    user_id = user_id.substring(12);
                }else if(subs == 'f'){
                    usertype = "Facebook";
                    user_id = user_id.substring(12);
                }
                if(formCat == 'servicesForm'){
                    var service_type=$("#ser-type").val();
                    var service_fees=$("#cost").val();
                    var service_name=$("#Exact-Service-name").val();
                    var user_type=$("input[name=user-type]:checked").val();
                    var company_name=$("#company-name").val();
                    var company_email=$("#company-email").val();
                    company_contact = $("#company-contact").val();
                    var ser_desc = descc;
                    //data to pass to php page
                    data = "categoryid="+ category_id +"&userid="+ user_id +"&servicetype="+ service_type +"&servicefees="+ service_fees +
                        "&servicename="+ service_name +"&city=" + post_city + "&username="+ user_name +"&useremail="+ user_email +"&usercontact="+ user_contact +
                        "&usertype="+ user_type +"&companyname="+ company_name +"&companyemail="+ company_email +"&companycontact="+
                        company_contact +"&advtype=" + advt_type + "&utype=" + usertype + "&desc=" + ser_desc;

                    if(service_type == ''){
                        alert.innerHTML = err[6];
                    }else{ if(service_fees == ''){ alert.innerHTML = err[7]; }
                    else { if(service_name == ''){ alert.innerHTML = err[8]; }
                    else { if(post_city == ''){ alert.innerHTML = err[2]; }
                    else { if(user_name == '' || !user_name.match("[a-zA-Z_-]{3,15}") || (user_name.lenght >= 3 && user_name.lenght <= 15)){ alert.innerHTML = err[3]; }
                    else { if(user_email == '' || !user_email.match("([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})")){ alert.innerHTML = err[4]; }
                    else { if(user_type == ''){ alert.innerHTML = err[9]; }
                    else { if(user_contact == '' || isNaN(user_contact) || !user_contact.match("[789][0-9]{9}") || user_contact.length != 10){ alert.innerHTML = err[5]; }
                    else { if(user_type == 'Company') {
                        if(company_name == '' || !company_name.match("[a-zA-Z_-]{3,15}") || (company_name.lenght >= 3 && company_name.lenght <= 15)) { alert.innerHTML = err[10]; }
                        else if(company_email == '' || !company_email.match("([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})")) { alert.innerHTML = err[11]; }
                        else {
                            if(company_contact == '' || isNaN(company_contact) || !company_contact.match("[789][0-9]{9}") || company_contact.length != 10){ alert.innerHTML = err[12]; }
                            else { if(adv_type == ''){ alert.innerHTML = err[13]; }
                            else if(adv_type == 'Paid'){ if(advt_type == ''){ alert.innerHTML = err[14]; }
                            else { submitservices(data); }
                            }
                            else{ submitservices(data); }
                            }
                        }
                    } else { if(adv_type == ''){ alert.innerHTML = err[13]; }
                    else if(adv_type == 'Paid'){
                        if(advt_type == ''){ alert.innerHTML = err[14]; }
                        else{ submitservices(data); }
                    }
                    else{ submitservices(data); }
                    }}}}}}}}}
                }
                else if(formCat == 'bikesForm'){
                    var bike_cat_type = $("input[name=bike-cat-type]:checked").val();
                    var bike_brand = $("#bike-brand").val();
                    var bike_cost = $("#cost").val();
                    var bike_reg_year = $("#bike-reg-year").val();
                    var bike_user_type = $("input[name=bike-user-type]:checked").val();
                    var bike_kms_driven = $("#bike-driven").val();
                    var bike_desc = descc;

                    data = "categoryid="+ category_id +"&userid="+ user_id +"&bikecattype="+ bike_cat_type +"&bikebrand="+ bike_brand +"&bikecost="+
                        bike_cost +"&bikeregyear="+ bike_reg_year +"&bikecity="+ post_city +"&username="+ user_name +"&useremail="+ user_email +
                        "&usercontact="+ user_contact + "&usertype="+ bike_user_type +"&bikekmsdriven="+ bike_kms_driven +"&bikedesc="+bike_desc
                        +"&advtype="+ advt_type+ "&utype=" + usertype;

                    if(bike_cat_type == ''){
                        alert.innerHTML = err[15];
                    }else{
                        if(bike_brand == ''){
                            alert.innerHTML = err[16];
                        }else{
                            if(bike_cost == ''){
                                alert.innerHTML = err[7];
                            }else{
                                if(bike_reg_year == ''){
                                    alert.innerHTML = err[17];
                                }else{
                                    if(post_city == ''){
                                        alert.innerHTML = err[2];
                                    }else{
                                        if(user_name == '' || !user_name.match("[a-zA-Z_-]{3,15}") || (user_name.lenght >= 3 && user_name.lenght <= 15)){
                                            alert.innerHTML = err[3];
                                        }else{
                                            if(user_email == '' || !user_email.match("([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})")){
                                                alert.innerHTML = err[4];
                                            }else{
                                                if(bike_user_type == ''){
                                                    alert.innerHTML = err[9];
                                                }else{
                                                    if(user_contact == '' || isNaN(user_contact) || !user_contact.match("[789][0-9]{9}") || user_contact.length != 10){
                                                        alert.innerHTML = err[5];
                                                    }else{
                                                        if(bike_cat_type == 'Sell A bike'){
                                                            if(bike_kms_driven == ''){
                                                                alert.innerHTML = err[18];
                                                            }else{
                                                                if(bike_desc == ''){
                                                                    alert.innerHTML = err[19];
                                                                }else{
                                                                    if(adv_type == ''){
                                                                        alert.innerHTML = err[13];
                                                                    }else if(adv_type == 'Paid'){
                                                                        if(advt_type == ''){
                                                                            alert.innerHTML = err[14];
                                                                        }else{
                                                                            submitbikes(data);
                                                                        }
                                                                    }else{
                                                                        submitbikes(data);
                                                                    }
                                                                }
                                                            }
                                                        }else{
                                                            if(bike_desc == ''){
                                                                alert.innerHTML = err[19];
                                                            }else{
                                                                if(adv_type == ''){
                                                                    alert.innerHTML = err[13];
                                                                }else if(adv_type == 'Paid'){
                                                                    if(advt_type == ''){
                                                                        alert.innerHTML = err[14];
                                                                    }else{
                                                                        submitbikes(data);
                                                                    }
                                                                }else{
                                                                    submitbikes(data);
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
                else if(formCat == 'carsForm'){
                    var car_cat_type = $("input[name=car-cat-type]:checked").val();
                    var car_brand = $("#car-brand").val();
                    var car_cost = $("#cost").val();
                    var car_reg_year = $("#car-reg-year").val();
                    var car_user_type = $("input[name=car-user-type]:checked").val();
                    var car_kms_driven = $("#car-driven").val();
                    var car_desc = descc;

                    data = "categoryid="+ category_id +"&userid="+ user_id +"&carcattype="+ car_cat_type +"&carbrand="+ car_brand +"&carcost="+
                        car_cost +"&carregyear="+ car_reg_year +"&carcity="+ post_city +"&username="+ user_name +"&useremail="+ user_email +
                        "&usercontact="+ user_contact + "&usertype="+ car_user_type +"&carkmsdriven="+ car_kms_driven +"&cardesc="+car_desc
                        +"&advtype="+ advt_type+ "&utype=" + usertype;

                    if(car_cat_type == ''){
                        alert.innerHTML = err[15];
                    }else{
                        if(car_brand == ''){
                            alert.innerHTML = err[20];
                        }else{
                            if(car_cost == ''){
                                alert.innerHTML = err[7];
                            }else{
                                if(car_reg_year == ''){
                                    alert.innerHTML = err[21];
                                }else{
                                    if(post_city == ''){
                                        alert.innerHTML = err[2];
                                    }else{
                                        if(user_name == '' || !user_name.match("[a-zA-Z_-]{3,15}") || (user_name.lenght >= 3 && user_name.lenght <= 15)){
                                            alert.innerHTML = err[3];
                                        }else{
                                            if(user_email == '' || !user_email.match("([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})")){
                                                alert.innerHTML = err[4];
                                            }else{
                                                if(car_user_type == ''){
                                                    alert.innerHTML = err[9];
                                                }else{
                                                    if(user_contact == '' || isNaN(user_contact) || !user_contact.match("[789][0-9]{9}") || user_contact.length != 10){
                                                        alert.innerHTML = err[5];
                                                    }else{
                                                        if(car_cat_type == 'Sell A Car'){
                                                            if(car_kms_driven == ''){
                                                                alert.innerHTML = err[22];
                                                            }else{
                                                                if(car_desc == ''){
                                                                    alert.innerHTML = err[19];
                                                                }else{
                                                                    if(adv_type == ''){
                                                                        alert.innerHTML = err[13];
                                                                    }else if(adv_type == 'Paid'){
                                                                        if(advt_type == ''){
                                                                            alert.innerHTML = err[14];
                                                                        }else{
                                                                            submitcars(data);
                                                                        }
                                                                    }else{
                                                                        submitcars(data);
                                                                    }
                                                                }
                                                            }
                                                        }else{
                                                            if(car_desc == ''){
                                                                alert.innerHTML = err[19];
                                                            }else{
                                                                if(adv_type == ''){
                                                                    alert.innerHTML = err[13];
                                                                }else if(adv_type == 'Paid'){
                                                                    if(advt_type == ''){
                                                                        alert.innerHTML = err[14];
                                                                    }else{
                                                                        submitcars(data);
                                                                    }
                                                                }else{
                                                                    submitcars(data);
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
                else if(formCat == 'educationForm'){
                    var education_type = $("#education-type").val();
                    var other_education_type = $("#other-edu-val").val();
                    var edu_title = $("#edu-title").val();
                    var edu_fees = $("#cost").val();
                    var edu_stream = $("#edu-stream").val();
                    var edu_insti_name = $("#edu-insti-name").val();
                    var edu_insti_address = $("#edu-insti-address").val();
                    var edu_insti_contact = $("#edu-insti-contact").val();
                    var edu_insti_email = $("#edu-insti-email").val();
                    var edu_desc = descc;

                    data = "categoryid="+ category_id +"&userid="+ user_id +"&edutype="+ education_type +"&otheredutype="+ other_education_type +
                        "&edutitle="+ edu_title +"&educity="+ post_city + "&edufees="+ edu_fees +"&edustream="+ edu_stream +"&eduinstiname="+
                        edu_insti_name +"&eduinstiaddress="+ edu_insti_address +"&insticontact="+ edu_insti_contact +"&instiemail="+ edu_insti_email +
                        "&edudesc="+ edu_desc +"&advtype="+ advt_type+ "&utype=" + usertype;

                    if(education_type == ''){
                        alert.innerHTML = err[6];
                    }else if(education_type == 'Other'){
                        if(other_education_type == ''){
                            alert.innerHTML = err[23];
                        }else{
                            if(edu_title == ''){
                                alert.innerHTML = err[8];
                            }else{
                                if(post_city == ''){
                                    alert.innerHTML = err[2];
                                }else{
                                    if(edu_fees == ''){
                                        alert.innerHTML = err[24];
                                    }else{
                                        if(edu_stream == ''){
                                            alert.innerHTML = err[25];
                                        }else{
                                            if(edu_insti_name == '' || !edu_insti_name.match("[a-zA-Z_-]{3,15}") || (edu_insti_name.lenght >= 3 && edu_insti_name.lenght <= 15)){
                                                alert.innerHTML = err[26];
                                            }else{
                                                if(edu_insti_address == ''){
                                                    alert.innerHTML = err[27];
                                                }else{
                                                    if(edu_insti_contact == '' || isNaN(edu_insti_contact) || !edu_insti_contact.match("[789][0-9]{9}") || edu_insti_contact.length != 10){
                                                        alert.innerHTML = err[48];
                                                    }else{
                                                        if(edu_insti_email == '' || !edu_insti_email.match("([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})")){
                                                            alert.innerHTML = err[49];
                                                        }else{
                                                            if(edu_desc == ''){
                                                                alert.innerHTML = err[19];
                                                            }else{
                                                                if(adv_type == ''){
                                                                    alert.innerHTML = err[13];
                                                                }else if(adv_type == 'Paid'){
                                                                    if(advt_type == ''){
                                                                        alert.innerHTML = err[14];
                                                                    }else{
                                                                        submiteducation(data);
                                                                    }
                                                                }else{
                                                                    submiteducation(data);
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }else{
                        if(edu_title == ''){
                            alert.innerHTML = err[8];
                        }else{
                            if(post_city == ''){
                                alert.innerHTML = err[2];
                            }else{
                                if(edu_fees == ''){
                                    alert.innerHTML = err[24];
                                }else{
                                    if(edu_stream == ''){
                                        alert.innerHTML = err[25];
                                    }else{
                                        if(edu_insti_name == '' || !edu_insti_name.match("[a-zA-Z_-]{3,15}") || (edu_insti_name.lenght >= 3 && edu_insti_name.lenght <= 15)){
                                            alert.innerHTML = err[26];
                                        }else{
                                            if(edu_insti_address == ''){
                                                alert.innerHTML = err[27];
                                            }else{
                                                if(edu_insti_contact == '' || isNaN(edu_insti_contact) || !edu_insti_contact.match("[789][0-9]{9}") || edu_insti_contact.length != 10){
                                                    alert.innerHTML = err[48];
                                                }else{
                                                    if(edu_insti_email == '' || !edu_insti_email.match("([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})")){
                                                        alert.innerHTML = err[49];
                                                    }else{
                                                        if(edu_desc == ''){
                                                            alert.innerHTML = err[19];
                                                        }else{
                                                            if(adv_type == ''){
                                                                alert.innerHTML = err[13];
                                                            }else if(adv_type == 'Paid'){
                                                                if(advt_type == ''){
                                                                    alert.innerHTML = err[14];
                                                                }else{
                                                                    submiteducation(data);
                                                                }
                                                            }else{
                                                                submiteducation(data);
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
                else if(formCat == 'homeForm'){
                    var home_todo = $("input[name=home-todo]:checked").val();
                    var home_sell_type = $("input[name=home-sell-type]:checked").val();
                    var home_buy_type = $("input[name=home-buy-type]:checked").val();
                    var home_rent_type = $("input[name=home-rent-type]:checked").val();
                    var home_size = $("#home-size").val();
                    var home_cost = $("#cost").val();
                    var home_user_type = $("input[name=user-type]:checked").val();
                    var home_company_name = $("#company-name").val();
                    var home_company_email = $("#company-email").val();
                    company_contact = $("#company-contact").val();
                    var hme_des = descc;

                    data = "categoryid="+ category_id +"&userid="+ user_id +"&hometodo="+ home_todo +"&homeselltype="+ home_sell_type +
                        "&homebuytype="+ home_buy_type +"&homerenttype="+ home_rent_type +"&homesize="+ home_size +"&homecost="+ home_cost +
                        "&username="+ user_name +"&useremail="+ user_email +"&usertype="+ home_user_type +"&companyname="+ home_company_name +
                        "&city=" + post_city + "&companyemail="+ home_company_email +"&usercontact="+ user_contact
                        +"&companycontact="+ company_contact +"&advtype="+advt_type+ "&utype=" + usertype + "&desc=" + hme_des;

                    if(home_todo == ''){
                        alert.innerHTML = err[28];
                    }else{
                        if(home_size == ''){
                            alert.innerHTML = err[29];
                        }else{
                            if(home_cost == ''){
                                alert.innerHTML = err[7];
                            }else{
                                if(user_name == '' || !user_name.match("[a-zA-Z_-]{3,15}") || (user_name.lenght >= 3 && user_name.lenght <= 15)){
                                    alert.innerHTML = err[3];
                                }else{
                                    if(user_email == '' || !user_email.match("([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})")){
                                        alert.innerHTML = err[4];
                                    }else{
                                        if(user_contact == '' || isNaN(user_contact) || !user_contact.match("[789][0-9]{9}") || user_contact.length != 10){
                                            alert.innerHTML = err[5]
                                        }else{
                                            if(home_user_type == ''){
                                                alert.innerHTML = err[9];
                                            }else if(home_user_type == 'Company'){
                                                if(home_company_name == '' || !home_company_name.match("[a-zA-Z_-]{3,15}") || (home_company_name.lenght >= 3 && home_company_name.lenght <= 15)){
                                                    alert.innerHTML = err[10];
                                                }else{
                                                    if(post_city == ''){
                                                        alert.innerHTML = err[2];
                                                    }else {
                                                        if(home_company_email == '' || !home_company_email.match("([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})")){
                                                            alert.innerHTML = err[11];
                                                        }else{
                                                            if(company_contact == '' || isNaN(company_contact) || !company_contact.match("[789][0-9]{9}") || company_contact.length != 10){
                                                                alert.innerHTML = err[12];
                                                            }else{
                                                                if(adv_type == ''){
                                                                    alert.innerHTML = err[13];
                                                                }else if(adv_type == 'Paid'){
                                                                    if(advt_type == ''){
                                                                        alert.innerHTML = err[14];
                                                                    }else{
                                                                        submithome(data);
                                                                    }
                                                                }else{
                                                                    submithome(data);
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }else{
                                                if(adv_type == ''){
                                                    alert.innerHTML = err[13];
                                                }else if(adv_type == 'Paid'){
                                                    if(advt_type == ''){
                                                        alert.innerHTML = err[14];
                                                    }else{
                                                        submithome(data);
                                                    }
                                                }else{
                                                    submithome(data);
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
                else if(formCat == 'jobsForm'){
                    var job_title = $("#job-title").val();
                    var job_type = $("#job-type").val();
                    var job_role = $("#job-role").val();
                    var min_sal = $("#min-sal").val();
                    var max_sal = $("#max-sal").val();
                    var job_company_name = $("#job-company-name").val();
                    var job_company_email = $("#job-company-email").val();
                    var job_experience = $("#job-exp").val();
                    var job_recruiter_number = $("#recruit-number").val();
                    var job_desc = descc;

                    data = "categoryid="+ category_id +"&userid="+ user_id +"&jobtitle="+ job_title +"&jobtype="+ job_type +"&jobrole="+ job_role +
                        "&minsal="+ min_sal +"&maxsal="+ max_sal +"&companyname="+ job_company_name +"&companyemail="+ job_company_email +
                        "&joblocation="+ post_city +"&jobexp="+ job_experience +"&recruiternumber="+ job_recruiter_number +"&jobdesc="+ job_desc +
                        "&advtype="+advt_type+ "&utype=" + usertype;

                    if(job_title == ''){
                        alert.innerHTML = err[8];
                    }else{
                        if(job_type == ''){
                            alert.innerHTML = err[30];
                        }else{
                            if(job_role == ''){
                                alert.innerHTML = err[31];
                            }else{
                                if(min_sal == ''){
                                    alert.innerHTML = err[32];
                                }else{
                                    if(max_sal == ''){
                                        alert.innerHTML = err[33];
                                    }else{
                                        if(job_company_name == '' || !job_company_name.match("[a-zA-Z_-]{3,15}") || (job_company_name.lenght >= 3 && job_company_name.lenght <= 15)){
                                            alert.innerHTML = err[10];
                                        }else{
                                            if(job_company_email == '' || !job_company_email.match("([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})")){
                                                alert.innerHTML = err[11];
                                            }else{
                                                if(post_city == ''){
                                                    alert.innerHTML = err[2];
                                                }else{
                                                    if(job_experience == ''){
                                                        alert.innerHTML = err[34];
                                                    }else{
                                                        if(job_recruiter_number == '' || isNaN(job_recruiter_number) || !job_recruiter_number.match("[789][0-9]{9}") || job_recruiter_number.length != 10){
                                                            alert.innerHTML = err[35];
                                                        }else{
                                                            if(job_desc == ''){
                                                                alert.innerHTML = err[19];
                                                            }else{
                                                                if(adv_type == ''){
                                                                    alert.innerHTML = err[13];
                                                                }else if(adv_type == 'Paid'){
                                                                    if(advt_type == ''){
                                                                        alert.innerHTML = err[14];
                                                                    }
                                                                    else{
                                                                        submitjob(data);
                                                                    }
                                                                }else{
                                                                    submitjob(data);
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
                else if(formCat == 'mobilesForm'){
                    var mobile_want = $("#mobiles-want").val();
                    var mobile_subcategory = $("#mobile-subcategory").val();
                    var mob_ad_title = $("#mobile-ad-title").val();
                    var mob_condition = $("#mobiles-condition").val();
                    var mobile_cost = $("#cost").val();
                    var mobile_used = $("#used-mobile-months").val();
                    var mob_bill = $("#mobile-bill").val();
                    var mob_brand = $("#Mobile-brand").val();
                    var mob_model = $("#mobile-model").val();
                    var mob_includes = $("#mobile-includes").val();
                    var mob_desc = descc;

                    data= "categoryid="+ category_id +"&userid="+ user_id +"&mobwant="+ mobile_want +"&mobsubcategory="+ mobile_subcategory +
                        "&mobadtitle="+ mob_ad_title +"&city=" + post_city + "&mobcondition="+ mob_condition +"&mobcost="+ mobile_cost +"&mobused="+ mobile_used +
                        "&mobbill="+ mob_bill +"&mobbrand="+ mob_brand +"&mobmodel&="+ mob_model +"&username="+ user_name +"&useremail="+ user_email +
                        "&usercontact="+ user_contact +"&mobinclude="+ mob_includes +"&mobdesc="+ mob_desc
                        +"&advtype="+advt_type+ "&utype=" + usertype;

                    if(mobile_want == ''){
                        alert.innerHTML = err[28];
                    }else{
                        if(mobile_subcategory == ''){
                            alert.innerHTML = err[36];
                        }else{
                            if(mob_ad_title == ''){
                                alert.innerHTML = err[8];
                            }else{
                                if(post_city == ''){
                                    alert.innerHTML = err[2];
                                }else{
                                    if(mob_condition == ''){
                                        alert.innerHTML = err[37];
                                    }else{
                                        if(mobile_cost == ''){
                                            alert.innerHTML = err[7];
                                        }else{
                                            if(mob_condition == 'Used'){
                                                if(mobile_used == ''){
                                                    alert.innerHTML = err[38];
                                                }else{
                                                    if(mob_bill == ''){
                                                        alert.innerHTML = err[39];
                                                    }else{
                                                        if(mob_brand == ''){
                                                            alert.innerHTML = err[40];
                                                        }else{
                                                            if(mob_model = ''){
                                                                alert.innerHTML = err[41];
                                                            }else{
                                                                if(user_name == '' || !user_name.match("[a-zA-Z_-]{3,15}") || (user_name.lenght >= 3 && user_name.lenght <= 15)){
                                                                    alert.innerHTML = err[3];
                                                                }else{
                                                                    if(user_email == '' || !user_email.match("([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})")){
                                                                        alert.innerHTML = err[4];
                                                                    }else{
                                                                        if(user_contact == '' || isNaN(user_contact) || !user_contact.match("[789][0-9]{9}") || user_contact.length != 10){
                                                                            alert.innerHTML = err[5];
                                                                        }else{
                                                                            if(mob_includes == ''){
                                                                                alert.innerHTML = err[42];
                                                                            }else{
                                                                                if(mob_desc == ''){
                                                                                    alert.innerHTML = err[19];
                                                                                }else{
                                                                                    if(adv_type == ''){
                                                                                        alert.innerHTML = err[13];
                                                                                    }else if(adv_type == 'Paid'){
                                                                                        if(advt_type == ''){
                                                                                            alert.innerHTML = err[14];
                                                                                        }else{
                                                                                            submitmobile(data);
                                                                                        }
                                                                                    }else{
                                                                                        submitmobile(data);
                                                                                    }
                                                                                }
                                                                            }
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }else{
                                                if(mob_brand == ''){
                                                    alert.innerHTML = err[40];
                                                }else{
                                                    if(mob_model = ''){
                                                        alert.innerHTML = err[41];
                                                    }else{
                                                        if(user_name == '' || !user_name.match("[a-zA-Z_-]{3,15}") || (user_name.lenght >= 3 && user_name.lenght <= 15)){
                                                            alert.innerHTML = err[3];
                                                        }else{
                                                            if(user_email == '' || !user_email.match("([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})")){
                                                                alert.innerHTML = err[4];
                                                            }else{
                                                                if(user_contact == '' || isNaN(user_contact) || !user_contact.match("[789][0-9]{9}") || user_contact.length != 10){
                                                                    alert.innerHTML = err[5];
                                                                }else{
                                                                    if(mob_includes == ''){
                                                                        alert.innerHTML = err[42];
                                                                    }else{
                                                                        if(mob_desc == ''){
                                                                            alert.innerHTML = err[19];
                                                                        }else{
                                                                            if(adv_type == ''){
                                                                                alert.innerHTML = err[13];
                                                                            }else if(adv_type == 'Paid'){
                                                                                if(advt_type == ''){
                                                                                    alert.innerHTML = err[14];
                                                                                }else{
                                                                                    submitmobile(data);
                                                                                }
                                                                            }else{
                                                                                submitmobile(data);
                                                                            }
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
                else if(formCat == 'electronicsForm'){
                    var elect_want = $("#elect-want").val();
                    var elect_subcategory = $("#electronics-subcategory").val();
                    var elect_other = $("#electronics-other").val();
                    var elect_ad_title = $("#electronics-ad-title").val();
                    var elect_condition = $("#elect-condition").val();
                    var elect_cost = $("#cost").val();
                    var elect_used = $("#used-elect-months").val();
                    var elect_bill = $("#elect-bill").val();
                    var elect_brand = $("#elect-brand").val();
                    var elect_model = $("#elect-model").val();
                    var elect_includes = $("#elect-includes").val();
                    var elect_desc = descc;

                    data= "categoryid="+ category_id +"&userid="+ user_id +"&elecwant="+ elect_want +"&elecsubcat="+ elect_subcategory +
                        "&elecother="+ elect_other +"&elecadtitle="+ elect_ad_title +"&city="+post_city+"&eleccondition="+ elect_condition +"&eleccost="+ elect_cost +
                        "&elecused="+ elect_used +"&elecbill="+ elect_bill +"&elecbrand="+ elect_brand +"&elecmodel="+ elect_model +
                        "&username="+ user_name +"&useremail="+ user_email +"&usercontact="+ user_contact +"&elecinclude="+ elect_includes +
                        "&elecdesc="+ elect_desc +"&advtype="+advt_type+ "&utype=" + usertype;

                    if(elect_want == ''){
                        alert.innerHTML = err[28];
                    }else{
                        if(elect_subcategory == ''){
                            alert.innerHTML = err[36];
                        }else{
                            if(elect_ad_title == ''){
                                alert.innerHTML = err[8];
                            }else{
                                if(post_city == ''){
                                    alert.innerHTML = err[2];
                                }else{
                                    if(elect_condition == ''){
                                        alert.innerHTML = err[37];
                                    }else{
                                        if(elect_cost == ''){
                                            alert.innerHTML = err[7];
                                        }else{
                                            if(elect_condition == 'Used'){
                                                if(elect_used == ''){
                                                    alert.innerHTML = err[38];
                                                }else{
                                                    if(elect_bill == ''){
                                                        alert.innerHTML = err[39];
                                                    }else{
                                                        if(elect_brand == ''){
                                                            alert.innerHTML = err[40];
                                                        }else{
                                                            if(elect_model = ''){
                                                                alert.innerHTML = err[41];
                                                            }else{
                                                                if(user_name == '' || !user_name.match("[a-zA-Z_-]{3,15}") || (user_name.lenght >= 3 && user_name.lenght <= 15)){
                                                                    alert.innerHTML = err[3];
                                                                }else{
                                                                    if(user_email == '' || !user_email.match("([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})")){
                                                                        alert.innerHTML = err[4];
                                                                    }else{
                                                                        if(user_contact == '' || isNaN(user_contact) || !user_contact.match("[789][0-9]{9}") || user_contact.length != 10){
                                                                            alert.innerHTML = err[5];
                                                                        }else{
                                                                            if(elect_includes == ''){
                                                                                alert.innerHTML = err[42];
                                                                            }else{
                                                                                if(elect_desc == ''){
                                                                                    alert.innerHTML = err[19];
                                                                                }else{
                                                                                    if(adv_type == ''){
                                                                                        alert.innerHTML = err[13];
                                                                                    }else if(adv_type == 'Paid'){
                                                                                        if(advt_type == ''){
                                                                                            alert.innerHTML = err[14];
                                                                                        }else{
                                                                                            submitelectronics(data);
                                                                                        }
                                                                                    }else{
                                                                                        submitelectronics(data);
                                                                                    }
                                                                                }
                                                                            }
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }else{
                                                if(elect_brand == ''){
                                                    alert.innerHTML = err[40];
                                                }else{
                                                    if(elect_model = ''){
                                                        alert.innerHTML = err[41];
                                                    }else{
                                                        if(user_name == '' || !user_name.match("[a-zA-Z_-]{3,15}") || (user_name.lenght >= 3 && user_name.lenght <= 15)){
                                                            alert.innerHTML = err[3];
                                                        }else{
                                                            if(user_email == '' || !user_email.match("([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})")){
                                                                alert.innerHTML = err[4];
                                                            }else{
                                                                if(user_contact == '' || isNaN(user_contact) || !user_contact.match("[789][0-9]{9}") || user_contact.length != 10){
                                                                    alert.innerHTML = err[5];
                                                                }else{
                                                                    if(elect_includes == ''){
                                                                        alert.innerHTML = err[42];
                                                                    }else{
                                                                        if(elect_desc == ''){
                                                                            alert.innerHTML = err[19];
                                                                        }else{
                                                                            if(adv_type == ''){
                                                                                alert.innerHTML = err[13];
                                                                            }else if(adv_type == 'Paid'){
                                                                                if(advt_type == ''){
                                                                                    alert.innerHTML = err[14];
                                                                                }else{
                                                                                    submitelectronics(data);
                                                                                }
                                                                            }else{
                                                                                submitelectronics(data);
                                                                            }
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
                else if(formCat == 'homelifestyleForm'){
                    var home_category = $("#home-cat").val();
                    var furn_subcategory = $("#furni-subcategory").val();
                    var kids_subcategory = $("#kids-subcategory").val();
                    var sports_subcategory = $("#sports-subcategory").val();
                    var fashion_subcategory = $("#fashion-subcategory").val();
                    var other_subcategory = $("#otherlifehome").val();
                    var homelife_ad_title = $("#homelife-ad-title").val();
                    var homelife_condition = $("#homelife-condition").val();
                    var homelife_cost = $("#cost").val();
                    var homelife_used = $("#used-homelife-months").val();
                    var homelife_bill = $("#homelife-bill").val();
                    var homelife_includes = $("#homelife-includes").val();
                    var homelife_desc = descc;

                    data= "categoryid="+ category_id +"&userid="+ user_id +"&homecat="+ home_category +"&fursubcat="+ furn_subcategory +
                        "&kidsubcat="+ kids_subcategory +"&sportsubcat="+ sports_subcategory +"&fashionsubcat="+ fashion_subcategory +
                        "&othersubcat="+ other_subcategory +"&homelifeadtitle="+ homelife_ad_title +"&city=" + post_city + "&homelifecondition="+ homelife_condition +
                        "&homelifecost="+ homelife_cost +"&homelifeused="+ homelife_used +"&homelifebill="+ homelife_bill +"&username="+ user_name +
                        "&useremail="+ user_email +"&usercontact="+ user_contact +"&homelifeinclude="+ homelife_includes +
                        "&homelifedesc="+ homelife_desc +"&advtype="+advt_type+ "&utype=" + usertype;

                    if(home_category == ''){
                        alert.innerHTML = err[51];
                    }else{
                        if(homelife_ad_title == ''){
                            alert.innerHTML = err[8];
                        }else{
                            if(post_city == ''){
                                alert.innerHTML = err[2];
                            }else{
                                if(homelife_condition == ''){
                                    alert.innerHTML = err[37];
                                }else{
                                    if(homelife_cost == ''){
                                        alert.innerHTML = err[7];
                                    }else{
                                        if(homelife_condition == 'Used'){
                                            if(homelife_used == ''){
                                                alert.innerHTML = err[38];
                                            }else{
                                                if(homelife_bill == ''){
                                                    alert.innerHTML = err[39];
                                                }else{
                                                    if(user_name == '' || !user_name.match("[a-zA-Z_-]{3,15}") || (user_name.lenght >= 3 && user_name.lenght <= 15)){
                                                        alert.innerHTML = err[3];
                                                    }else{
                                                        if(user_email == '' || !user_email.match("([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})")){
                                                            alert.innerHTML = err[4];
                                                        }else{
                                                            if(user_contact == '' || isNaN(user_contact) || !user_contact.match("[789][0-9]{9}") || user_contact.length != 10){
                                                                alert.innerHTML = err[5];
                                                            }else{
                                                                if(homelife_includes == ''){
                                                                    alert.innerHTML = err[42];
                                                                }else{
                                                                    if(homelife_desc == ''){
                                                                        alert.innerHTML = err[19];
                                                                    }else{
                                                                        if(adv_type == ''){
                                                                            alert.innerHTML = err[13];
                                                                        }else if(adv_type == 'Paid'){
                                                                            if(advt_type == ''){
                                                                                alert.innerHTML = err[14];
                                                                            }else{
                                                                                submithomelife(data);
                                                                            }
                                                                        }else{
                                                                            submithomelife(data);
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }else{
                                            if(user_name == '' || !user_name.match("[a-zA-Z_-]{3,15}") || (user_name.lenght >= 3 && user_name.lenght <= 15)){
                                                alert.innerHTML = err[3];
                                            }else{
                                                if(user_email == '' || !user_email.match("([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})")){
                                                    alert.innerHTML = err[4];
                                                }else{
                                                    if(user_contact == '' || isNaN(user_contact) || !user_contact.match("[789][0-9]{9}") || user_contact.length != 10){
                                                        alert.innerHTML = err[5];
                                                    }else{
                                                        if(homelife_includes == ''){
                                                            alert.innerHTML = err[42];
                                                        }else{
                                                            if(homelife_desc == ''){
                                                                alert.innerHTML = err[19];
                                                            }else{
                                                                if(adv_type == ''){
                                                                    alert.innerHTML = err[13];
                                                                }else if(adv_type == 'Paid'){
                                                                    if(advt_type == ''){
                                                                        alert.innerHTML = err[14];
                                                                    }else{
                                                                        submithomelife(data);
                                                                    }
                                                                }else{
                                                                    submithomelife(data);
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
                else if(formCat == 'eventForm'){
                    var event_type = $("#event-type").val();
                    var event_manag_type = $("#management-event-ser-type").val();
                    var event_live_type = $("#live-event-ser-type").val();
                    var event_cost = $("#cost").val();
                    var event_ser_type = $("input[name=event-ser-type]:checked").val();
                    var event_desc = descc;

                    data = "categoryid="+ category_id +"&userid="+ user_id +"&eventtype="+ event_type +"&eventmantype="+ event_manag_type +
                        "&eventlivetype="+ event_live_type +"&eventcity="+ post_city +"&eventcost="+ event_cost +
                        "&username="+ user_name +"&useremail="+ user_email +"&eventsertype="+ event_ser_type +"&usercontact="+ user_contact +
                        "&eventdesc="+ event_desc +"&advtype="+advt_type+ "&utype=" + usertype;

                    if(event_type == ''){
                        alert.innerHTML = err[45];
                    }else{
                        if(post_city == ''){
                            alert.innerHTML = err[2];
                        }else{
                            if(event_cost == ''){
                                alert.innerHTML = err[7];
                            }else{
                                if(user_name == '' || !user_name.match("[a-zA-Z_-]{3,15}") || (user_name.lenght >= 3 && user_name.lenght <= 15)){
                                    alert.innerHTML = err[3];
                                }else{
                                    if(user_email == '' || !user_email.match("([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})")){
                                        alert.innerHTML = err[4];
                                    }else{
                                        if(event_ser_type == ''){
                                            alert.innerHTML = err[47];
                                        }else{
                                            if(user_contact == '' || isNaN(user_contact) || !user_contact.match("[789][0-9]{9}") || user_contact.length != 10){
                                                alert.innerHTML = err[5];
                                            }else{
                                                if(event_desc == ''){
                                                    alert.innerHTML = err[19];
                                                }else{
                                                    if(adv_type == ''){
                                                        alert.innerHTML = err[13];
                                                    }else if(adv_type == 'Paid'){
                                                        if(advt_type == ''){
                                                            alert.innerHTML = err[14];
                                                        }else{
                                                            submitevent(data);
                                                        }
                                                    }else{
                                                        submitevent(data);
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
                else if(formCat == 'petsForm' || formCat == 'communityForm' || formCat == 'entertainmentForm' || formCat == 'matrimonialForm'){
                    data = "categoryid="+ category_id +"&userid="+ user_id +"&usercontact="+ user_contact +"&username="+ user_name +"&useremail="+ user_email + "&desc=" + descc;

                    if(user_contact == "" || isNaN(user_contact) || !user_contact.match("[789][0-9]{9}") || user_contact.length != 10){
                        alert.innerHTML = err[5];
                    } else {
                        if(user_email == "" || !user_email.match("([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})")){
                            alert.innerHTML = err[4];
                        } else {
                            if(user_name == "" || !user_name.match("[a-zA-Z_-]{3,15}") || (user_name.lenght >= 3 && user_name.lenght <= 15)){
                                alert.innerHTML = err[3];
                            } else {
                                submitothers(data);
                            }
                        }
                    }
                }
                else{
                    alert.innerHTML = err[44];
                }
            }
        }
    }
});

// following are the forms submit functions that will create an ajax request to submit user's advertisement or post

function submitservices(data){
    $("#loading").show();
    $.ajax({
        type:"post",
        data:data,
        url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
        beforeSend: function(){
            $("#submitservicesForm").prop('disabled',true);
        },
        success: function(data) {
            if(data != 'Failure'){
                $("#loading").hide();
                window.location.assign('?aagvgfeenmb='+data);
            }else{
                $("#loading").hide();
                $("#submitForm").show();
                alert(data);
            }
        },
        error: function(data){
            $("#loading").hide();
            $("#submitForm").show();
            alert("Form didn't submit!");
        }
    });
}

function submitbikes(data){
    $("#loading").show();
    $.ajax({
        type:"post",
        data:data,
        url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
        beforeSend: function(){
            $("#submitbikeForm").prop('disabled',true);
        },
        success: function(data) {
            if(data != 'Failure'){
                $("#loading").hide();
                window.location.assign('?aagvgfeenmb='+data);
            }else{
                $("#loading").hide();
                alert(data);
                $("#submitForm").show();
            }
        },
        error: function(data){
            $("#loading").hide();
            alert("Form didn't submit!");
            $("#submitForm").show();
        }
    });
}

function submitcars(data){
    $("#loading").show();
    $.ajax({
        type:"post",
        data:data,
        url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
        beforeSend: function(){
            $("#submitcarForm").prop('disabled',true);
        },
        success: function(data) {
            if(data != 'Failure'){
                $("#loading").hide();
                window.location.assign('?aagvgfeenmb='+data);
            }else{
                $("#loading").hide();
                $("#submitForm").show();
                alert(data);
            }
        },
        error: function(data){
            $("#loading").hide();
            $("#submitForm").show();
            alert("Form didn't submit!");
        }
    });
}

function submiteducation(data){
    $("#loading").show();
    $.ajax({
        type:"post",
        data:data,
        url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
        beforeSend: function(){
            $("#submiteducationForm").prop('disabled',true);
        },
        success: function(data) {
            if(data != 'Failure'){
                $("#loading").hide();
                window.location.assign('?aagvgfeenmb='+data);
            }else{
                $("#loading").hide();
                $("#submitForm").show();
                alert(data);
            }
        },
        error: function(data){
            $("#loading").hide();
            $("#submitForm").show();
            alert("Form didn't submit!");
        }
    });
}

function submithome(data){
    $("#loading").show();
    $.ajax({
        type:"post",
        data:data,
        url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
        beforeSend: function(){
            $("#submithomeForm").prop('disabled',true);
        },
        success: function(data) {
            if(data != 'Failure'){
                $("#loading").hide();
                window.location.assign('?aagvgfeenmb='+data);
            }else{
                $("#loading").hide();
                $("#submitForm").show();
                alert(data);
            }
        },
        error: function(data){
            $("#loading").hide();
            $("#submitForm").show();
            alert("Form didn't submit!");
        }
    });
}

function submitjob(data){
    $("#loading").show();
    $.ajax({
        type:"post",
        data:data,
        url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
        beforeSend: function(){
            $("#submitJobForm").prop('disabled',true);
        },
        success: function(data) {
            if(data != 'Failure'){
                $("#loading").hide();
                window.location.assign('?aagvgfeenmb='+data);
            }else{
                $("#loading").hide();
                $("#submitForm").show();
                alert(data);
            }
        },
        error: function(data){
            $("#loading").hide();
            $("#submitForm").show();
            alert("Form didn't submit!");
        }
    });
}

function submitmobile(data){
    $("#loading").show();
    $.ajax({
        type:"post",
        data:data,
        url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
        beforeSend: function(){
            $("#submitmobilesForm").prop('disabled',true);
        },
        success: function(data) {
            if(data != 'Failure'){
                $("#loading").hide();
                window.location.assign('?aagvgfeenmb='+data);
            }else{
                $("#loading").hide();
                $("#submitForm").show();
                alert(data);
            }
        },
        error: function(data){
            $("#loading").hide();
            $("#submitForm").show();
            alert("Form didn't submit!");
        }
    });
}

function submitelectronics(data){
    $("#loading").show();
    $.ajax({
        type:"post",
        data:data,
        url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
        beforeSend: function(){
            $("#submitelectronicsForm").prop('disabled',true);
        },
        success: function(data) {
            if(data != 'Failure'){
                $("#loading").hide();
                window.location.assign('?aagvgfeenmb='+data);
            }else{
                $("#loading").hide();
                $("#submitForm").show();
                alert(data);
            }
        },
        error: function(data){
            $("#loading").hide();
            $("#submitForm").show();
            alert("Form didn't submit!");
        }
    });
}

function submithomelife(data){
    $("#loading").show();
    $.ajax({
        type:"post",
        data:data,
        url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
        beforeSend: function(){
            $("#submithomelifestyleForm").prop('disabled',true);
        },
        success: function(data) {
            if(data != 'Failure'){
                $("#loading").hide();
                window.location.assign('?aagvgfeenmb='+data);
            }else{
                $("#loading").hide();
                $("#submitForm").show();
                alert(data);
            }
        },
        error: function(data){
            $("#loading").hide();
            $("#submitForm").show();
            alert("Form didn't submit!");
        }
    });
}

function submitevent(data){
    $("#loading").show();
    $.ajax({
        type:"post",
        data:data,
        url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
        beforeSend: function(){
            $("#submiteventForm").prop('disabled',true);
        },
        success: function(data) {
            if(data != 'Failure'){
                $("#loading").hide();
                window.location.assign('?aagvgfeenmb='+data);
            }else{
                $("#loading").hide();
                $("#submitForm").show();
                alert(data);
            }
        },
        error: function(data){
            $("#loading").hide();
            $("#submitForm").show();
            alert("Form didn't submit!");
        }
    });
}

function submitothers(data){
    $("#loading").show();
    $.ajax({
        type:"post",
        data: data,
        url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
        beforeSend: function(){
            $("#submitpetsForm").prop('disabled',true);
        },
        success: function(data) {
            if(data == 'Success'){
                $("#loading").hide();
                window.location.assign('?aagvgfeenmb='+data);
            }else{
                $("#loading").hide();
                $("#submitForm").show();
                alert(data);
            }
        },
        error: function(data){
            $("#loading").hide();
            $("#submitForm").show();
            alert("Form didn't submit!");
        }
    });
}