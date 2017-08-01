<?php
if($id != '') {
    $name_fetch = mysqli_query($con, "select * from verified_user where user_id=$id");
    $name_array = mysqli_fetch_array($name_fetch);
    $user_name = $name_array[1];
    $user_email = $name_array[2];
    $user_contact = $name_array[3];
}elseif($googleid != ''){
    $name_fetch = mysqli_query($con, "select * from users where id=$googleid and oauth_provider='google'");
    $name_array = mysqli_fetch_array($name_fetch);
    $user_name = $name_array[3]." ".$name_array[4];
    $user_email = $name_array[5];
    $user_contact = $name_array[12];
}else{
    $name_fetch = mysqli_query($con, "select * from users where id=$fbid and oauth_provider='facebook'");
    $name_array = mysqli_fetch_array($name_fetch);
    $user_name = $name_array[3]." ".$name_array[4];
    $user_email = $name_array[5];
    $user_contact = $name_array[12];
}
?>
<div id="editModal" class="modal fade" role="dialog">
    <div class="modal-dialog" id="moda">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><i class="fa fa-edit"></i> Edit Information (<?php echo $user_name ?>)</h4>
            </div>
            <div class="modal-body smalltext">
                <form id="EditDataForm" method="post" autocomplete="off">
                    <?php
                    if($googleid == '' && $fbid == '') {
                        ?>
                        <div class="form-group">
                            <input type="text" name="usernam" id="usernam" class="form-control" pattern="[a-zA-Z]{3,}"
                                   title="Username contains only alphabets" value="<?php echo $user_name ?>"
                                   placeholder="Enter User Name">
                        </div>
                        <div class="form-group">
                            <input type="email" name="conten" id="conten" class="form-control"
                                   value="<?php echo $user_email ?>" placeholder="Enter Email">
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input type="text" name="contan" id="contan" class="form-control" pattern="[789][0-9]{9}"
                               value="<?php echo $user_contact ?>" placeholder="Enter Contact Number">
                    </div>
                    <?php
                    if($googleid == '' || $fbid == '') {
                        ?>
                        <button type="submit" name="edit" id="edit" class="btn btn-danger"
                                style="width: 100%; background-color: #e40046; color: white;">Continue
                        </button>
                        <?php
                    }else{
                        ?>
                        <button type="submit" name="edit2" id="edit2" class="btn btn-danger"
                                style="width: 100%; background-color: #e40046; color: white;">Continue
                        </button>
                    <?php
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>
</div>