<?php
require("../../essential/db/db.php");
require("../../essential/ses/session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
    <?php
    require("../../include/imp/AllStylesheets.php");
    require("../../include/imp/topscripts.php");
    ?>
</head>
<body style="background: #f3f3f3">
<?php
//login/signup modal
require("../../forward/modal.php");
//header
include("../../include/head/header.php");
?>
<div class="container-fluid profile-fluid">

    <div class="row">
        <div class="col-md-3 col-sm-12">

        </div>
        <div class="col-md-9 col-sm-12">
            <div class="card hovercard">
                <div class="card-background">
                    <img class="card-bkimg" alt="" src="http://lorempixel.com/100/100/people/9/">
                </div>
                <div class="useravatar">
                    <img alt="" src="http://zelfverbeteren.nl/wp-content/uploads/2016/12/abstract-user-flat-3.png">
                </div>
                <div class="card-info">
                    <span class="card-title" style="text-transform: uppercase"><?php echo $user_name ?></span>
                </div>
            </div>
            <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
                <div class="btn-group" role="group">
                    <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab">
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                        <div class="hidden-xs">About Me</div>
                    </button>
                </div>
                <div class="btn-group" role="group">
                    <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab">
                        <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                        <div class="hidden-xs">Own Product</div>
                    </button>
                </div>
                <div class="btn-group" role="group">
                    <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab">
                        <span class="fa fa-product-hunt" aria-hidden="true"></span>
                        <div class="hidden-xs">Sold/Selling Products</div>
                    </button>
                </div>
            </div>

            <div class="well">
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="tab1">
                        <div class="row">
                            <div class="col-md-2 col-sm-12"></div>
                            <div class="col-md-8 col-sm-12">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 rgt-pull">
                                        <h5>
                                            <strong style="cursor: pointer" data-toggle="modal" data-target="#editModal" >
                                                <i class="fa fa-edit"></i> Edit
                                            </strong>
                                        </h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 pull-lft">
                                        <h5>
                                            <strong>User Name:</strong>
                                        </h5>
                                    </div>
                                    <div class="col-md-6 col-sm-12 rgt-pull">
                                        <h5 style="text-transform: capitalize">
                                            <em><?php echo $user_name ?></em>
                                        </h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 pull-lft">
                                        <h5>
                                            <strong>Email Id:</strong>
                                        </h5>
                                    </div>
                                    <div class="col-md-6 col-sm-12 rgt-pull">
                                        <h5>
                                            <em><?php echo $user_email ?></em>
                                        </h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 pull-lft">
                                        <h5>
                                            <strong>Contact Number:</strong>
                                        </h5>
                                    </div>
                                    <div class="col-md-6 col-sm-12 rgt-pull">
                                        <h5>
                                            <em><?php echo $user_contact ?></em>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-12"></div>
                        </div>
                    </div>
                    <div class="tab-pane fade in" id="tab2">
                        <h3>This is tab 2</h3>
                    </div>
                    <div class="tab-pane fade in" id="tab3">
                        <h3>This is tab 3</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php
//footer
require("../../include/foot/footer.php");
require("../../include/imp/bottomscripts.php");
?>
</body>
</html>