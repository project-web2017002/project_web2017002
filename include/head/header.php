<?php
//header
error_reporting(0);
?>
<div style="z-index: 10">
    <nav class="navbar navbar-default headbar navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php
                // website logo
                ?>
                <a class="navbar-brand" href="//localhost/optimus/"><img src="" alt="website logo"></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <?php
                        // search bar
                        ?>
                        <form class="navbar-form adjustedForm" autocomplete="off">
                            <div class="input-group">
                                <input type="text" class="form-control" id="_srchitem" placeholder="Search for Items(Min. 3 Char.)" pattern=".{3,}" required title="Please Enter Your Search">
                                <div class="input-group-btn">
                                    <button class="btn" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                                </div>
                            </div>
                        </form>
                        <div id="serchresult"></div><?php
                        // this will be display searched results
                        ?>
                    </li>
                    <li class="dropdown">
                        <?php
                        // city dropdown menu
                        require("city.php");
                        ?>
                    </li>
                    <?php
                    if($id=='' && $googleid=='' && $fbid == ''){ //login/signup button to show if user is not logged in from any of the specified log in option
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
                            // user dropdown if user is logged in
                            require("user.php");
                            ?>
                        </li>
                        <?php
                    }
                    if($categoryid != '' || $city != '') { // button to display if user selects any category of city
                        ?>
                        <li class="positionadbtn" data-toggle="modal" data-target="#postModal">
                            <a id="btnPostAd" class="btn btn-warning navbar-btn" title="Post Free Ad">Post Free
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