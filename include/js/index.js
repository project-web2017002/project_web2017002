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

    $('#nooo').click(function () {
        $('#nooo').hide();
        $('#mainnooo').show();
        $('#mainoo').slideDown();
    });
    $('#mainnooo').click(function () {
        $('#mainnooo').hide();
        $('#nooo').show();
        $('#mainoo').slideUp();
    });

    $('#oo').click(function(){
        $('#CategoryMenu2').slideDown();
        $('#oo').hide();
        $('#ooo').show();
    });
    $('#ooo').click(function(){
        $('#CategoryMenu2').slideUp();
        $('#ooo').hide();
        $('#oo').show();
    });
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

var mod = document.getElementById('myModal');
var modal = document.getElementById('loginModal');
var modal2 = document.getElementById('signupModal');

function one() {
// Hide the login modal
    mod.style.display = "none";
    $("#myModal").removeClass("in");
    modal2.style.display = "none";
    $("#signupModal").removeClass("in");
// Show the next modal after the fade effect is finished
    setTimeout(function () {
        document.getElementById('loginModal').style.display = "block";
        $("#loginModal").addClass("in");
    }, 200);
}

function two() {
// Hide the login modal
    mod.style.display = "none";
    $("#myModal").removeClass("in");
    modal.style.display = "none";
    $("#loginModal").removeClass("in");
// Show the next modal after the fade effect is finished
    setTimeout(function () {
        document.getElementById('signupModal').style.display = "block";
        $("#signupModal").addClass("in");
    }, 200);
}

function closed(){
        modal.style.display = "none";
        $('#loginModal').removeClass("in");
        modal2.style.display = "none";
        $('#signupModal').removeClass("in");
        $("body").removeClass("modal-open");
        document.body.style.paddingRight = '';
        $('.modal-backdrop').remove();
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
        $('#loginModal').removeClass("in");
        $("body").removeClass("modal-open");
        document.body.style.paddingRight = '';
        $('.modal-backdrop').remove();
    }else if(event.target == modal2){
        modal2.style.display = "none";
        $('#signupModal').removeClass("in");
        $("body").removeClass("modal-open");
        document.body.style.paddingRight = '';
        $('.modal-backdrop').remove();
    }
};

$(".btn-pref .atn").click(function () {
    $(".btn-pref .atn").removeClass("btn-primary").addClass("btn-default");
    $(this).removeClass("btn-default").addClass("btn-primary");
});
