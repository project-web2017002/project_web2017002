<?php
// this will create list of all admins that can be removed
error_reporting(0);
?>
<table class="table table-striped table-hover">
    <?php
    $select_all_admins=mysqli_query($con,"select * from realadmin where admin_id!=$aid order by admin_id desc");
    $num_admins=mysqli_num_rows($select_all_admins);
    ?>
    <tbody>
    <?php
    while($fetch_all_admins=mysqli_fetch_array($select_all_admins)){
        $admin_id=$fetch_all_admins[0];
        $admin_name=$fetch_all_admins[1];
        $admin_email=$fetch_all_admins[2];
        $admin_contact=$fetch_all_admins[3];
        ?>

        <tr>
            <td><h4><strong><i class="fa fa-user-circle-o"></i></strong> <?php echo $admin_name ?></h4></td>
            <td><h4><strong><i class="fa fa-at"></i></strong> <?php echo $admin_email ?></h4></td>
            <td><h4><strong><i class="fa fa-address-book-o"></i></strong> <?php echo $admin_contact ?></h4></td>
            <td>
                <h4>
                    <strong data-toggle="modal" data-target="#removeadminModal" class="removable-admin" id="<?php echo $admin_id ?>">
                        <i class="fa fa-remove"></i> Remove This Admin
                    </strong>
                </h4>
            </td>
        </tr>

        <?php
    }
    ?>
    </tbody>
</table>
