<?php
// only user details asked in this, no info what to include in it
?>
<div class="row">
    <div class="col-md-1 col-sm-12"></div>

    <div class="col-md-10 col-sm-12">
        <form class="postform" name="matrimonialForm" autocomplete="off" method="post">
            <table class="table">

                <?php require("components/rightside/elements/commontop.php"); ?>

                <tr>
                    <?php require("components/rightside/elements/usercontact.php"); ?>
                    <?php require("components/rightside/elements/useremail.php"); ?>
                </tr>

                <tr>
                    <?php require("components/rightside/elements/username.php"); ?>
                    <td>
                        You can avail this feature Through Our Support Team, Fill the above form and our team will get to you Shortly.
                    </td>
                </tr>

                <?php require("components/rightside/elements/btn.php"); ?>
            </table>
        </form>
    </div>

    <div class="col-md-1 col-sm-12"></div>
</div>