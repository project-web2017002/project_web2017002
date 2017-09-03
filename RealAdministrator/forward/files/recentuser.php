<?php
// displays users tab menu in admin main page
?>
<div class="row">
        <div class="col-md-12 col-sm-12">
            <?php
            // tabs starts
            ?>
            <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
                <div class="btn-group" role="group">
                    <button type="button" id="stars" class="btn btn-primary gtn" href="#tab4" data-toggle="tab">
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                        <div class="hidden-xs">Our Users</div>
                    </button>
                </div>
                <div class="btn-group" role="group">
                    <button type="button" id="gtk" class="btn btn-default gtn" href="#tabgu" data-toggle="tab">
                        <span class="fa fa-google-plus" aria-hidden="true"></span>
                        <div class="hidden-xs">G+/FB Users</div>
                    </button>
                </div>
                <div class="btn-group" role="group">
                    <button type="button" id="favorites" class="btn btn-default gtn" href="#tab5" data-toggle="tab">
                        <span class="fa fa-user-o" aria-hidden="true"></span>
                        <div class="hidden-xs">Active Users</div>
                    </button>
                </div>
                <div class="btn-group" role="group">
                    <button type="button" id="following" class="btn btn-default gtn" href="#tab6" data-toggle="tab">
                        <span class="fa fa-remove" aria-hidden="true"></span>
                        <div class="hidden-xs">Remove a User</div>
                    </button>
                </div>
            </div>
            <?php
            //tabs ends

            //tab menus starts
            ?>
            <div class="well">
                <div class="tab-content">
                    <div class="tab-pane fade in active table-responsive" id="tab4">
                        <?php
                        // list of users registered through our registration form
                        require("morefiles/allusers.php");
                        ?>
                    </div>
                    <div class="tab-pane fade in table-responsive" id="tabgu">
                        <?php
                        // list of users from google/fb
                        require("morefiles/googleusers.php");
                        ?>
                    </div>
                    <div class="tab-pane fade in table-responsive" id="tab5">
                        <?php
                        //list of online users
                        require("morefiles/activeusers.php");
                        ?>
                    </div>
                    <div class="tab-pane fade in table-responsive" id="tab6">
                        <?php
                        //remove user list, except google/fb user
                        require("morefiles/remove.php");
                        ?>
                    </div>
                </div>
            </div>
            <?php
            //tab menus ends
            ?>
        </div>
    </div>