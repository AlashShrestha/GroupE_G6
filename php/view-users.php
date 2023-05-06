<?php include"sidebar.php"?>
        <div class="content">
            <div class="container-fluid">
			
							
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">User Table</h4>
                                <p class="category">Here is a list of all users</p>
                            </div>
							<div class="content table-responsive table-full-width">
							<table class="table table-hover table-striped" id="myTable">
							 <label for="filter"></label> <input type="text" name="filter" value="" id="myInput" placeholder="Search with Username" onkeyup="myFunction()"/>
   
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
    td = tr[i].getElementsByTagName("td")[2];
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
   
                                    <thead>
                                        <th>User ID</th>
                                    	<th>Name</th>
                                    	<th>Username</th>
                                    	<th>Email</th>
                                    	<th>User-type</th>
										<th>Action</th>
                                    </thead>
                                   <tbody>
								   <?php 
	$result = $db->prepare("SELECT * FROM user ORDER BY id DESC");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){

                                       echo' <tr>';
                                        	echo'<td>'.$row['user_id'].'</td>'; 
                                        	echo'<td>'.$row['name'].'</td>';
                                        	echo'<td>'.$row['username'].'</td>';
                                        	echo'<td>'.$row['email'].'</td>';
                                        	echo'<td>'.$row['position'].'</td>';
											echo'<td><a  href="#" id="'.$row['id'].'" class="delbutton" title="Click to Delete the user"><i class="fa fa-trash fa-lg text-danger"></i></a></td>';
                                        	echo'</tr>';
	}?>
                                     </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
<?php include "footer.php"; ?>