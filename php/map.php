<?php include "sidebar.php"; ?>

<style>
  #map {
    position: absolute;
    height: 90vh;
    width: 85vw;
    margin-left: 20px;
    margin-top: 20px;
  }
</style>

<div id="map" class="container map"></div>

<script>
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

  L.Control.geocoder({
    collapsed: true,
    position: "topleft",
  }).addTo(map);
</script>
<?php include "footer.php"; ?>