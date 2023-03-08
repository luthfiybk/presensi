
// window.onload = function() {
//     var popup = L.popup();
//     var geolocationMap = L.map('map-presensi', {
//         layers: MQ.mapLayer(),
//         center: [-7.50166466, 111.257832302],
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
// var popup = L.popup()
// var map = L.map('map-presensi').setView([-7.50166466, 111.257832302], 18)

// L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
//     maxZoom: 19,
//     attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
// }).addTo(map);

// function geolocationErrorOcccured(geolocationSupported, popup, latLng) {
//     popup.setLatLng(latLng)
//     popup.setContent(geolocationSupported ? 
//         '<b>Error:</b> The Geolocation service failed.' :
//         '<b>Error:</b> This browser doesn\'t support geolocation.')
//     popup.openOn(map)
// }

// if(navigator.geolocation){
//     navigator.geolocation.getCurrentPosition(function(position){
//         var latLng = {
//             lat: position.coords.latitude,
//             lng: position.coords.longitude,
//             accuracy: position.coords.accuracy
//         }

//         document.querySelector('.location input[name="latitude"]').value = position.coords.latitude
//         document.querySelector('.location input[name="longitude"]').value = position.coords.longitude
    
//         var marker = L.marker().setLatLng(latLng).addTo(map)
//         map.setView(latLng)

//         $(document).ready(function(){
//         })
//     }, function(){
//         geolocationErrorOcccured(true, popup, geolocationMap.getCenter())
//     })
// } else {
//     geolocationErrorOccured(false, popup, geolocationMap.getCenter())
// }
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

                // infoWindow.setPosition(pos);
                // infoWindow.setContent("Lokasi Anda");
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