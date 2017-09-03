$(function(){
    $(".viewProductHeader").click(function () {
        $("#viewproductTitle").html(''); $("#img-tab").html(''); $("#cost").html('');
        $("#by").html(''); $("#em").html(''); $("#co").html('');
        $("#_jkpr").html(''); $("#vieproducterror").html('');
        $("#viewProduct").hide();
        $("body").removeClass("modal-open");
        document.body.style.removeProperty(paddingRight);
    });
});
// popup a window with product info, ajax request to get product info
function ViewProduct(pr_id) {
    $("body").addClass("modal-open");
    document.body.style.paddingRight = "17px";
    $("#viewProduct").show('slow');
    var data = "skey=" + pr_id;
    $.ajax({
        type: "POST",
        data: data,
        url: "//localhost/optimus/RealAdministrator/forward/ViewProductInfo/send.php",
        success: function (data) {
            var arr = data.split(",");
            if (arr[0] == 'success') {
                $("#viewproductTitle").html(arr[1]); $("#img-tab").html(arr[10]);
                $(".item.active.imm").html(arr[2]);
                $("#cost").html(arr[3]);
                $("#by").html(arr[4]); $("#em").html(arr[5]); $("#co").html(arr[6]);
                $("#_jkpr").html(pr_id); $("#_lc").html(arr[7]); $("#_ad").html(arr[8]);
                $("#pituresofproduct").html(arr[9]);
            } else { $(".errorViewProduct").html(arr[0]); }
        },
        error: function () { $("#viewProduct").hide(); }
    });
}