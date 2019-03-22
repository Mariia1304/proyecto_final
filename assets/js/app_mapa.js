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
    //var markers2 = [];
    var arr = createJsonArray();
    /*var index = 0;
    for (index = 0; arr.length; index++) {
        //var obj = new Object(arr[index]);
        //obj = arr[index];
        if (typeof obj !== 'undefined') {
            console.log(obj.name);
            console.log(obj.latitude);
            console.log(obj.longitude);
            //markers2[index][0] = obj.name;
            //var fila = [];
            //fila[0] = "John";
            //fila[1] = obj.latitude;
            //fila[2] = obj.longitude;
            //markers2[index] = new Array(fila);
            //markers[index][1] = obj.latitude;
            //markers[index][2] = obj.longitude;
        }
        //console.log(obj.description);
        //console.log(obj.latitude);
        //console.log(obj.longitude);
    }*/
    console.log(arr);
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

function createJsonArray() {
    var jsonArg1 = new Object();
    jsonArg1.name = 'Parque Araucano';
    jsonArg1.distrit = 'Vitacura';
    jsonArg1.type = 'parque';
    jsonArg1.latitude = -33.402212;
    jsonArg1.longitude = -70.574934;
    jsonArg1.description = 'Blablablabla';
    var jsonArg2 = new Object();
    jsonArg2.name = 'Parque Bicentenario';
    jsonArg2.distrit = 'Vitacura';
    jsonArg2.type = 'parque';
    jsonArg2.latitude = -33.398627;
    jsonArg2.longitude = -70.604674;
    jsonArg2.description = 'Blablablabla';
    var jsonArg3 = new Object();
    jsonArg3.name = 'Resto Alfonsina';
    jsonArg3.distrit = 'Santiago';
    jsonArg3.type = 'restaurant';
    jsonArg3.latitude = -33.366450;
    jsonArg3.longitude = -70.530167;
    jsonArg3.description = 'Blablablabla';
    var jsonArg4 = new Object();
    jsonArg4.name = 'MIM';
    jsonArg4.distrit = 'Ñuñoa';
    jsonArg4.type = 'museo';
    jsonArg4.latitude = -33.517340;
    jsonArg4.longitude = -70.615900;
    jsonArg4.description = 'Blablablabla';
    var jsonArg5 = new Object();
    jsonArg5.name = 'Fantasilandia';
    jsonArg5.distrit = 'Santiago';
    jsonArg5.type = 'juegos';
    jsonArg5.latitude = -33.460331480676615;
    jsonArg5.longitude = -70.66455529978288;
    jsonArg5.description = 'Blablablabla';
    var ArrayArg = new Array();
    ArrayArg.push(jsonArg1);
    ArrayArg.push(jsonArg2);
    ArrayArg.push(jsonArg3);
    ArrayArg.push(jsonArg4);
    ArrayArg.push(jsonArg5);
    return ArrayArg;
}