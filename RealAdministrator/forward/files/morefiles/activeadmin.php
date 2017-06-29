<?php
error_reporting(0);
?>

<table class="table table-striped table-hover">
    <?php
    $select_all_status=mysqli_query($con,"select * from admin_status where status=1 && admin_id!=$aid");
    $select_num=mysqli_num_rows($select_all_status);
    ?>
    <thead>
    <tr>
        <td></td>
        <td><h3><strong>Online Admins (except me): </strong></h3></td>
        <td><h3><strong><span class="badge"><?php echo $select_num ?></span></strong></h3></td>
        <td></td>
    </tr>
    </thead>
    <tbody>
    <?php
    if($select_num>0){
        while($fetch_all_status=mysqli_fetch_array($select_all_status)){
            $admin_id=$fetch_all_status[0];
            $get_admin_info=mysqli_query($con,"select * from realadmin where admin_id=$admin_id");
            $fetch_all_admins=mysqli_fetch_array($get_admin_info);
            $admin_name=$fetch_all_admins[1];
            $admin_email=$fetch_all_admins[2];
            $admin_contact=$fetch_all_admins[3];
            ?>

            <tr id="<?php echo $admin_id ?>">
                <td><h4><strong><i class="fa fa-user-circle-o"></i></strong> <?php echo $admin_name ?></h4></td>
                <td><h4><strong><i class="fa fa-at"></i></strong> <?php echo $admin_email ?></h4></td>
                <td><h4><strong><i class="fa fa-address-book-o"></i></strong> <?php echo $admin_contact ?></h4></td>
                <td><h4>Active</h4></td>
            </tr>

            <?php
        }
    }
    else{
        ?>

        <tr>
            <td></td>
            <td><h1>No other admin is online</h1></td>
            <td></td>
        </tr>

        <?php
    }
    ?>
    </tbody>
</table>
