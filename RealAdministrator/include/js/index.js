$(function(){
    $('#Admin-form').addClass('animated zoomIn');
    $('.adminBar-fluid .two').addClass('animated zoomInRight');
    $('.three').addClass('animated zoomIn');
    $('.four').addClass('animated zoomIn');

    $(".btn-pref .atn").click(function () {
        $(".btn-pref .atn").removeClass("btn-primary").addClass("btn-default");
        $(this).removeClass("btn-default").addClass("btn-primary");
    });

    $(".btn-pref .gtn").click(function () {
        $(".btn-pref .gtn").removeClass("btn-primary").addClass("btn-default");
        $(this).removeClass("btn-default").addClass("btn-primary");
    });

    $(".removable-user").click(function(){
        var valu = $(this).attr('id');
        $("#user-id").text(valu);
    });

    $(".removable-admin").click(function(){
        var vale = $(this).attr('id');
        $("#admin-id").text(vale);
    });

    $(".moveToProducts").click(function(){
        window.location.assign("forward/move/products/");
    });

    $(".moveToOrders").click(function(){
        window.location.assign("forward/move/orders/");
    });

    function refresh_Div(){
        $("#refreshable").hide();
        $("#refreshable").fadeIn('slow');
    }

    var reload = setInterval(refresh_Div, 15000);
});