$(function(){
    $("#formOTP").click(function(){
        $("#loading").show();
        var two = $("#otpval").val();
        if(two == '' || two.length<4){
            $("#errorfield").html("Please Enter Valid Four Digit OTP");
        }else{
            $.ajax({
                url:"send.php",
                type:'post',
                data:'b='+two,
                success:function (data) {
                    $("#loading").hide();
                    if(data == 'Success'){
                        window.location.assign('../../../');
                    }else if(data == 'Verified User'){
                        window.location.assign('../../../');
                    }else if(data == 'User Does not Exist') {
                        window.location.assign('../../../');
                    }else{
                        $("#errorfield").html(data);
                    }
                }
            });
        }
    });
});
