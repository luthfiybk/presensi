
// window.onload = function() {
//     var popup = L.popup();
//     var geolocationMap = L.map('map-admin', {
//         layers: MQ.mapLayer(),
//         center: [40.731701, -73.993411],
//         zoom: 18
//     });

//     function geolocationErrorOccurred(geolocationSupported, popup, latLng) {
//         popup.setLatLng(latLng);
//         popup.setContent(geolocationSupported ?
//                 '<b>Error:</b> The Geolocation service failed.' :
//                 '<b>Error:</b> This browser doesn\'t support geolocation.');
//         popup.openOn(geolocationMap);
//     }

//     if (navigator.geolocation) {
//         navigator.geolocation.getCurrentPosition(function(position) {
//             var latLng = {
//                 lat: position.coords.latitude,
//                 lng: position.coords.longitude
//             };


//             document.querySelector('.location input[name="latitude"]').value = position.coords.latitude
//             document.querySelector('.location input[name="longitude"]').value = position.coords.longitude

//             L.marker().setLatLng(latLng).addTo(geolocationMap)
//             var circle = L.circle(latLng, {
//                 color: 'red',
//                 fillColor: '#f03',
//                 fillOpacity: 0.5,
//                 radius: 50
//             }).addTo(geolocationMap);
//             // popup.setLatLng(latLng);
//             // popup.marker(latLng);
//             // popup.openOn(geolocationMap);

//             geolocationMap.setView(latLng);
//         }, function() {
//             geolocationErrorOccurred(true, popup, geolocationMap.getCenter());
//         });
//     } else {
//         //No browser support geolocation service
//         geolocationErrorOccurred(false, popup, geolocationMap.getCenter());
//     }
// }

var leafletMap = L.map('map-admin', {
    layers: MQ.mapLayer(),
    center: [-7.50166466, 111.257832302],
    zoom: 5
});

let directionsControl = L.mapquest.directionsControl({
    startInput: {
        disabled: false,
        location: {},
        geolocation: {
            enabled: true,
            enableHighAccuracy: true
        }
    }
}).addTo(leafletMap)

let theMarker = {}

leafletMap.on('click', function(e) {
    console.log(e)
    let latitude = e.latlng.lat.toString().subString(0, 15)
    let longitude = e.latlng.lng.toString().substring(0, 15)

    document.querySelector('.location input[name="latitude"]').value = latitude
    document.querySelector('.location input[name="longitude"]').value = longitude

    let popup = L.popup().setLatLng([latitude, longitude]).setContent("Koordinat : " + latitude+ " - " + longitude).openOn(leafletMap)

    if(theMarker !== undefined) {
        leafletMap.removeLayer(theMarker)
    }
    theMarker = L.marker([latitude, longitude]).addTo(leafletMap)
})