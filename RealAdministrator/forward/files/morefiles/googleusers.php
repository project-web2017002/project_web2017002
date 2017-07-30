<?php
error_reporting(0);
?>

<table class="table table-striped table-hover">

    <?php
    $select_all_users=mysqli_query($con,"select * from users order by id desc");
    $num_users=mysqli_num_rows($select_all_users);
    ?>
    <thead>
    <tr style="text-align: center">
        <td></td>
        <td><h3><strong>Total Registered Users: <span class="badge"><?php echo $num_users ?></span></strong></h3></td>
        <td></td>
    </tr>
    </thead>
    <tbody>
    <?php
    while($fetch_all_users=mysqli_fetch_array($select_all_users)){
        $user_id=$fetch_all_users[0];
        $user_name=$fetch_all_users[3]." ".$fetch_all_users[4];
        $user_email=$fetch_all_users[5];
        $user_contact=$fetch_all_users[12];
        ?>

        <tr id="<?php echo $user_id ?>">
            <td><h4><strong><i class="fa fa-user-circle-o"></i></strong> <?php echo $user_name ?></h4></td>
            <td><h4><strong><i class="fa fa-at"></i></strong> <?php echo $user_email ?></h4></td>
            <td><h4><strong><i class="fa fa-address-book-o"></i></strong> <?php echo $user_contact ?></h4></td>
        </tr>

        <?php
    }
    ?>
    </tbody>
</table>
