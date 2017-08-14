<script src="//localhost/optimus/include/js/product.js"></script>

<div class="modal" id="viewProduct">
    <div class="viewProductHeader">&times; Close</div>
    <div class="errorViewProduct"></div>
    <div class="viewProductBody">
        <div class="container">
            <div class="row"><div class="col-sm-12"><div id="vieproducterror"></div></div></div>
            <div class="row">
                <div class="col-md-4 col-sm-12" id="img-tab"></div>
                <div class="col-md-8 col-sm-12">
                    <div class="container-fluid">
                        <div class="hidden" id="_jkpr"></div>
                        <div class="row">
                            <div class="col-sm-12" id="viewproductTitle"></div>
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
            <div class="row">
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
            </div>
        </div>
    </div>
</div>