let map, infoWindow;

function initMap() {
    map = new google.maps.Map(document.getElementById("map-presensi"), {
        center: { lat: -34.397, lng: 150.644 },
        zoom: 18,
    });
    infoWindow = new google.maps.InfoWindow();

    var bounds = new google.maps.LatLngBounds();

        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(
            (position) => {
                const pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude,
                };

                var marker = new google.maps.Marker({
                    position: pos
                })
                marker.setMap(map)

                infoWindow.open(map);
                map.setCenter(pos);

                document.querySelector('.location input[name="latitude"]').value = position.coords.latitude
                document.querySelector('.location input[name="longitude"]').value = position.coords.longitude
            },
            () => {
                handleLocationError(true, infoWindow, map.getCenter());
            });
        } else {
        // Browser doesn't support Geolocation
            handleLocationError(false, infoWindow, map.getCenter());
        }
}


function handleLocationError(browserHasGeolocation, infoWindow, pos) {
    infoWindow.setPosition(pos);
    infoWindow.setContent(
        browserHasGeolocation
        ? "Error: The Geolocation service failed."
        : "Error: Your browser doesn't support geolocation."
    );
    infoWindow.open(map);
}

window.initMap = initMap;