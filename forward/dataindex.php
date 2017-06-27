<div class="container-fluid mainBar-fluid">
    <div class="row extra"></div>
    <div class="row dataindex-main">
        <div class="col-lg-3 leftsidebar" id="CategoryMenu">
            <div class="row">
                <script>
                    var category = document.getElementById("CategoryMenu");
                    for(var i=0; i<1; i++){
                        category.innerHTML += '<div id="listGroup" class="list-group"></div>';
                        var newCategory = document.getElementById("listGroup");
                        var categoryData = ['services','homes','jobs','cars','bikes','education','mobiles & tablets',
                            'furniture & decor','electronics and appliances','kids & toys','sports, hobbies, fashion',
                            'commercial real estate','salon at home', 'pets & pet care','intercity','refurbished phones',
                            'home & lifestyle','entertainment','community','events','matrimonial'];
                        var newClass = ['fa-wrench','fa-home','fa-briefcase','fa-car','fa-motorcycle','fa-graduation-cap','fa-tablet','fa-bed','fa-television',
                            'fa-smile-o','fa-paint-brush','fa-building','fa-female','fa-paw','fa-map-marker','fa-mobile-phone','fa-building-o',
                            'fa-music','fa-users','fa-calendar','fa-mars-double'];
                        for(var j=0; j<categoryData.length; j++){
                            newCategory.innerHTML += '<a href="#" class="list-group-item functional">'
                                + '<span class="fa '
                                + newClass[j]
                                + '"></span>&nbsp;&nbsp;&nbsp;'
                                + categoryData[j]
                                +'</a>';
                        }
                    }
                </script>
            </div>
            <div class="row">
                <div class="thumbnail">
                    Advertisement
                </div>
            </div>
        </div>
        <div class="col-lg-9 rightsidebar" id="mainWindow">
            <?php
            include("carousal.php");
            ?>
            <div class="thumbnail padmar">Block For Advertisement</div>
            <div class="container padmar"></div>
            <div class="thumbnail padmar">Block for advertisement</div>
            <div class="container padmar"></div>
        </div>
    </div>
</div>
