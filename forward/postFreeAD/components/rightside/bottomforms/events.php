<div class="row">
    <div class="col-md-1 col-sm-12"></div>

    <div class="col-md-10 col-sm-12">
        <form name="eventForm" autocomplete="off" method="post">
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
                        <select name="event-type" id="event-type" class="form-control">
                            <option value="">--Select Event Type--</option>
                            <option value="Event Management">Event Management</option>
                            <option value="Live Event">Live Event</option>
                        </select>
                    </td>
                    <td id="management-event-tab">
                        <select name="management-event-ser-type" id="management-event-ser-type" class="form-control">
                            <option value="Catering">Catering</option>
                            <option value="Decoration">Decoration</option>
                            <option value="Entertainment">Entertainment</option>
                            <option value="Event Planner">Event Planner</option>
                            <option value="Photography-Videography">Photography-Videography</option>
                            <option value="Stage & Infra">Stage & Infra</option>
                            <option value="Venues">Venues</option>
                        </select>
                    </td>
                    <td id="live-event-tab">
                        <select name="live-event-ser-type" id="live-event-ser-type" class="form-control">
                            <option value="Catering">Catering</option>
                            <option value="Decoration">Decoration</option>
                            <option value="Entertainment">Entertainment</option>
                            <option value="Event Planner">Event Planner</option>
                            <option value="Photography-Videography">Photography-Videography</option>
                            <option value="Stage & Infra">Stage & Infra</option>
                            <option value="Venues">Venues</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                            <input type="text" class="form-control" name="event-city" id="event-city" placeholder="Enter Event City">
                        </div>
                    </td>
                    <td>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-rupee"></i></span>
                            <input type="text" name="cost" class="form-control" id="cost" placeholder="Enter Cost">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" name="user-name" id="user-name" placeholder="Enter Your Name" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-at"></i></span>
                            <input type="email" name="user-email" id="user-email" placeholder="Enter Personal Email" class="form-control">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <h4>I am:</h4>
                    </td>
                    <td>
                        <input type="radio" name="event-ser-type" class="event-ser-type" id="Looking" value="Looking for a Service" checked>Looking for a Service
                        <input type="radio" name="event-ser-type" class="event-ser-type" id="Providing" value="Providing a service">Providing a service
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
                            <input type="text" name="user-contact" id="user-contact" placeholder="Enter Contact Number" class="form-control">
                        </div>
                    </td>

                    <td>
                        <textarea class="form-control" id="event-desc" name="event-desc" placeholder="Enter Description"></textarea>
                    </td>
                </tr>

                <?php require("components/rightside/common.php"); ?>

                <tr>
                    <td colspan="2">
                        <div id="submiteventForm" class="btn btn-danger btn-block">Continue</div>
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <div class="col-md-1 col-sm-12"></div>
</div>