$(function(){


    $(".viewProductHeader").click(function () {
        $("#viewProduct").hide();
        $("#pr_id").html='';
    });
});

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
                $("#viewproductTitle").html(arr[1]);
                $("#img-tab").html(arr[2]);
                $("#cost").html(arr[3]);
                $("#by").html(arr[4]);
                $("#em").html(arr[5]);
                $("#co").html(arr[6]);
            } else {
                $(".errorViewProduct").html(arr[0]);
            }
        },
        error: function () {
            $("#viewProduct").hide();
        }
    });
}