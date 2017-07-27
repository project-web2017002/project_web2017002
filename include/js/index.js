function changename(data){
    var urlofpage = window.location.href;
    var sep;
    var g;
    var t;
    var ult;
    var parsed;
    if(urlofpage.includes('page=')){
        g = data.split('> ');
        t = g[1].split(' <');
        ult = '?city='+t[0];
        window.location.assign(ult);
    }
    else {
        if (urlofpage.indexOf('?') > -1) {
            sep = "&";
            g = data.split('> ');
            t = g[1].split(' <');
            if (urlofpage.includes('city=')) {
                ult = urlofpage.replace(/(city=)[^\&]+/, '$1' + t[0]);
                window.location.href = ult;
            } else {
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

function changecategory(dataa){
    var urlofpage = window.location.href;
    var sep;
    var ult;
    var parsed;
    if(urlofpage.includes('page=')){
        ult = '?categoryId='+dataa;
        window.location.assign(ult);
    }
    else {
        if (urlofpage.indexOf('?') > -1) {
            sep = "&";
            if (urlofpage.includes('categoryId=')) {
                ult = urlofpage.replace(/(categoryId=)[^\&]+/, '$1' + dataa);
                window.location.href = ult;
            } else {
                parsed = "categoryId=" + encodeURIComponent(dataa);
                ult = urlofpage + sep + parsed;
                window.location.href = ult;
            }
        } else {
            sep = "?";
            parsed = "categoryId=" + encodeURIComponent(dataa);
            ult = urlofpage + sep + parsed;
            window.location.href = ult;
        }
    }
}

function changepage(dataa){
    var urlofpage = window.location.href;
    var sep;
    var ult;
    var parsed;
    if(urlofpage.indexOf('?') > -1){
        sep = "&";
        if(urlofpage.includes('page=')){
            ult = urlofpage.replace(/(page=)[^\&]+/, '$1' + dataa);
            window.location.href = ult;
        }else{
            parsed = "page=" + encodeURIComponent(dataa);
            ult = urlofpage + sep + parsed;
            window.location.href = ult;
        }
    } else {
        sep = "?";
        parsed = "page=" + encodeURIComponent(dataa);
        ult = urlofpage + sep + parsed;
        window.location.href = ult;
    }
}