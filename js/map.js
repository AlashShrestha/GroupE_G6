// Defining lattitude, longitude, zoom level and zoomControl setting for map
var map = L.map("map", {
  center: [27.71228, 85.33076],
  zoom: 15,
  zoomControl: false,
});
// Changing the position of zoomControl to bottom right
L.control
  .zoom({
    position: "bottomright",
  })
  .addTo(map);
// Adding Google Maps Layer in the map
google = L.tileLayer("http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}", {
  maxZoom: 20,
  subdomains: ["mt0", "mt1", "mt2", "mt3"],
});
google.addTo(map);
// Changing the position of locate to bottom right
L.control
  .locate({
    position: "bottomright",
  })
  .addTo(map);
// Adding Search feature
L.Control.geocoder({
  collapsed: false,
  position: "topleft",
}).addTo(map);
// Defining lattitude, longitude, zoom level and zoomControl setting for map
var map = L.map("map", {
  center: [27.71228, 85.33076],
  zoom: 15,
  zoomControl: false,
});
L.Routing.control({
  waypoints: [L.latLng(27.71228, 85.33076), L.latLng(27.672968, 85.429291)],
}).addTo(map);
// Changing the position of zoomControl to bottom right
L.control
  .zoom({
    position: "bottomright",
  })
  .addTo(map);
// Adding Google Maps Layer in the map
google = L.tileLayer("http://%7Bs%7D.google.com/vt/lyrs=m&x=%7Bx%7D&y=%7By%7D&z=%7Bz%7D", {
  maxZoom: 20,
  subdomains: ["mt0", "mt1", "mt2", "mt3"],
});
google.addTo(map);
// Changing the position of locate to bottom right
L.control
  .locate({
    position: "bottomright",
  })
  .addTo(map);
if (navigator.geolocation) {
  navigator.geolocation.getCurrentPosition(showPosition);
} else {
  alert("Geolocation is not supported by this browser.");
}
L.Control.geocoder({
  collapsed: false,
  position: "topright",
}).addTo(map);

L.Routing.control({
  waypoints: [L.latLng(27.71228, 85.33076), L.latLng(27.672968, 85.429291)],
  routeWhileDragging: true,
  geocoder: L.Control.Geocoder.nominatim(),
}).addTo(map);