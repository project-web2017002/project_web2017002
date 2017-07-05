<div class="row">
    <div class="col-md-1 col-sm-12"></div>

    <div class="col-md-10 col-sm-12">
        <form name="homelifestyleForm" autocomplete="off" method="post">
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
                        <select class="form-control" id="home-cat" name="home-cat" required>
                            <option value="">--Select One--</option>
                            <option value="Furniture & Decoration">Furniture & Decoration</option>
                            <option value="Kids & Toys">Kids & Toys</option>
                            <option value="Sports, Books & Hobbies">Sports, Books & Hobbies</option>
                            <option value="Fashion">Fashion</option>
                            <option value="Other">Other</option>
                        </select>
                    </td>

                    <td id="furnituretab">
                        <select class="form-control" id="furni-subcategory" name="furni-subcategory" required>
                            <option value="">--Select a Subcategory--</option>
                            <option value="Furniture for Home & Office">Furniture for Home & Office</option>
                            <option value="Home Decore - Furnishings">Home Decore - Furnishings</option>
                            <option value="Household">Household</option>
                            <option value="Paintings">Paintings</option>
                            <option value="Kitchenware">Kitchenware</option>
                            <option value="Antiques - Handicrafts">Antiques - Handicrafts</option>
                        </select>
                    </td>

                    <td id="kidstab">
                        <select class="form-control" id="kids-subcategory" name="kids-subcategory" required>
                            <option value="">--Select a Subcategory--</option>
                            <option value="Toys - Games">Toys - Games</option>
                            <option value="Baby - Infant Products">Baby - Infant Products</option>
                            <option value="Kids Learning">Kids Learning</option>
                        </select>
                    </td>

                    <td id="sportstab">
                        <select class="form-control" id="sports-subcategory" name="sports-subcategory" required>
                            <option value="">--Select a Subcategory--</option>
                            <option value="Sports - Fitness Equipments">Sports - Fitness Equipments</option>
                            <option value="Bicycle & Accessories">Bicycle & Accessories</option>
                            <option value="Books - Magazines">Books - Magazines</option>
                            <option value="Musical Instruments">Musical Instruments</option>
                            <option value="Coins - Stamps">Coins - Stamps</option>
                            <option value="Collectible">Collectible</option>
                            <option value="Music - Movies">Music - Movies</option>
                        </select>
                    </td>

                    <td id="fashiontab">
                        <select class="form-control" id="fashion-subcategory" name="fashion-subcategory" required>
                            <option value="">--Select a Subcategory--</option>
                            <option value="Clothing - Garments(Men)">Clothing - Garments(Men)</option>
                            <option value="Watches(Men)">Watches(Men)</option>
                            <option value="Jewellery(Men)">Jewellery(Men)</option>
                            <option value="Bags - Luggage(Men)">Bags - Luggage(Men)</option>
                            <option value="Footwear(Men)">Footwear(Men)</option>
                            <option value="Fashion Accessories(Men)">Fashion Accessories(Men)</option>
                            <option value="Health - Beauty Products(Men)">Health - Beauty Products(Men)</option>
                            <option value="Clothing - Garments(Women)">Clothing - Garments(Women)</option>
                            <option value="Watches(Women)">Watches(Women)</option>
                            <option value="Jewellery(Women)">Jewellery(Women)</option>
                            <option value="Bags - Luggage(Women)">Bags - Luggage(Women)</option>
                            <option value="Footwear(Women)">Footwear(Women)</option>
                            <option value="Fashion Accessories(Women)">Fashion Accessories(Women)</option>
                            <option value="Health - Beauty Products(Women)">Health - Beauty Products(Women)</option>
                            <option value="Clothing - Garments(Kids)">Clothing - Garments(Kids)</option>
                            <option value="Watches(Kids)">Watches(Kids)</option>
                            <option value="Jewellery(Kids)">Jewellery(Kids)</option>
                            <option value="Bags - Luggage(Kids)">Bags - Luggage(Kidsn)</option>
                            <option value="Footwear(Kids)">Footwear(Kids)</option>
                            <option value="Fashion Accessories(Kids)">Fashion Accessories(Kids)</option>
                            <option value="Health - Beauty Products(Kids)">Health - Beauty Products(Kids)</option>
                            <option value="Gifts - Stationary">Gifts - Stationary</option>
                        </select>
                    </td>

                    <td id="otherhomenlifetab">
                        <input type="text" class="form-control" name="otherlifehome" id="otherlifehome" placeholder="Please specify Other">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="text" name="homelife-ad-title" id="homelife-ad-title" class="form-control" required placeholder="Enter Title of Ad">
                    </td>
                </tr>

                <tr>
                    <td>
                        <select class="form-control" id="homelife-condition" name="homelife-condition" required>
                            <option value="">--Please Select Condition--</option>
                            <option value="New">New</option>
                            <option value="Used">Used</option>
                        </select>
                    </td>
                    <td>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-rupee"></i></span>
                            <input type="text" name="homelife-cost" required class="form-control" id="homelife-cost" placeholder="Enter Price">
                        </div>
                    </td>
                </tr>

                <tr id="usedhomelifetab">
                    <td>
                        <input type="text" name="used-homelife-months" id="used-homelife-months" class="form-control" placeholder="Used For (months)">
                    </td>
                    <td>
                        <select name="homelife-bill" id="homelife-bill" class="form-control">
                            <option value="">--I Want/Provide Bill:--</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="text" name="user-name" id="user-name" placeholder="Enter user Name" class="form-control">
                    </td>
                    <td>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
                            <input type="text" name="homelife-user-contact" id="homelife-user-contact" placeholder="Enter Contact Number" class="form-control">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-at"></i></span>
                            <input type="email" name="user-email" id="user-email" required placeholder="Enter Email" class="form-control">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="text" name="homelife-includes" id="homelife-includes" required placeholder="Package Includes (separate by Comma)" class="form-control">
                    </td>
                    <td>
                        <textarea class="form-control" id="homelife-desc" name="homelife-desc" required placeholder="Enter Description.."></textarea>
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
                        <input type="submit" name="submithomelifestyleForm" id="submithomelifestyleForm" value="Continue" class="btn btn-danger btn-block">
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <div class="col-md-1 col-sm-12"></div>
</div>