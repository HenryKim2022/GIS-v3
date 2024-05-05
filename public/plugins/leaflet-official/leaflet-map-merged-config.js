
// /////////////////////////////////////////////////////////////////////////////
// /////    <!-- CUST SCRIPT: LEAFLET JS -->
// /////////////////////////////////////////////////////////////////////////////

//////////////// ALWAYS NEED1:
let map = new L.Map('map', {
    fullscreenControl: true,
    fullscreenControlOptions: {
        position: 'topleft'
    },
    gestureHandling: false
}).setView([-6.2226432, 106.5910272], 13);
//////////////// ENDOF: ALWAYS NEED1:                                        

//////////////// ALWAYS NEED2:
var appName = "GIS";
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: `Map data &copy; <a href="https://www.openstreetmap.org/">${appName}</a>`
}).addTo(map);
//////////////// ENDOF: ALWAYS NEED2:

//////////////// ALWAYS NEED3: LOCATE ME
L.control.locate({
    strings: {
        title: "Locate me!"
    }
}).addTo(map);
////////////////  ENDOF: ALWAYS NEED3: LOCATE ME

//////////////// ALWAYS NEED4: SEARCH MARKER
var markersLayer = new L.LayerGroup();	//layer contain searched elements
map.addLayer(markersLayer);
var controlSearch = new L.Control.Search({
    position: 'topright',
    layer: markersLayer,
    initial: false,
    zoom: 48,
    marker: false
});
map.addControl(controlSearch);

//sample data values for populate map
var imgu = "https://upload.wikimedia.org/wikipedia/commons/thumb/9/9c/Logo_of_Ministry_of_Education_and_Culture_of_Republic_of_Indonesia.svg/400px-Logo_of_Ministry_of_Education_and_Culture_of_Republic_of_Indonesia.svg.png";
var data = [
    { "loc": [-6.1753924, 106.8271528], "title": "School 1", "imgUrl": imgu },
    { "loc": [-6.2000000, 106.8166667], "title": "School 2", "imgUrl": imgu },
    { "loc": [-6.2146207, 106.8451301], "title": "School 3", "imgUrl": imgu },
    { "loc": [-6.2348972, 106.9899802], "title": "School 4", "imgUrl": imgu },
    { "loc": [-6.1714402, 106.8384527], "title": "School 5", "imgUrl": imgu },
    // Add more school locations with image URLs here
];

//// populate map with markers from sample data
for (i in data) {
    var title = data[i].title,
        loc = data[i].loc,
        imgUrl = data[i].imgUrl,
        marker = new L.Marker(new L.latLng(loc), { title: title });

    // Create a custom popup content with the title and image
    var popupContent = `
    <div>
        <h4 class="text-sm text-mute m-0"> ${title}: </h4>
        <a class="font-fs text-sm text-mute"> Lat:${loc[0]} | Lon: ${loc[1]}</a>
        <p>
            <div class="d-flex align-content-center align-items-center justify-content-around w-100">
                <img src="${imgUrl}" alt="${title} Image" width="50">
            </div>
        </p>
    </div>
    `;

    marker.bindPopup(popupContent);
    markersLayer.addLayer(marker);
}
//////////////// ENDOF: ALWAYS NEED4: SEARCH MARKER