let map, infoWindow;

function initMap() {
    map = new google.maps.Map(document.getElementById("map-admin"), {
        center: { lat: -7.50166466, lng: 111.257832302 },
        zoom: 13,
    });
    infoWindow = new google.maps.InfoWindow();

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

    map.addListener("click", (mapsMouseEvent) => {
        // Close the current InfoWindow.
        infoWindow.close();
        // Create a new InfoWindow.
        infoWindow = new google.maps.InfoWindow({
            position: mapsMouseEvent.latLng,
        });
        var location = mapsMouseEvent.latLng
        var lat = location.lat()
        var lng = location.lng()

        document.querySelector('.location input[name="latitude"]').value = lat
        document.querySelector('.location input[name="longitude"]').value = lng
        infoWindow.setContent(
            "Lokasi dipilih."
        );
        infoWindow.open(map);
    });
}
