$(function(){
    $(".viewProductHeader").click(function () {
        $("#viewproductTitle").html(''); $("#img-tab").html(''); $("#cost").html('');
        $("#by").html(''); $("#em").html(''); $("#co").html('');
        $("#_jkpr").html(''); $("#vieproducterror").html(''); $("#_prc").html('');
        $("#viewProduct").hide('slow');
    });
});

function addtocart() {
    $("#_acpr").attr("disabled", "disabled");
    var a = $("#_jkpr").html();
    var data = "gyuvhdsfjhdowojn9njdbjhevgevsvcLH=" + a;
    $.ajax({
        type: 'post',
        data: data,
        url: 'forward/cart/addToCart.php',
        success: function (data) {
            if (data == "Success") {
                $("#_acpr").removeAttr("disabled"); $("#_acpr").removeClass("btn-success"); $("#_acpr").addClass("btn-info");
                $("#_acpr").html("<h1><span class='fa fa-shopping-cart'></span> In Cart </h1>"); $("#_acpr").removeAttr('id');
            } else {
                $("#vieproducterror").html(data); $("#_acpr").removeAttr("disabled");
            }
        },
        error: function () {
            $("#vieproducterror").html("Failed to add Product to Cart! Try again");
            $("#_acpr").removeAttr("disabled");
        }
    });
}

function ViewProduct(pr_id) {
    $("#viewProduct").fadeIn('slow');
    var data = "skey=" + pr_id;
    $.ajax({
        type: "POST",
        data: data,
        url: "forward/OtherFiles/viewProduct/send.php",
        success: function (data) {
            var arr = data.split(",");
            if (arr[0] == 'success') {
                $("#viewproductTitle").html(arr[1]); $("#img-tab").html(arr[2]);
                $("#_prc").html(arr[7]); $("#cost").html(arr[3]);
                $("#by").html(arr[4]); $("#em").html(arr[5]); $("#co").html(arr[6]);
                $("#_jkpr").html(pr_id);
            } else { $(".errorViewProduct").html(arr[0]); }
        },
        error: function () { $("#viewProduct").hide(); }
    });
}

function remove(product){
    $.ajax({
        type:'post',
        data:'hjkl='+product,
        url:'removeCart.php',
        success: function(data) {
            if(data == "success") {
                window.location.reload();
            }else{
                $(".carterror").html(data);
            }
        },
        error:function(){
            $(".carterror").html("Failed to remove! Try Again");
        }
    });
}