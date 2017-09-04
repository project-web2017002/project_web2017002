<div class="row">
    <div class="col-md-1 col-sm-12"></div>

    <div class="col-md-10 col-sm-12">
        <form class="postform" name="carsForm" autocomplete="off" method="post">
            <table class="table">

                <?php require("components/rightside/elements/commontop.php"); ?>

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
                            <input type="text" name="cost" class="form-control" id="cost" placeholder="Enter Price">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="text" name="car-reg-year" id="car-reg-year" placeholder="Enter Car Registration Year" class="form-control">
                    </td>
                    <?php require("components/rightside/elements/postcity.php"); ?>
                </tr>

                <tr>
                    <?php require("components/rightside/elements/username.php"); ?>
                    <?php require("components/rightside/elements/useremail.php"); ?>
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
                    <?php require("components/rightside/elements/usercontact.php"); ?>

                    <td id="sellcartab">
                        <?php
                        // this will be displayed to user only if user wants to sell
                        ?>
                        <input type="text" name="car-driven" id="car-driven" placeholder="Enter Car Driven kms." class="form-control">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <textarea class="form-control" id="car-desc" name="car-desc" placeholder="Enter Description of Car"></textarea>
                    </td>
                </tr>

                <?php require("components/rightside/elements/commonbtm.php"); ?>
                <?php require("components/rightside/elements/btn.php"); ?>
            </table>
        </form>
    </div>

    <div class="col-md-1 col-sm-12"></div>
</div>