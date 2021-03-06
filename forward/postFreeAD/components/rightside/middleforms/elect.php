<div class="row">
    <div class="col-md-1 col-sm-12"></div>

    <div class="col-md-10 col-sm-12">
        <form class="postform" name="electronicsForm" autocomplete="off" method="post">
            <table class="table">

                <?php require("components/rightside/elements/commontop.php"); ?>

                <tr>
                    <td>
                        <select class="form-control" id="elect-want" name="elect-want">
                            <option value="">--I want To:--</option>
                            <option value="Buy">Buy</option>
                            <option value="Sell">Sell</option>
                        </select>
                    </td>

                    <td>
                        <select class="form-control" id="electronics-subcategory" name="electronics-subcategory">
                            <option value="">--Select a Subcategory--</option>
                            <option value="Camera">Camera</option>
                            <option value="Laptop/Computer">Laptop/Computer</option>
                            <option value="Camera Accessories">Camera Accessories</option>
                            <option value="Computer Accessories">Computer Accessories</option>
                            <option value="Kitchen Accessories">Kitchen Accessories</option>
                            <option value="Home Theatre">Home Theatre</option>
                            <option value="Security Equipment">Security Equipment</option>
                            <option value="Office Equipments">Office Equipments</option>
                            <option value="Inverters, Generators or UPS">Inverters, Generators or UPS</option>
                            <option value="Multimedia">Multimedia</option>
                            <option value="Tools or machinery">Tools or machinery</option>
                            <option value="Other">Other</option>
                        </select>
                    </td>
                </tr>

                <tr id="electronicsothertab">
                    <?php
                    // this will be displayed to user if user selects Other option from electronics subcategory dropdown
                    ?>
                    <td colspan="2">
                        <input type="text" name="electronics-other" id="electronics-other" class="form-control" placeholder="Specify Other">
                    </td>
                </tr>


                <tr>
                    <td>
                        <input type="text" name="electronics-ad-title" id="electronics-ad-title" class="form-control" placeholder="Enter Title of Ad">
                    </td>
                    <?php require("components/rightside/elements/postcity.php"); ?>
                </tr>

                <tr>
                    <td>
                        <select class="form-control" id="elect-condition" name="elect-condition">
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

                <tr id="usedelectronicstab">
                    <?php
                    // this will be displayed to user if user selects Used option from electcondition dropdown
                    ?>
                    <td>
                        <input type="text" name="used-elect-months" id="used-elect-months" class="form-control" placeholder="Used For (months)">
                    </td>
                    <td>
                        <select name="elect-bill" id="elect-bill" class="form-control">
                            <option value="">--I Want/Provide Bill:--</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="text" class="form-control" name="elect-brand" id="elect-brand" placeholder="Enter Brand">
                    </td>
                    <td>
                        <input type="text" name="elect-model" class="form-control" id="elect-model" placeholder="Enter Model (if no model, enter No)">
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
                        <input type="text" name="elect-includes" id="elect-includes" placeholder="Package Includes (separate by Comma)" class="form-control">
                    </td>
                    <td>
                        <textarea class="form-control" id="elect-desc" name="elect-desc" placeholder="Enter Description.."></textarea>
                    </td>
                </tr>

                <?php require("components/rightside/elements/commonbtm.php"); ?>
                <?php require("components/rightside/elements/btn.php"); ?>
            </table>
        </form>
    </div>

    <div class="col-md-1 col-sm-12"></div>
</div>