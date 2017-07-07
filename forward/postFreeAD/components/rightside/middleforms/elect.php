<div class="row">
    <div class="col-md-1 col-sm-12"></div>

    <div class="col-md-10 col-sm-12">
        <form name="electronicsForm" autocomplete="off" method="post">
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
                    <td colspan="2">
                        <input type="text" name="electronics-other" id="electronics-other" class="form-control" placeholder="Specify Other">
                    </td>
                </tr>


                <tr>
                    <td colspan="2">
                        <input type="text" name="electronics-ad-title" id="electronics-ad-title" class="form-control" placeholder="Enter Title of Ad">
                    </td>
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
                            <input type="text" name="elect-cost" class="form-control" id="elect-cost" placeholder="Enter Price">
                        </div>
                    </td>
                </tr>

                <tr id="usedelectronicstab">
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
                    <td>
                        <input type="text" name="user-name" id="user-name" placeholder="Enter user Name" class="form-control">
                    </td>
                    <td>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
                            <input type="text" name="elect-user-contact" id="elect-user-contact" placeholder="Enter Contact Number" class="form-control">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-at"></i></span>
                            <input type="email" name="user-email" id="user-email" placeholder="Enter Email" class="form-control">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="text" name="elect-includes" id="elect-includes" placeholder="Package Includes (separate by Comma)" class="form-control">
                    </td>
                    <td>
                        <textarea class="form-control" id="elect-desc" name="elect-desc" placeholder="Enter Description.."></textarea>
                    </td>
                </tr>

                <tr>
                    <td>
                        <h4>Select Advertisement Type:</h4>
                    </td>
                    <td>
                        <input type="radio" name="adv-type" class="adv-type" id="free-adv" value="Free">Free
                        <input type="radio" name="adv-type" class="adv-type" id="paid-adv" value="Paid">Paid
                    </td>
                </tr>

                <tr id="freeadvtab">
                    <td colspan="2">
                        You can Avail More Features in Paid Service
                    </td>
                </tr>

                <tr id="paidadvtab">
                    <td>
                        <div class="container">
                            <div class="row">
                                <div class="page-header">
                                    <h3><strong>Diamond</strong></h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-rupee"></i></span>
                                    <input type="text" readonly name="diamond" id="diamond" value="149/mon" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <p><strong>Features:</strong></p>
                                <ul>
                                    <li>More features than Free</li>
                                </ul>
                            </div>
                            <div class="row">
                                <input type="radio" name="paidser-type" class="paidser-type" value="Diamond" id="diamondser">Select
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="container">
                            <div class="row">
                                <div class="page-header">
                                    <h3><strong>Premium</strong></h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-rupee"></i></span>
                                    <input type="text" readonly name="premium" id="premium" value="249/mon" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <p><strong>Features:</strong></p>
                                <ul>
                                    <li>More features than Diamond</li>
                                </ul>
                            </div>
                            <div class="row">
                                <input type="radio" name="paidser-type" class="paidser-type" value="Premium" id="premiumser">Select
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div id="validateelectronicsForm" class="btn btn-success btn-block">Validate Form</div>
                    </td>
                    <td>
                        <input type="submit" name="submitelectronicsForm" id="submitelectronicsForm" value="Continue" class="btn btn-danger btn-block hidden">
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <div class="col-md-1 col-sm-12"></div>
</div>