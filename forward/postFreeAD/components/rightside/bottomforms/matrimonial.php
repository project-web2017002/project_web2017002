<div class="row">
    <div class="col-md-1 col-sm-12"></div>

    <div class="col-md-10 col-sm-12">
        <form name="matrimonialForm" autocomplete="off" method="post">
            <table class="table">

                <tr>
                    <td colspan="2">
                        <input type="hidden" value="<?php echo $ctid ?>" name="adv_cat" id="adv_cat">
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
                            <input type="text" name="matrimonial-user-contact" id="matrimonial-user-contact" placeholder="Enter Contact Number" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-at"></i></span>
                            <input type="email" name="user-email" id="user-email" required placeholder="Enter Email" class="form-control">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        You can avail this feature Through Our Support Team, Fill the above form and our team will get to you Shortly.
                    </td>
                </tr>


                <tr>
                    <td colspan="2">
                        <input type="submit" name="submitmatrimonialForm" id="submitmatrimonialForm" value="Continue" class="btn btn-danger btn-block">
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <div class="col-md-1 col-sm-12"></div>
</div>