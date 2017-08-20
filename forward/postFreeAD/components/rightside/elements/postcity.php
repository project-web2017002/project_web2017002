<td>
    <input type="text" class="form-control" name="pocity" id="pocity" placeholder="Enter Location(City)" disabled>
</td>
<div id="map" style="display:none"></div>
<script>
    if (navigator.geolocation)
        navigator.geolocation.getCurrentPosition(initMap);
    else
        window.alert("Geolocation is not supported by this browser.");

    function initMap(position) {
        document.getElementById('pocity').value = position.coords.latitude+","+position.coords.longitude;
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: position.coords.latitude, lng: position.coords.longitude}
        });
        var geocoder = new google.maps.Geocoder;
        var infowindow = new google.maps.InfoWindow;
        geocodeLatLng(geocoder, map, infowindow);
    }

    function geocodeLatLng(geocoder, map, infowindow) {
        var input = document.getElementById('pocity').value;
        var latlngStr = input.split(',', 2);
        var latlng = {lat: parseFloat(latlngStr[0]), lng: parseFloat(latlngStr[1])};
        geocoder.geocode({'location': latlng}, function(results, status) {
            if (status === 'OK') {
                if (results[0]) {
                    document.getElementById('pocity').value = results[0].formatted_address;
                } else {
                    window.alert('No results found');
                }
            } else {
                window.alert('Geocoder failed due to: ' + status);
            }
        });
    }
</script>