var alert = document.getElementById('alert');
//Services Form
$("#submitservicesForm").click(function(){
    $("#submitservicesForm").prop('disabled',true);
    var category_id=$("#adv_cat").val();
    var user_id = $("#user_id").val();
    var service_type=$("#ser-type").val();
    var service_fees=$("#cost").val();
    var service_name=$("#Exact-Service-name").val();
    var ser_city=$("#ser-city").val();
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
        "&servicename="+ service_name +"&city=" + ser_city + "&username="+ user_name +"&useremail="+ user_email +"&usercontact="+ user_contact +
        "&usertype="+ user_type +"&companyname="+ company_name +"&companyemail="+ company_email +"&companycontact="+
        company_contact +"&advtype=" + advt_type;

    if(category_id == ''){
        alert.innerHTML = "Failed To get Category Info!";
    }else{
        if(user_id == ''){
            alert.innerHTML = "Failed To get User Info!";
        }else{
            if(service_type == ''){
                alert.innerHTML = "Please Select A service type from dropdown!";
            }else{
                if(service_fees == ''){
                    alert.innerHTML = "Please Enter Cost!";
                }else{
                    if(service_name == ''){
                        alert.innerHTML = "Please Enter Title for the Service!";
                    }else {
                        if(ser_city == ''){
                            alert.innerHTML = "Please Enter City";
                        }else{
                            if(user_name == '' || !user_name.match("[a-zA-Z_-]{3,15}") || (user_name.lenght >= 3 && user_name.lenght <= 15)){
                                alert.innerHTML = "Invalid User Name!";
                            }else{
                                if(user_email == '' || !user_email.match("([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})")){
                                    alert.innerHTML = "Invalid Email Id!";
                                }else{
                                    if(user_type == ''){
                                        alert.innerHTML = "Please Select Type of User!";
                                    }else{
                                        if(user_contact == '' || isNaN(user_contact) || !user_contact.match("[789][0-9]{9}") || user_contact.length != 10){
                                            alert.innerHTML = "Invalid Contact Number!";
                                        }else{
                                            if(user_type == 'Company'){
                                                if(company_name == '' || !company_name.match("[a-zA-Z_-]{3,15}") || (company_name.lenght >= 3 && company_name.lenght <= 15)){
                                                    alert.innerHTML = "Company name is required!";
                                                }
                                                else if(company_email == '' || !company_email.match("([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})")){
                                                    alert.innerHTML = "Company Email is required!";
                                                }else{
                                                    if(company_contact == '' || isNaN(company_contact) || !company_contact.match("[789][0-9]{9}") || company_contact.length != 10){
                                                        alert.innerHTML = "Company Contact is Required!";
                                                    }else{
                                                        if(adv_type == ''){
                                                            alert.innerHTML = "Please select Advertisement Type!";
                                                        }else if(adv_type == 'Paid'){
                                                            if(advt_type == ''){
                                                                alert.innerHTML = "Please select paid Advertisement Type!";
                                                            }else{
                                                                $.ajax({
                                                                    type:"post",
                                                                    data:data,
                                                                    url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
                                                                    beforeSend: function(){
                                                                        $("#submitservicesForm").prop('disabled',true);
                                                                    },
                                                                    success: function(data) {
                                                                        if(data == 'Success'){
                                                                            window.location.assign('../../');
                                                                        }else{
                                                                            alert(data);
                                                                        }
                                                                    },
                                                                    error: function(data){
                                                                        alert("Form didn't submit!");
                                                                    }
                                                                });
                                                            }
                                                        }else{
                                                            $.ajax({
                                                                type:"post",
                                                                data:data,
                                                                url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
                                                                beforeSend: function(){
                                                                    $("#submitservicesForm").prop('disabled',true);
                                                                },
                                                                success: function(data) {
                                                                    if(data == 'Success'){
                                                                        window.location.assign('../../');
                                                                    }else{
                                                                        alert(data);
                                                                    }
                                                                },
                                                                error: function(data){
                                                                    alert("Form didn't submit!");
                                                                }
                                                            });
                                                        }
                                                    }
                                                }
                                            }
                                            else{
                                                if(adv_type == ''){
                                                    alert.innerHTML = "Please select Advertisement Type!";
                                                }else if(adv_type == 'Paid'){
                                                    if(advt_type == ''){
                                                        alert.innerHTML = "Please select paid Advertisement Type!";
                                                    }else{
                                                        $.ajax({
                                                            type:"post",
                                                            data:data,
                                                            url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
                                                            beforeSend: function(){
                                                                $("#submitbikeForm").prop('disabled',true);
                                                            },
                                                            success: function(data) {
                                                                if(data == 'Success'){
                                                                    window.location.assign('../../');
                                                                }else{
                                                                    alert(data);
                                                                }
                                                            },
                                                            error: function(data){
                                                                alert("Form didn't submit!");
                                                            }
                                                        });
                                                    }
                                                }else{

                                                    $.ajax({
                                                        type:"post",
                                                        data:data,
                                                        url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
                                                        beforeSend: function(){
                                                            $("#submitservicesForm").prop('disabled',true);
                                                        },
                                                        success: function(data) {
                                                            if(data == 'Success'){
                                                                window.location.assign('../../');
                                                            }else{
                                                                alert(data);
                                                            }
                                                        },
                                                        error: function(data){
                                                            alert("Form didn't submit!");
                                                        }
                                                    });
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
});

//Bike Form
$("#submitbikeForm").click(function(){
    var category_id=$("#adv_cat").val();
    var user_id = $("#user_id").val();
    var bike_cat_type = $("input[name=bike-cat-type]:checked").val();
    var bike_brand = $("#bike-brand").val();
    var bike_cost = $("#cost").val();
    var bike_reg_year = $("#bike-reg-year").val();
    var bike_city = $("#bike-city").val();
    var user_name = $("#user-name").val();
    var user_email = $("#user-email").val();
    var user_contact = $("#user-contact").val();
    var bike_user_type = $("input[name=bike-user-type]:checked").val();
    var bike_kms_driven = $("#bike-driven").val();
    var bike_desc = $("#bike-desc").val();
    var adv_type=$("input[name=adv-type]:checked").val();
    var advt_type;
    if(adv_type=="Paid"){
        advt_type=$("input[name=paidser-type]:checked").val();
    }else{
        advt_type=adv_type;
    }

    var data = "categoryid="+ category_id +"&userid="+ user_id +"&bikecattype="+ bike_cat_type +"&bikebrand="+ bike_brand +"&bikecost="+
        bike_cost +"&bikeregyear="+ bike_reg_year +"&bikecity="+ bike_city +"&username="+ user_name +"&useremail="+ user_email +
        "&usercontact="+ user_contact + "&usertype="+ bike_user_type +"&bikekmsdriven="+ bike_kms_driven +"&bikedesc="+bike_desc+"&advtype="+ advt_type;

    if(category_id == ''){
        alert.innerHTML = "Failed To get Category Info!";
    }else {
        if (user_id == '') {
            alert.innerHTML = "Failed To get User Info!";
        } else {
            if(bike_cat_type == ''){
                alert.innerHTML = "Please Select you Option Buy/Sell!";
            }else{
                if(bike_brand == ''){
                    alert.innerHTML = "Please Enter Bike Brand Name!";
                }else{
                    if(bike_cost == ''){
                        alert.innerHTML = "Please Specify Cost!";
                    }else{
                        if(bike_reg_year == ''){
                            alert.innerHTML = "Please Specify registration year of Bike!";
                        }else{
                            if(bike_city == ''){
                                alert.innerHTML = "Please Enter your City!";
                            }else{
                                if(user_name == '' || !user_name.match("[a-zA-Z_-]{3,15}") || (user_name.lenght >= 3 && user_name.lenght <= 15)){
                                    alert.innerHTML = "Invalid Your name!";
                                }else{
                                    if(user_email == '' || !user_email.match("([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})")){
                                        alert.innerHTML = "Invalid Email Id!";
                                    }else{
                                        if(bike_user_type == ''){
                                            alert.innerHTML = "Please select User type!";
                                        }else{
                                            if(user_contact == '' || isNaN(user_contact) || !user_contact.match("[789][0-9]{9}") || user_contact.length != 10){
                                                alert.innerHTML = "Invalid Contact Number!";
                                            }else{
                                                if(bike_cat_type == 'Sell A bike'){
                                                    if(bike_kms_driven == ''){
                                                        alert.innerHTML = "Please Specify Kms travelled on Bike!";
                                                    }else{
                                                        if(bike_desc == ''){
                                                            alert.innerHTML = "Please Enter Some Description!";
                                                        }else{
                                                            if(adv_type == ''){
                                                                alert.innerHTML = "Please select Advertisement Type!";
                                                            }else if(adv_type == 'Paid'){
                                                                if(advt_type == ''){
                                                                    alert.innerHTML = "Please select paid Advertisement Type!";
                                                                }else{
                                                                    $.ajax({
                                                                        type:"post",
                                                                        data:data,
                                                                        url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
                                                                        beforeSend: function(){
                                                                            $("#submitbikeForm").prop('disabled',true);
                                                                        },
                                                                        success: function(data) {
                                                                            if(data == 'Success'){
                                                                                window.location.assign('../../');
                                                                            }else{
                                                                                alert(data);
                                                                            }
                                                                        },
                                                                        error: function(data){
                                                                            alert("Form didn't submit!");
                                                                        }
                                                                    });
                                                                }
                                                            }else{
                                                                $.ajax({
                                                                    type:"post",
                                                                    data:data,
                                                                    url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
                                                                    beforeSend: function(){
                                                                        $("#submitbikeForm").prop('disabled',true);
                                                                    },
                                                                    success: function(data) {
                                                                        if(data == 'Success'){
                                                                            window.location.assign('../../');
                                                                        }else{
                                                                            alert(data);
                                                                        }
                                                                    },
                                                                    error: function(data){
                                                                        alert("Form didn't submit!");
                                                                    }
                                                                });
                                                            }
                                                        }
                                                    }
                                                }else{
                                                    if(bike_desc == ''){
                                                        alert.innerHTML = "Please Enter Some Description!";
                                                    }else{
                                                        if(adv_type == ''){
                                                            alert.innerHTML = "Please select Advertisement Type!";
                                                        }else if(adv_type == 'Paid'){
                                                            if(advt_type == ''){
                                                                alert.innerHTML = "Please select paid Advertisement Type!";
                                                            }else{
                                                                $.ajax({
                                                                    type:"post",
                                                                    data:data,
                                                                    url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
                                                                    beforeSend: function(){
                                                                        $("#submitbikeForm").prop('disabled',true);
                                                                    },
                                                                    success: function(data) {
                                                                        if(data == 'Success'){
                                                                            window.location.assign('../../');
                                                                        }else{
                                                                            alert(data);
                                                                        }
                                                                    },
                                                                    error: function(data){
                                                                        alert("Form didn't submit!");
                                                                    }
                                                                });
                                                            }
                                                        }else{
                                                            $.ajax({
                                                                type:"post",
                                                                data:data,
                                                                url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
                                                                beforeSend: function(){
                                                                    $("#submitbikeForm").prop('disabled',true);
                                                                },
                                                                success: function(data) {
                                                                    if(data == 'Success'){
                                                                        window.location.assign('../../');
                                                                    }else{
                                                                        alert(data);
                                                                    }
                                                                },
                                                                error: function(data){
                                                                    alert("Form didn't submit!");
                                                                }
                                                            });
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
});

//Car Form
$("#submitcarForm").click(function(){
    var category_id=$("#adv_cat").val();
    var user_id = $("#user_id").val();
    var car_cat_type = $("input[name=car-cat-type]:checked").val();
    var car_brand = $("#car-brand").val();
    var car_cost = $("#cost").val();
    var car_reg_year = $("#car-reg-year").val();
    var car_city = $("#car-city").val();
    var user_name = $("#user-name").val();
    var user_email = $("#user-email").val();
    var user_contact = $("#user-contact").val();
    var car_user_type = $("input[name=car-user-type]:checked").val();
    var car_kms_driven = $("#car-driven").val();
    var car_desc = $("#car-desc").val();
    var adv_type=$("input[name=adv-type]:checked").val();
    var advt_type;
    if(adv_type=="Paid"){
        advt_type=$("input[name=paidser-type]:checked").val();
    }else{
        advt_type=adv_type;
    }

    var data = "categoryid="+ category_id +"&userid="+ user_id +"&carcattype="+ car_cat_type +"&carbrand="+ car_brand +"&carcost="+
        car_cost +"&carregyear="+ car_reg_year +"&carcity="+ car_city +"&username="+ user_name +"&useremail="+ user_email +
        "&usercontact="+ user_contact + "&usertype="+ car_user_type +"&carkmsdriven="+ car_kms_driven +"$cardesc="+car_desc+"&advtype="+ advt_type;

    if(category_id == ''){
        alert.innerHTML = "Failed To get Category Info!";
    }else {
        if (user_id == '') {
            alert.innerHTML = "Failed To get User Info!";
        } else {
            if(car_cat_type == ''){
                alert.innerHTML = "Please Select you Option Buy/Sell!";
            }else{
                if(car_brand == ''){
                    alert.innerHTML = "Please Enter Bike Brand Name!";
                }else{
                    if(car_cost == ''){
                        alert.innerHTML = "Please Specify Cost!";
                    }else{
                        if(car_reg_year == ''){
                            alert.innerHTML = "Please Specify registration year of Bike!";
                        }else{
                            if(car_city == ''){
                                alert.innerHTML = "Please Enter your City!";
                            }else{
                                if(user_name == '' || !user_name.match("[a-zA-Z_-]{3,15}") || (user_name.lenght >= 3 && user_name.lenght <= 15)){
                                    alert.innerHTML = "Invalid Your name!";
                                }else{
                                    if(user_email == '' || !user_email.match("([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})")){
                                        alert.innerHTML = "Invalid Email Id!";
                                    }else{
                                        if(car_user_type == ''){
                                            alert.innerHTML = "Please select User type!";
                                        }else{
                                            if(user_contact == '' || isNaN(user_contact) || !user_contact.match("[789][0-9]{9}") || user_contact.length != 10){
                                                alert.innerHTML = "Invalid Contact Number!";
                                            }else{
                                                if(car_cat_type == 'Sell A Car'){
                                                    if(car_kms_driven == ''){
                                                        alert.innerHTML = "Please Specify Kms travelled on Car!";
                                                    }else{
                                                        if(car_desc == ''){
                                                            alert.innerHTML = "Please Enter Some Description!";
                                                        }else{
                                                            if(adv_type == ''){
                                                                alert.innerHTML = "Please select Advertisement Type!";
                                                            }else if(adv_type == 'Paid'){
                                                                if(advt_type == ''){
                                                                    alert.innerHTML = "Please select paid Advertisement Type!";
                                                                }else{
                                                                    $.ajax({
                                                                        type:"post",
                                                                        data:data,
                                                                        url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
                                                                        beforeSend: function(){
                                                                            $("#submitcarForm").prop('disabled',true);
                                                                        },
                                                                        success: function(data) {
                                                                            if(data == 'Success'){
                                                                                window.location.assign('../../');
                                                                            }else{
                                                                                alert(data);
                                                                            }
                                                                        },
                                                                        error: function(data){
                                                                            alert("Form didn't submit!");
                                                                        }
                                                                    });
                                                                }
                                                            }else{
                                                                $.ajax({
                                                                    type:"post",
                                                                    data:data,
                                                                    url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
                                                                    beforeSend: function(){
                                                                        $("#submitcarForm").prop('disabled',true);
                                                                    },
                                                                    success: function(data) {
                                                                        if(data == 'Success'){
                                                                            window.location.assign('../../');
                                                                        }else{
                                                                            alert(data);
                                                                        }
                                                                    },
                                                                    error: function(data){
                                                                        alert("Form didn't submit!");
                                                                    }
                                                                });
                                                            }
                                                        }
                                                    }
                                                }else{
                                                    if(car_desc == ''){
                                                        alert.innerHTML = "Please Enter Some Description!";
                                                    }else{
                                                        if(adv_type == ''){
                                                            alert.innerHTML = "Please select Advertisement Type!";
                                                        }else if(adv_type == 'Paid'){
                                                            if(advt_type == ''){
                                                                alert.innerHTML = "Please select paid Advertisement Type!";
                                                            }else{
                                                                $.ajax({
                                                                    type:"post",
                                                                    data:data,
                                                                    url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
                                                                    beforeSend: function(){
                                                                        $("#submitcarForm").prop('disabled',true);
                                                                    },
                                                                    success: function(data) {
                                                                        if(data == 'Success'){
                                                                            window.location.assign('../../');
                                                                        }else{
                                                                            alert(data);
                                                                        }
                                                                    },
                                                                    error: function(data){
                                                                        alert("Form didn't submit!");
                                                                    }
                                                                });
                                                            }
                                                        }else{
                                                            $.ajax({
                                                                type:"post",
                                                                data:data,
                                                                url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
                                                                beforeSend: function(){
                                                                    $("#submitcarForm").prop('disabled',true);
                                                                },
                                                                success: function(data) {
                                                                    if(data == 'Success'){
                                                                        window.location.assign('../../');
                                                                    }else{
                                                                        alert(data);
                                                                    }
                                                                },
                                                                error: function(data){
                                                                    alert("Form didn't submit!");
                                                                }
                                                            });
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
});

//Education Form
$("#submiteducationForm").click(function(){
    var category_id=$("#adv_cat").val();
    var user_id = $("#user_id").val();
    var education_type = $("#education-type").val();
    var other_education_type = $("#other-edu-val").val();
    var edu_title = $("#edu-title").val();
    var edu_city = $("#edu-city").val();
    var edu_fees = $("#cost").val();
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

    if(category_id == ''){
        alert.innerHTML = "Failed To get Category Info!";
    }else {
        if (user_id == '') {
            alert.innerHTML = "Failed To get User Info!";
        } else {
            if(education_type == ''){
                alert.innerHTML = "Please Select an option from dropdown!";
            }else if(education_type == 'Other'){
                if(other_education_type == ''){
                    alert.innerHTML = "Please Specify Other!";
                }else{
                    if(edu_title == ''){
                        alert.innerHTML = "Please Specify Title for Ad!";
                    }else{
                        if(edu_city == ''){
                            alert.innerHTML = "Please Enter City For Ad!";
                        }else{
                            if(edu_fees == ''){
                                alert.innerHTML = "Please Enter Value in Fee Column!";
                            }else{
                                if(edu_stream == ''){
                                    alert.innerHTML = "Please Specify the target stream!";
                                }else{
                                    if(edu_insti_name == '' || !edu_insti_name.match("[a-zA-Z_-]{3,15}") || (edu_insti_name.lenght >= 3 && edu_insti_name.lenght <= 15)){
                                        alert.innerHTML = "Please Enter Institute Name!";
                                    }else{
                                        if(edu_insti_address == ''){
                                            alert.innerHTML = "Please Enter Institute Address!";
                                        }else{
                                            if(edu_insti_contact == '' || isNaN(edu_insti_contact) || !edu_insti_contact.match("[789][0-9]{9}") || edu_insti_contact.length != 10){
                                                alert.innerHTML = "Invalid Contact!";
                                            }else{
                                                if(edu_insti_email == '' || !edu_insti_email.match("([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})")){
                                                    alert.innerHTML = "Invalid Email Id!";
                                                }else{
                                                    if(edu_desc == ''){
                                                        alert.innerHTML = "Enter Some description of your Ad!";
                                                    }else{
                                                        if(adv_type == ''){
                                                            alert.innerHTML = "Please select Advertisement Type!";
                                                        }else if(adv_type == 'Paid'){
                                                            if(advt_type == ''){
                                                                alert.innerHTML = "Please select paid Advertisement Type!";
                                                            }else{
                                                                $.ajax({
                                                                    type:"post",
                                                                    data:data,
                                                                    url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
                                                                    beforeSend: function(){
                                                                        $("#submiteducationForm").prop('disabled',true);
                                                                    },
                                                                    success: function(data) {
                                                                        if(data == 'Success'){
                                                                            window.location.assign('../../');
                                                                        }else{
                                                                            alert(data);
                                                                        }
                                                                    },
                                                                    error: function(data){
                                                                        alert("Form didn't submit!");
                                                                    }
                                                                });
                                                            }
                                                        }else{
                                                            $.ajax({
                                                                type:"post",
                                                                data:data,
                                                                url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
                                                                beforeSend: function(){
                                                                    $("#submiteducationForm").prop('disabled',true);
                                                                },
                                                                success: function(data) {
                                                                    if(data == 'Success'){
                                                                        window.location.assign('../../');
                                                                    }else{
                                                                        alert(data);
                                                                    }
                                                                },
                                                                error: function(data){
                                                                    alert("Form didn't submit!");
                                                                }
                                                            });
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
                    alert.innerHTML = "Please Specify Title for Ad!";
                }else{
                    if(edu_city == ''){
                        alert.innerHTML = "Please Enter City For Ad!";
                    }else{
                        if(edu_fees == ''){
                            alert.innerHTML = "Please Enter Value in Fee Column!";
                        }else{
                            if(edu_stream == ''){
                                alert.innerHTML = "Please Specify the target stream!";
                            }else{
                                if(edu_insti_name == '' || !edu_insti_name.match("[a-zA-Z_-]{3,15}") || (edu_insti_name.lenght >= 3 && edu_insti_name.lenght <= 15)){
                                    alert.innerHTML = "Please Enter Institute Name!";
                                }else{
                                    if(edu_insti_address == ''){
                                        alert.innerHTML = "Please Enter Institute Address!";
                                    }else{
                                        if(edu_insti_contact == '' || isNaN(edu_insti_contact) || !edu_insti_contact.match("[789][0-9]{9}") || edu_insti_contact.length != 10){
                                            alert.innerHTML = "Invalid Contact!";
                                        }else{
                                            if(edu_insti_email == '' || !edu_insti_email.match("([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})")){
                                                alert.innerHTML = "Invalid Email Id!";
                                            }else{
                                                if(edu_desc == ''){
                                                    alert.innerHTML = "Enter Some description of your Ad!";
                                                }else{
                                                    if(adv_type == ''){
                                                        alert.innerHTML = "Please select Advertisement Type!";
                                                    }else if(adv_type == 'Paid'){
                                                        if(advt_type == ''){
                                                            alert.innerHTML = "Please select paid Advertisement Type!";
                                                        }else{
                                                            $.ajax({
                                                                type:"post",
                                                                data:data,
                                                                url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
                                                                beforeSend: function(){
                                                                    $("#submiteducationForm").prop('disabled',true);
                                                                },
                                                                success: function(data) {
                                                                    if(data == 'Success'){
                                                                        window.location.assign('../../');
                                                                    }else{
                                                                        alert(data);
                                                                    }
                                                                },
                                                                error: function(data){
                                                                    alert("Form didn't submit!");
                                                                }
                                                            });
                                                        }
                                                    }else{
                                                        $.ajax({
                                                            type:"post",
                                                            data:data,
                                                            url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
                                                            beforeSend: function(){
                                                                $("#submiteducationForm").prop('disabled',true);
                                                            },
                                                            success: function(data) {
                                                                if(data == 'Success'){
                                                                    window.location.assign('../../');
                                                                }else{
                                                                    alert(data);
                                                                }
                                                            },
                                                            error: function(data){
                                                                alert("Form didn't submit!");
                                                            }
                                                        });
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
    var home_cost = $("#cost").val();
    var user_name = $("#user-name").val();
    var user_email = $("#user-email").val();
    var home_user_type = $("input[name=user-type]:checked").val();
    var home_company_name = $("#company-name").val();
    var home_city = $("#home-city").val();
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
        "&username="+ user_name +"&useremail="+ user_email +"&usertype="+ home_user_type +"&companyname="+ home_company_name +
        "&city=" + home_city + "&companyemail="+ home_company_email +"&usercontact="+ user_contact +"&companycontact="+ company_contact +"&advtype="+advt_type;

    if(category_id == ''){
        alert.innerHTML = "Failed To get Category Info!";
    }else {
        if (user_id == '') {
            alert.innerHTML = "Failed To get User Info!";
        } else {
            if(home_todo == ''){
                alert.innerHTML = "Please Select What you want to do!";
            }else{
                if(home_size == ''){
                    alert.innerHTML = "Please Select your choice of Area!";
                }else{
                    if(home_cost == ''){
                        alert.innerHTML = "Please Enter Cost!";
                    }else{
                        if(user_name == '' || !user_name.match("[a-zA-Z_-]{3,15}") || (user_name.lenght >= 3 && user_name.lenght <= 15)){
                            alert.innerHTML = "Invalid user Name!";
                        }else{
                            if(user_email == '' || !user_email.match("([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})")){
                                alert.innerHTML = "Invalid User Email Id!";
                            }else{
                                if(user_contact == '' || isNaN(user_contact) || !user_contact.match("[789][0-9]{9}") || user_contact.length != 10){
                                    alert.innerHTML = "Invalid User Contact!";
                                }else{
                                    if(home_user_type == ''){
                                        alert.innerHTML = "Please Select User type!";
                                    }else if(home_user_type == 'Company'){
                                        if(home_company_name == '' || !home_company_name.match("[a-zA-Z_-]{3,15}") || (home_company_name.lenght >= 3 && home_company_name.lenght <= 15)){
                                            alert.innerHTML = "Please Specify Company Name!";
                                        }else{
                                            if(home_city == ''){
                                                alert.innerHTML = "Enter City";
                                            }else {
                                                if(home_company_email == '' || !home_company_email.match("([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})")){
                                                alert.innerHTML = "Invalid Company email!";
                                            }else{
                                                if(company_contact == '' || isNaN(company_contact) || !company_contact.match("[789][0-9]{9}") || company_contact.length != 10){
                                                    alert.innerHTML = "Invalid Contact!";
                                                }else{
                                                    if(adv_type == ''){
                                                        alert.innerHTML = "Please select Advertisement Type!";
                                                    }else if(adv_type == 'Paid'){
                                                        if(advt_type == ''){
                                                            alert.innerHTML = "Please select paid Advertisement Type!";
                                                        }else{
                                                            $.ajax({
                                                                type:"post",
                                                                data:data,
                                                                url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
                                                                beforeSend: function(){
                                                                    $("#submithomeForm").prop('disabled',true);
                                                                },
                                                                success: function(data) {
                                                                    if(data == 'Success'){
                                                                        window.location.assign('../../');
                                                                    }else{
                                                                        alert(data);
                                                                    }
                                                                },
                                                                error: function(data){
                                                                    alert("Form didn't submit!");
                                                                }
                                                            });
                                                        }
                                                    }else{
                                                        $.ajax({
                                                            type:"post",
                                                            data:data,
                                                            url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
                                                            beforeSend: function(){
                                                                $("#submithomeForm").prop('disabled',true);
                                                            },
                                                            success: function(data) {
                                                                if(data == 'Success'){
                                                                    window.location.assign('../../');
                                                                }else{
                                                                    alert(data);
                                                                }
                                                            },
                                                            error: function(data){
                                                                alert("Form didn't submit!");
                                                            }
                                                        });
                                                    }
                                                }
                                            }
                                            }
                                        }
                                    }else{
                                        if(adv_type == ''){
                                            alert.innerHTML = "Please select Advertisement Type!";
                                        }else if(adv_type == 'Paid'){
                                            if(advt_type == ''){
                                                alert.innerHTML = "Please select paid Advertisement Type!";
                                            }else{
                                                $.ajax({
                                                    type:"post",
                                                    data:data,
                                                    url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
                                                    beforeSend: function(){
                                                        $("#submithomeForm").prop('disabled',true);
                                                    },
                                                    success: function(data) {
                                                        if(data == 'Success'){
                                                            window.location.assign('../../');
                                                        }else{
                                                            alert(data);
                                                        }
                                                    },
                                                    error: function(data){
                                                        alert("Form didn't submit!");
                                                    }
                                                });
                                            }
                                        }else{
                                            $.ajax({
                                                type:"post",
                                                data:data,
                                                url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
                                                beforeSend: function(){
                                                    $("#submithomeForm").prop('disabled',true);
                                                },
                                                success: function(data) {
                                                    if(data == 'Success'){
                                                        window.location.assign('../../');
                                                    }else{
                                                        alert(data);
                                                    }
                                                },
                                                error: function(data){
                                                    alert("Form didn't submit!");
                                                }
                                            });
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
    if(category_id == ''){
        alert.innerHTML = "Failed To get Category Info!";
    }else {
        if (user_id == '') {
            alert.innerHTML = "Failed To get User Info!";
        } else {
            if(job_title == ''){
                alert.innerHTML = "Please Enter Title For the Job Ad";
            }else{
                if(job_type == ''){
                    alert.innerHTML = "Please Select Job Type";
                }else{
                    if(job_role == ''){
                        alert.innerHTML = "Please mention Role";
                    }else{
                        if(min_sal == ''){
                            alert.innerHTML = "Please mention Minimum salary";
                        }else{
                            if(max_sal == ''){
                                alert.innerHTML = "Please mention max salary";
                            }else{
                                if(job_company_name == '' || !job_company_name.match("[a-zA-Z_-]{3,15}") || (job_company_name.lenght >= 3 && job_company_name.lenght <= 15)){
                                    alert.innerHTML = "Company name is required";
                                }else{
                                    if(job_company_email == '' || !job_company_email.match("([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})")){
                                        alert.innerHTML = "Invalid Company Email id";
                                    }else{
                                        if(job_location == ''){
                                            alert.innerHTML = "Please Enter Locations";
                                        }else{
                                            if(job_experience == ''){
                                                alert.innerHTML = "Please enter Experience Required";
                                            }else{
                                                if(job_recruiter_number == '' || isNaN(job_recruiter_number) || !job_recruiter_number.match("[789][0-9]{9}") || job_recruiter_number.length != 10){
                                                    alert.innerHTML = "Invalid Recruiter Contact Number";
                                                }else{
                                                    if(job_desc == ''){
                                                        alert.innerHTML = "Please write some description";
                                                    }else{
                                                        if(adv_type == ''){
                                                            alert.innerHTML = "Please select Advertisement Type!";
                                                        }else if(adv_type == 'Paid'){
                                                            if(advt_type == ''){
                                                                alert.innerHTML = "Please select paid Advertisement Type!";
                                                            }
                                                            else{
                                                                $.ajax({
                                                                    type:"post",
                                                                    data:data,
                                                                    url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
                                                                    beforeSend: function(){
                                                                        $("#submitJobForm").prop('disabled',true);
                                                                    },
                                                                    success: function(data) {
                                                                        if(data == 'Success'){
                                                                            window.location.assign('../../');
                                                                        }else{
                                                                            alert(data);
                                                                        }
                                                                    },
                                                                    error: function(data){
                                                                        alert("Form didn't submit!");
                                                                    }
                                                                });
                                                            }
                                                        }else{
                                                            $.ajax({
                                                                type:"post",
                                                                data:data,
                                                                url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
                                                                beforeSend: function(){
                                                                    $("#submitJobForm").prop('disabled',true);
                                                                },
                                                                success: function(data) {
                                                                    if(data == 'Success'){
                                                                        window.location.assign('../../');
                                                                    }else{
                                                                        alert(data);
                                                                    }
                                                                },
                                                                error: function(data){
                                                                    alert("Form didn't submit!");
                                                                }
                                                            });
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
});

//Mobile & Tablets Form
$("#submitmobilesForm").click(function(){
    var category_id=$("#adv_cat").val();
    var user_id = $("#user_id").val();
    var mobile_want = $("#mobiles-want").val();
    var mobile_subcategory = $("#mobile-subcategory").val();
    var mob_ad_title = $("#mobile-ad-title").val();
    var mob_city = $("#mob-city").val();
    var mob_condition = $("#mobiles-condition").val();
    var mobile_cost = $("#cost").val();
    var mobile_used = $("#used-mobile-months").val();
    var mob_bill = $("#mobile-bill").val();
    var mob_brand = $("#Mobile-brand").val();
    var mob_model = $("#mobile-model").val();
    var user_name=$("#user-name").val();
    var user_contact = $("#user-contact").val();
    var user_email = $("#user-email").val();
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
        "&mobadtitle="+ mob_ad_title +"&city=" + mob_city + "&mobcondition="+ mob_condition +"&mobcost="+ mobile_cost +"&mobused="+ mobile_used +
        "&mobbill="+ mob_bill +"&mobbrand="+ mob_brand +"&mobmodel&="+ mob_model +"&username="+ user_name +"&useremail="+ user_email +
        "&usercontact="+ user_contact +"&mobinclude="+ mob_includes +"&mobdesc="+ mob_desc +"&advtype="+advt_type;

    if(category_id == ''){
        alert.innerHTML = "Failed To get Category Info!";
    }else {
        if (user_id == '') {
            alert.innerHTML = "Failed To get User Info!";
        } else {
            if(mobile_want == ''){
                alert.innerHTML = "Please Select What you want to do";
            }else{
                if(mobile_subcategory == ''){
                    alert.innerHTML = "Select A subcategory";
                }else{
                    if(mob_ad_title == ''){
                        alert.innerHTML = "Title field is required";
                    }else{
                        if(mob_city == ''){
                            alert.innerHTML = "Please Enter City";
                        }else{
                            if(mob_condition == ''){
                                alert.innerHTML = "Please Select Condition of mobile";
                            }else{
                                if(mobile_cost == ''){
                                    alert.innerHTML = "Please Enter cost";
                                }else{
                                    if(mob_condition == 'Used'){
                                        if(mobile_used == ''){
                                            alert.innerHTML = "Please Mention How long its been used";
                                        }else{
                                            if(mob_bill == ''){
                                                alert.innerHTML = "Please select Bill Option";
                                            }else{
                                                if(mob_brand == ''){
                                                    alert.innerHTML = "Please Enter Brand";
                                                }else{
                                                    if(mob_model = ''){
                                                        alert.innerHTML = "Please Enter Model";
                                                    }else{
                                                        if(user_name == '' || !user_name.match("[a-zA-Z_-]{3,15}") || (user_name.lenght >= 3 && user_name.lenght <= 15)){
                                                            alert.innerHTML = "Invalid user Name";
                                                        }else{
                                                            if(user_email == '' || !user_email.match("([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})")){
                                                                alert.innerHTML = "Invalid User Email id";
                                                            }else{
                                                                if(user_contact == '' || isNaN(user_contact) || !user_contact.match("[789][0-9]{9}") || user_contact.length != 10){
                                                                    alert.innerHTML = "Invalid User Contact Number";
                                                                }else{
                                                                    if(mob_includes == ''){
                                                                        alert.innerHTML = "Write what package includes";
                                                                    }else{
                                                                        if(mob_desc == ''){
                                                                            alert.innerHTML = "Write some description";
                                                                        }else{
                                                                            if(adv_type == ''){
                                                                                alert.innerHTML = "Please select Advertisement Type!";
                                                                            }else if(adv_type == 'Paid'){
                                                                                if(advt_type == ''){
                                                                                    alert.innerHTML = "Please select paid Advertisement Type!";
                                                                                }else{
                                                                                    $.ajax({
                                                                                        type:"post",
                                                                                        data:data,
                                                                                        url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
                                                                                        beforeSend: function(){
                                                                                            $("#submitmobilesForm").prop('disabled',true);
                                                                                        },
                                                                                        success: function(data) {
                                                                                            if(data == 'Success'){
                                                                                                window.location.assign('../../');
                                                                                            }else{
                                                                                                alert(data);
                                                                                            }
                                                                                        },
                                                                                        error: function(data){
                                                                                            alert("Form didn't submit!");
                                                                                        }
                                                                                    });
                                                                                }
                                                                            }else{
                                                                                $.ajax({
                                                                                    type:"post",
                                                                                    data:data,
                                                                                    url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
                                                                                    beforeSend: function(){
                                                                                        $("#submitmobilesForm").prop('disabled',true);
                                                                                    },
                                                                                    success: function(data) {
                                                                                        if(data == 'Success'){
                                                                                            window.location.assign('../../');
                                                                                        }else{
                                                                                            alert(data);
                                                                                        }
                                                                                    },
                                                                                    error: function(data){
                                                                                        alert("Form didn't submit!");
                                                                                    }
                                                                                });
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
                                            alert.innerHTML = "Please Enter Brand";
                                        }else{
                                            if(mob_model = ''){
                                                alert.innerHTML = "Please Enter Model";
                                            }else{
                                                if(user_name == '' || !user_name.match("[a-zA-Z_-]{3,15}") || (user_name.lenght >= 3 && user_name.lenght <= 15)){
                                                    alert.innerHTML = "Invalid user Name";
                                                }else{
                                                    if(user_email == '' || !user_email.match("([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})")){
                                                        alert.innerHTML = "Invalid User Email id";
                                                    }else{
                                                        if(user_contact == '' || isNaN(user_contact) || !user_contact.match("[789][0-9]{9}") || user_contact.length != 10){
                                                            alert.innerHTML = "Invalid User Contact Number";
                                                        }else{
                                                            if(mob_includes == ''){
                                                                alert.innerHTML = "Write what package includes";
                                                            }else{
                                                                if(mob_desc == ''){
                                                                    alert.innerHTML = "Write some description";
                                                                }else{
                                                                    if(adv_type == ''){
                                                                        alert.innerHTML = "Please select Advertisement Type!";
                                                                    }else if(adv_type == 'Paid'){
                                                                        if(advt_type == ''){
                                                                            alert.innerHTML = "Please select paid Advertisement Type!";
                                                                        }else{
                                                                            $.ajax({
                                                                                type:"post",
                                                                                data:data,
                                                                                url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
                                                                                beforeSend: function(){
                                                                                    $("#submitmobilesForm").prop('disabled',true);
                                                                                },
                                                                                success: function(data) {
                                                                                    if(data == 'Success'){
                                                                                        window.location.assign('../../');
                                                                                    }else{
                                                                                        alert(data);
                                                                                    }
                                                                                },
                                                                                error: function(data){
                                                                                    alert("Form didn't submit!");
                                                                                }
                                                                            });
                                                                        }
                                                                    }else{
                                                                        $.ajax({
                                                                            type:"post",
                                                                            data:data,
                                                                            url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
                                                                            beforeSend: function(){
                                                                                $("#submitmobilesForm").prop('disabled',true);
                                                                            },
                                                                            success: function(data) {
                                                                                if(data == 'Success'){
                                                                                    window.location.assign('../../');
                                                                                }else{
                                                                                    alert(data);
                                                                                }
                                                                            },
                                                                            error: function(data){
                                                                                alert("Form didn't submit!");
                                                                            }
                                                                        });
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
    }
});

//Electronics & appliances Form
$("#submitelectronicsForm").click(function(){
    var category_id=$("#adv_cat").val();
    var user_id = $("#user_id").val();
    var elect_want = $("#elect-want").val();
    var elect_subcategory = $("#electronics-subcategory").val();
    var elect_other = $("#electronics-other").val();
    var elect_ad_title = $("#electronics-ad-title").val();
    var elect_city = $("#elect-city").val();
    var elect_condition = $("#elect-condition").val();
    var elect_cost = $("#cost").val();
    var elect_used = $("#used-elect-months").val();
    var elect_bill = $("#elect-bill").val();
    var elect_brand = $("#elect-brand").val();
    var elect_model = $("#elect-model").val();
    var user_name=$("#user-name").val();
    var user_contact = $("#user-contact").val();
    var user_email = $("#user-email").val();
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
        "&elecother="+ elect_other +"&elecadtitle="+ elect_ad_title +"&city="+elect_city+"&eleccondition="+ elect_condition +"&eleccost="+ elect_cost +
        "&elecused="+ elect_used +"&elecbill="+ elect_bill +"&elecbrand="+ elect_brand +"&elecmodel="+ elect_model +
        "&username="+ user_name +"&useremail="+ user_email +"&usercontact="+ user_contact +"&elecinclude="+ elect_includes +
        "&elecdesc="+ elect_desc +"&advtype="+advt_type;

    if(category_id == ''){
        alert.innerHTML = "Failed To get Category Info!";
    }else {
        if (user_id == '') {
            alert.innerHTML = "Failed To get User Info!";
        } else {
            if(elect_want == ''){
                alert.innerHTML = "Please Select What you want to do";
            }else{
                if(elect_subcategory == ''){
                    alert.innerHTML = "Select A subcategory";
                }else{
                    if(elect_ad_title == ''){
                        alert.innerHTML = "Title field is required";
                    }else{
                        if(elect_city == ''){
                            alert.innerHTML = "Please Enter City";
                        }else{
                            if(elect_condition == ''){
                                alert.innerHTML = "Please Select Condition";
                            }else{
                                if(elect_cost == ''){
                                    alert.innerHTML = "Please Enter cost";
                                }else{
                                    if(elect_condition == 'Used'){
                                        if(elect_used == ''){
                                            alert.innerHTML = "Please Mention How long its been used";
                                        }else{
                                            if(elect_bill == ''){
                                                alert.innerHTML = "Please select Bill Option";
                                            }else{
                                                if(elect_brand == ''){
                                                    alert.innerHTML = "Please Enter Brand";
                                                }else{
                                                    if(elect_model = ''){
                                                        alert.innerHTML = "Please Enter model";
                                                    }else{
                                                        if(user_name == '' || !user_name.match("[a-zA-Z_-]{3,15}") || (user_name.lenght >= 3 && user_name.lenght <= 15)){
                                                            alert.innerHTML = "Invalid user Name";
                                                        }else{
                                                            if(user_email == '' || !user_email.match("([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})")){
                                                                alert.innerHTML = "Invalid user Email Id";
                                                            }else{
                                                                if(user_contact == '' || isNaN(user_contact) || !user_contact.match("[789][0-9]{9}") || user_contact.length != 10){
                                                                    alert.innerHTML = "Invalid user Contact Number";
                                                                }else{
                                                                    if(elect_includes == ''){
                                                                        alert.innerHTML = "Write what package includes";
                                                                    }else{
                                                                        if(elect_desc == ''){
                                                                            alert.innerHTML = "Write some description";
                                                                        }else{
                                                                            if(adv_type == ''){
                                                                                alert.innerHTML = "Please select Advertisement Type!";
                                                                            }else if(adv_type == 'Paid'){
                                                                                if(advt_type == ''){
                                                                                    alert.innerHTML = "Please select paid Advertisement Type!";
                                                                                }else{
                                                                                    $.ajax({
                                                                                        type:"post",
                                                                                        data:data,
                                                                                        url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
                                                                                        beforeSend: function(){
                                                                                            $("#submitelectronicsForm").prop('disabled',true);
                                                                                        },
                                                                                        success: function(data) {
                                                                                            if(data == 'Success'){
                                                                                                window.location.assign('../../');
                                                                                            }else{
                                                                                                alert(data);
                                                                                            }
                                                                                        },
                                                                                        error: function(data){
                                                                                            alert("Form didn't submit!");
                                                                                        }
                                                                                    });
                                                                                }
                                                                            }else{
                                                                                $.ajax({
                                                                                    type:"post",
                                                                                    data:data,
                                                                                    url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
                                                                                    beforeSend: function(){
                                                                                        $("#submitelectronicsForm").prop('disabled',true);
                                                                                    },
                                                                                    success: function(data) {
                                                                                        if(data == 'Success'){
                                                                                            window.location.assign('../../');
                                                                                        }else{
                                                                                            alert(data);
                                                                                        }
                                                                                    },
                                                                                    error: function(data){
                                                                                        alert("Form didn't submit!");
                                                                                    }
                                                                                });
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
                                            alert.innerHTML = "Please Enter Brand";
                                        }else{
                                            if(elect_model = ''){
                                                alert.innerHTML = "Please Enter model";
                                            }else{
                                                if(user_name == '' || !user_name.match("[a-zA-Z_-]{3,15}") || (user_name.lenght >= 3 && user_name.lenght <= 15)){
                                                    alert.innerHTML = "Invalid user Name";
                                                }else{
                                                    if(user_email == '' || !user_email.match("([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})")){
                                                        alert.innerHTML = "Invalid user Email Id";
                                                    }else{
                                                        if(user_contact == '' || isNaN(user_contact) || !user_contact.match("[789][0-9]{9}") || user_contact.length != 10){
                                                            alert.innerHTML = "Invalid user Contact Number";
                                                        }else{
                                                            if(elect_includes == ''){
                                                                alert.innerHTML = "Write what package includes";
                                                            }else{
                                                                if(elect_desc == ''){
                                                                    alert.innerHTML = "Write some description";
                                                                }else{
                                                                    if(adv_type == ''){
                                                                        alert.innerHTML = "Please select Advertisement Type!";
                                                                    }else if(adv_type == 'Paid'){
                                                                        if(advt_type == ''){
                                                                            alert.innerHTML = "Please select paid Advertisement Type!";
                                                                        }else{
                                                                            $.ajax({
                                                                                type:"post",
                                                                                data:data,
                                                                                url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
                                                                                beforeSend: function(){
                                                                                    $("#submitelectronicsForm").prop('disabled',true);
                                                                                },
                                                                                success: function(data) {
                                                                                    if(data == 'Success'){
                                                                                        window.location.assign('../../');
                                                                                    }else{
                                                                                        alert(data);
                                                                                    }
                                                                                },
                                                                                error: function(data){
                                                                                    alert("Form didn't submit!");
                                                                                }
                                                                            });
                                                                        }
                                                                    }else{
                                                                        $.ajax({
                                                                            type:"post",
                                                                            data:data,
                                                                            url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
                                                                            beforeSend: function(){
                                                                                $("#submitelectronicsForm").prop('disabled',true);
                                                                            },
                                                                            success: function(data) {
                                                                                if(data == 'Success'){
                                                                                    window.location.assign('../../');
                                                                                }else{
                                                                                    alert(data);
                                                                                }
                                                                            },
                                                                            error: function(data){
                                                                                alert("Form didn't submit!");
                                                                            }
                                                                        });
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
    }
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
    var homelife_city = $("#homelife-city").val();
    var homelife_condition = $("#homelife-condition").val();
    var homelife_cost = $("#cost").val();
    var homelife_used = $("#used-homelife-months").val();
    var homelife_bill = $("#homelife-bill").val();
    var user_name=$("#user-name").val();
    var user_contact = $("#user-contact").val();
    var user_email = $("#user-email").val();
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
        "&othersubcat="+ other_subcategory +"&homelifeadtitle="+ homelife_ad_title +"&city=" + homelife_city + "&homelifecondition="+ homelife_condition +
        "&homelifecost="+ homelife_cost +"&homelifeused="+ homelife_used +"&homelifebill="+ homelife_bill +"&username="+ user_name +
        "&useremail="+ user_email +"&usercontact="+ user_contact +"&homelifeinclude="+ homelife_includes +
        "&homelifedesc="+ homelife_desc +"&advtype="+advt_type;

    if(category_id == ''){
        alert.innerHTML = "Failed To get Category Info!";
    }else {
        if (user_id == '') {
            alert.innerHTML = "Failed To get User Info!";
        } else {
            if(home_category == ''){
                alert.innerHTML = "Please Select A category First";
            }else{
                if(homelife_ad_title == ''){
                    alert.innerHTML = "Please Enter Title";
                }else{
                    if(homelife_city == ''){
                        alert.innerHTML = "Please Enter City";
                    }else{
                        if(homelife_condition == ''){
                            alert.innerHTML = "Please Select Condition";
                        }else{
                            if(homelife_cost == ''){
                                alert.innerHTML = "Please Enter cost";
                            }else{
                                if(homelife_condition == 'Used'){
                                    if(homelife_used == ''){
                                        alert.innerHTML = "Please Mention How long its been used";
                                    }else{
                                        if(homelife_bill == ''){
                                            alert.innerHTML = "Please select Bill Option";
                                        }else{
                                            if(user_name == '' || !user_name.match("[a-zA-Z_-]{3,15}") || (user_name.lenght >= 3 && user_name.lenght <= 15)){
                                                alert.innerHTML = "Invalid user Name";
                                            }else{
                                                if(user_email == '' || !user_email.match("([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})")){
                                                    alert.innerHTML = "Invalid user Email Id";
                                                }else{
                                                    if(user_contact == '' || isNaN(user_contact) || !user_contact.match("[789][0-9]{9}") || user_contact.length != 10){
                                                        alert.innerHTML = "Invalid user Contact number";
                                                    }else{
                                                        if(homelife_includes == ''){
                                                            alert.innerHTML = "Write What package Includes";
                                                        }else{
                                                            if(homelife_desc == ''){
                                                                alert.innerHTML = "Write some description";
                                                            }else{
                                                                if(adv_type == ''){
                                                                    alert.innerHTML = "Please select Advertisement Type!";
                                                                }else if(adv_type == 'Paid'){
                                                                    if(advt_type == ''){
                                                                        alert.innerHTML = "Please select paid Advertisement Type!";
                                                                    }else{
                                                                        $.ajax({
                                                                            type:"post",
                                                                            data:data,
                                                                            url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
                                                                            beforeSend: function(){
                                                                                $("#submithomelifestyleForm").prop('disabled',true);
                                                                            },
                                                                            success: function(data) {
                                                                                if(data == 'Success')
                                                                                {
                                                                                    window.location.assign('../../');
                                                                                }else{
                                                                                    alert(data);
                                                                                }
                                                                            },
                                                                            error: function(data){
                                                                                alert("Form didn't submit!");
                                                                            }
                                                                        });
                                                                    }
                                                                }else{
                                                                    $.ajax({
                                                                        type:"post",
                                                                        data:data,
                                                                        url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
                                                                        beforeSend: function(){
                                                                            $("#submithomelifestyleForm").prop('disabled',true);
                                                                        },
                                                                        success: function(data) {
                                                                            if(data == 'Success')
                                                                            {
                                                                                window.location.assign('../../');
                                                                            }else{
                                                                                alert(data);
                                                                            }
                                                                        },
                                                                        error: function(data){
                                                                            alert("Form didn't submit!");
                                                                        }
                                                                    });
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
                                        alert.innerHTML = "Invalid user Name";
                                    }else{
                                        if(user_email == '' || !user_email.match("([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})")){
                                            alert.innerHTML = "Invalid user Email Id";
                                        }else{
                                            if(user_contact == '' || isNaN(user_contact) || !user_contact.match("[789][0-9]{9}") || user_contact.length != 10){
                                                alert.innerHTML = "Invalid user Contact number";
                                            }else{
                                                if(homelife_includes == ''){
                                                    alert.innerHTML = "Write What package Includes";
                                                }else{
                                                    if(homelife_desc == ''){
                                                        alert.innerHTML = "Write some description";
                                                    }else{
                                                        if(adv_type == ''){
                                                            alert.innerHTML = "Please select Advertisement Type!";
                                                        }else if(adv_type == 'Paid'){
                                                            if(advt_type == ''){
                                                                alert.innerHTML = "Please select paid Advertisement Type!";
                                                            }else{
                                                                $.ajax({
                                                                    type:"post",
                                                                    data:data,
                                                                    url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
                                                                    beforeSend: function(){
                                                                        $("#submithomelifestyleForm").prop('disabled',true);
                                                                    },
                                                                    success: function(data) {
                                                                        if(data == 'Success')
                                                                        {
                                                                            window.location.assign('../../');
                                                                        }else{
                                                                            alert(data);
                                                                        }
                                                                    },
                                                                    error: function(data){
                                                                        alert("Form didn't submit!");
                                                                    }
                                                                });
                                                            }
                                                        }else{
                                                            $.ajax({
                                                                type:"post",
                                                                data:data,
                                                                url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
                                                                beforeSend: function(){
                                                                    $("#submithomelifestyleForm").prop('disabled',true);
                                                                },
                                                                success: function(data) {
                                                                    if(data == 'Success')
                                                                    {
                                                                        window.location.assign('../../');
                                                                    }else{
                                                                        alert(data);
                                                                    }
                                                                },
                                                                error: function(data){
                                                                    alert("Form didn't submit!");
                                                                }
                                                            });
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
});

//Pets Form
$("#submitpetsForm").click(function(){
    var category_id=$("#adv_cat").val();
    var user_id = $("#user_id").val();
    var user_contact = $("#user-contact").val();
    var user_name=$("#user-name").val();
    var user_email = $("#user-email").val();

    if(category_id == ""){
        $("#alert").text("Unable To fetch Category! Please Select a Category Again...");
    } else {
        if(user_id == ""){
            $("#alert").text("Unable To fetch User Info! Please login Again...");
        } else {
            if(user_contact == "" || isNaN(user_contact) || !user_contact.match("[789][0-9]{9}") || user_contact.length != 10){
                $("#alert").text("User Contact Input is Invalid. It should be 10 digits");
                user_contact.focus();
            } else {
                if(user_email == "" || !user_email.match("([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})")){
                    $("#alert").text("User Email Input is Invalid. It should be like example@domain.com");
                    ser_email.focus();
                } else {
                    if(user_name == "" || !user_name.match("[a-zA-Z_-]{3,15}") || (user_name.lenght >= 3 && user_name.lenght <= 15)){
                        $("#alert").text("User Name is invalid. It must contain 3 to 15 characters.");
                        user_name.focus();
                    } else {
                        $.ajax({
                            type:"post",
                            data: "categoryid="+ category_id +"&userid="+ user_id +"&usercontact="+ user_contact +"&username="+ user_name +"&useremail="+ user_email,
                            url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
                            beforeSend: function(){
                                $("#submitpetsForm").prop('disabled',true);
                            },
                            success: function(data) {
                                if(data == 'Success'){
                                    window.location.assign('../../');
                                }else{
                                    alert(data);
                                }
                            },
                            error: function(data){
                                alert("Form didn't submit!");
                            }
                        });
                    }
                }
            }
        }
    }
});

//Community Form
$("#submitcommunityForm").click(function(){
    var category_id=$("#adv_cat").val();
    var user_id = $("#user_id").val();
    var user_contact = $("#user-contact").val();
    var user_name=$("#user-name").val();
    var user_email = $("#user-email").val();
    var data = "categoryid="+ category_id +"&userid="+ user_id +"&usercontact="+ user_contact +"&username="+
        user_name +"&useremail="+ user_email;

    if(category_id == ""){
        $("#alert").text("Unable To fetch Category! Please Select a Category Again...");
    } else {
        if(user_id == ""){
            $("#alert").text("Unable To fetch User Info! Please login Again...");
        } else {
            if(user_contact == "" || isNaN(user_contact) || !user_contact.match("[789][0-9]{9}") || user_contact.length != 10){
                $("#alert").text("User Contact Input is Invalid. It should be 10 digits");
                user_contact.focus();
            } else {
                if(user_email == "" || !user_email.match("([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})")){
                    $("#alert").text("User Email Input is Invalid. It should be like example@domain.com");
                    user_email.focus();
                } else {
                    if(user_name == "" || !user_name.match("[a-zA-Z_-]{3,15}") || (user_name.lenght >= 3 && user_name.lenght <= 15)){
                        $("#alert").text("User Name is invalid. It must contain 3 to 15 characters.");
                        user_name.focus();
                    } else {
                        $.ajax({
                            type:"post",
                            data:data,
                            url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
                            beforeSend: function(){
                                $("#submitcommunityForm").prop('disabled',true);
                            },
                            success: function(data) {
                                if(data == 'Success'){
                                    window.location.assign('../../');
                                }else{
                                    alert(data);
                                }
                            },
                            error: function(data){
                                alert("Form didn't submit!");
                            }
                        });
                    }
                }
            }
        }
    }
});

//Entertainment Form
$("#submitentertainmentForm").click(function(){
    var category_id=$("#adv_cat").val();
    var user_id = $("#user_id").val();
    var user_contact = $("#user-contact").val();
    var user_name=$("#user-name").val();
    var user_email = $("#user-email").val();
    var data = "categoryid="+ category_id +"&userid="+ user_id +"&usercontact="+ user_contact +"&username="+
        user_name +"&useremail="+ user_email;

    if(category_id == ""){
        $("#alert").text("Unable To fetch Category! Please Select a Category Again...");
    } else {
        if(user_id == ""){
            $("#alert").text("Unable To fetch User Info! Please login Again...");
        } else {
            if(user_contact == "" || isNaN(user_contact) || !user_contact.match("[789][0-9]{9}") || user_contact.length != 10){
                $("#alert").text("User Contact Input is Invalid. It should be 10 digits");
                user_contact.focus();
            } else {
                if(user_email == "" || !user_email.match("([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})")){
                    $("#alert").text("User Email Input is Invalid. It should be like example@domain.com");
                    user_email.focus();
                } else {
                    if(user_name == "" || !user_name.match("[a-zA-Z_-]{3,15}") || (user_name.lenght >= 3 && user_name.lenght <= 15)){
                        $("#alert").text("User Name is invalid. It must contain 3 to 15 characters.");
                        user_name.focus();
                    } else {
                        $.ajax({
                            type:"post",
                            data:data,
                            url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
                            beforeSend: function(){
                                $("#submitentertainmentForm").prop('disabled',true);
                            },
                            success: function(data) {
                                if(data == 'Success'){
                                    window.location.assign('../../');
                                }else{
                                    alert(data);
                                }
                            },
                            error: function(data){
                                alert("Form didn't submit!");
                            }
                        });
                    }
                }
            }
        }
    }
});

//Events Form
$("#submiteventForm").click(function(){
    var category_id=$("#adv_cat").val();
    var user_id = $("#user_id").val();
    var event_type = $("#event-type").val();
    var event_manag_type = $("#management-event-ser-type").val();
    var event_live_type = $("#live-event-ser-type").val();
    var event_city = $("#event-city").val();
    var event_cost = $("#cost").val();
    var user_name = $("#user-name").val();
    var user_email = $("#user-email").val();
    var event_ser_type = $("input[name=event-ser-type]:checked").val();
    var user_contact = $("#user-contact").val();
    var event_desc = $("#event-desc").val();
    var adv_type=$("input[name=adv-type]:checked").val();
    var advt_type;
    if(adv_type=="Paid"){
        advt_type=$("input[name=paidser-type]:checked").val();
    }else{
        advt_type=adv_type;
    }

    var data = "categoryid="+ category_id +"&userid="+ user_id +"&eventtype="+ event_type +"&eventmantype="+ event_manag_type +
        "&eventlivetype="+ event_live_type +"&eventcity="+ event_city +"&eventcost="+ event_cost +
        "&username="+ user_name +"&useremail="+ user_email +"&eventsertype="+ event_ser_type +"&usercontact="+ user_contact +
        "&eventdesc="+ event_desc +"&advtype="+advt_type;

    if(category_id == ''){
        alert.innerHTML = "Failed To get Category Info!";
    }else {
        if (user_id == '') {
            alert.innerHTML = "Failed To get User Info!";
        } else {
            if(event_type == ''){
                alert.innerHTML = "Please Select an Event Type first";
            }else{
                if(event_city == ''){
                    alert.innerHTML = "Please Enter Location of Event";
                }else{
                    if(event_cost == ''){
                        alert.innerHTML = "Please Enter Cost";
                    }else{
                        if(user_name == '' || !user_name.match("[a-zA-Z_-]{3,15}") || (user_name.lenght >= 3 && user_name.lenght <= 15)){
                            alert.innerHTML = "Invalid user Name";
                        }else{
                            if(user_email == '' || !user_email.match("([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})")){
                                alert.innerHTML = "Invalid user Email";
                            }else{
                                if(event_ser_type == ''){
                                    alert.innerHTML = "Please Select Service type";
                                }else{
                                    if(user_contact == '' || isNaN(user_contact) || !user_contact.match("[789][0-9]{9}") || user_contact.length != 10){
                                        alert.innerHTML = "Invalid User contact Number";
                                    }else{
                                        if(event_desc == ''){
                                            alert.innerHTML = "Write some description";
                                        }else{
                                            if(adv_type == ''){
                                                alert.innerHTML = "Please select Advertisement Type!";
                                            }else if(adv_type == 'Paid'){
                                                if(advt_type == ''){
                                                    alert.innerHTML = "Please select paid Advertisement Type!";
                                                }else{
                                                    $.ajax({
                                                        type:"post",
                                                        data:data,
                                                        url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
                                                        beforeSend: function(){
                                                            $("#submiteventForm").prop('disabled',true);
                                                        },
                                                        success: function(data) {
                                                            if(data == 'Success'){
                                                                window.location.assign('../../');
                                                            }else{
                                                                alert(data);
                                                            }
                                                        },
                                                        error: function(data){
                                                            alert("Form didn't submit!");
                                                        }
                                                    });
                                                }
                                            }else{
                                                $.ajax({
                                                    type:"post",
                                                    data:data,
                                                    url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
                                                    beforeSend: function(){
                                                        $("#submiteventForm").prop('disabled',true);
                                                    },
                                                    success: function(data) {
                                                        if(data == 'Success'){
                                                            window.location.assign('../../');
                                                        }else{
                                                            alert(data);
                                                        }
                                                    },
                                                    error: function(data){
                                                        alert("Form didn't submit!");
                                                    }
                                                });
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
});

//Matrimonial Form
$("#submitmatrimonialForm").click(function(){
    var category_id=$("#adv_cat").val();
    var user_id = $("#user_id").val();
    var user_contact = $("#user-contact").val();
    var user_name=$("#user-name").val();
    var user_email = $("#user-email").val();
    var data = "categoryid="+ category_id +"&userid="+ user_id +"&usercontact="+ user_contact +"&username="+
        user_name +"&useremail="+ user_email;

    if(category_id == ""){
        $("#alert").text("Unable To fetch Category! Please Select a Category Again...");
    } else {
        if(user_id == ""){
            $("#alert").text("Unable To fetch User Info! Please login Again...");
        } else {
            if(user_contact == "" || isNaN(user_contact) || !user_contact.match("[789][0-9]{9}") || user_contact.length != 10){
                $("#alert").text("User Contact Input is Invalid. It should be 10 digits");
                user_contact.focus();
            } else {
                if(user_email == "" || !user_email.match("([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})")){
                    $("#alert").text("User Email Input is Invalid. It should be like example@domain.com");
                    user_email.focus();
                } else {
                    if(user_name == "" || !user_name.match("[a-zA-Z_-]{3,15}") || (user_name.lenght >= 3 && user_name.lenght <= 15)){
                        $("#alert").text("User Name is invalid. It must contain 3 to 15 characters.");
                        user_name.focus();
                    } else {
                        $.ajax({
                            type:"post",
                            data:data,
                            url:"//localhost/optimus/forward/postFreeAD/post/postproduct.php",
                            beforeSend: function(){
                                $("#submitmatrimonialForm").prop('disabled',true);
                            },
                            success: function(data) {
                                if(data == 'Success'){
                                    window.location.assign('../../');
                                }else{
                                    alert(data);
                                }
                            },
                            error: function(data){
                                alert("Form didn't submit!");
                            }
                        });
                    }
                }
            }
        }
    }
});