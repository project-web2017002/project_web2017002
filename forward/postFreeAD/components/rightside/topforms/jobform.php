<div class="row">
    <div class="col-md-1 col-sm-12"></div>

    <div class="col-md-10 col-sm-12">
        <form name="jobsForm" autocomplete="off" method="post">
            <table class="table">

                <tr>
                    <td>
                        <input type="hidden" value="<?php echo $ctid ?>" name="adv_cat" id="adv_cat">
                    </td>
                    <td>
                        <input type="hidden" value="<?php echo $id ?>" name="user_id" id="user_id">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="text" class="form-control" name="job-title" id="job-title" placeholder="Enter Job Title">
                    </td>
                </tr>

                <tr>
                    <td>
                        <select name="job-type" id="job-type" class="form-control">
                            <option value="">--SELECT JOB TYPE--</option>
                            <option value="Part-Time">Part-Time Job</option>
                            <option value="Full-Time">Full-Time Job</option>
                            <option value="Internship">Internship Job</option>
                            <option value="Work From Home">Work From Home Job</option>
                        </select>
                    </td>
                    <td>
                        <input type="text" name="job-role" id="job-role" class="form-control" placeholder="Enter Job Role">
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-rupee"></i></span>
                            <input type="text" name="min-sal" class="form-control" id="min-sal" placeholder="Minimum Salary/mon">
                        </div>
                    </td>
                    <td>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-rupee"></i></span>
                            <input type="text" name="max-sal" class="form-control" id="max-sal" placeholder="Maximum Salary/mon">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-institution"></i></span>
                            <input type="text" name="job-company-name" id="job-company-name" placeholder="Enter Company Name" class="form-control">
                        </div>
                    </td>

                    <td>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-at"></i></span>
                            <input type="text" name="job-company-email" id="job-company-email" placeholder="Enter Company Email" class="form-control">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="text" class="form-control" name="job-location" id="job-location" placeholder="Enter Job location">
                    </td>
                    <td>
                        <input type="text" class="form-control" name="job-exp" id="job-exp" placeholder="Enter minimum Experience (in months)">
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
                            <input type="text" class="form-control" name="recruit-number" id="recruit-number" placeholder="Enter Recruiter's Contact Number">
                        </div>
                    </td>
                    <td>
                        <textarea class="form-control" name="job-desc" id="job-desc" placeholder="Enter Job Description"></textarea>
                    </td>
                </tr>

                <?php require("components/rightside/common.php"); ?>

                <tr>
                    <td colspan="2">
                        <div id="submitJobForm" class="btn btn-danger btn-block">Continue</div>
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <div class="col-md-1 col-sm-12"></div>
</div>