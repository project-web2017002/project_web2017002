<?php
$name_fetch=mysqli_query($con,"select * from verified_user where user_id=$id");
$name_array=mysqli_fetch_array($name_fetch);
$user_name=$name_array[1];
$user_email=$name_array[2];
$user_contact=$name_array[3];
?>
<a class="dropdown-toggle" data-toggle="dropdown" id="user-value" href="#" style="text-transform: uppercase">
    <span class="fa fa-user-circle-o fa-lg"></span> <?php echo $user_name ?>
</a>
<ul class="dropdown-menu" id="user-navbar">
    <li>
        <a href="//localhost/optimus/forward/profile/" id="profile-btn">
            <span class="fa fa-user-o"></span> Profile
        </a>
    </li>
    <li>
        <a href="//localhost/optimus/forward/cart/" id="shopping-cart-btn">
            <span class="fa fa-shopping-cart"></span> My Cart
        </a>
    </li>
    <li>
        <a href="#" data-toggle="modal" data-target="#logoutModal">
            <span class="glyphicon glyphicon-log-out"></span> Logout
        </a>
    </li>
</ul>