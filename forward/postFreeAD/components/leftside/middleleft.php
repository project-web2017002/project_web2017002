<div id="middleadv">
<script>
    var category = document.getElementById("middleadv");
    for(var i=0; i<1; i++){
        category.innerHTML += '<div id="listGroup" class="list-group"></div>';
        var newCategory = document.getElementById("listGroup");
        var categoryData = ['home & lifestyle','electronics and appliances','pets & pet care'];
        var categoryId=[10008,10009,10014];
        for(var j=0; j<categoryData.length; j++){
            newCategory.innerHTML += '<a href="?ctId='+ categoryId[j] +'" class="list-group-item functional">'
                + categoryData[j]
                +'</a>';
        }
    }
</script>
</div>