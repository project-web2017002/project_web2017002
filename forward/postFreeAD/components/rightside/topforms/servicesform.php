<div class="row">
    <div class="col-md-1 col-sm-12"></div>

    <div class="col-md-10 col-sm-12">
        <form name="servicesForm" autocomplete="off" method="post">
            <table class="table">

                <tr>
                    <td colspan="2">
                        <input type="hidden" value="<?php echo $ctid ?>" name="adv_cat" id="adv_cat">
                    </td>
                </tr>

                <tr>
                    <td>
                        <select name="ser-type" id="ser-type" required class="form-control">
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
                            <input type="text" name="ser-fee" required class="form-control" id="ser-fee" placeholder="Expected Fees">
                        </div>
                    </td>
                </tr>

                <tr id="servicetitletab">
                    <td colspan="2">
                        <input type="text" name="Exact-Service-name" id="Exact-Service-name" required placeholder="Enter Service Title" class="form-control">
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" name="user-name" id="user-name" required placeholder="Enter Name" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-at"></i></span>
                            <input type="email" name="user-email" id="user-email" required placeholder="Enter Personal Email" class="form-control">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <h4>Advertisement For:</h4>
                    </td>
                    <td>
                        <input type="radio" name="user-type" class="user-type" id="company" value="Company" required>Company
                        <input type="radio" name="user-type" class="user-type" id="individual" value="Individual" required>Individual
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
                    </td>
                </tr>

                <tr>
                    <td>
                        <h4>Select Advertisement Type:</h4>
                    </td>
                    <td>
                        <input type="radio" name="adv-type" class="adv-type" id="free-adv" value="Free" required>Free
                        <input type="radio" name="adv-type" class="adv-type" id="paid-adv" value="Paid" required>Paid
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
                    <td colspan="2">
                        <input type="submit" name="submitservicesForm" id="submitservicesForm" value="Continue" class="btn btn-danger btn-block">
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <div class="col-md-1 col-sm-12"></div>
</div>