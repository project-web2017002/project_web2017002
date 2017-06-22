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
        <div class="container-fluid fixwidth">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="" alt="website logo"></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <?php
                require("city.php");
                ?>
                <form class="navbar-form navbar-left">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" id="mainvalue" href="#">All Categories
                                <span class="glyphicon glyphicon-chevron-down"></span></a>
                            <ul class="dropdown-menu defineminwidth">
                                <?php
                                require("category.php");
                                ?>
                            </ul>
                        </li>
                    </ul>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search Products and brands" data-toggle="modal" data-target="#searchModal">
                        <div class="input-group-btn">
                            <button class="btn" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                        </div>
                    </div>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li class="positionModalbtn" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-user"></span> Login/Signup</li>
                    <li><a id="btnPostAd" href="#" class="btn btn-warning navbar-btn" title="Post Free Ad">Post Free Ad</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>