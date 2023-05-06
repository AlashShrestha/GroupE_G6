<?php include"sidebar.php"; ?>
   <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">App Settings</h4>
                            </div>
							<?php if(get("success")):?>
                                            <div>
                                               <?=App::message("success", "App Settings updated Successfully!")?>
                                            </div>
                                            <?php endif;?>
                            <div class="content">
							<?php 
	$result = $db->prepare("SELECT * FROM site_settings WHERE id=1");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>
                                 <form action="save-settings.php" method="post">
								<div class="row">
                                       <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Site Name</label>
                                                <input type="text" name="site_name" class="form-control" placeholder="Username" value="<?php echo $row['site_name']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Site Discription</label>
                                                <input type="text" name="site_desc" class="form-control" placeholder="Site Discription" value="<?php echo $row['site_desc']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $row['email']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Phone </label>
                                                <input type="text" class="form-control" name="phone" placeholder="Phone" value="<?php echo $row['phone']; ?>">
                                            </div>
                                        </div>
                                       
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" name="address" class="form-control" placeholder="Home Address" value="<?php echo $row['address']; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>City</label>
                                                <input type="text" name="city" class="form-control" placeholder="City" value="<?php echo $row['city']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <input type="text" name="country" class="form-control" placeholder="Country" value="<?php echo $row['country']; ?>">
                                            </div>
                                        </div>
										  <?php } ?>
                                       
                                    </div>
         <button type="submit" class="btn btn-info btn-fill pull-right">Save Settings</button>
                                    <div class="clearfix"></div>
	
                                </form>
                            </div>
                        </div>
                    </div>
                       

                </div>
            </div>
        </div>


        <?php include"footer.php"; ?>