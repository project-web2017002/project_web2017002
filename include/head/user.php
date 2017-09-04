<?php
// this will create a dropdown menu in header
if($id != '') { // for our user
    $name_fetch = mysqli_query($con, "select * from verified_user where user_id=$id");
    $name_array = mysqli_fetch_array($name_fetch);
    $user_name = $name_array[1];
    $user_email = $name_array[2];
    $user_contact = $name_array[3];
}elseif($googleid != ''){ //for google user
    $name_fetch = mysqli_query($con, "select * from users where id=$googleid and oauth_provider='google'");
    $name_array = mysqli_fetch_array($name_fetch);
    $user_name = $name_array[3]." ".$name_array[4];
    $user_email = $name_array[5];
    $user_contact = $name_array[12];
}else{ // for fb user
    $name_fetch = mysqli_query($con, "select * from users where id=$fbid and oauth_provider='facebook'");
    $name_array = mysqli_fetch_array($name_fetch);
    $user_name = $name_array[3]." ".$name_array[4];
    $user_email = $name_array[5];
    $user_contact = $name_array[12];
}
?>
<a class="dropdown-toggle" data-toggle="dropdown" id="user-value" href="#" style="text-transform: uppercase">
    <span class="fa fa-user-circle-o fa-lg"></span> <?php echo $user_name ?>
</a>
<ul class="dropdown-menu" id="user-navbar">
    <li>
        <a href="//localhost/optimus/forward/profile/" id="profile-btn">
            <span class="fa fa-user-o"></span> Profile
            <?php
            // link to profile
            ?>
        </a>
    </li>
    <li>
        <a href="//localhost/optimus/forward/cart/" id="shopping-cart-btn">
            <span class="fa fa-shopping-cart"></span> My Cart
            <?php
            // link to cart
            ?>
        </a>
    </li>
    <li>
        <a href="#" data-toggle="modal" data-target="#logoutModal">
            <span class="glyphicon glyphicon-log-out"></span> Logout
            <?php
            // link to logout
            ?>
        </a>
    </li>
</ul>