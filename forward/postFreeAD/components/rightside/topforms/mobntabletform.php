<div class="row">
    <div class="col-md-1 col-sm-12"></div>

    <div class="col-md-10 col-sm-12">
        <form class="postform" name="mobilesForm" autocomplete="off" method="post">
            <table class="table">

                <?php require("components/rightside/elements/commontop.php"); ?>

                <tr>
                    <td>
                        <select class="form-control" id="mobiles-want" name="mobiles-want">
                            <option value="">--I want To:--</option>
                            <option value="Buy">Buy</option>
                            <option value="Sell">Sell</option>
                        </select>
                    </td>

                    <td>
                        <select class="form-control" id="mobile-subcategory" name="mobile-subcategory">
                            <option value="">--Select a Subcategory--</option>
                            <option value="Mobiles">Mobiles</option>
                            <option value="Tablets">Tablets</option>
                            <option value="Accessories">Accessories</option>
                            <option value="Wearables">Wearables</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="text" name="mobile-ad-title" id="mobile-ad-title" class="form-control" placeholder="Enter Title of Ad">
                    </td>
                    <?php require("components/rightside/elements/postcity.php"); ?>
                </tr>

                <tr>
                    <td>
                        <select class="form-control" id="mobiles-condition" name="mobiles-condition">
                            <option value="">--Please Select Condition--</option>
                            <option value="New">New</option>
                            <option value="Used">Used</option>
                        </select>
                    </td>
                    <td>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-rupee"></i></span>
                            <input type="text" name="cost" class="form-control" id="cost" placeholder="Enter Price">
                        </div>
                    </td>
                </tr>

                <tr id="usedmobiletab">
                    <?php
                    // this will be displayed to user if user selects Used option from mobilescondition dropdown
                    ?>
                    <td>
                        <input type="text" name="used-mobile-months" id="used-mobile-months" class="form-control" placeholder="Used For (months)">
                    </td>
                    <td>
                        <select name="mobile-bill" id="mobile-bill" class="form-control">
                            <option value="">--I Want/Provide Bill:--</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="text" class="form-control" name="Mobile-brand" id="Mobile-brand" placeholder="Enter Brand">
                    </td>
                    <td>
                        <input type="text" name="mobile-model" class="form-control" id="mobile-model" placeholder="Enter Model">
                    </td>
                </tr>

                <tr>
                    <?php require("components/rightside/elements/username.php"); ?>
                    <?php require("components/rightside/elements/useremail.php"); ?>
                </tr>
                <tr>
                    <?php require("components/rightside/elements/usercontact.php"); ?>
                </tr>

                <tr>
                    <td>
                        <input type="text" name="mobile-includes" id="mobile-includes" placeholder="Package Includes (separate by Comma)" class="form-control">
                    </td>
                    <td>
                        <textarea class="form-control" id="Mobile-desc" name="Mobile-desc" placeholder="Enter Description.."></textarea>
                    </td>
                </tr>

                <?php require("components/rightside/elements/commonbtm.php"); ?>
                <?php require("components/rightside/elements/btn.php"); ?>

            </table>
        </form>
    </div>

    <div class="col-md-1 col-sm-12"></div>
</div>