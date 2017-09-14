// this will get file from user while posting an advertisement/post and verifies it
var input = document.querySelector('#refimg');

input.addEventListener("change",showthumbnail,false);

function showthumbnail(){
    var fileList = this.files;
    var anyWindow = window.URL || window.webkitURL;
    for(var i = 0; i < fileList.length; i++){
        var objectUrl = anyWindow.createObjectURL(fileList[i]);
        $('.preview').append('<li><img class="img-responsive" style="width: 150px; height: 150px;" src="' + objectUrl + '" /></li>');
        window.URL.revokeObjectURL(fileList[i]);
    }
    $("#uploadimg").show();
}