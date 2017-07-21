function changename(data){
    var urlofpage = window.location.href;
    var sep;
    var g;
    var t;
    var ult;
    var parsed;
    if(urlofpage.indexOf('?') > -1){
        sep = "&";
        g = data.split('> ');
        t = g[1].split(' <');
        if(urlofpage.includes('city=')){
            ult = urlofpage.replace(/(city=)[^\&]+/, '$1' + t[0]);
            window.location.href = ult;
        }else{
            parsed = "city=" + encodeURIComponent(t[0]);
            ult = urlofpage + sep + parsed;
            window.location.href = ult;
        }
    } else {
        sep = "?";
        g = data.split('> ');
        t = g[1].split(' <');
        parsed = "city=" + encodeURIComponent(t[0]);
        ult = urlofpage + sep + parsed;
        window.location.href = ult;
    }
    var nevalue = data;
    document.getElementById("cityvalue").innerHTML = nevalue;
}

$(function(){
    $('body').fadeIn(1500);
    $("#mainWindow").fadeIn(1500);
});

$(".btn-pref .btn").click(function () {
    $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
    $(this).removeClass("btn-default").addClass("btn-primary");
});