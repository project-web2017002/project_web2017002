function changename(data){
    var newvalue = data + ' <span class="glyphicon glyphicon-chevron-down"></span>';
    document.getElementById("cityvalue").innerHTML = newvalue;
}

$(function(){
    $('body').fadeIn(1500);
    $("#mainWindow").fadeIn(1500);
});

$(".btn-pref .btn").click(function () {
    $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
    // $(".tab").addClass("active"); // instead of this do the below
    $(this).removeClass("btn-default").addClass("btn-primary");
});