<div class="row">
    <div class="col-md-12 col-sm-12">

        <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
            <div class="btn-group" role="group">
                <button type="button" id="stars" class="btn btn-primary gtn" href="#tab10" data-toggle="tab">
                    <span class="fa fa-info" aria-hidden="true"></span>
                    <div class="hidden-xs">New Product Description</div>
                </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" id="favorites" class="btn btn-default gtn" href="#tab11" data-toggle="tab">
                    <span class="fa fa-file-image-o" aria-hidden="true"></span>
                    <div class="hidden-xs">New Product Images</div>
                </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" id="following" class="btn btn-default gtn" href="#tab12" data-toggle="tab">
                    <span class="fa fa-info-circle" aria-hidden="true"></span>
                    <div class="hidden-xs">New Product Information</div>
                </button>
            </div>
        </div>

        <div class="well">

            <div class="tab-content">
                <div class="tab-pane fade in active table-responsive" id="tab10">
                    <?php
                    require("productfiles/desc.php");
                    ?>
                </div>
                <div class="tab-pane fade in table-responsive" id="tab11">
                    <?php
                    require("productfiles/images.php");
                    ?>
                </div>
                <div class="tab-pane fade in table-responsive" id="tab12">
                    <?php
                    require("productfiles/info.php");
                    ?>
                </div>
            </div>
        </div>

    </div>
</div>