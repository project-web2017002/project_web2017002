<?php
error_reporting(0);
?>
<div style="z-index: 10">
    <!--<nav class="navbar-default removeableheadbar">
        <div class="container-fluid fixwidth removed">
            <ul class="navbar-nav pull-left extrapadding" style="list-style: none">
                <li><a href="#"><span class="glyphicon glyphicon-briefcase"></span> Business Page</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-phone"></span> Download The App</a></li>
            </ul>
            <ul class="navbar-nav pull-right extrapadding" style="list-style: none">
                <li><a href="#"><i class="fa fa-calculator"></i> MSP</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
            </ul>
        </div>
    </nav>-->
    <nav class="navbar navbar-default headbar navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="//localhost/optimus/"><img src="" alt="website logo"></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <form class="navbar-form adjustedForm">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search Products and brands" required title="Please Enter Your Search">
                                <div class="input-group-btn">
                                    <button class="btn" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                                </div>
                            </div>
                        </form>
                    </li>
                    <li class="dropdown"><?php
                        require("city.php");
                        ?>
                    </li>
                    <?php
                    if($id=='' && $googleid=='' && $fbid == ''){
                        ?>
                        <li class="positionModalbtn" data-toggle="modal" data-target="#myModal">
                            <span class="glyphicon glyphicon-user"></span> Login/Signup
                        </li>
                        <?php
                    }
                    else{
                        ?>
                        <li class="dropdown">
                            <?php
                            require("user.php");
                            ?>
                        </li>
                        <?php
                    }
                    if($categoryid != '' || $city != '') {
                        ?>
                        <li class="positionadbtn" data-toggle="modal" data-target="#postModal">
                            <a id="btnPostAd" href="#" class="btn btn-warning navbar-btn" title="Post Free Ad">Post Free
                                Ad</a>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
</div>