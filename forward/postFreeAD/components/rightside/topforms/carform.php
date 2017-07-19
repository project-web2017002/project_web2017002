<div class="row">
    <div class="col-md-1 col-sm-12"></div>

    <div class="col-md-10 col-sm-12">
        <form name="carsForm" autocomplete="off" method="post">
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
                    <td>I want To:</td>
                    <td>
                        <input type="radio" name="car-cat-type" class="car-cat-type" id="car-sell" value="Sell A Car">Sell A Car
                        <input type="radio" name="car-cat-type" class="car-cat-type" id="car-buy" value="Buy A Car" checked>Buy A Car
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="text" class="form-control" name="car-brand" id="car-brand" placeholder="Enter Car Brand">
                    </td>
                    <td>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-rupee"></i></span>
                            <input type="text" name="car-cost" class="form-control" id="car-cost" placeholder="Enter Price">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="text" name="car-reg-year" id="car-reg-year" placeholder="Enter Car Registration Year" class="form-control">
                    </td>
                    <td>
                        <input type="text" name="car-city" id="car-city" placeholder="Enter City" class="form-control">
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" name="user-name" id="user-name" placeholder="Enter Your Name" class="form-control">
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
                        <h4>I am a:</h4>
                    </td>
                    <td>
                        <input type="radio" name="car-user-type" class="car-user-type" id="dealer" value="Dealer">Dealer
                        <input type="radio" name="car-user-type" class="car-user-type" id="single" value="Single" checked>Individual
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
                            <input type="text" name="user-contact" id="user-contact" placeholder="Enter Contact Number" class="form-control">
                        </div>
                    </td>

                    <td id="sellcartab">
                        <input type="text" name="car-driven" id="car-driven" placeholder="Enter Car Driven kms." class="form-control">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <textarea class="form-control" id="car-desc" name="car-desc" placeholder="Enter Description of Car"></textarea>
                    </td>
                </tr>

                <?php require("components/rightside/common.php"); ?>

                <tr>
                    <td colspan="2">
                        <div id="submitcarForm" class="btn btn-danger btn-block">Continue</div>
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <div class="col-md-1 col-sm-12"></div>
</div>