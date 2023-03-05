
window.onload = function() {
    var popup = L.popup();
    var geolocationMap = L.map('map-presensi', {
        layers: MQ.mapLayer(),
        center: [40.731701, -73.993411],
        zoom: 18
    });

    function geolocationErrorOccurred(geolocationSupported, popup, latLng) {
        popup.setLatLng(latLng);
        popup.setContent(geolocationSupported ?
                '<b>Error:</b> The Geolocation service failed.' :
                '<b>Error:</b> This browser doesn\'t support geolocation.');
        popup.openOn(geolocationMap);
    }

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var latLng = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };


            document.querySelector('.location input[name="latitude"]').value = position.coords.latitude
            document.querySelector('.location input[name="longitude"]').value = position.coords.longitude

            L.marker().setLatLng(latLng).addTo(geolocationMap)
            var circle = L.circle(latLng, {
                color: 'red',
                fillColor: '#f03',
                fillOpacity: 0.5,
                radius: 50
            }).addTo(geolocationMap);
            // popup.setLatLng(latLng);
            // popup.marker(latLng);
            // popup.openOn(geolocationMap);

            geolocationMap.setView(latLng);
        }, function() {
            geolocationErrorOccurred(true, popup, geolocationMap.getCenter());
        });
    } else {
        //No browser support geolocation service
        geolocationErrorOccurred(false, popup, geolocationMap.getCenter());
    }
}