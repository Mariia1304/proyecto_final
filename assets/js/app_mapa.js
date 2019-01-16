function initMap() {
    var map;
    var bounds = new google.maps.LatLngBounds();
    var mapOptions = {
        mapTypeId: 'roadmap'
    };
    // Display a map on the web page
    map = new google.maps.Map(document.getElementById("map"), mapOptions);
    map.setTilt(50);
    // Multiple markers location, latitude, and longitude
    var markers = [
        ['Parque Araucano, Santiago', -33.402212, -70.574934],
        ['Parque Bicentenario, Santiago', -33.398627, -70.604674],
        ['Resto Alfonsina, Santiago', -33.366450, -70.530167],
        ['MIM, Santiago', -33.517340, -70.615900],
        ['Fantasilandia, Santiago', -33.460331480676615, -70.66455529978288]
    ];
    // Info window content
    var infoWindowContent = [
        [showWindow('Parque Araucano', 'Bla')],
        [showWindow('Parque Bicentenario', 'Bla')],
        [showWindow('Resto Alfonsina, Santiago', 'Bla')],
        [showWindow('MIM, Santiago', 'Blablabla')],
        [showWindow('Fantasilandia, Santiago', 'Blablablabla')]
    ];
    // Add multiple markers to map
    var infoWindow = new google.maps.InfoWindow(),
        marker, i;
    // Place each marker on the map  
    for (i = 0; i < markers.length; i++) {
        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
        bounds.extend(position);
        marker = new google.maps.Marker({
            position: position,
            map: map,
            title: markers[i][0]
        });
        // Add info window to marker    
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.open(map, marker);
            }
        })(marker, i));
        // Center the map to fit all markers on the screen
        map.fitBounds(bounds);
    }
    // Set zoom level
    var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
        this.setZoom(11);
        google.maps.event.removeListener(boundsListener);
    });
}
// Load initialize function
google.maps.event.addDomListener(window, 'load', initMap);

function showWindow(title, text) {
    var content = '<div class="info_content">' + '<h3>' + title + '</h3>' + '<p>' + text + '</p>' + '</div>';
    return content;
}