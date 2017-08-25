<div class="row">
    <div class="col-md-1 col-sm-12"></div>

    <div class="col-md-10 col-sm-12">
        <form class="postform" name="homeForm" autocomplete="off" method="post">
            <table class="table">

                <?php require("components/rightside/elements/commontop.php"); ?>

                <tr>
                    <td>
                        <h4>I want to:</h4>
                    </td>
                    <td>
                        <input type="radio" name="home-todo" class="home-todo" id="Sell" value="Sell" checked>Sell
                        <input type="radio" name="home-todo" class="home-todo" id="Buy" value="Buy">Buy
                        <input type="radio" name="home-todo" class="home-todo" id="Rent" value="Rent">Rent
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
                                    <input type="radio" name="home-sell-type" class="home-sell-type" id="Own" value="Own" checked>Own Home
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
                                    <input type="radio" name="home-buy-type" class="home-buy-type" id="permanent" value="permanent" checked>Permanent Basis
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
                                    <input type="radio" name="home-rent-type" class="home-rent-type" id="Homerent" value="Homerent" checked>Home
                                </td>
                            </tr>

                        </table>
                    </td>
                </tr>

                <tr>
                    <td>
                        <select name="home-size" id="home-size" class="form-control">
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
                            <input type="text" name="cost" class="form-control" id="cost" placeholder="Expected Cost">
                        </div>
                    </td>
                </tr>

                <tr>
                    <?php require("components/rightside/elements/username.php"); ?>
                    <?php require("components/rightside/elements/useremail.php"); ?>
                </tr>

                <tr class="hidden">
                    <?php require("components/rightside/elements/postcity.php"); ?>
                </tr>

                <tr>
                    <?php require("components/rightside/elements/usercontact.php"); ?>
                    <td>
                        Advertisement For:<input type="radio" name="user-type" class="user-type" id="company" value="Company">Company
                        <input type="radio" name="user-type" class="user-type" id="individual" value="Individual" checked>Individual
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
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
                            <input type="text" class="form-control" name="company-contact" id="company-contact" placeholder="Enter Contact">
                        </div>
                    </td>
                </tr>

                <?php require("components/rightside/elements/commonbtm.php"); ?>
                <?php require("components/rightside/elements/btn.php"); ?>
            </table>
        </form>
    </div>

    <div class="col-md-1 col-sm-12"></div>
</div>