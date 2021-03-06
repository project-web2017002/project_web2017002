var fpcategory = document.getElementById('fpcategory');
$(function(){
// change window location
    $("#goback").click(function(){
        window.location.assign("../../");
    });
// change window location
    $("#goback2").click(function(){
        window.location.assign("../../../");
    });
// create categories
    var j;
    var categories = ['services','homes','jobs','cars','bikes','education','mobiles & tablets',
        'furniture & decor','electronics and appliances','kids & toys','sports, hobbies & fashion',
        'commercial real estate','salon at home','home & lifestyle'];
    var ids = [10001,10002,10003,10004,10005,10006,10007,10008,10009,10010,10011,10012,10013,
        10017];
    for(j=0;j<categories.length;j++){
        fpcategory.innerHTML += "<option value='"+ids[j]+"'>"+categories[j]+"</option>";
    }

    // change window location if no product found in particular category while adding a product in featured

    $("#fpcategorysubmit").click(function(){
        var fpcategoryy = $('#fpcategory').val();
        if(fpcategoryy == ''){
            $("#fpmsgs").html("Please Select A category First");
        }else{
            window.location.assign('forward/fpCategory/addFp.php?categoryID='+fpcategoryy);
        }
    });
// change window location
    $("#removefp").click(function(){
        window.location.assign("forward/fpCategory/");
    });
// change window location
    $("#viewfp").click(function(){
        window.location.assign("forward/fpCategory/view/");
    });

});
// request to add a product to featured category
function addNow(file,category,pr_id){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("message").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET", "send.php?file=" + file + "&categoryId="+ category + "&secret=" + pr_id, true);
    xmlhttp.send();
}
// ajax request to remove a product from featured products
function remove(featpronum){
    $.ajax({
        type:"post",
        data:"num="+featpronum,
        url:"remove.php",
        success:function(data){
            if(data == 'Success'){
                $("#message2").html("Product Removed SuccessFully");
                window.location.reload();
            }else{
                $("#message2").html(data);
            }
        },
        error:function() {
            $("#message2").html("Error");
        }
    });
}