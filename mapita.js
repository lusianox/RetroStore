var map = L.map('map').setView([-34.648242,-58.623203], 6);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

// - - - MARCADOR EN EL MAPA - - -
var marcador = L.circleMarker(L.latLng(-34.648242,-58.623203),{
    radius: 10,
    fillColor: "red",
    color: "red",
    weight: 2,
    opacity: 1,
    fillOpacity: 0.6,
}).addTo(map);