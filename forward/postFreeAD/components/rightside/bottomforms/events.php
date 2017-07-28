<div class="row">
    <div class="col-md-1 col-sm-12"></div>

    <div class="col-md-10 col-sm-12">
        <form class="postform" name="eventForm" autocomplete="off" method="post">
            <table class="table">

                <?php require("components/rightside/elements/commontop.php"); ?>

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
                    <?php require("components/rightside/elements/postcity.php"); ?>
                    <td>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-rupee"></i></span>
                            <input type="text" name="cost" class="form-control" id="cost" placeholder="Enter Cost">
                        </div>
                    </td>
                </tr>

                <tr>
                    <?php require("components/rightside/elements/username.php"); ?>
                    <?php require("components/rightside/elements/useremail.php"); ?>
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
                    <?php require("components/rightside/elements/usercontact.php"); ?>

                    <td>
                        <textarea class="form-control" id="event-desc" name="event-desc" placeholder="Enter Description"></textarea>
                    </td>
                </tr>

                <?php require("components/rightside/elements/commonbtm.php"); ?>
                <?php require("components/rightside/elements/btn.php"); ?>
            </table>
        </form>
    </div>

    <div class="col-md-1 col-sm-12"></div>
</div>