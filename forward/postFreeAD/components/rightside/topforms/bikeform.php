<div class="row">
    <div class="col-md-1 col-sm-12"></div>

    <div class="col-md-10 col-sm-12">
        <form class="postform" name="bikesForm" autocomplete="off" method="post">
            <?php
            //bike ad form starts
            ?>
            <table class="table">


                <?php // include some hidden fields
                 require("components/rightside/elements/commontop.php");
                 ?>

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
                    <?php
                    // city field
                    require("components/rightside/elements/postcity.php"); ?>
                </tr>

                <tr>
                    <?php // user name and user email fields
                    require("components/rightside/elements/username.php");
                    require("components/rightside/elements/useremail.php");
                    ?>
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
                    <?php // user contact field
                    require("components/rightside/elements/usercontact.php"); ?>

                    <td id="sellbiketab">
                        <?php
                        // this will be displayed to user only if user wants to sell
                        ?>
                        <input type="text" name="bike-driven" id="bike-driven" placeholder="Enter bike/Scooter Driven kms." class="form-control">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <textarea class="form-control" id="bike-desc" name="bike-desc" placeholder="Enter Description of Bike/Scooter"></textarea>
                    </td>
                </tr>

                <?php // advertisement type fields and submit button
                    require("components/rightside/elements/commonbtm.php");
                    require("components/rightside/elements/btn.php");
                ?>
            </table>
        </form>
    </div>

    <div class="col-md-1 col-sm-12"></div>
</div>