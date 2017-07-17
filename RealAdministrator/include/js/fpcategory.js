var fpcategory = document.getElementById('fpcategory');
$(function(){

    $("#goback").click(function(){
        window.location.assign("../../");
    });

    var j;
    var categories = ['services','homes','jobs','cars','bikes','education','mobiles & tablets',
        'furniture & decor','electronics and appliances','kids & toys','sports, hobbies & fashion',
        'commercial real estate','salon at home','home & lifestyle'];
    var ids = [10001,10002,10003,10004,10005,10006,10007,10008,10009,10010,10011,10012,10013,
        10017];
    for(j=0;j<categories.length;j++){
        fpcategory.innerHTML += "<option value='"+ids[j]+"'>"+categories[j]+"</option>";
    }

    $("#fpcategorysubmit").click(function(){
        var fpcategoryy = $('#fpcategory').val();
        if(fpcategoryy == ''){
            $("#fpmsgs").html("Please Select A category First");
        }else{
            window.location.assign('forward/fpCategory/addFp.php?categoryID='+fpcategoryy);
        }
    });

});

function addNow(file,category){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("message").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET", "send.php?file=" + file + "&categoryId="+ category, true);
    xmlhttp.send();
}