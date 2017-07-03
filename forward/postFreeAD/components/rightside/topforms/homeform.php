<div class="row">
    <div class="col-md-1 col-sm-12"></div>

    <div class="col-md-10 col-sm-12">
        <form name="homeForm" autocomplete="off" method="post">
            <table class="table">

                <tr>
                    <td colspan="2">
                        <input type="hidden" value="<?php echo $ctid ?>" name="adv_cat" id="adv_cat">
                    </td>
                </tr>

                <tr>
                    <td>
                        <h4>I want to:</h4>
                    </td>
                    <td>
                        <input type="radio" name="home-todo" class="home-todo" id="Sell" value="Sell" required>Sell
                        <input type="radio" name="home-todo" class="home-todo" id="Buy" value="Buy" required>Buy
                        <input type="radio" name="home-todo" class="home-todo" id="Rent" value="Rent" required>Rent
                    </td>
                </tr>

                <tr id="sellhometab">
                    <td colspan="2">
                       <table class="table">

                            <tr>
                                <td>
                                    Sell Home Type:
                                </td>
                                <td>
                                    <input type="radio" name="home-sell-type" class="home-sell-type" id="Own" value="Own">Own Home
                                    <input type="radio" name="home-sell-type" class="home-sell-type" id="Flat" value="Flat">Flat/Apartment
                                    <input type="radio" name="home-sell-type" class="home-sell-type" id="Land" value="Land">Land
                                </td>
                            </tr>

                        </table>
                    </td>
                </tr>

                <tr id="buyhometab">
                    <td colspan="2">
                        <table class="table">

                            <tr>
                                <td>Buy Home on:</td>
                                <td>
                                    <input type="radio" name="home-buy-type" class="home-buy-type" id="permanent" value="permanent">Permanent Basis
                                    <input type="radio" name="home-buy-type" class="home-buy-type" id="rentbasis" value="rentbasis">Rent Basis
                                </td>
                            </tr>

                        </table>
                    </td>
                </tr>

                <tr id="renthometab">
                    <td colspan="2">
                        <table class="table">

                            <tr>
                                <td>Rent Home Type</td>
                                <td>
                                    <input type="radio" name="home-rent-type" class="home-rent-type" id="Flatrent" value="Flatrent">Flat/Apartment
                                    <input type="radio" name="home-rent-type" class="home-rent-type" id="Homerent" value="Homerent">Home
                                </td>
                            </tr>

                        </table>
                    </td>
                </tr>

                <tr>
                    <td>
                        <select name="home-size" id="home-size" required class="form-control">
                            <option value="">--SELECT Property Area--</option>
                            <option value="1BHK">1BHK</option>
                            <option value="2BHK">2BHK</option>
                            <option value="3BHK">3BHK</option>
                            <option value="4BHK">4BHK</option>
                            <option value="5BHK+">5BHK+</option>
                        </select>
                    </td>
                    <td>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-rupee"></i></span>
                            <input type="text" name="home-cost" required class="form-control" id="home-cost" placeholder="Expected Cost">
                        </div>
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
                        <input type="submit" name="submithomeForm" id="submithomeForm" value="Continue" class="btn btn-danger btn-block">
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <div class="col-md-1 col-sm-12"></div>
</div>