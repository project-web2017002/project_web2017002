<div class="container">
    <div class="row">
        <div class="col-md-4 col-xs-12"></div>
        <div class="col-md-4 col-xs-12">
            <form enctype="multipart/form-data" method="post" id="flow" autocomplete="off">
                <div class="row">
                    <input type="hidden" name="hiddenprid" id="hiddenprid" value="<?php echo $product_id ?>">
                </div>
                <div class="row">
                    <label for="refimg">Choose images to upload (PNG, JPG)</label>
                    <input type="file" name="file" id="refimg" accept=".png,.jpeg,.jpg" title="Choose an image file to upload"/>
                </div>
                <div class="row">
                    <div class="preview">
                        <p>No file currently selected for upload (Select only one file)</p>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-4 col-xs-12"></div>
    </div>
</div>