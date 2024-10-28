<?php include("../connection.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/8.0.0/mdb.umd.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                                            style="width: 185px;" alt="logo">
                                        <h4 class="mt-1 mb-5 pb-1">We are The Lotus Team</h4>
                                    </div>

                                    <form action="" method="post">
                                        <p>Please login to your account</p>

                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label class="form-label" for="form2Example11">Email</label>
                                            <input type="email" id="form2Example11" name="email" class="form-control"
                                                placeholder="email address" />

                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label class="form-label" for="form2Example22">Password</label>
                                            <input type="password" name="password" id="form2Example22"
                                                class="form-control" />

                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button data-mdb-button-init data-mdb-ripple-init name="loginbtn"
                                                class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                                                type="submit">Log
                                                in</button>

                                        </div>

                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">Don't have an account?</p>
                                            <a href="../Register/register.php" data-mdb-button-init data-mdb-ripple-init
                                                class="btn btn-outline-danger">Create new</a>
                                        </div>

                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">We are more than just a company</h4>
                                    <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                        do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<?php
session_start();
if (isset($_POST["loginbtn"])) {
    $email = $_POST["email"];
    $pass = $_POST["password"];

    $login = "SELECT * FROM `user` WHERE Email = '$email' and password = '$pass' and Role = 'Admin'";
    $run = mysqli_query($conn, $login);

    $login_user = "SELECT * FROM `user` WHERE Email = '$email' and password = '$pass' and Role = 'User'";
    $run_user = mysqli_query($conn, $login_user);

    if (mysqli_num_rows($run) == 1) {
        $data = mysqli_fetch_array($run);
        $_SESSION["id"] = $data[0];
        $_SESSION["uname"] = $data[1];
        $_SESSION["email"] = $data[2];

        echo "<script>alert('Login successfully');
            window.location.href='../admin/index.php'
        </script>";

    }
   else if(mysqli_num_rows($run_user) == 1) {
        $data = mysqli_fetch_array($run_user);
        $_SESSION["id"] = $data[0];
        $_SESSION["username"] = $data[1];
        $_SESSION["useremail"] = $data[2];

        echo "<script>alert('Login successfully');
            window.location.href='../user/index.php'
        </script>";

    }
    else {
        echo "<script>alert('Invalid credentials')</script>";
    }
}

?>


</html>