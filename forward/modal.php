<?php

error_reporting(0);
include("login/login.php");//login modal
include("signup/signup.php");//signup modal
include("postFreeAD/adBlockModal.php"); // post free ad confirmation modal
include("login/logoutmodal.php"); // logout confirmation modal
include("profile/edit.php"); // profile edit modal

//function for date time convert to "few days ago" like string
function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}


?>
<!--Login signup modal-->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog" id="moda">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><i class="fa fa-user-circle"></i> Login/Signup</h4>
            </div>
            <div class="modal-body smalltext">
                <h3>Already a Customer?</h3>
                <div class="container">
                    <button class="btn btn-danger btn-lg btn-block" onclick="one()">Login</button>
                </div>
                <h3>New User?</h3>
                <div class="container">
                    <button class="btn btn-success btn-lg btn-block" onclick="two()">Signup</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Loader gif-->
<div id="loading" style="display: none; top:0; left:0; position: fixed; text-align: -webkit-center; padding: 15% 0; background: transparent; width: 100%; z-index: 9999">
    <img src="/optimus/include/media/images/loading.gif">
</div>