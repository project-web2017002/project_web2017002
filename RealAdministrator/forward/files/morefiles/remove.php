<?php
// this will create list of all users that can be removed
error_reporting(0);
?>
<table class="table table-striped table-hover">
    <?php
    $select_all_users=mysqli_query($con,"select * from verified_user order by user_id desc");
    $num_users=mysqli_num_rows($select_all_users);
    ?>
    <tbody>
    <?php
    while($fetch_all_users=mysqli_fetch_array($select_all_users)){
        $user_id=$fetch_all_users[0];
        $user_name=$fetch_all_users[1];
        $user_email=$fetch_all_users[2];
        $user_contact=$fetch_all_users[3];
        ?>

        <tr>
            <td><h4><strong><i class="fa fa-user-circle-o"></i></strong> <?php echo $user_name ?></h4></td>
            <td><h4><strong><i class="fa fa-at"></i></strong> <?php echo $user_email ?></h4></td>
            <td><h4><strong><i class="fa fa-address-book-o"></i></strong> <?php echo $user_contact ?></h4></td>
            <td>
                <h4>
                    <strong data-toggle="modal" data-target="#removeuserModal" class="removable-user" id="<?php echo $user_id ?>">
                        <i class="fa fa-remove"></i> Remove This user
                    </strong>
                </h4>
            </td>
        </tr>

        <?php
    }
    ?>
    </tbody>
</table>
