<a class="dropdown-toggle" data-toggle="dropdown" id="cityvalue" href="#">Select City
    <span class="glyphicon glyphicon-chevron-down"></span>
</a>
<ul class="dropdown-menu defineminwidth" id="city">
    <script>
        var addon = document.getElementById("city");
        var cities = ['All Cities','Ahmedabad','Bangalore','Chandigarh','Chennai','Coimbtore',
            'Delhi','Gurgaon','Hyderabad','Jaipur','Kochi','Kolkata','Lakhnow',
            'Mumbai','Pune','Trivandrum'];
        for(var a=0;a<cities.length;a++){
            addon.innerHTML += '<li><a href="#" onclick="changename(this.innerHTML)"><span class="fa fa-map-marker"> ' + cities[a] + ' </span></a></li>';
        }
    </script>
</ul>