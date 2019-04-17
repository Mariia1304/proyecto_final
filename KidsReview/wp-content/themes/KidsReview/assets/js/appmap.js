var filterByType = null;
function initMap() {
    var map;
    var bounds = new google.maps.LatLngBounds();
    var mapOptions = {
        mapTypeId: 'roadmap'
    };
    // Display a map on the web page
    map = new google.maps.Map(document.getElementById("map"), mapOptions);
    map.setTilt(50);
    // console.log(lugares);

    var markers = lugares.filter(function(lugar) {
        return filterByType == null || lugar.type == filterByType;
    })
    .forEach(function(lugar) {
        var position = new google.maps.LatLng(lugar.latitude, lugar.longitude);
        new google.maps.Marker({
            position: position,
            map: map,
            title: lugar.name
        });
    });
    console.log(markers);

    markers = [];
    //obtener valor de select
   

    //var filterByType = 'juegos';
    if (filterByType == null || filterByType == '') {

        lugares.forEach(function(lugar) {
            //if (lugar.type == filterByType) {
                markers.push([lugar.name, lugar.latitude, lugar.longitude, lugar.description]);
            //}
        });
    } else {
        lugares.forEach(function(lugar) {
            if (lugar.type == filterByType) {
                markers.push([lugar.name, lugar.latitude, lugar.longitude, lugar.description]);
            }
        });
    }
    console.log(markers);
    var infoWindowContent = [];
    markers.forEach(function(marker) {
        infoWindowContent.push([showWindow(marker[0], marker[3])]);
    });
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
        this.setZoom(9);
        google.maps.event.removeListener(boundsListener);
    });
}
// Load initialize function
// google.maps.event.addDomListener(window, 'load', initMap);

function showWindow(title, text) {
    var content = '<div class="info_content">' + '<h3>' + title + '</h3>' + '<p>' + text + '</p>' + '</div>';
    return content;
}

function filterMarkers(){
    filterByType = document.getElementById("type").value; 
   
    initMap();
}
//







var filterByType = null;
function initMap() {
    var map;
    var bounds = new google.maps.LatLngBounds();
    var mapOptions = {
        mapTypeId: 'roadmap'
    };
    // Display a map on the web page
    map = new google.maps.Map(document.getElementById("map"), mapOptions);
    map.setTilt(50);
    // console.log(lugares);
    var markers = [];
    //obtener valor de select
   

    //var filterByType = 'juegos';
    if (filterByType == null || filterByType == '') {

        lugares.forEach(function(lugar) {
            //if (lugar.type == filterByType) {
                markers.push([lugar.name, lugar.latitude, lugar.longitude, lugar.description]);
            //}
        });
    } else {
        lugares.forEach(function(lugar) {
            if (lugar.type == filterByType) {
                markers.push([lugar.name, lugar.latitude, lugar.longitude, lugar.description]);
            }
        });
    }
    console.log(markers);
    var infoWindowContent = [];
    markers.forEach(function(marker) {
        infoWindowContent.push([showWindow(marker[0], marker[3])]);
    });
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
        this.setZoom(9);
        google.maps.event.removeListener(boundsListener);
    });
}
// Load initialize function
// google.maps.event.addDomListener(window, 'load', initMap);

function showWindow(title, text) {
    var content = '<div class="info_content">' + '<h3>' + title + '</h3>' + '<p>' + text + '</p>' + '</div>';
    return content;
}

function filterMarkers(){
    filterByType = document.getElementById("type").value; 
   
    initMap();
}
//