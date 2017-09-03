<?php
// this will display editor in admins main page
?>
<div class="row" id="mainWindow">
    <div class="col-md-12 col-sm-12">
        <form autocomplete="off" method="post">
            <textarea name="editor" id="editor"></textarea> <?php
            // worked throgh js
            ?>
            <input type="text" id="filename" name="filename" placeholder="Enter File name" class="form-control">
            <select id="fileExt" name="fileExt" class="form-control">
                <option value=".html">.html</option>
                <option value=".txt">.txt</option>
            </select>
            <button type="submit" name="productAdsubmit" id="productAdsubmit" class="btn btn-default btn-block">Upload</button>
        </form>
    </div>
</div>

<?php
//save a created file in editor
if(isset($_POST['editor'])){
    $data=$_POST['editor'];
    $filename = $_POST['filename'];
    $file_ext = $_POST['fileExt'];

    $path = "newUploads/";
    mkdir($path, 0, true);

    $createfile = fopen($path."/".$filename.$file_ext,"w");
    fwrite($createfile, $data);
    fclose($createfile);
    header("location://localhost/optimus/RealAdministrator/");
}
?>