<script>
    var category = document.getElementById("CategoryMenu");
    for(var i=0; i<1; i++){
        category.innerHTML += '<div id="listGroup" class="list-group"></div>';
        var newCategory = document.getElementById("listGroup");
        var categoryData = ['services','homes','jobs','cars','bikes','education','mobiles & tablets',
            'furniture & decor','electronics and appliances','kids & toys','sports, hobbies & fashion',
            'commercial real estate','salon at home', 'pets & pet care','home & lifestyle','entertainment',
            'community','events','matrimonial'];
        var categoryId=[10001,10002,10003,10004,10005,10006,10007,10008,10009,10010,10011,10012,10013,10014,
            10017,10018,10019,10020,10021];
        var newClass = ['fa-wrench','fa-home','fa-briefcase','fa-car','fa-motorcycle','fa-graduation-cap','fa-tablet','fa-bed','fa-television',
            'fa-smile-o','fa-paint-brush','fa-building','fa-female','fa-paw','fa-building-o',
            'fa-music','fa-users','fa-calendar','fa-mars-double'];
        for(var j=0; j<categoryData.length; j++){
            newCategory.innerHTML += '<a href="?categoryId='+ categoryId[j] +'" class="list-group-item functional">'
                + '<span class="fa '
                + newClass[j]
                + '"></span>&nbsp;&nbsp;&nbsp;'
                + categoryData[j]
                +'</a>';
        }
    }
</script>