var map;

function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: {
            lat: -36.8201352,
            lng: -73.0443904
        },
        zoom: 8
    });
}