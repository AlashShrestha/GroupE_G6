<!DOCTYPE html>

<head>
   <meta charset="utf-8">
   <title>Responsive Navigation Menu</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Leaflet CSS -->
   <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
   <!-- Locate CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.79.0/dist/L.Control.Locate.min.css" />
   <!-- Routing CSS -->
   <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.css" />
   <!-- Geocoder CSS -->
   <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
   <link rel="stylesheet" href="/GroupE_G6/css/home.css">
</head>

<body>
   <nav>

      <div class="logo">
         TMS
      </div>

      <input type="checkbox" id="click">
      <label for="click" class="menu-btn">
         <i class="fas fa-bars"></i>
      </label>
      <ul>
         <li><a class="active" href="#">Home</a></li>
         <li><a href="#">Account</a></li>
         <li><a href="loginpage.php">Settings</a></li>
         <li><a href="#">About us</a></li>
         <li><a href="#">Help</a></li>
      </ul>
   </nav>
   <div id="map" class="container-fluid content"></div>
</body>
<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
<!-- Locate JS -->
<script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.79.0/dist/L.Control.Locate.min.js" charset="utf-8"></script>
<!-- Routing JS -->
<script src="https://unpkg.com/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.js"></script>
<!-- Geocoder JS -->
<script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
<script src="/GroupE_G6/js/map.js"></script>

</html>