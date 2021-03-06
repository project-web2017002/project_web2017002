<!--Displaying product details-->
<!--Data will be displayed through js and jquery on request-->
<!--No need to enter dummy data, or php code-->

<script src="//localhost/optimus/include/js/product.js"></script>

<div class="modal" id="viewProduct">
    <div class="viewProductBody">
        <div class="container">
            <div class="row">
                <div class="viewProductHeader">&times; Close</div>
            </div><hr/>
            <div class="row">
                <!--Diaplay error-->
                <div class="errorViewProduct"></div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <!--Diaplay error-->
                    <div id="vieproducterror"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7 col-sm-12">
                    <div class="row">
                        <!--Displays title of product-->
                        <div class="col-md-12 col-sm-12 col-xs-12" id="viewproductTitle"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-12 col-xs-12" style="text-align: right;">
                            <!--Location of product availability-->
                            <span class="fa fa-map-marker"></span>&nbsp;<span id="_lc"></span>
                        </div>
                        <div class="col-md-8 col-sm-12 col-xs-12" style="text-align: left">
                            Added on: <span id="_ad"></span>
                        </div>
                    </div>
                    <hr/>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div id="prodImagesCarousel" class="carousel slide" data-ride="carousel" data-interval="16000">
                                <div class="row">
                                    <!--It will display images of product-->
                                    <div class="col-md-12 col-sm-12" id="img-tab"></div>
                                </div>
                            </div>
                            <a class="left carousel-control" href="#prodImagesCarousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#prodImagesCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div><br/>

                    <!--Small product images indicators will display here-->
                    <div class="row" id="pituresofproduct"></div>

                </div>
                <div class="col-md-5 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <div class="hidden" id="_jkpr"></div>
                            <?php
                            if($id != '' || $fbid != '' || $googleid != '') { // if user is logged in
                                ?>
                                <hr>
                                <div class="row" id="_prc"></div>
                                <?php
                            }
                            ?>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <?php
                                    if($id != '' || $fbid != '' || $googleid != '') { // if user is logged in
                                        ?>
                                        <div class="row" style="border:2px solid rgba(133,184,246,0.44); margin: 10px 0;">
                                            <div class="col-sm-12 col-xs-12">
                                                <table class="table">
                                                    <tr>
                                                        <td><h5>Uploaded By: <span id="by"></span></h5></td>
                                                    </tr>
                                                    <tr>
                                                        <td><h5>Email: <span id="em"></span></h5></td>
                                                    </tr>
                                                    <tr>
                                                        <td><h5>Contact: <span id="co"></span></h5></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <?php
                                    }else{
                                        ?>
                                        <div class="row" style="border:2px solid rgba(133,184,246,0.44); margin: 10px 0;">
                                            <div class="col-sm-12 col-xs-12">
                                                LOGIN TO VIEW INFORMATION OF UPLOADER
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                    <div class="row safetips">
                                        <div class="col-sm-12 col-xs-12">
                                            <h3>Safety Tips For buyers</h3>
                                            <ol>
                                                <li>Contrary to popular belief.</li>
                                                <li>Contrary to popular belief.</li>
                                                <li>Contrary to popular belief.</li>
                                                <li>Contrary to popular belief.</li>
                                                <li>Contrary to popular belief.</li>
                                                <li>Contrary to popular belief.</li>
                                                <li>Contrary to popular belief.</li>
                                                <li>Contrary to popular belief.</li>
                                                <li>Contrary to popular belief.</li>
                                                <li>Contrary to popular belief.</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br/>
        </div>
    </div>
</div>