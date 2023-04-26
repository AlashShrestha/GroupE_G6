<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <!-- Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />

</head>

<body>
    <div class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <?php
                    if (isset($_SESSION['status'])) {
                    ?>
                        <div class="alert alert-success">
                            <h5><?= $_SESSION['status']; ?></h5>
                        </div>
                    <?php
                        unset($_SESSION['status']);
                    }
                    ?>

                    <div class="card">
                        <div class="card-header">
                            <h5>Change Password</h5>
                        </div>
                        <div class="card-body p-4">
                            <form action="password-reset-code.php" method="POST">
                                <div class="form-group mb-3">
                                    <label>Email Address</label>
                                    <input type="email" name="email" class="form-control" placeholder="Enter Email Address">
                                </div>
                                <div class="form-group mb-3">
                                    <label>New Password</label>
                                    <input type="password" name="new_password" class="form-control" placeholder="Enter New Password">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Confirm Password</label>
                                    <input type="password" name="confirm_password" class="form-control" placeholder="Enter Confirm Password">
                                </div>
                                <div class="form-group mb-3">
                                    <button type="submit" name="password_update" class="btn btn-success w-100">Update Password</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>