// var restaurant500 = {
//     "type": "FeatureCollection",
//     "generator": "overpass-turbo",
//     "copyright": "The data included in this document is from www.openstreetmap.org. The data is made available under ODbL.",
//     "timestamp": "2015-08-09T15:09:02Z",
//     "features": [
//       {
//         "type": "Feature",
//         "id": "node/252601050",
//         "properties": {
//           "@id": "node/252601050",
//           "amenity": "restaurant",
//           "cuisine": "chinese",
//           "name": "Hang Zhou"
//         },
//         "geometry": {
//           "type": "Point",
//           "coordinates": [
//             12.4994694,
//             41.8957882
//           ]
//         }
//       },
//     ]
// };


// /////////////////////////////////////////////////////////////////////////////
// /////    <!-- CUST SCRIPT: LEAFLET JS -->
// /////////////////////////////////////////////////////////////////////////////
var imgu = "public/plugins/leaflet-official/data.geojson.json/img/tutwuri.png";
var markersLayer = L.layerGroup().addTo(map);
var controlSearch;


function initializeMap() {
    var map = new L.Map('map', {
        fullscreenControl: true,
        fullscreenControlOptions: {
            position: 'topleft'
        },
        gestureHandling: false
    }).setView([-3.4763993, 115.2211498], 4.50);

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

function addSearchControl(map, markersLayer) {
    controlSearch = new L.Control.Search({
        layer: markersLayer,
        propertyName: 'institu_name',
        marker: false,
        initial: false,
        zoom: 48,
        position: 'topleft',
        propertyName: 'popupText',
        moveToLocation: function(latlng, title, map) {
          var zoom = map.getBoundsZoom(latlng.layer.getBounds());
          map.setView(latlng, zoom);
        },
        filterData: function(text, records) {
          var filteredRecords = [];
          for (var i = 0; i < records.length; i++) {
            var record = records[i];
            if (record.layer && record.layer.feature && record.layer.feature.properties) {
              var properties = record.layer.feature.properties;
              if (properties.institu_name.toLowerCase().includes(text.toLowerCase())) {
                filteredRecords.push(record);
              }
            }
          }
          return filteredRecords;
        },
        autoCollapse: true,
        autoType: false
      });
    map.addControl(controlSearch);

}

function addLocateControl(map) {
    L.control.locate({
        position: 'topright',
        strings: {
            title: "Locate me!"
        },
        flyTo: true,
        setView: 'always',
        maxZoom: function (map) {
            return Math.min(map.getZoom(), 1);
        }
    }).addTo(map);

}

function populateMapWithMarkers(map, imgUrl, markersLayer) {
    // Menggunakan fetch untuk memuat file JSON
    fetch('public/plugins/leaflet-official/data.geojson.json/data.v1.json')
        .then(response => response.json())
        .then(geojsonData => {
            geojsonData.features.forEach(feature => {
                var coordinates = feature.geometry.coordinates.slice(); // Salin array koordinat
                var marker = L.marker(coordinates.reverse()).addTo(markersLayer);

                var logoUrl = '/' + feature.properties.institu_logo;
                var imageUrl = '/' + feature.properties.institu_image;

                marker.bindPopup(`
                    <h3>${feature.properties.institu_name}</h3>
                    <p>${feature.properties.institu_category}</p>
                    <p>${feature.properties.institu_address}</p>
                    <img src="${logoUrl}" alt="Logo" height="50" width="50">
                    <img src="${imageUrl}" alt="Image" height="200" width="200">
                `);
            });

            console.log('Success to load geojson.json :)');
        })
        .catch(error => {
            console.log('Error:', error);
        });


}

function addMarkerOnContextMenu(map, markersLayer) {
    map.on('contextmenu taphold', function (e) {
        var LAT = e.latlng.lat.toFixed(7);
        var LNG = e.latlng.lng.toFixed(7);
        var title = 'New Marker',
            address = 'Fill the address',
            imgUrl = imgu,
            fromRightClick_PopupContent = `
                    <div>
                        <h4 class="text-sm text-mute m-0">
                            <div class="d-flex align-content-center align-items-center justify-center w-100">
                                <img src="${imgUrl}" alt="" width="20" style="margin-right: 0.2rem;">
                                <span>${title}:</span>
                            </div>
                        </h4>
                        <a class="font-fs text-sm text-mute"> Lat:${LAT} | Lon: ${LNG}</a>
                        <p>
                            <div class="d-flex align-content-center align-items-center justify-content-around w-100">
                                <img src="${imgUrl}" alt="${title} Logo" width="80">
                                <a>Address: ${address}</a>
                            </div>
                        </p>
                        <button class="mark-edit-btn">Edit</button>
                    </div>
                `;

        var marker = new L.Marker(new L.latLng([LAT, LNG]), { title: title });
        marker.bindPopup(fromRightClick_PopupContent);
        markersLayer.addLayer(marker);
        console.log("New marker added at Lat: " + LAT + " | Lon: " + LNG);
        // Remove the existing search control
        map.removeControl(controlSearch);
        // Create a new search control with the updated markersLayer
        addSearchControl(map, markersLayer);
    });
}

// The main function to initialize the map and its components
function initializeMapApp() {
    var map = initializeMap();
    map.addLayer(markersLayer);

    addSearchControl(map, markersLayer);
    populateMapWithMarkers(map, imgu, markersLayer);
    addResetViewControl(map);
    addTileLayer(map);
    addLocateControl(map);
    addMarkerOnContextMenu(map, markersLayer);
}

// Call the main function to initialize the map
initializeMapApp();
