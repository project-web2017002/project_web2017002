<div id="bottomadv">
<script>
    var category = document.getElementById("bottomadv");
    for(var i=0; i<1; i++){
        category.innerHTML += '<div id="listGroup" class="list-group"></div>';
        var newCategory = document.getElementById("listGroup");
        var categoryData = ['intercity','refurbished phones','home & lifestyle','entertainment','community','events','matrimonial'];
        var categoryId=[10015,10016,10017,10018,10019,10020,10021];
        for(var j=0; j<categoryData.length; j++){
            newCategory.innerHTML += '<a href="?ctId='+ categoryId[j] +'" class="list-group-item functional">'
                + categoryData[j]
                +'</a>';
        }
    }
</script>
</div>