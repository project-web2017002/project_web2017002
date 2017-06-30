$("#ad-login").click(function(){

    var ad_uname = $("#uname").val();
    var ad_pass = $("#psw").val();

    $.ajax({
        type:"post",
        url:"//localhost/optimus/RealAdministrator/forward/login/send.php",
        data: "ad_uname="+ad_uname+"&ad_pass="+ad_pass,
        beforeSend: function(){
            $("#ad-login").prop('disabled',true);
        },
        success: function(data) {
            window.location.reload(true);
        },
        error: function(data){
            alert("Form didn't submit!");
        }
    });

});

$("#adminsignup").click(function() {
    var adminname= $("#adminname").val();
    var adminemail = $("#adminemail").val();
    var admincontact =$("#admincontact").val();
    var pass = $("#pass").val();
    $.ajax({
        type: "POST",
        url: "//localhost/optimus/RealAdministrator/forward/signup/send.php",
        data: "adminname="+adminname+"&adminemail="+adminemail+"&admincontact="+admincontact+"&pass="+pass,
        beforeSend: function(){
            $("#adminsignup").prop('disabled',true);
        },
        success: function(data) {
            window.location.reload(true);
        },
        error: function(data){
            alert("Form didn't submit!");
        }
    });
});

$(function() {
    $('#newSignupform input').keyup(function() {
        var empty = false;
        $('#newSignupform input').each(function() {
            if ($(this).val() == '') {
                empty = true;
            }
        });
        if (empty) {
            $('#adminsignup').addClass('hidden');
            $('#adhidn').removeClass('hidden');
        } else {
            $('#adhidn').addClass('hidden');
            $('#adminsignup').removeClass('hidden');
        }
    });
});

$("#remove").click(function(){
    var secretId = document.getElementById('user-id').innerHTML;
    $.ajax({
        type:"post",
        url: "//localhost/optimus/RealAdministrator/forward/files/senddata/deleteuser.php",
        data : "secretId="+secretId,
        beforeSend: function(){
            $("#j-k-l").addClass('hidden');
        },
        success: function(data) {
            alert("User Removed Successfully");
            window.location.reload(true);
        },
        error: function(data){
            alert("Form didn't submit!");
        }
    });
});

$("#removead").click(function(){
    var secretId = document.getElementById('admin-id').innerHTML;
    $.ajax({
        type:"post",
        url: "//localhost/optimus/RealAdministrator/forward/files/senddata/deleteadmin.php",
        data : "secretId="+secretId,
        beforeSend: function(){
            $("#a-b-c").addClass('hidden');
        },
        success: function(data) {
            alert("Admin Removed Successfully");
            window.location.reload(true);
        },
        error: function(data){
            alert("Form didn't submit!");
        }
    });
});

$("#edit").click(function(){
    var ad_name=$("#usernam").val();
    var ad_email=$("#conten").val();
    var ad_contact=$("#contan").val();
    $.ajax({
        type:"post",
        url:"//localhost/optimus/RealAdministrator/forward/signup/editsend.php",
        data:"ad_name="+ad_name+"&ad_email="+ad_email+"&ad_contact="+ad_contact,
        beforeSend: function(){
            $("#edit").prop('disabled',true);
        },
        success: function(data) {
            window.location.reload(true);
        },
        error: function(data){
            alert("Form didn't submit!");
        }
    });
});