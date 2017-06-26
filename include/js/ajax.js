$("#signup").click(function() {
    var username= $("#username").val();
    var content = $("#content").val();
    var pass = $("#pass").val();
    var verify_terms = $("#verify_terms").val();
    var verify_age = $("#verify_age").val();
    $.ajax({
        type: "POST",
        url: "//localhost/optimus/forward/signup/send.php",
        data: "username=" + username+ "&pass=" + pass +"&content="+content+"&verify_terms="+verify_terms+"&verify_age="+verify_age,
        success: function(data) {
            alert("success");
        }
    });
    return false;
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
            $('#signup').attr('disabled');
        } else {
            $('#signup').removeAttr('disabled');
        }
    });
});
