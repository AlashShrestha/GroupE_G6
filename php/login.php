<?php
include"connect.php";
?>


<!DOCTYPE html>
<html lang="en">
	

<!-- --><meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<?php 
	$result = $db->prepare("SELECT * FROM site_settings WHERE id=1");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>
		<title><?php echo $row['site_name']; ?></title>
		
	<?php }?>

				<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <style>
        h4 {
            color: #3E54AC;
        }

        h1 {
            color: black;
        }

        .content {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-content: center;
            align-items: center;
        }

        form {
            max-width: 800px;
            margin: auto;
            background: #fff;
            padding: 30px;
            border-radius: 40px;
            box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);

        }


        .input-field {
            border-radius: 10px;
            border: 3px solid #ced4da;
            padding: 12px 20px;
            margin-bottom: 20px;
            width: 100%;
            font-size: 1rem;
        }

        p {
            color: black;
        }

        /* rest of the CSS code */
    </style>
				</head>
				
<body>

<div class="vh-100">
        <div class="content"
            style="background-color: #0089ed;height: 50vh; position: relative;top:0; padding: 1rem; margin: 0;">
            <div class="col-5" style="box-sizing: border-box;">
                <h1 class="text-light"><b>Sign in to</b><br>Traffix!</h1>
                <p class="text-light">
                <img src="tms.png" alt="" width="400px"
                    style="position: absolute;bottom:0;overflow: hidden;margin-left:15rem">
            </div>
            <div class="row d-flex justify-content-center" style="position: relative;top: 175px;">
                <div class="col-12 col-md-7 col-lg-6">
                    <div class="card-body p-7">

                        <form action="login2.php" method="post" class="row border border-0 border-dark mx-0 my-0">

                           
                            <center><h1><sup style="font-size: 70%; color: blue;">TRAFFIX!</sup></h1></center>
                                

                            <div class="d-flex justify-content-end align-items-center">
                                <p class="me-2 mb-0">No account?</p>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="signup.php" class="text-primary fw-bold ms-2"
                                    style="padding: 5px 11px;">Sign up</a>

                            </div>
                            <h1>Sign in</h1>

                            <img src="traffic.jpg" alt="TRAFFIX logo" width="50" height="" style="margin-bottom: 20px;">


                            <div class="form-floating mb-1">

							<input type="text" class="form-control input-field" id="floatingInput"
                                    placeholder="Username" name="username" autocomplete="" required>

                                <label for="floatingInput" style="margin-left: 7px;">Username</label>
                                
                                    
                            </div>

                            <div class="form-floating mb-1">
							<input type="password" class="form-control input-field" id="floatingInput"
                                    placeholder="Password" name="pass" autocomplete="" required>

                                <label for="floatingInput" style="margin-left: 7px;">Password</label>
                                
                                   
                            </div>

                            <div class="container-fluid d-grid mb-4">
                                <button type="submit" class="btn btn-primary" name="submit">LOGIN</button>
                            </div>

                            <div class="container-fluid d-flex justify-content-center mb-1">
                                <a href="password-reset.php">Forgot Password?</a>
                            </div>

                        </form>
                    </div>
								<div class="copy">
								<?php 
	$result = $db->prepare("SELECT * FROM site_settings WHERE id=1");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>
									
	<?php } ?>
								</div>
							</body>
						

</html>