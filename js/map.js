var map = L.map("map", {
  center: [27.71228, 85.33076],
  zoom: 12,
  zoomControl: false,
});

var google = L.tileLayer("http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}", {
  maxZoom: 20,
  subdomains: ["mt0", "mt1", "mt2", "mt3"],
});
google.addTo(map);

setInterval(() => {
  navigator.geolocation.getCurrentPosition(getPosition);
}, 10000);

function getPosition(position) {
  console.log(position);
  var lat = position.coords.latitude;
  var long = position.coords.longitude;
  var accuracy = position.coords.accuracy;
  var marker = L.marker([lat, long]);
  var circle = L.circle([lat, long], { radius: 50 });

  var featureGroup = L.featureGroup([marker, circle]).addTo(map);
  map.fitBounds(featureGroup.getBounds());
  console.log("Your coordinate is " + lat + long + " with " + accuracy);
}
