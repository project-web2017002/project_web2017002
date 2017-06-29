<div class="row">
    <div class="col-md-12 col-sm-12">

        <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
            <div class="btn-group" role="group">
                <button type="button" id="stars" class="btn btn-primary gtn" href="#tab7" data-toggle="tab">
                    <span class="fa fa-user-secret" aria-hidden="true"></span>
                    <div class="hidden-xs">All Admins</div>
                </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" id="favorites" class="btn btn-default gtn" href="#tab8" data-toggle="tab">
                    <span class="fa fa-user-o" aria-hidden="true"></span>
                    <div class="hidden-xs">Active Admins</div>
                </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" id="following" class="btn btn-default gtn" href="#tab9" data-toggle="tab">
                    <span class="fa fa-remove" aria-hidden="true"></span>
                    <div class="hidden-xs">Remove an Admin</div>
                </button>
            </div>
        </div>

        <div class="well">
            <div class="tab-content">
                <div class="tab-pane fade in active table-responsive" id="tab7">
                    <?php
                    require("morefiles/alladmins.php");
                    ?>
                </div>
                <div class="tab-pane fade in table-responsive" id="tab8">
                    <?php
                    require("morefiles/activeadmin.php");
                    ?>
                </div>
                <div class="tab-pane fade in table-responsive" id="tab9">
                    <?php
                    require("morefiles/removeadmin.php");
                    ?>
                </div>
            </div>
        </div>

    </div>
</div>