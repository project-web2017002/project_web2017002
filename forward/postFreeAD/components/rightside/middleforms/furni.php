<div class="row">
    <div class="col-md-1 col-sm-12"></div>

    <div class="col-md-10 col-sm-12">
        <form class="postform" name="homelifestyleForm" autocomplete="off" method="post">
            <table class="table">

                <?php require("components/rightside/elements/commontop.php"); ?>

                <tr>
                    <td>
                        <select class="form-control" id="home-cat" name="home-cat">
                            <option value="">--Select One--</option>
                            <option value="Furniture & Decoration">Furniture & Decoration</option>
                            <option value="Kids & Toys">Kids & Toys</option>
                            <option value="Sports, Books & Hobbies">Sports, Books & Hobbies</option>
                            <option value="Fashion">Fashion</option>
                            <option value="Other">Other</option>
                        </select>
                    </td>

                    <td id="furnituretab">
                        <?php
                        // this will be displayed to user if user selects Furniture & decoration option from homecat dropdown
                        ?>
                        <select class="form-control" id="furni-subcategory" name="furni-subcategory">
                            <option value="Furniture for Home & Office">Furniture for Home & Office</option>
                            <option value="Home Decore - Furnishings">Home Decore - Furnishings</option>
                            <option value="Household">Household</option>
                            <option value="Paintings">Paintings</option>
                            <option value="Kitchenware">Kitchenware</option>
                            <option value="Antiques - Handicrafts">Antiques - Handicrafts</option>
                        </select>
                    </td>

                    <td id="kidstab">
                        <?php
                        // this will be displayed to user if user selects Kids & toys option from homecat dropdown
                        ?>
                        <select class="form-control" id="kids-subcategory" name="kids-subcategory">
                            <option value="Toys - Games">Toys - Games</option>
                            <option value="Baby - Infant Products">Baby - Infant Products</option>
                            <option value="Kids Learning">Kids Learning</option>
                        </select>
                    </td>

                    <td id="sportstab">
                        <?php
                        // this will be displayed to user if user selects sports, books & hobbies option from homecat dropdown
                        ?>
                        <select class="form-control" id="sports-subcategory" name="sports-subcategory">
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
                        <?php
                        // this will be displayed to user if user selects Fashion option from homecat dropdown
                        ?>
                        <select class="form-control" id="fashion-subcategory" name="fashion-subcategory">
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
                        <?php
                        // this will be displayed to user if user selects Other option from homecat dropdown
                        ?>
                        <input type="text" class="form-control" name="otherlifehome" id="otherlifehome" placeholder="Please specify Other">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="text" name="homelife-ad-title" id="homelife-ad-title" class="form-control" placeholder="Enter Title of Ad">
                    </td>
                    <?php require("components/rightside/elements/postcity.php"); ?>
                </tr>

                <tr>
                    <td>
                        <select class="form-control" id="homelife-condition" name="homelife-condition">
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

                <tr id="usedhomelifetab">
                    <?php
                    // this will be displayed to user if user selects used option from homelife-condition dropdown
                    ?>
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
                    <?php require("components/rightside/elements/username.php"); ?>
                    <?php require("components/rightside/elements/useremail.php"); ?>
                </tr>

                <tr>
                    <?php require("components/rightside/elements/usercontact.php"); ?>
                </tr>

                <tr>
                    <td>
                        <input type="text" name="homelife-includes" id="homelife-includes" placeholder="Package Includes (separate by Comma)" class="form-control">
                    </td>
                    <td>
                        <textarea class="form-control" id="homelife-desc" name="homelife-desc" placeholder="Enter Description.."></textarea>
                    </td>
                </tr>

                <?php require("components/rightside/elements/commonbtm.php"); ?>
                <?php require("components/rightside/elements/btn.php"); ?>
            </table>
        </form>
    </div>

    <div class="col-md-1 col-sm-12"></div>
</div>