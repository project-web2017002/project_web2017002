<div class="row">
    <div class="col-md-1 col-sm-12"></div>

    <div class="col-md-10 col-sm-12">
        <form class="postform" name="servicesForm" autocomplete="off" method="post" enctype="multipart/form-data">
            <table class="table">

                <?php require("components/rightside/elements/commontop.php"); ?>

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
                    <?php require("components/rightside/elements/postcity.php"); ?>
                </tr>

                <tr>
                    <?php require("components/rightside/elements/username.php"); ?>
                    <?php require("components/rightside/elements/useremail.php"); ?>
                </tr>

                <tr>
                    <?php require("components/rightside/elements/usercontact.php"); ?>
                    <td>
                        I am: <input type="radio" name="user-type" class="user-type" id="company" value="Company">Company
                        <input type="radio" name="user-type" class="user-type" id="individual" value="Individual" checked>Individual
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

                <?php require("components/rightside/elements/commonbtm.php"); ?>
                <?php require("components/rightside/elements/btn.php"); ?>
            </table>
        </form>
    </div>

    <div class="col-md-1 col-sm-12"></div>
</div>