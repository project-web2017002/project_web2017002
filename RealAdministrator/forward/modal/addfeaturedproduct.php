<?php
//this modal window will popup once admin clicks on add featurd product link
// this will popup a dropdown on categories
// admin select a category first, then admin will be able to access product list of that particular category
?>
<div id="newFPModal" class="modal fade" role="dialog">
    <div class="modal-dialog" id="moda">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="row" style="text-align: center">Please Select A Category</div>
            </div>
            <div class="modal-body">
                <div id="fpmsgs"></div>
                <form id="newFpform" method="post" autocomplete="off">
                    <select name="fpcategory" id="fpcategory" class="form-control" style="text-transform: capitalize"></select>
                    <br>
                    <div id="fpcategorysubmit" class="btn btn-danger btn-block" style=" background-color: #e40046; color: white;">Continue</div>
                </form>
            </div>
        </div>
    </div>
</div>