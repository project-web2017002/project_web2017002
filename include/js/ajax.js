$("#signup").click(function() {
    var username= $("#username").val();
    var content = $("#content").val();
    var contant =$("#contant").val();
    var pass = $("#pass").val();
    var verify_terms = $("#verify_terms").val();
    var verify_age = $("#verify_age").val();
    $("#loading").show();
    $.ajax({
        type: "POST",
        url: "//localhost/optimus/forward/signup/send.php",
        data: "username=" + username+ "&pass=" + pass +"&content="+content+"&contant="+contant+"&verify_terms="+verify_terms+"&verify_age="+verify_age,
        beforeSend: function(){
            $("#signup").prop('disabled',true);
        },
        success: function(data) {
            if(data == "Success") {
                $("#loading").hide();
                window.location.assign('forward/signup/otp/');
            }else{
                $("#loading").hide();
                window.location.assign('?error='+data);
            }
        },
        error: function(data){
            $("#signupModal").show();
            $("#loading").hide();
        }
    });
});

$("#login").click(function(){
    var login_id = $("#loginContent").val();
    var login_pass = $("#loginPass").val();
    $("#loading").show();
    $.ajax({
        type:"post",
        url:"//localhost/optimus/forward/login/send.php",
        data:"login_id="+login_id+"&login_pass="+login_pass,
        beforeSend: function(){
            $("#login").prop('disabled',true);
        },
        success: function(data) {
            $("#loading").hide();
            if(data == 'Success') {
                window.location.reload(true);
            }else if(data == "OTP"){
                window.location.assign('forward/signup/otp/');
            }else{
                $("#login").removeAttr('disabled');
                console.log(data);
            }
        },
        error: function(data){
            $("#loading").hide();
        }
    });
});

$(function() {
    $('#Signupform input').keyup(function() {
        var empty = false;
        $('#Signupform input').each(function() {
            if ($(this).val() == '') {
                empty = true;
            }
        });
        if (empty) {
            $('#signup').addClass('hidden');
            $('#hidn').removeClass('hidden');
        } else {
            $('#hidn').addClass('hidden');
            $('#signup').removeClass('hidden');
        }
    });
});

$(function() {
    $('#loginForm input').keyup(function() {
        var empty = false;
        $('#loginForm input').each(function() {
            if ($(this).val() == '') {
                empty = true;
            }
        });
        if (empty) {
            $('#login').attr('disabled');
        } else {
            $('#login').removeAttr('disabled');
        }
    });
});

$("#edit").click(function(){
    var u_name=$("#usernam").val();
    var u_email=$("#conten").val();
    var u_contact=$("#contan").val();
    $("#editModal").hide();
    $("#loading").show();
    $.ajax({
        type:"post",
        url:"//localhost/optimus/forward/profile/send.php",
        data:"u_name="+u_name+"&u_email="+u_email+"&u_contact="+u_contact,
        beforeSend: function(){
            $("#edit").prop('disabled',true);
        },
        success: function(data) {
            $("#loading").hide();
            window.location.reload(true);
        },
        error: function(data){
            $("#editModal").show();
            $("#loading").hide();
            alert("Form didn't submit!");
        }
    });
});

$("#edit2").click(function(){
    $("#edit").prop('disabled',true);
    var u_contact=$("#contan").val();
    $("#loading").show();
    $.ajax({
        type:"post",
        url:"//localhost/optimus/forward/profile/send.php",
        data:"u_contact="+u_contact,
        success: function(data) {
            $("#loading").hide();
            window.location.reload(true);
        },
        error: function(data){
            $("#loading").hide();
            alert("Form didn't submit!");
        }
    });
});
