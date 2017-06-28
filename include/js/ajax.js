$("#signup").click(function() {
    var username= $("#username").val();
    var content = $("#content").val();
    var contant =$("#contant").val();
    var pass = $("#pass").val();
    var verify_terms = $("#verify_terms").val();
    var verify_age = $("#verify_age").val();
    $.ajax({
        type: "POST",
        url: "//localhost/optimus/forward/signup/send.php",
        data: "username=" + username+ "&pass=" + pass +"&content="+content+"&contant="+contant+"&verify_terms="+verify_terms+"&verify_age="+verify_age,
        beforeSend: function(){
            $("#signup").prop('disabled',true);
        },
        success: function(data) {
            alert("success");
            window.location.reload(true);
        },
        error: function(data){
            alert("Form didn't submit!");
        }
    });
});

$("#login").click(function(){
    var login_id = $("#loginContent").val();
    var login_pass = $("#loginPass").val();
    $.ajax({
        type:"post",
        url:"//localhost/optimus/forward/login/send.php",
        data:"login_id="+login_id+"&login_pass="+login_pass,
        beforeSend: function(){
            $("#login").prop('disabled',true);
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
    $.ajax({
        type:"post",
        url:"//localhost/optimus/forward/profile/send.php",
        data:"u_name="+u_name+"&u_email="+u_email+"&u_contact="+u_contact,
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
