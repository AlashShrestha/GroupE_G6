<?php include "sidebar.php";?>
<!-- Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
<!-- Routing CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.css" />
    <!-- Geocoder CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
    <!-- Leaflet JS -->
  

<style>
#map {
    position: absolute;
    height: 80vh;
    width: 80vw;
    margin-left: 30px;
    margin-top: 30px;
  }
  </style>

<div id="map" class="container map"></div>
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
    <!-- Locate JS -->
    <script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.79.0/dist/L.Control.Locate.min.js" charset="utf-8"></script>
    <!-- Routing JS -->
    <script src="https://unpkg.com/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.js"></script>
    <!-- Geocoder JS -->
    <!-- <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script> -->
<script>
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
// L.Control.geocoder({
//   collapsed: false,
//   position: "topleft",
// }).addTo(map);
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

L.Control.geocoder({
  collapsed: false,
  position: "topright",
}).addTo(map);

L.Routing.control({
  waypoints: [L.latLng(27.71228, 85.33076), L.latLng(27.672968, 85.429291)],
  routeWhileDragging: true,
  geocoder: L.Control.Geocoder.nominatim(),
}).addTo(map);
    </script>
<?php include "footer.php"; ?>