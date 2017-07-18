<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="//localhost/optimus/RealAdministrator/"><img src="" alt="website logo"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="#" data-toggle="modal" data-target="#newAdminModal"><i class="fa fa-user-plus"></i> Add New Admin</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Featured Product<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#" data-toggle="modal" data-target="#newFPModal"><i class="glyphicon glyphicon-plus"></i> Add Featured Product</a></li>
                        <li><a href="#" id="removefp"><i class="glyphicon glyphicon-remove"></i> Remove Featured Product</a></li>
                        <li><a href="#" id="viewfp"><i class="glyphicon glyphicon-eye-open"></i> View Featured Product</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">More<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#" style="cursor:pointer;" id="moveToOrders" title="View ALL Orders"><span class="glyphicon glyphicon-eye-open"></span> View All Orders</a></li>
                        <li><a href="#" style="cursor:pointer;" id="moveToProducts" title="View ALL Products"><span class="glyphicon glyphicon-eye-open"></span> View All Product</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#" data-toggle="modal" data-target="#logoutModal">
                        <span class="glyphicon glyphicon-log-in"></span> Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>