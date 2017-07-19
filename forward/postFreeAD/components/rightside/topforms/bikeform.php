<div class="row">
    <div class="col-md-1 col-sm-12"></div>

    <div class="col-md-10 col-sm-12">
        <form name="bikesForm" autocomplete="off" method="post">
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
                        <input type="radio" name="bike-cat-type" class="bike-cat-type" id="bike-sell" value="Sell A bike">Sell A bike/Scooter
                        <input type="radio" name="bike-cat-type" class="bike-cat-type" id="bike-buy" value="Buy A bike" checked>Buy A bike/Scooter
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="text" class="form-control" name="bike-brand" id="bike-brand" placeholder="Enter bike/Scooter Brand">
                    </td>
                    <td>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-rupee"></i></span>
                            <input type="text" name="cost" class="form-control" id="cost" placeholder="Enter Price">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="text" name="bike-reg-year" id="bike-reg-year" placeholder="Enter bike/Scooter Registration Year" class="form-control">
                    </td>
                    <td>
                        <input type="text" name="bike-city" id="bike-city" placeholder="Enter City" class="form-control">
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
                        <input type="radio" name="bike-user-type" class="bike-user-type" id="dealer" value="Dealer">Dealer
                        <input type="radio" name="bike-user-type" class="bike-user-type" id="single" value="Single" checked>Individual
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
                            <input type="text" name="user-contact" id="user-contact" placeholder="Enter Contact Number" class="form-control">
                        </div>
                    </td>

                    <td id="sellbiketab">
                        <input type="text" name="bike-driven" id="bike-driven" placeholder="Enter bike/Scooter Driven kms." class="form-control">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <textarea class="form-control" id="bike-desc" name="bike-desc" placeholder="Enter Description of Bike/Scooter"></textarea>
                    </td>
                </tr>

                <?php require("components/rightside/common.php"); ?>

                <tr>
                    <td colspan="2">
                        <div id="submitbikeForm" class="btn btn-danger btn-block">Continue</div>
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <div class="col-md-1 col-sm-12"></div>
</div>