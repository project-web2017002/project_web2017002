<!--first seven categories-->
<div id="topadv">
<script>
    var category = document.getElementById("topadv");
    for(var i=0; i<1; i++){
        category.innerHTML += '<div id="listGroup" class="list-group"></div>';
        var newCategory = document.getElementById("listGroup");
        var categoryData = ['services','homes','jobs','cars','bikes','education','mobiles & tablets'];
        var categoryId=[10001,10002,10003,10004,10005,10006,10007];
        for(var j=0; j<categoryData.length; j++){
            newCategory.innerHTML += '<a href="?ctId='+ categoryId[j] +'" class="list-group-item functional">'
                + categoryData[j]
                +'</a>';
        }
    }
</script>
</div>