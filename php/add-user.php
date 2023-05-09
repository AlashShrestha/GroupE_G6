<?php include"sidebar.php"; ?>
   <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add User</h4>
                            </div>
							<?php if(get("success")):?>
                                            <div>
                                               <?=App::message("success", "New User added Successfully!")?>
                                            </div>
                                            <?php endif;?>
                            <div class="content">
                                <form action="saveuser.php" method="post">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>User ID</label>
                                                <input type="text" name="user_id" class="form-control" placeholder="Company" value="<?php 
$prefix= md5(time()*rand(1, 2)); echo strip_tags(substr($prefix ,0,10));?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" name="username"  class="form-control" placeholder="Username" ">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Password</label>
                                                <input type="password" name="pass"  class="form-control" placeholder="Password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" name="email"  class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Full Name</label>
                                                <input type="text" name="name"  class="form-control" placeholder="Full Name">
                                            </div>
                                        </div>
                                       
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" name="address"  class="form-control" placeholder="Home Address" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                    
                                       
										  <div class="col-md-12">
                                            <div class="form-group">
                                                <label>User Type</label>
                                                 <select class="form-control" name="position" >
  <option value="admin">Administrator</option>
  <option value="public">Public</option>

</select> 
                                            </div>
                                        </div>
                                       
                                    </div>
         <button type="submit" class="btn btn-info btn-fill pull-right">Create User</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                       

                </div>
            </div>
        </div>


        <?php include"footer.php"; ?>