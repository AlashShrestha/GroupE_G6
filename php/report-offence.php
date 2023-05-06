<?php include"sidebar.php"; ?>
   <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Report an Offense</h4>
                            </div>
							<?php if(get("success")):?>
                                            <div>
                                               <?=App::message("success", "Successfully Reported!")?>
                                            </div>
                                            <?php endif;?>
<div class="content">
							    <form  action="save-reported.php" method="post">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Offense ID</label>
                                                <input type="text" name="offence_id" class="form-control" placeholder="Offense ID" value="<?php 
$prefix= md5(time()*rand(1, 2)); echo strip_tags(substr($prefix ,0,6));?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Vehicle plate No.</label>
                                                <input type="text" name="vehicle_no" class="form-control" placeholder="Vehicle plate No." >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Driver's License</label>
                                                <input type="text" name="driver_license"  class="form-control" placeholder="Driver's License">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Driver's Name</label>
                                                <input type="text" name="name" class="form-control" placeholder="Driver's Name">
                                            </div>
                                        </div>
                                     </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" name="address"  class="form-control" placeholder="Address of Incident" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Gender</label>
                                                 <select class="form-control" name="gender" >
  <option value="Male">Male</option>
  <option value="Female">Female</option>
</select> 
                                            </div>
                                        </div>
										<?php 
							  $user=$_SESSION['SESS_MEMBER_ID'];
	$result = $db->prepare("SELECT id,username,email,name,address FROM user WHERE id='$user'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>
		
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label> Reported by </label>
                                                <input type="text" name="officer_reporting"  class="form-control" placeholder="Officer Name" value="<?php echo $row['username']; ?>" readonly>
                                            </div>
                                        </div>
	<?php }?>
                                    </div>
 <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Offense</label>
<select class="form-control" name="offence" >
  <option selected disabled>..Choose Offense Type..</option>
               
            <option value="Drinking & Driving">Drinking & Driving</option>
             <option value="Dangerous Driving">Dangerous Driving</option>
            <option value="Driver's License Violation">Driver's License Violation</option>
            <option value="Speed Limit violation">Speed Limit violation</option>
            <option value="Under age driving">Under age driving</option>
            <option value="Other offences and violation">Other offences and violation</option>
</select>
</select>                                                 
												</div>
                                        </div>
                                    </div>
                                   <button type="submit" class="btn btn-info btn-fill pull-right">Report Offence</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                     
                    </div>

                </div>
            </div>
        </div>


        <?php include"footer.php"; ?>