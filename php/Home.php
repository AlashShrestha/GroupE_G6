<!DOCTYPE html>

   <head>
      <meta charset="utf-8">
      <title>Responsive Navigation Menu</title>
      <!-- <link rel="stylesheet" href="style.css"> -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
      <link rel="stylesheet" href="\css\home.php">
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
            <li><a href="#">Settings</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Help</a></li>
         </ul>
      </nav>
      <!-- <div id="map" class="container-fluid"></div> -->
   </body>
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
<script src="map.js"></script>
</html>
