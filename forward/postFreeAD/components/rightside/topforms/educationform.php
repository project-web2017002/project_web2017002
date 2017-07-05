<div class="row">
    <div class="col-md-1 col-sm-12"></div>

    <div class="col-md-10 col-sm-12">
        <form name="educationForm" autocomplete="off" method="post">
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
                    <td>
                        <select class="form-control" name="education-type" id="education-type" required>
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
                        <input type="text" class="form-control" name="other-edu-val" id="other-edu-val" placeholder="Please Specify Other">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="text" class="form-control" name="edu-title" id="edu-title" placeholder="Enter Title of AD" required>
                    </td>
                    <td>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                            <input type="text" class="form-control" name="edu-city" id="edu-city" placeholder="Enter City" required>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-rupee"></i></span>
                            <input type="text" class="form-control" name="edu-fees" id="edu-fees" placeholder="Enter Fees" required>
                        </div>
                    </td>
                    <td>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-graduation-cap"></i></span>
                            <input type="text" class="form-control" name="edu-stream" id="edu-stream" placeholder="Enter Stream" required>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="text" class="form-control" name="edu-insti-name" id="edu-insti-name" placeholder="Enter Institute Name" required>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="edu-insti-address" id="edu-insti-address" placeholder="Enter Institute Address" required>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
                            <input type="text" class="form-control" name="edu-insti-contact" id="edu-insti-contact" placeholder="Enter Institute Contact" required>
                        </div>
                    </td>
                    <td>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-at"></i></span>
                            <input type="email" class="form-control" name="edu-insti-email" id="edu-insti-email" placeholder="Enter Institute Email" required>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <textarea class="form-control" id="edu-desc" name="edu-desc" required placeholder="Enter Description"></textarea>
                    </td>
                </tr>

                <tr>
                    <td>
                        <h4>Select Advertisement Type:</h4>
                    </td>
                    <td>
                        <input type="radio" name="adv-type" class="adv-type" id="free-adv" value="Free" required>Free
                        <input type="radio" name="adv-type" class="adv-type" id="paid-adv" value="Paid" required>Paid
                    </td>
                </tr>

                <tr id="freeadvtab">
                    <td colspan="2">
                        You can Avail More Features in Paid Service
                    </td>
                </tr>

                <tr id="paidadvtab">
                    <td>
                        <div class="container">
                            <div class="row">
                                <div class="page-header">
                                    <h3><strong>Diamond</strong></h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-rupee"></i></span>
                                    <input type="text" readonly name="diamond" id="diamond" value="149/mon" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <p><strong>Features:</strong></p>
                                <ul>
                                    <li>More features than Free</li>
                                </ul>
                            </div>
                            <div class="row">
                                <input type="radio" name="paidser-type" class="paidser-type" value="Diamond" id="diamondser">Select
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="container">
                            <div class="row">
                                <div class="page-header">
                                    <h3><strong>Premium</strong></h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-rupee"></i></span>
                                    <input type="text" readonly name="premium" id="premium" value="249/mon" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <p><strong>Features:</strong></p>
                                <ul>
                                    <li>More features than Diamond</li>
                                </ul>
                            </div>
                            <div class="row">
                                <input type="radio" name="paidser-type" class="paidser-type" value="Premium" id="premiumser">Select
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submiteducationForm" id="submiteducationForm" value="Continue" class="btn btn-danger btn-block">
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <div class="col-md-1 col-sm-12"></div>
</div>