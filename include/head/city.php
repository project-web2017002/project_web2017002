<?php
// this will be display dropdown with cities names
?>
<?php if($city == '') { // if user didn't select any city?>
    <a class="dropdown-toggle" data-toggle="dropdown" id="cityvalue" href="#">Top Cities
        <span class="glyphicon glyphicon-chevron-down"></span>
    </a>
<?php } else { // if user selects any city ?>
    <a class="dropdown-toggle" data-toggle="dropdown" id="cityvalue" href="#"><?php echo $city ?>
        <span class="glyphicon glyphicon-chevron-down"></span>
    </a>
<?php } ?>

<ul class="dropdown-menu defineminwidth" id="city">
    <?php
    // create dropdown with cities list, names of cities can be edited or cadded or changed in below  cities array
    ?>
    <script>
        var addon = document.getElementById("city");
        var cities = ['Ahmedabad','Bangalore','Chandigarh','Chennai','Coimbtore',
            'Delhi','Gurgaon','Hyderabad','Jaipur','Kochi','Kolkata','Lakhnow',
            'Mumbai','Pune','Trivandrum'];
        for(var a=0;a<cities.length;a++){
            addon.innerHTML += '<li><a onclick="changename(this.innerHTML)"><span class="fa fa-map-marker"> ' + cities[a] + ' </span></a></li>';
        }
    </script>
</ul>