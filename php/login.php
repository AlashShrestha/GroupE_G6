<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>loginpage</title>
    <!-- Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        h4 {
            color: #3E54AC;
        }

        body {
            background: #0089ed;

        }

        h1 {
            color: black;
        }

        .container {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        form {
            max-width: 800px;
            margin: auto;
            background: #fff;
            padding: 30px;
            border-radius: 40px;


        }


        .input-field {
            border-radius: 10px;
            border: 3px solid #ced4da;
            padding: 12px 20px;
            margin-bottom: 20px;
            width: 100%;
            font-size: 1rem;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        p {
            color: black;
        }

        /* rest of the CSS code */
    </style>

</head>

<body>
    </div>

    <div class="vh-100 d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-11 col-md-7 col-lg-5">

                    <div class="card-body p-9">
                        <form action="loginpage.php" method="post" class="row border border-0 border-dark mx-0 my-0">

                            <center> <em>
                                    <h4>Welcome to TRAFFIX!</h4>
                                </em></center>

                            <div class="d-flex justify-content-end align-items-center">
                                <p class="me-2 mb-0">No account?</p>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="signuppage.php" class="text-primary fw-bold ms-2" style="padding: 5px 11px;">Sign up</a>

                            </div>
                            <h1>Sign in</h1>

                            <img src="/GroupE_G6/image/traffic.jpg" alt="TRAFFIX logo" width="50" height="" style="margin-bottom: 20px;">


                            <div class="form-floating mb-1">


                                <input type="text" class="form-control input-field" id="floatingInput" placeholder="name" name="username" required>

                                <label for="floatingInput" style="margin-left: 7px;">Username</label>
                            </div>

                            <div class="form-floating mb-1">

                                <input type="text" class="form-control input-field" id="floatingInput" name="pass" required>

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
</body>

</html>

<!-- Bootstrap