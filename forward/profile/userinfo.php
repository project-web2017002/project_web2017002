<!--User info starts-->
<div class="tab-pane fade in active" id="tab1">
    <div class="row">
        <div class="col-md-2 col-sm-12"></div>
        <div class="col-md-8 col-sm-12">
            <div class="row">
                <div class="col-md-12 col-sm-12 rgt-pull">
                    <h5>
                        <strong style="cursor: pointer" data-toggle="modal"
                                data-target="#editModal">
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
<!--User info ends-->