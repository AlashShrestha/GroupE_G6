map = L.map("map", {
  center: [27.71228, 85.33076],
  zoom: 15,
  zoomControl: false,
});
L.control
  .zoom({
    position: "bottomright", 
  })
  .addTo(map);
// google = L.tileLayer("http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}", { 
  maxZoom: 20,
  //subdomains: ["mt0", "mt1", "mt2", "mt3"],
// });
google.addTo(map);
L.control
  .locate({
    position: "bottomright",
  })
  .addTo(map);
