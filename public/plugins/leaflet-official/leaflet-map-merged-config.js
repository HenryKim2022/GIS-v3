var imgu = "https://demo4.iti-if.my.id/public/plugins/leaflet-official/data.geojson.json/img/tutwuri.png";
var controlSearch;
var mycurrentLat, mycurrentLng;

function initializeMap() {
    var map = new L.Map('map', {
        fullscreenControl: true,
        fullscreenControlOptions: {
            position: 'topleft'
        },
        gestureHandling: false
    }).setView([-3.4763993, 115.2211498], 4.50);

    // L.Control.geocoder().addTo(map);

    //  // Add a class to the map container when in fullscreen mode
    //  map.on('enterFullscreen', function () {
    //     document.getElementById('map').classList.add('fullscreen-map');
    // });

    // // Remove the class when exiting fullscreen mode
    // map.on('exitFullscreen', function () {
    //     document.getElementById('map').classList.remove('fullscreen-map');
    // });


    return map;
}

function addResetViewControl(map) {
    L.control.resetView({
        position: "topright",
        title: "Reset view",
        latlng: L.latLng([-3.4763993, 115.2211498]),
        zoom: 4.50,
    }).addTo(map);
}

function addTileLayer(map) {
    var appName = "GIS";
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: `Map data &copy; <a href="https://www.openstreetmap.org/">${appName}</a>`
    }).addTo(map);
}

function addSchoolnameSearchControl(map, markersLayer, propertyNamed) {
    L.control.search({
        layer: markersLayer,
        position: 'topleft',
        initial: false,
        zoom: 48,
        propertyName: propertyNamed,
        textPlaceholder: 'Search by school name'
    }).addTo(map);
}


function addAddressSearchControl(map, markersLayer) {
    var searchMarker;
    L.Control.geocoder({
        defaultMarkGeocode: false,
        position: 'topleft',
        placeholder: 'Search by address',
        geocoder: L.Control.Geocoder.nominatim(),
    }).on('markgeocode', function (e) {
        var latlng = e.geocode.center;
        map.setView(latlng, 16); // Set the map view to the geocoded location
        // Remove previous marker and popup, if any
        if (searchMarker) {
            map.removeLayer(searchMarker);
        }

        searchMarker = L.marker(latlng).addTo(map); // Add a marker at the geocoded location
        if (e.geocode.raw && e.geocode.raw.icon) {
            var imageUrl = 'https://www.openstreetmap.org' + e.geocode.raw.icon; // Get the URL of the street view image
            var popupContent = '<img src="' + imageUrl + '" alt="Street View" style="width: 20;">';
            searchMarker.bindPopup(popupContent).openPopup(); // Bind the popup with the street view image and open it
        } else {
            searchMarker.bindPopup('No image available').openPopup(); // Fallback content if image is not available
        }

        // Remove marker and popup on double-click
        searchMarker.on('dblclick', function () {
            map.removeLayer(searchMarker);
            searchMarker = null;
        });

    }).addTo(map);
}

function addLocateMeControl(map, markersLayer) {
    L.control.locate({
        position: 'topright',
        strings: {
            title: "Locate me!"
        },
        flyTo: true,
        setView: 'untilPan',  //untilPan or always
        locateOptions: {
            enableHighAccuracy: true
        },
        maxZoom: function (map) {
            return Math.min(map.getZoom(), 1);
        }
    }).addTo(map);

    map.on('locationfound', function (e) {
        var latitude = e.latitude;
        var longitude = e.longitude;
        mycurrentLat = latitude;
        mycurrentLng = longitude;
        console.log('My Locations >\nLatitude:', mycurrentLat, 'Longitude:', mycurrentLng);
        // geocodeTracks(map, markersLayer);
    });


}

function populateMapWithMarkers(map, markersLayer) {
    school500.features
        .filter(f => f.properties['institu_name'])
        .forEach(f => {
            const coordinates = f.geometry.coordinates.slice().reverse();
            const tooltipData = {
                tobesearch: f.properties.institu_name,
            }
            const marker = L.marker(coordinates, tooltipData);

            const institu_name = f.properties['institu_name'] || "none";
            const institu_npsn = f.properties['institu_npsn'] || "none";
            const imgLogo = f.properties['institu_logo'] || "none";
            const institu_addr = f.properties['institu_address'] || "none";
            const institu_images = f.properties['institu_image'] || "none";
            const last_update = f.properties['updated_at'] || "never";


            continueTOprocess(institu_addr);
            function continueTOprocess(final_addr) {
                const isImgLogoExist = imgLogo.endsWith('.png') || imgLogo.endsWith('.jpg') ? imgLogo : '';
                const isImgsExist = institu_images.endsWith('.png') || institu_images.endsWith('.jpg') ? institu_images : '';
                const imgWidth = imgLogo.endsWith('.png') || imgLogo.endsWith('.jpg') ? '30' : '80';
                let content = `
                <!-- Modal: EditProfile / edit profile modal -->
                <div class="modal fade" id="editMarkModal" data-bs-backdrop="false" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <form class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="backDropModalTitle">Edit Mark</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="modal-body">
                                    <div class="col-md-12 col-md-6 mb-4 text-center mt-3">
                                        <h3 class=""><u class="cust-u">{{ env('APP_ALIAS') }}</u></h3>
                                    </div>
                                    <div class="row">
                                        <!-- Group Logo  -->
                                        <div class="col-xl-12 col-md-6 mb-4 justify-content-center">
                                            <div class="card border-left-primary shadow h-100 py-2">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-5 mr-1 Group3Logo">
                                                            <table>
                                                                <tr>
                                                                    <td
                                                                        class="d-flex align-content-sm-between justify-content-center align-middle">
                                                                        <img src="{{ asset('public/img/app_logo.ico') }}" alt="AppLogo"
                                                                            style="height: 83%; width: 62%">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="text-center text-xs font-weight-bold text-uppercase mb-1 mt-1 justify-content-center"
                                                                            style="color:#f6503b; font-size: 0.8rem;">
                                                                            <a><b>{{ env('APP_INSTITUTION') }}</b></a>
                                                                            <div
                                                                                class="text-center text-xs font-weight-lighter text-uppercase mb-1 mt-1">
                                                                                <a><i>{{ env('APP_PURPOSE') }}</i></a>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>

                                                        </div>
                                                        <div class="col-7">
                                                            <!-- <i class="fas fa-calendar fa-2x text-gray-300"></i> -->
                                                            <div class="text-md text-green font-weight-bold text-uppercase mb-1">
                                                                <a class="text-orange">
                                                                    Made By:
                                                                </a>
                                                            </div>

                                                            {{-- <style>
                                                                    .li-mem {
                                                                        font-size: small;
                                                                    }
                                                                    </style> --}}

                                                            @php
                                                                $groupMembersJson = env('GROUP_MEMBER');
                                                                $groupMembers = json_decode($groupMembersJson, true);
                                                            @endphp
                                                            @if (is_array($groupMembers))
                                                                <div class="cust-ul pl-0 ml-4 grad-txt-2 text-md">
                                                                    <div class="row">
                                                                        @foreach ($groupMembers as $member)
                                                                            <span class="li-mem" style="font-size: 0.8rem;">
                                                                                <i class="cust-j mdi mdi-drama-masks mdi-24px"></i>
                                                                                <i
                                                                                    class="fa-duotone mdi mdi-arrow-expand-right mdi-12px"></i>
                                                                                {{ $member[0] }}
                                                                            </span>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            @endif

                                                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="modal-footer">
                                {{-- <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button> --}}
                                <div class="d-flex flex-col justify-content-between">
                                    <button class="modal-mark-cancel-btn btn btn-primary me-2" data-bs-dismiss="modal">Cancel</button>
                                    <button class="modal-mark-remove-btn btn btn-secondary me-2">Remove</button>
                                    <button class="modal-mark-save-btn btn btn-success me-2">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


                <!-- / CONTENT: EDIT PROFILE -->

                `;

                marker.bindTooltip(institu_name + "  ➟  " + final_addr);
                marker.bindPopup(content);
                marker.options.popupText = marker._popup._content;
                markersLayer.addLayer(marker);


                // Handle the "Edit" button click event within the marker's popup
                marker.on('popupopen', function () {
                    $('#editMarkModal').modal('show');
                    var editButton = document.querySelector('.mark-edit-btn');
                    editButton.addEventListener('click', function () {
                        $('#editMarkModal').modal('show');
                        var modalSaveButton = document.querySelector('.modal-mark-save-btn');
                        if (modalSaveButton) {
                            modalSaveButton.addEventListener('click', function () {
                                $('#editMarkModal').modal('hide');
                                marker.setPopupContent(updatedPopupContent);
                            });
                        }
                        var modalRemoveButton = document.querySelector('.modal-mark-remove-btn');
                        if (modalRemoveButton) {
                            modalRemoveButton.addEventListener('click', function () {
                                markersLayer.removeLayer(marker);
                                marker.closePopup();
                                $('#editMarkModal').modal('hide');
                            });
                        }
                        var modalCancelButton = document.querySelector('.modal-mark-cancel-btn');
                        if (modalCancelButton) {
                            modalCancelButton.addEventListener('click', function () {
                                $('#editMarkModal').modal('hide');
                            });
                        }
                    });
                    var cancelButton = document.querySelector('.mark-cancel-btn');
                    cancelButton.addEventListener('click', function () {
                        if (cancelButton) {
                            marker.closePopup();
                        }
                    });

                });




            }

        });

    addSchoolnameSearchControl(map, markersLayer, 'tobesearch');
}



function addMarkerOnContextMenu(map, markersLayer) {
    map.on('contextmenu taphold', function (e) {
        var LAT = e.latlng.lat.toFixed(7);
        var LNG = e.latlng.lng.toFixed(7);
        var coordinates = {
            lat: LAT,
            lng: LNG
        };

        getAddressFromCoordinates(coordinates)
            .then(address => {
                // Define the addr components
                var componentKeys = [
                    { key: 'road', label: 'Jl.' },
                    { key: 'neighbourhood', label: 'Ling.' },
                    { key: 'hamlet', label: 'Dusun' },
                    { key: 'village', label: 'Desa' },
                    { key: 'suburb', label: 'Suburb' },
                    { key: 'city_district', label: 'Kec.' },
                    { key: 'town', label: 'Kota' },
                    { key: 'county', label: 'Kab.' },
                    { key: 'state_district', label: 'Wilayah' },
                    { key: 'city', label: 'Kota' },
                    { key: 'state', label: 'Prov.' },
                    { key: 'postcode', label: 'Kode Pos' },
                    { key: 'country', label: 'Negara' }
                ];

                var province = address['state'];
                var postcode = address['postcode'];
                var addressComponents = [];

                componentKeys.forEach(component => {
                    var key = component.key;
                    var label = component.label;

                    if (key === 'state') {
                        if (province && postcode) {
                            addressComponents.push(label + ' ' + province + ' (' + postcode + ')');
                        } else if (province) {
                            addressComponents.push(label + ' ' + province);
                        }
                    } else if (key !== 'postcode' && address[key]) {
                        if (label && address[key].toLowerCase().includes(label.toLowerCase())) {
                            addressComponents.push(address[key]);
                        } else {
                            addressComponents.push(label + ' ' + address[key]);
                        }
                    }
                });

                var fulladdr = addressComponents.join(', ');
                processIt(fulladdr);
                console.log(fulladdr);
            })
            .catch(error => {
                console.error('Error:', error.message);
            });

        function processIt(institu_addr) {
            const institu_name = "Untitled Marker";
            const institu_npsn = "fill data!";
            const imgLogo = imgu; // Corrected variable name
            const institu_images = imgu;
            const last_update = "never";

            const tooltipData = {
                tobesearch: institu_name
            };
            const marker = L.marker(new L.latLng([LAT, LNG]), tooltipData);

            const fromRightClick_PopupContent = `
                <div class='d-flex flex-column p-0'>
                    <span style='padding-bottom:2px;'><strong>Coordinates: </strong>${LAT}, ${LNG}<br></span>
                    <span style='padding-bottom:2px;'><strong>Name: </strong>${institu_name}<br></span>
                    <span style='padding-bottom:2px;'><strong>NPSN: </strong>${institu_npsn}<br></span>
                    <span style='padding-bottom:2px;'><strong>Logo: </strong>
                        <img src='${imgLogo}' alt='${institu_name} Logo' width='30'><br>
                    </span>
                    <span style='padding-bottom:2px;'><strong>Address: </strong>${institu_addr}<br></span>
                    <span class='d-flex flex-column align-top text-start' style='padding-bottom:2px;'><strong>Images:</strong>
                        <img src='${institu_images}' alt='${institu_name} Logo' width='80'><br>
                    </span>
                    <span style='padding-bottom:2px;'><strong>Last Update: </strong>${last_update}<br></span>
                    <div class='d-flex flex-col justify-content-between'>
                        <button class="mark-cancel-remove-btn mdi mdi-delete p-2 rounded-2"> Cancel & Remove</button>
                        <button class="mark-edit-btn mdi mdi-content-save-all p-2 rounded-2"> Edit & Save</button>
                    </div>
                </div>
            `;

            marker.bindTooltip(institu_name + "  ➟  " + institu_addr);
            marker.bindPopup(fromRightClick_PopupContent);
            marker.options.popupText = marker._popup._content;
            markersLayer.addLayer(marker);


            // Handle the "Edit" button click event within the marker's popup
            marker.on('popupopen', function () {
                var editButton = document.querySelector('.mark-edit-btn');
                editButton.addEventListener('click', function () {
                    $('#editMarkModal').modal('show');
                    var modalSaveButton = document.querySelector('.modal-mark-save-btn');
                    if (modalSaveButton) {
                        modalSaveButton.addEventListener('click', function () {
                            $('#editMarkModal').modal('hide');
                            marker.setPopupContent(updatedPopupContent);
                        });
                    }
                    var modalRemoveButton = document.querySelector('.modal-mark-remove-btn');
                    if (modalRemoveButton) {
                        modalRemoveButton.addEventListener('click', function () {
                            markersLayer.removeLayer(marker);
                            marker.closePopup();
                            $('#editMarkModal').modal('hide');
                        });
                    }
                    var modalCancelButton = document.querySelector('.modal-mark-cancel-btn');
                    if (modalCancelButton) {
                        modalCancelButton.addEventListener('click', function () {
                            $('#editMarkModal').modal('hide');
                        });
                    }
                });
                var cancelandRemoveButton = document.querySelector('.mark-cancel-remove-btn');
                cancelandRemoveButton.addEventListener('click', function () {
                    if (cancelandRemoveButton) {
                        marker.closePopup();
                        markersLayer.removeLayer(marker); // Remove the marker from the layer
                    }
                });

            });
        }

    });
}




// function addMarkerOnContextMenu(map, markersLayer) {
//     map.on('contextmenu taphold', function (e) {
//         var LAT = e.latlng.lat.toFixed(7);
//         var LNG = e.latlng.lng.toFixed(7);
//         var coordinates = {
//             lat: LAT,
//             lng: LNG
//         };

//         getAddressFromCoordinates(coordinates)
//             .then(address => {
//                 // Define the addr components
//                 var componentKeys = [
//                     { key: 'road', label: 'Jl.' },
//                     { key: 'neighbourhood', label: 'Ling.' },
//                     { key: 'hamlet', label: 'Dusun' },
//                     { key: 'village', label: 'Desa' },
//                     { key: 'suburb', label: 'Suburb' },
//                     { key: 'city_district', label: 'Kec.' },
//                     { key: 'town', label: 'Kota' },
//                     { key: 'county', label: 'Kab.' },
//                     { key: 'state_district', label: 'Wilayah' },
//                     { key: 'city', label: 'Kota' },
//                     { key: 'state', label: 'Prov.' },
//                     { key: 'postcode', label: 'Kode Pos' },
//                     { key: 'country', label: 'Negara' }
//                 ];

//                 var province = address['state'];
//                 var postcode = address['postcode'];
//                 var addressComponents = [];

//                 componentKeys.forEach(component => {
//                     var key = component.key;
//                     var label = component.label;

//                     if (key === 'state') {
//                         if (province && postcode) {
//                             addressComponents.push(label + ' ' + province + ' (' + postcode + ')');
//                         } else if (province) {
//                             addressComponents.push(label + ' ' + province);
//                         }
//                     } else if (key !== 'postcode' && address[key]) {
//                         if (label && address[key].toLowerCase().includes(label.toLowerCase())) {
//                             addressComponents.push(address[key]);
//                         } else {
//                             addressComponents.push(label + ' ' + address[key]);
//                         }
//                     }
//                 });

//                 var fulladdr = addressComponents.join(', ');
//                 processIt(fulladdr);
//                 console.log(fulladdr);
//             })
//             .catch(error => {
//                 console.error('Error:', error.message);
//             });

//         function processIt(institu_addr) {
//             const institu_name = "Untitled Marker";
//             const institu_npsn = "fill data!";
//             const imgLogo = imgu; // Corrected variable name
//             const institu_images = imgu;
//             const last_update = "never";

//             const tooltipData = {
//                 tobesearch: institu_name
//             };
//             const marker = L.marker(new L.latLng([LAT, LNG]), tooltipData);

//             const fromRightClick_PopupContent = `
//                 <div class='d-flex flex-column p-0'>
//                     <span style='padding-bottom:2px;'><strong>Coordinates: </strong>${LAT}, ${LNG}<br></span>
//                     <span style='padding-bottom:2px;'><strong>Name: </strong>${institu_name}<br></span>
//                     <span style='padding-bottom:2px;'><strong>NPSN: </strong>${institu_npsn}<br></span>
//                     <span style='padding-bottom:2px;'><strong>Logo: </strong>
//                         <img src='${imgLogo}' alt='${institu_name} Logo' width='30'><br>
//                     </span>
//                     <span style='padding-bottom:2px;'><strong>Address:</strong>${institu_addr}<br></span>
//                     <span class='d-flex flex-column align-top text-start' style='padding-bottom:2px;'><strong>Images:</strong>
//                         <img src='${institu_images}' alt='${institu_name} Logo' width='80'><br>
//                     </span>
//                     <span style='padding-bottom:2px;'><strong>Last Update: </strong>${last_update}<br></span>
//                     <div class='d-flex flex-col justify-content-between'>
//                         <button class="mark-cancel-btn mdi mdi-cancel p-2 rounded-2"> Cancel</button>
//                         <button class="mark-remove-btn mdi mdi-delete p-2 rounded-2"> Remove</button>
//                         <button class="mark-edit-btn mdi mdi-content-save-all p-2 rounded-2"> Edit & Save</button>
//                     </div>
//                 </div>
//             `;

//             marker.bindTooltip(institu_name + "  ➟  " + institu_addr);
//             marker.bindPopup(fromRightClick_PopupContent);
//             marker.options.popupText = marker._popup._content;
//             markersLayer.addLayer(marker);


//             marker.on('click', function () {
//                 var editButton = document.querySelector('.mark-edit-btn');
//                 editButton.addEventListener('click', function () {
//                     $('#editMarkModal').modal('show');
//                     var saveButton = document.querySelector('.modal-save-btn');
//                     if (saveButton) {
//                         saveButton.addEventListener('click', function () {
//                             $('#editMarkModal').modal('hide');
//                             marker.setPopupContent(updatedPopupContent);
//                         });
//                     }
//                     var cancelButton = document.querySelector('.mark-cancel-btn');
//                     if (cancelButton) {
//                         cancelButton.addEventListener('click', function () {
//                             $('#editMarkModal').modal('hide');
//                             marker.closePopup();
//                         });
//                     }
//                 });
//                 var cancelButton = document.querySelector('.mark-cancel-btn');
//                 cancelButton.addEventListener('click', function () {
//                     if (cancelButton) {
//                         marker.closePopup();
//                     }
//                 });
//                 var deleteButton = document.querySelector('.mark-remove-btn');
//                 deleteButton.addEventListener('click', function () {
//                     if (deleteButton) {
//                         markersLayer.removeLayer(marker); // Remove the marker from the layer
//                         marker.closePopup();
//                     }
//                 });
//             });








//         }
//     });

// }




function getAddressFromCoordinates(coordinates) {
    const url = `https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${coordinates.lat}&lon=${coordinates.lng}`;

    return fetch(url)
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            if (data && data.address) {
                const address = data.address;
                return address;
            } else {
                throw new Error('Address not found');
            }
        })
        .catch(error => {
            throw new Error('Error retrieving address');
        });
}


function printAddrToConsole(map) {
    map.on('click', function (e) {
        const coordinates = e.latlng;
        getAddressFromCoordinates(coordinates)
            .then(address => {
                console.log(address);
            })
            .catch(error => {
                console.error('Error:', error.message);
            });
    });
}





function geocodeTracks(map, markersLayer) {
    const showButton = L.Control.extend({
        options: {
            position: 'topright'
        },

        onAdd: function (map) {
            const container = L.DomUtil.create('div', 'leaflet-routing-show-button leaflet-bar leaflet-control');
            const button = L.DomUtil.create('a', 'leaflet-routing-show-button-icon', container);
            button.innerHTML = '<i class="mdi mdi-routes"></i>';
            button.href = '#';
            button.addEventListener('click', function () {
                const routingContainer = document.querySelector('.leaflet-routing-container');
                const hideButton = document.querySelector('.leaflet-routing-hide-button');
                if (routingContainer.style.display === 'block') {
                    routingContainer.style.display = 'none';
                    hideButton.style.display = 'none';
                    container.style.display = 'block';
                } else {
                    routingContainer.style.display = 'block';
                    hideButton.style.display = 'block';
                    container.style.display = 'none';
                }
            });
            return container;
        }
    });
    map.addControl(new showButton());

    tooltipData = `Tracks me`;
    const startingPointMarker = L.marker(new L.latLng([-6.2029824, 106.5811968]), tooltipData);
    const control = L.Routing.control({
        waypoints: [
            // L.latLng(mycurrentLat, mycurrentLng),
            L.latLng(-6.2029824, 106.5811968),
            L.latLng(-6.2029828, 106.5811978)
        ],
        routeWhileDragging: true,
        geocoder: L.Control.Geocoder.nominatim()
    }).addTo(map);

    const routingContainer = document.querySelector('.leaflet-routing-container');
    routingContainer.style.display = 'none'; // Hide the routing container initially

    const hideButton = document.createElement('button');
    hideButton.innerHTML = `
        <i class="mdi mdi-eye-off dark-mode" style="position: absolute; color: var(--bs-dark);"></i>
        <i class="mdi mdi-routes dark-mode" style="position: relative; z-index: 1; color: var(--bs-light);"></i>
    `;
    hideButton.classList.add('leaflet-routing-hide-button', 'leaflet-bar', 'leaflet-control');
    hideButton.style.marginTop = '0';
    hideButton.style.marginRight = '2.7px';
    hideButton.addEventListener('click', function () {
        routingContainer.style.display = 'none';
        hideButton.style.display = 'none';
        const showButton = document.querySelector('.leaflet-routing-show-button');
        showButton.style.display = 'block';
    });

    // const alternativesContainer = document.querySelector('.leaflet-routing-alternatives-container');
    // routingContainer.insertBefore(hideButton, alternativesContainer);

    const geocoderContainer = document.querySelector('.leaflet-routing-geocoder');
    geocoderContainer.parentNode.insertBefore(hideButton, geocoderContainer);


    // Apply custom scrollbar styles
    // routingContainer.style.overflow = 'auto';
    routingContainer.style.maxHeight = '100%'; // Adjust the maximum height as needed

    // Get all elements with the class "leaflet-routing-remove-waypoint". Clicking the [x] button each route input.
    const removeWaypointButtons = Array.from(document.querySelectorAll('.leaflet-routing-remove-waypoint'));
    const clickEvent = new Event('click');
    if (removeWaypointButtons[0]) {
        removeWaypointButtons[0].dispatchEvent(clickEvent);
    }
    if (removeWaypointButtons[1]) {
        removeWaypointButtons[1].dispatchEvent(clickEvent);
    }
}



// function geocodeTracks(map, markersLayer) {
//     tooltipData = `Tracks me`;
//     const startingPointMarker = L.marker(new L.latLng([-6.2029824, 106.5811968]), tooltipData);
//     L.Routing.control({
//         waypoints: [
//             // L.latLng(mycurrentLat, mycurrentLng),
//             L.latLng(-6.2029824, 106.5811968),
//             L.latLng(-6.2029828, 106.5811978)
//         ],
//         routeWhileDragging: true,
//     }).addTo(map);
// }

function testdialog(map) {

}

// The main function to initialize the map and its components
function initializeMapApp() {
    var map = initializeMap();
    var markersLayer = L.layerGroup();

    // addSchoolnameSearchControl(map, markersLayer);
    populateMapWithMarkers(map, markersLayer);
    addResetViewControl(map);
    addAddressSearchControl(map);
    addTileLayer(map);
    addLocateMeControl(map);
    addMarkerOnContextMenu(map, markersLayer);
    // printAddrToConsole(map);
    geocodeTracks(map, markersLayer);
    testdialog(map);
}




// Call the main function to initialize the map
initializeMapApp();
