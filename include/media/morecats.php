<?php
// this will also create category menu after main category menu in forward/dataindex.php to display to user
?>
<script>
    var category = document.getElementById("CategoryMenu2");
    for(var i=0; i<1; i++){
        var categoryData = ['sports, hobbies & fashion',
            'commercial real estate','salon at home', 'pets & pet care','home & lifestyle','entertainment',
            'community','events','matrimonial'];
        var categoryId=[10011,10012,10013,10014,
            10017,10018,10019,10020,10021];
        var newClass = ['fa-paint-brush','fa-building','fa-female','fa-paw','fa-building-o',
            'fa-music','fa-users','fa-calendar','fa-mars-double'];
        for(var j=0; j<categoryData.length; j++){
            category.innerHTML += '<div class="col-md-2 col-xs-12 focusg img-thumbnail functional" onclick="changecategory('+categoryId[j]+')">'
                + '<span class="img-thumbnail img-rounded fa '
                + newClass[j]
                + '"></span><br>'
                + categoryData[j]
                + '</div>';
        }
    }
</script>