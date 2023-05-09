<?php
include('connect.php');

session_start();
if (!isset($_SESSION['SESS_FIRST_NAME'])) {
    header("location: login.php");
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <?php
    $result = $db->prepare("SELECT * FROM site_settings WHERE id=1");
    $result->execute();
    for ($i = 0; $row = $result->fetch(); $i++) {
    ?>
        <title><?php echo $row['site_name']; ?></title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />
        <meta name="keywords" content="Traffic" />
        <meta name="description" content="<?php echo $row['site_desc']; ?>">
        <meta name="author" content="">

        <!-- Bootstrap core CSS     -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

        <!-- Animation library for notifications   -->
        <link href="assets/css/animate.min.css" rel="stylesheet" />

        <!--  Light Bootstrap Table core CSS    -->
        <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet" />


        <!--  CSS for Demo Purpose, don't include it in your project     -->
        <link href="assets/css/demo.css" rel="stylesheet" />

        <!-- Leaflet CSS -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
        <!-- Locate CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.79.0/dist/L.Control.Locate.min.css" />
        <!-- Routing CSS -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.css" />
        <!-- Geocoder CSS -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />

        <script src="assets/js/jeffartagame.js" type="text/javascript" charset="utf-8"></script>
        <script src="assets/js/jquery.js" type="text/javascript"></script>
        <script src="assets/js/facebox.js" type="text/javascript"></script>


        
        <!-- Leaflet JS -->
        <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
        <!-- Locate JS -->
        <script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.79.0/dist/L.Control.Locate.min.js" charset="utf-8"></script>
        <!-- Routing JS -->
        <script src="https://unpkg.com/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.js"></script>
        <!-- Geocoder JS -->
        <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>

        <!--     Fonts and icons     -->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
        <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>

<body>

    <div class="wrapper">
        <div class="sidebar" data-color="blue">



            <div class="sidebar-wrapper">
                <div class="logo">
                    <h3> Welcome to TMS </h3>-

                    <?php echo $row['site_name']; ?>

                    </a>
                </div>
            <?php } ?>
            <?php
            $position = $_SESSION['SESS_LAST_NAME'];
            if ($position == 'public') {
            ?>
                <ul class="nav">
                    <li class="">
                        <a href="index.php">
                            <i class="pe-7s-graph"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="report-offence.php">
                            <i class="pe-7s-look"></i>
                            <p>Report</p>
                        </a>
                    </li>

                    <li>
                        <a href="view-offence.php">
                            <i class="pe-7s-note2"></i>
                            <p>Offense List</p>
                        </a>
                    </li>

                    <li>
                        <a href="rules.php">
                            <i class="fa fa-legal"></i>
                            <p>Rules</p>
                        </a>
                    </li>


                    <li>
                        <a href="map.php">
                            <i class="pe-7s-map-marker"></i>
                            <p>view Maps</p>
                        </a>
                    </li>


                    <li>
                        <a href="user.php">
                            <i class="pe-7s-user"></i>
                            <p>Edit Profile</p>
                        </a>
                    </li>


                    <li>
                        <a href="site-settings.php">
                            <i class="pe-7s-tools"></i>
                            <p>Settings</p>
                        </a>
                    </li>



                </ul>
            <?php
            }
            if ($position == 'admin') {
            ?>
                <ul class="nav">
                    <li class="">
                        <a href="index.php">
                            <i class="pe-7s-graph"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="report-offence.php">
                            <i class="pe-7s-look"></i>
                            <p> Report</p>
                        </a>
                    </li>
                    <li>
                        <a href="view-offence.php">
                            <i class="pe-7s-note2"></i>
                            <p>Offense List</p>
                        </a>
                    </li>



                    <li>
                        <a href="sidebar.php">
                            <i class="fa fa-legal"></i>
                            <p>Rules</p>
                        </a>
                    </li>


                    <li>
                        <a href="add-user.php">
                            <i class="pe-7s-user"></i>
                            <p>Add User</p>
                        </a>
                    </li>
                    <li>
                        <a href="view-users.php">
                            <i class="pe-7s-news-paper"></i>
                            <p>User List</p>
                        </a>
                    </li>
                    <li>
                        <a href="map.php">
                            <i class="pe-7s-map-marker"></i>
                            <p>View Maps</p>
                        </a>
                    </li>




                    <li>
                        <a href="site-settings.php">
                            <i class="pe-7s-tools"></i>
                            <p>Settings</p>
                        </a>
                    </li>
                </ul>
            <?php
            }
            ?>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-default navbar-fixed">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <a href="index.php" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-dashboard"></i>
                                    <p class="hidden-lg hidden-md">Dashboard</p>
                                </a>
                            </li>

                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="user.php">
                                    <p>My Account</p>
                                </a>
                            </li>

                            <li>
                                <a href="logout.php">
                                    <p>Log out</p>
                                </a>
                            </li>
                            <li class="separator hidden-lg hidden-md"></li>
                        </ul>
                    </div>
                </div>
            </nav>