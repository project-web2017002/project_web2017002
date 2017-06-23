function changename(data){
    var newvalue = data + ' <span class="glyphicon glyphicon-chevron-down"></span>';
    document.getElementById("cityvalue").innerHTML = newvalue;
}

$(document).ready(function(){
    var wid = $(document).outerWidth();
    if(wid>=1200){
        $("#CategoryMenu").css({
            'position':'fixed'
        });
        var docheight = $("#mainWindow").height();
        var cateheight = $("#CategoryMenu").height();
		var stoph = (docheight-cateheight)+250;
        $(window).scroll(function(){
            if($(window).scrollTop() > stoph){
                $("#CategoryMenu").css({
                    'margin-top':'230px',
                    'position':'absolute'
                });
            }
            else{
                $("#CategoryMenu").css({
                    'margin-top':'0',
                    'position':'fixed'
                });
            }
        });
    }
});