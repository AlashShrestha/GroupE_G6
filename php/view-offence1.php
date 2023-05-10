<?php include"sidebar.php"?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Offence Table</h4>
                                <p class="category">Here is a list of all Offences</p>
                            </div>
                            <div class="content table-responsive table-full-width">
							
							 <label for="filter"></label> <input type="text" name="filter" value="" id="myInput" placeholder="Search with offence ID" onkeyup="myFunction()"/>
   
   <script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
                                <table class="table table-hover table-striped" id="myTable">
                                    <thead>
                                        <th>Offence ID</th>
                                    	<th>Offence</th>
                                    	<th>Offender</th>
                                    	<th>Reporter</th>
                                    	<th>Address</th>
										
                                    </thead>
                                    <tbody>
									<?php 
	$result = $db->prepare("SELECT * FROM reported_offence ORDER BY id DESC");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>
                                        <tr>
										<td><?php echo $row['offence_id']; ?></td>
                                        	<td><a title="Click to view details" href="offence-detail.php?id=<?php echo $row['id']; ?>"><?php echo $row['offence']; ?></a></td>
                                        	<td><?php echo $row['name']; ?></td>
                                        	<td><?php echo $row['officer_reporting']; ?></td>
											<td><?php echo $row['address']; ?></td>
											<td><td><a rel="facebox" title="Click to edit view details" href="offence-detail.php?id=<?php echo $row['id']; ?>"><i class="fa fa-eye  fa-lg text-success"></i> </a>
			<a href="#" id="<?php echo $row['id']; ?>" class="delbutton" title="Click to Delete the Offense"><i class="fa fa-trash fa-lg text-danger"></i></a>
													</td>
                                        	
                                        </tr>
	<?php } ?>
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
                
                <p class="">
                    <script>document.write(new Date().getFullYear())</script> <a href=""></a>
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: ""

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>
	
 <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Sure you want to delete these!"))
		  {

 $.ajax({
   type: "GET",
   url: "delete-offence.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});

</script>
<script src="assets/js/script.js"></script>
</script>
</html>

