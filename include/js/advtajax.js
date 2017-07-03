//Services Form
$("#submitservicesForm").click(function(){
    var category_id=$("#adv_cat").val();
    var service_type=$("#ser-type").val();
    var service_fees=$("#ser-fee").val();
    var service_name=$("#Exact-Service-name").val();
    var user_name=$("#user-name").val();
    var user_email=$("#user-email").val();
    var user_type=$("input[name=user-type]:checked").val();
    if(user_type=="Company"){
        var company_name=$("#company-name").val();
        var company_email=$("#company-email").val();
    }
    else{
        var company_name='';
        var company_email='';
    }
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
});

//Car Form
$("#submitcarForm").click(function(){
});

//Education Form
$("#submiteducationForm").click(function(){
});

//Home & Real estate Form
$("#submithomeForm").click(function(){
});

//Jobs Form
$("#submitJobForm").click(function(){
});

//Mobile & Tablets Form
$("#submitmobilesForm").click(function(){
});

//Electronics & appliances Form
$("#submitelectronicsForm").click(function(){
});

//Furniture & decoration Form
$("#submithomelifestyleForm").click(function(){
});

//Pets Form
$("#submitpetsForm").click(function(){
});

//Community Form
$("#submitcommunitylForm").click(function(){
});

//Entertainment Form
$("#submitentertainmentForm").click(function(){
});

//Events Form
$("#submiteventForm").click(function(){
});

//Matrimonial Form
$("#submitmatrimonialForm").click(function(){
});