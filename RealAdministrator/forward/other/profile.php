<?php
// this will display admin info on main page sidebar
error_reporting(0);

$get_this_admin_data=mysqli_query($con,"select * from realadmin where admin_id=$aid");
$fetch=mysqli_fetch_array($get_this_admin_data);
$name=$fetch[1];
$email=$fetch[2];
$contact=$fetch[3];

?>

<table class="table" style="text-align: center">
    <tr>
        <td></td>
        <td>
            <strong style="cursor: pointer" data-toggle="modal" data-target="#editAdminModal" >
                <i class="fa fa-edit"></i> Edit
            </strong>
        </td>
    </tr>
    <tr>
        <td>Name:</td>
        <td><?php echo $name ?></td>
    </tr>
    <tr>
        <td>Email:</td>
        <td><?php echo $email ?></td>
    </tr>
    <tr>
        <td>Contact:</td>
        <td><?php echo $contact ?></td>
    </tr>
</table>