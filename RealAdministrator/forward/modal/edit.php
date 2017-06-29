<?php
error_reporting(0);
$get_all_info=mysqli_query($con,"select * from realadmin where admin_id=$aid");
$fetch_all_info=mysqli_fetch_array($get_all_info);
$admin_name=$fetch_all_info[1];
$admin_email=$fetch_all_info[2];
$admin_contact=$fetch_all_info[3];
?>
<div id="editAdminModal" class="modal fade" role="dialog">
    <div class="modal-dialog" id="moda">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><i class="fa fa-edit"></i> Edit Information (<?php echo $admin_name ?>)</h4>
            </div>
            <div class="modal-body smalltext">
                <form id="EditDataForm" method="post" autocomplete="off">
                    <div class="form-group">
                        <input type="text" name="usernam" id="usernam" class="form-control" pattern="[a-zA-Z]{3,}"
                               title="Username contains only alphabets" value="<?php echo $admin_name ?>">
                    </div>
                    <div class="form-group">
                        <input type="email" name="conten" id="conten" class="form-control" value="<?php echo $admin_email ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" name="contan" id="contan" class="form-control" pattern="[789][0-9]{9}"
                               value="<?php echo $admin_contact ?>">
                    </div>
                    <button type="submit" name="edit" id="edit" class="btn btn-danger" style="width: 100%; background-color: #e40046; color: white;">Continue</button>
                </form>
            </div>
        </div>
    </div>
</div>