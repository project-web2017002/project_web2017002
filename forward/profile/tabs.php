<!--Tabs menu-->
<div class="card hovercard">
    <div class="card-background">
        <img class="card-bkimg" alt="" src="http://lorempixel.com/100/100/people/9/">
    </div>
    <div class="useravatar">
        <img alt="" src="http://zelfverbeteren.nl/wp-content/uploads/2016/12/abstract-user-flat-3.png">
    </div>
    <div class="card-info">
        <span class="card-title" style="text-transform: uppercase"><?php echo $user_name ?></span>
    </div>
</div>
<div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
    <div class="btn-group" role="group">
        <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab">
            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
            <div class="hidden-xs">About Me</div>
        </button>
    </div>
    <div class="btn-group" role="group">
        <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab">
            <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
            <div class="hidden-xs">My Orders</div>
        </button>
    </div>
    <div class="btn-group" role="group">
        <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab">
            <span class="fa fa-product-hunt" aria-hidden="true"></span>
            <div class="hidden-xs">Sold/Selling Products</div>
        </button>
    </div>
    <div class="btn-group" role="group">
        <button type="button" id="following" class="btn btn-default" href="#tab4" data-toggle="tab">
            <span class="fa fa-product-hunt" aria-hidden="true"></span>
            <div class="hidden-xs">Others</div>
        </button>
    </div>
</div>
<!--Tab menu ends-->