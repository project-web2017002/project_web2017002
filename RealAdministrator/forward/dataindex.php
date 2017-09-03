<div class="row">
    <div class="col-md-3 col-sm-12 one">
        <div class="well three">
            <div class="row" style="text-align: center; text-align: -webkit-center;">
                <img class="img-responsive circular" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSgFnfrOSxkw1jGkL2CfyPm7ujOB62AxYAA8wqwK_7uDC7jfhzfLenSg">
            </div><br>
                <?php
                // displays useradmin info
                require("other/profile.php");
                ?>
        </div>

        <div class="well four">
            <div class="row" style="text-align: center; text-align: -webkit-center;">
                <?php
                // displays orders count and product count
                require("other/other.php");
                ?>
            </div>
        </div>
    </div>

    <div class="col-md-9 col-sm-12 two">
        <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
            <div class="btn-group" role="group">
                <button type="button" id="stars" class="btn btn-primary atn" href="#tab1" data-toggle="tab">
                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                    <div class="hidden-xs">View Recent Users</div>
                </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" id="favorites" class="btn btn-default atn" href="#tab2" data-toggle="tab">
                    <span class="fa fa-product-hunt" aria-hidden="true"></span>
                    <div class="hidden-xs">Add Details of new Product</div>
                </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" id="following" class="btn btn-default atn" href="#tab3" data-toggle="tab">
                    <span class="fa fa-user-secret" aria-hidden="true"></span>
                    <div class="hidden-xs">View All Admins</div>
                </button>
            </div>
        </div>

        <div class="well">
            <div class="tab-content">
                <div class="tab-pane fade in active" id="tab1">
                    <?php
                    // users tabs, default
                    require("files/recentuser.php");
                    ?>
                </div>
                <div class="tab-pane fade in" id="tab2">
                    <?php
                    // editor tab
                    require("files/productdetails.php");
                    ?>
                </div>
                <div class="tab-pane fade in" id="tab3">
                    <?php
                    // admin tab
                    require("files/admins.php");
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>