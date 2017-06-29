<div class="row">
        <div class="col-md-12 col-sm-12">

            <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
                <div class="btn-group" role="group">
                    <button type="button" id="stars" class="btn btn-primary gtn" href="#tab4" data-toggle="tab">
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                        <div class="hidden-xs">Users</div>
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

            <div class="well">
                <div class="tab-content">
                    <div class="tab-pane fade in active table-responsive" id="tab4">
                        <?php
                        require("morefiles/allusers.php");
                        ?>
                    </div>
                    <div class="tab-pane fade in table-responsive" id="tab5">
                        <?php
                        require("morefiles/activeusers.php");
                        ?>
                    </div>
                    <div class="tab-pane fade in table-responsive" id="tab6">
                        <?php
                        require("morefiles/remove.php");
                        ?>
                    </div>
                </div>
            </div>

        </div>
    </div>