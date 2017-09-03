<?php
// this modal popup windows displays a form to existing admin, so that new admin can be added
?>
<div id="newAdminModal" class="modal fade" role="dialog">
    <div class="modal-dialog" id="moda">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><i class="fa fa-user-circle"></i> Signup</h4>
                <div class="row" style="text-align: center">Please provide Details of New Admin</div>
            </div>
            <div class="modal-body">
                <form id="newSignupform" method="post" autocomplete="off">
                    <div class="form-group">
                        <input type="text" name="adminname" id="adminname" class="form-control" placeholder="Enter Admin Name" required pattern="[a-zA-Z0-9]{3,}"
                               title="Username contains only alphabets">
                    </div>
                    <div class="form-group">
                        <input type="email" name="adminemail" id="adminemail" class="form-control" placeholder="Enter Email of Admin" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="admincontact" id="admincontact" class="form-control" placeholder="Enter Admin's Mobile Number" required pattern="[789][0-9]{9}">
                    </div>
                    <div class="form-group">
                        <input type="password" name="pass" id="pass" class="form-control" placeholder="Enter Password" required pattern=".{6,8}"
                               title="Password length should be min 6 characters to max 8 characters">
                    </div>
                    <input type="submit" id="adhidn" value="Continue" class="btn btn-danger" style="width: 100%; background-color: #e40046; color: white;">
                    <button type="submit" name="adminsignup" id="adminsignup" class="btn btn-danger hidden" style="width: 100%; background-color: #e40046; color: white;">Continue</button>
                </form>
            </div>
        </div>
    </div>
</div>