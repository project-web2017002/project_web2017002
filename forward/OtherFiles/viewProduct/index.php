<script src="//localhost/optimus/include/js/product.js"></script>

<div class="modal" id="viewProduct">
    <div class="viewProductBody">
        <div class="container">
            <div class="row">
                <div class="viewProductHeader">&times; Close</div>
            </div>
            <div class="row">
                <div class="errorViewProduct"></div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div id="vieproducterror"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 viewproductTitle"></div>
                    </div><br/>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div id="prodImagesCarousel" class="carousel slide" data-ride="carousel" data-interval="16000">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12" id="img-tab">
                                        <div class="carousel-inner" role="listbox">
                                            <div class="item active">
                                                <img src="include/media/images/brandcover.png">
                                            </div>
                                            <div class="item">
                                                <img src="include/media/images/loading.gif">
                                            </div>
                                            <div class="item">
                                                <img src="include/media/images/mcd.png">
                                            </div>
                                            <div class="item">
                                                <img src="include/media/images/app.png">
                                            </div>
                                        </div>
                                    </div>
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
                    <div class="row" id="pituresofproduct">
                        <div class="col-md-3" data-target="#prodImagesCarousel" data-slide-to="0">
                            <img class="smimg" src="include/media/images/brandcover.png">
                        </div>
                        <div class="col-md-3" data-target="#prodImagesCarousel" data-slide-to="1">
                            <img class="smimg" src="include/media/images/loading.gif">
                        </div>
                        <div class="col-md-3" data-target="#prodImagesCarousel" data-slide-to="2">
                            <img class="smimg" src="include/media/images/mcd.png">
                        </div>
                        <div class="col-md-3" data-target="#prodImagesCarousel" data-slide-to="3">
                            <img class="smimg" src="include/media/images/app.png">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="hidden" id="_jkpr"></div>
                            <div class="row">
                                <div class="col-sm-12 viewproductTitle"></div>
                            </div>
                            <?php
                            if($id != '') {
                                ?>
                                <hr>
                                <div class="row" id="_prc"></div>
                                <?php
                            }
                            ?>
                            <div class="row">
                                <div class="col-sm-12">
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
                        </div>
                    </div>
                </div>
            </div>
            <br/>
            <!--div class="row">
                <div class="col-md-1 col-sm-12"></div>
                <div class="col-md-5 col-sm-12" style="border: 1px solid grey;">
                    <h4>Features</h4>
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
                <div class="col-md-5 col-sm-12">

                </div>
                <div class="col-md-1 col-sm-12"></div>
            </div-->
        </div>
    </div>
</div>