
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

// var popup = L.popup()
// var map = L.map('map-admin').setView([-7.50166466, 111.257832302], 18)

// L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
//     maxZoom: 19,
//     attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
// }).addTo(map);

// // let directionsControl = L.mapquest.directionsControl({
// //     startInput: {
// //         disabled: false,
// //         location: {},
// //         geolocation: {
// //             enabled: true,
// //             enableHighAccuracy: true
// //         }
// //     }
// // }).addTo(leafletMap)

// let theMarker = {}

// MAPap.on('click', function(e) {
//     console.log(e)
//     let latitude = e.latlng.lat.toString().subString(0, 15)
//     let longitude = e.latlng.lng.toString().substring(0, 15)

//     document.querySelector('.location input[name="latitude"]').value = latitude
//     document.querySelector('.location input[name="longitude"]').value = longitude

//     let popup = L.popup().setLatLng([latitude, longitude]).setContent("Koordinat : " + latitude+ " - " + longitude).openOn(leafletMap)

//     if(theMarker !== undefined) {
//         map.removeLayer(theMarker)
//     }
//     theMarker = L.marker([latitude, longitude]).addTo(map)
// })
let map, infoWindow;

function initMap() {
    map = new google.maps.Map(document.getElementById("map-admin"), {
        center: { lat: -7.50166466, lng: 111.257832302 },
        zoom: 8,
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
