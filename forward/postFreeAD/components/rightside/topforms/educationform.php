<div class="row">
    <div class="col-md-1 col-sm-12"></div>

    <div class="col-md-10 col-sm-12">
        <form class="postform" name="educationForm" autocomplete="off" method="post">
            <table class="table">

                <?php require("components/rightside/elements/commontop.php"); ?>

                <tr>
                    <td>
                        <select class="form-control" name="education-type" id="education-type">
                            <option value="">--Please Select One--</option>
                            <option value="Career Counseling">Career Counseling</option>
                            <option value="Certification & Training">Certification & Training</option>
                            <option value="Coaching">Coaching</option>
                            <option value="Workshops">Workshops</option>
                            <option value="Distance Learning">Distance Learning</option>
                            <option value="Study Abroad Consultants">Study Abroad Consultants</option>
                            <option value="Skill Training">Skill Training</option>
                            <option value="Study Material">Study Material</option>
                            <option value="Other">Other</option>
                        </select>
                    </td>
                    <td id="otherEducationtab">
                        <?php
                        // this will be displayed to user only if user selects Other from above dropdown
                        ?>
                        <input type="text" class="form-control" name="other-edu-val" id="other-edu-val" placeholder="Please Specify Other">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="text" class="form-control" name="edu-title" id="edu-title" placeholder="Enter Title of AD">
                    </td>
                    <?php require("components/rightside/elements/postcity.php"); ?>
                </tr>

                <tr>
                    <td>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-rupee"></i></span>
                            <input type="text" class="form-control" name="cost" id="cost" placeholder="Enter Fees">
                        </div>
                    </td>
                    <td>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-graduation-cap"></i></span>
                            <input type="text" class="form-control" name="edu-stream" id="edu-stream" placeholder="Enter Stream">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="text" class="form-control" name="edu-insti-name" id="edu-insti-name" placeholder="Enter Institute Name">
                    </td>
                    <td>
                        <input type="text" class="form-control" name="edu-insti-address" id="edu-insti-address" placeholder="Enter Institute Address">
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
                            <input type="text" class="form-control" name="edu-insti-contact" id="edu-insti-contact" placeholder="Enter Institute Contact">
                        </div>
                    </td>
                    <td>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-at"></i></span>
                            <input type="email" class="form-control" name="edu-insti-email" id="edu-insti-email" placeholder="Enter Institute Email">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <textarea class="form-control" id="edu-desc" name="edu-desc" placeholder="Enter Description"></textarea>
                    </td>
                </tr>

                <?php require("components/rightside/elements/commonbtm.php"); ?>
                <?php require("components/rightside/elements/btn.php"); ?>
            </table>
        </form>
    </div>

    <div class="col-md-1 col-sm-12"></div>
</div>