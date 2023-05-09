
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Traffix</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
	<meta name="keywords" content="Traffic" />
	<meta name="description" content="Welcome to Traffix Dashboard ">
	<meta name="author" content="">
	
    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />
	
    <script src="assets/js/jeffartagame.js" type="text/javascript" charset="utf-8"></script>
    <script src="assets/js/lib/jquery.js" type="text/javascript"></script>
<script src="assets/js/facebox.js" type="text/javascript"></script>


<script src="js/application.js" type="text/javascript" charset="utf-8"></script>

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="assets/img/sidebar-5.jpg">

  

    	<div class="sidebar-wrapper">
            <div class="logo">
              <h3> Welcome to TMS </h3>-
               
                    Traffix                    
                </a>
            </div>
	  <ul class="nav">
                <li class="">
                    <a href="">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
				 <li>
                    <a href="">
                        <i class="pe-7s-look"></i>
                        <p>View Report</p>
                    </a>
                </li>
               <li>
                    <a href="">
                        <i class="pe-7s-note2"></i>
                        <p>Offense List</p>
                    </a>
                </li>

                <li>
                    <a href="">
                            <i class="fa fa-credit-card"></i>
                            <p>payment</p>
                        </a>
                    </li>

				<li>
                    <a href="">
                        <i class="pe-7s-user"></i>
                        <p>Add User</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="pe-7s-news-paper"></i>
                        <p>User List</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="pe-7s-map-marker"></i>
                        <p>view Maps</p>
                    </a>
                </li>
                

               <li>
                    <a href="">
                        <i class="pe-7s-tools"></i>
                        <p>Settings</p>
                    </a>
                </li>
			 </ul>
			     	</div>
    </div>
	 <div class="main-panel">
		
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
                       
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">List of Payment </h4>
                                <p class="category">Status</p>
                            </div>
                            <div class="content table-responsive table-full-width">
							
							 <label for="filter"></label> <input type="text" name="filter" value="" id="myInput" placeholder="Search with offence ID" onkeyup="myFunction()"/>
 
                                <table class="table table-hover table-striped" id="myTable">
                                    <thead>
                                       
                                        <th>Offence ID</th>
                                    	<th>Offence</th>
                                        <th>Date</th>
                                    	<th>Name</th>
                                    	<th>Address</th>
                                    	
										<th>Status</th>
                                    </thead>
                                    <tbody>
									                                        <tr>
										<td>672ee0</td>
                                        	<td><a title="Click to view details" href="offence-detail.php?id=5">Other offences and violation</a></td>
                                        	<td>2022-05-6</td>
                                            <td>viratkohli</td>
                                        	
											<td>Balwatar,ktm</td>
                                            <td>Paid</td>
											<td><td><a rel="facebox" title="Click to edit view details" href="offence-detail.php?id=5"><i class="fa fa-eye  fa-lg text-success"></i> </a>
			<a href="#" id="5" class="delbutton" title="Click to Delete the Offense"><i class="fa fa-trash fa-lg text-danger"></i></a>
													</td>
                                        	
                                        </tr>
	                                        <tr>
										<td>209cd5</td>
                                        	<td><a title="Click to view details" href="offence-detail.php?id=4">Driver's License Violation</a></td>
                                        	<td>2022-05-1</td>
                                            <td>Alash Magar</td>
                                        	
											<td>Putalisadak</td>
                                            <td>Unpaid</td>
											<td><td><a rel="facebox" title="Click to edit view details" href="offence-detail.php?id=4"><i class="fa fa-eye  fa-lg text-success"></i> </a>
			<a href="#" id="4" class="delbutton" title="Click to Delete the Offense"><i class="fa fa-trash fa-lg text-danger"></i></a>
													</td>
                                        	
                                        </tr>
	                                        <tr>
										<td>60b837</td>
                                        	<td><a title="Click to view details" href="offence-detail.php?id=3">Under age driving</a></td>
                                        	<td>2022-05-2</td>
                                            <td>Dikesh Chamling rai</td>
                                        	
											<td>Kappan</td>
                                            <td>Paid</td>
											<td><td><a rel="facebox" title="Click to edit view details" href="offence-detail.php?id=3"><i class="fa fa-eye  fa-lg text-success"></i> </a>
			<a href="#" id="3" class="delbutton" title="Click to Delete the Offense"><i class="fa fa-trash fa-lg text-danger"></i></a>
													</td>
                                        	
                                        </tr>
	                                        <tr>
										<td>3ce46b</td>
                                        	<td><a title="Click to view details" href="offence-detail.php?id=2">Speed Limit violation</a></td>
                                        	<td>2022-05-4</td>
                                            <td>Rohit Karki</td>
                                        	
											<td>Hadigaun</td>
                                            <td>UnPaid</td>
											<td><td><a rel="facebox" title="Click to edit view details" href="offence-detail.php?id=2"><i class="fa fa-eye  fa-lg text-success"></i> </a>
			<a href="#" id="2" class="delbutton" title="Click to Delete the Offense"><i class="fa fa-trash fa-lg text-danger"></i></a>
													</td>
                                        	
                                        </tr>
	                                    </tbody>
                                </table>

								
    </div>
  </div>
  
								
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
		   <footer class="footer">
            <div class="container-fluid">
                
               
              
            </div>
        </footer>

    </div>
</div>

<?php include "footer.php"; ?>
</body>

   
</html>
