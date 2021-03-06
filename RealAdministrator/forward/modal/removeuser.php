<!-- remove user confirmation Modal -->
<div id="removeuserModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Do you Really want to remove <span class="badge" id="user-id"></span> ?</h4>
            </div>

            <div class="modal-body">
                <div class="row" id="j-k-l">

                    <div class="col-md-6 col-sm-12">
                        <button type="submit" name="remove" id="remove" class="btn btn-success btn-block">
                            <span class="glyphicon glyphicon-ok"></span> Yes
                        </button>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <button class="btn btn-danger btn-block" data-dismiss="modal">
                            <span class="glyphicon glyphicon-remove"></span> No
                        </button>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>