<?php
// this will create list of all active/online users
error_reporting(0);
?>

<table class="table table-striped table-hover">
    <?php
    $select_all_status=mysqli_query($con,"select * from status where status=1");
    $select_num=mysqli_num_rows($select_all_status);
    ?>
    <thead>
        <tr>
            <td></td>
            <td><h3><strong>Online Users: </strong></h3></td>
            <td><h3><strong><span class="badge"><?php echo $select_num ?></span></strong></h3></td>
            <td></td>
        </tr>
    </thead>
    <tbody>
    <?php
    if($select_num>0){
    while($fetch_all_status=mysqli_fetch_array($select_all_status)){
        $user_id=$fetch_all_status[0];
        $get_user_info=mysqli_query($con,"select * from verified_user where user_id=$user_id");
        $fetch_all_users=mysqli_fetch_array($get_user_info);
        $user_name=$fetch_all_users[1];
        $user_email=$fetch_all_users[2];
        $user_contact=$fetch_all_users[3];
        ?>

        <tr id="<?php echo $user_id ?>">
            <td><h4><strong><i class="fa fa-user-circle-o"></i></strong> <?php echo $user_name ?></h4></td>
            <td><h4><strong><i class="fa fa-at"></i></strong> <?php echo $user_email ?></h4></td>
            <td><h4><strong><i class="fa fa-address-book-o"></i></strong> <?php echo $user_contact ?></h4></td>
            <td><h4>Active</h4></td>
        </tr>

        <?php
        }
    }
    else{
        ?>

        <tr>
            <td></td>
            <td><h1>No user is online</h1></td>
            <td></td>
        </tr>

    <?php
    }
    ?>
    </tbody>
</table>
