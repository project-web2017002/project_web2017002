<div class="row">
    <div class="col-md-1 col-sm-12"></div>

    <div class="col-md-10 col-sm-12">
        <form name="servicesForm" autocomplete="off" method="post" enctype="multipart/form-data">
            <table class="table">

                <tr>
                    <td>
                        <input type="hidden" value="<?php echo $ctid ?>" name="adv_cat" id="adv_cat">
                    </td>
                    <td>
                        <input type="hidden" value="<?php echo $id ?>" name="user_id" id="user_id">
                    </td>
                </tr>

                <tr>
                    <td>
                        <select name="ser-type" id="ser-type" class="form-control">
                            <option value="">--SELECT SERVICE TYPE--</option>
                            <option value="Home Services">Home Services</option>
                            <option value="Legal Services">Legal Services</option>
                            <option value="Travel Services">Travel Services</option>
                            <option value="Commercial Services">Commercial Services</option>
                            <option value="Event Services">Event Services</option>
                            <option value="Financial Services">Financial Services</option>
                            <option value="Beauty Services">Beauty Services</option>
                            <option value="Other Services">Other Services</option>
                        </select>
                    </td>
                    <td>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-rupee"></i></span>
                            <input type="text" name="cost" class="form-control" id="cost" placeholder="Expected Cost">
                        </div>
                    </td>
                </tr>

                <tr id="servicetitletab">
                    <td>
                        <input type="text" name="Exact-Service-name" id="Exact-Service-name" placeholder="Enter Service Title" class="form-control">
                    </td>
                    <td>
                        <input type="text" class="form-control" name="ser-city" id="ser-city" placeholder="Enter Location(City)">
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" name="user-name" id="user-name" placeholder="Enter Name" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-at"></i></span>
                            <input type="email" name="user-email" id="user-email" placeholder="Enter Personal Email" class="form-control">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        I am: <input type="radio" name="user-type" class="user-type" id="company" value="Company">Company
                        <input type="radio" name="user-type" class="user-type" id="individual" value="Individual" checked>Individual
                    </td>
                    <td>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
                            <input type="text" class="form-control" name="user-contact" id="user-contact" placeholder="Enter Contact">
                        </div>
                    </td>
                </tr>

                <tr id="companytab">
                    <td>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-institution"></i></span>
                            <input type="text" name="company-name" id="company-name" placeholder="Enter Company Name" class="form-control">
                        </div>
                    </td>

                    <td>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-at"></i></span>
                            <input type="text" name="company-email" id="company-email" placeholder="Enter Company Email" class="form-control">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
                            <input type="text" class="form-control" name="company-contact" id="company-contact" placeholder="Enter Contact">
                        </div>
                    </td>
                </tr>

                <?php require("components/rightside/common.php"); ?>

                <tr>
                    <td colspan="2">
                        <div id="submitservicesForm" class="btn btn-danger btn-block">Continue</div>
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <div class="col-md-1 col-sm-12"></div>
</div>