var input = document.querySelector('#refimg');
var preview = document.querySelector('.preview');
input.style.opacity = 0;
input.addEventListener('change', updateImageDisplay);
function updateImageDisplay() {
    while(preview.firstChild) {
        preview.removeChild(preview.firstChild);
    }

    var curFiles = input.files;
    if(curFiles.length === 0) {
        var para = document.createElement('p');
        para.textContent = 'No files currently selected for upload';
        preview.appendChild(para);
    } else {
        var list = document.createElement('ol');
        preview.appendChild(list);
        for(var i = 0; i < 1; i++) {
            var listItem = document.createElement('li');
            para = document.createElement('p');
            if(validFileType(curFiles[i])) {
                para.textContent = 'File size ' + returnFileSize(curFiles[i].size) + '.';
                var image = document.createElement('img');
                image.src = window.URL.createObjectURL(curFiles[i]);

                listItem.appendChild(image);
                listItem.appendChild(para);

            } else {
                para.textContent = 'File name ' + curFiles[i].name + ': Not a valid file type. Update your selection.';
                listItem.appendChild(para);
            }

            list.appendChild(listItem);
        }
    }
}
var fileTypes = [
    'image/jpeg',
    'image/jpg',
    'image/png'
];

function validFileType(file) {
    for(var i = 0; i < fileTypes.length; i++) {
        if(file.type === fileTypes[i]) {
            return true;
        }
    }
    return false;
}
function returnFileSize(number) {
    if(number < 1024) {
        return number + 'bytes';
    } else if(number > 1024 && number < 1048576) {
        return (number/1024).toFixed(1) + 'KB';
    } else if(number > 1048576) {
        return (number/1048576).toFixed(1) + 'MB';
    }
}

$(function(){
    //imageupload
    $('#refimg').on('change', fileUpload);
});

function fileUpload(event){
    $(".preview").html(event.target.value+" uploading...");
    var opr = $("#hiddenprid").val();
    var files = event.target.files;
    var data = new FormData();
        var file = files[0];
            data.append('file', file, file.name);
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'components/send.php?pr='+opr, true);
            xhr.send(data);
            xhr.onload = function () {
                var response = JSON.parse(xhr.responseText);
                if(xhr.status === 200 && response.status == 'ok'){
                    $(".preview").html("File has been uploaded successfully");
                    window.location.assign('../../');
                }else if(response.status == 'type_err'){
                    $(".preview").html("Please choose an images file.");
                }else{
                    $(".preview").html("Some problem occured, please try again.");
                }
            };
}