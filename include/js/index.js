function changename(data){
    var newvalue = data + ' <span class="glyphicon glyphicon-chevron-down"></span>';
    document.getElementById("cityvalue").innerHTML = newvalue;
}

$(function(){
    $('body').slideDown(1500);
    $("#mainWindow").show(1500);
});