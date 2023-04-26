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

        body {
            background-color: #3E54AC;
        }

        .container {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        form {
            max-width: 900px;
            margin: auto;
            background: #ECF2FF;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }


        .input-field {
            border-radius: 5px;
            border: 1px solid #ced4da;
            padding: 12px 20px;
            margin-bottom: 20px;
            width: 100%;
            font-size: 1rem;
        }
    </style>

</head>

<body>



    </div>

    <div class="vh-100 d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">

                    <div class="card-body p-9">



                        <form action="login.php" method="post" class="row border border-3 border-dark mx-0 my-0">

                            <div class=" container-fluid h1 text-center mb-5">TMS</div>


                            <div class="form-floating mb-3">
                                <input type="email" class="form-control input-field" id="floatingInput" placeholder="name@example.com" name="email" autocomplete="email" required>
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" autocomplete="on" required>
                                <label for="floatingPassword">Password</label>
                            </div>
                            <div class="container-fluid d-grid mb-4">
                                <button type="submit" class="btn btn-primary" name="submit">LOGIN</button>
                            </div>




                            <div class="container-fluid d-flex justify-content-center mb-3">
                                <a href="">Forgot Password?</a>
                            </div>
                            <div class="container-fluid d-flex justify-content-center mb-3">
                                Don't have an account? <a href="signuppage.php" class="text-primary fw-bold">Sign Up</a>
                            </div>

                        </form>
                    </div>
                    <!-- Bootstrap JS -->
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>