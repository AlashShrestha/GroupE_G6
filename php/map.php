<?php include "sidebar.php"; ?>

<style>
  #map {
    position: absolute;
    height: 85vh;
    width: 80vw;
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
    collapsed: false,
    position: "topright",
  }).addTo(map);
</script>
<?php include "footer.php"; ?>