<div class="row">
    <div class="col-md-1 col-sm-12"></div>

    <div class="col-md-10 col-sm-12">
        <form name="carsForm" autocomplete="off" method="post">
            <table class="table">

                <tr>
                    <td colspan="2">
                        <input type="hidden" value="<?php echo $ctid ?>" name="adv_cat" id="adv_cat">
                    </td>
                </tr>

                <tr>
                    <td>I want To:</td>
                    <td>
                        <input type="radio" name="car-cat-type" class="car-cat-type" id="car-sell" value="Sell A Car" required>Sell A Car
                        <input type="radio" name="car-cat-type" class="car-cat-type" id="car-buy" value="Buy A Car" required>Buy A Car
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="text" class="form-control" name="car-brand" id="car-brand" required placeholder="Enter Car Brand">
                    </td>
                    <td>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-rupee"></i></span>
                            <input type="text" name="car-cost" required class="form-control" id="car-cost" placeholder="Enter Price">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="text" name="car-reg-year" id="car-reg-year" required placeholder="Enter Car Registration Year" class="form-control">
                    </td>
                    <td>
                        <input type="text" name="car-city" id="car-city" required placeholder="Enter City" class="form-control">
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" name="user-name" id="user-name" required placeholder="Enter Your Name" class="form-control">
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
                        <h4>I am a:</h4>
                    </td>
                    <td>
                        <input type="radio" name="car-user-type" class="car-user-type" id="dealer" value="Dealer" required>Dealer
                        <input type="radio" name="car-user-type" class="car-user-type" id="single" value="Single" required>Individual
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
                            <input type="text" name="car-user-contact" id="car-user-contact" placeholder="Enter Contact Number" class="form-control">
                        </div>
                    </td>

                    <td id="sellcartab">
                        <input type="text" name="car-driven" id="car-driven" placeholder="Enter Car Driven kms." class="form-control">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <textarea class="form-control" id="car-desc" name="car-desc" required placeholder="Enter Description of Car"></textarea>
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
                        <input type="submit" name="submitcarForm" id="submitcarForm" value="Continue" class="btn btn-danger btn-block">
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <div class="col-md-1 col-sm-12"></div>
</div>