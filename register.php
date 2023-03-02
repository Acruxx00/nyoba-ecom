<?php
require 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> TOPER Registrasi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>TOPER Registrasi</title>
    <style>
        body {
            width: 100%;
            height: 100%;
            background-image: linear-gradient(to right, #5b247a, #1bcedf);
        }

        /* .navbar {
            background-color: #931A25;
        } */
    </style>
</head>

<body>

    <nav class="navbar">
        <div class="container-fluid d-flex justify-content-center">
            <a class="navbar-brand text-light fs-1" href="#"> TOPER</a>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-15 ">
                <div class="card position-absolute top-50 start-50 translate-middle bg-light-emphasis" style="width: 20rem;">
                    <div class="card-header"> <strong>Regitrasi </strong></div>
                    <div class="card-body">
                        <form action="register-aksi.php" method="post">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <i class="bi bi-person"></i>
                                    </div>
                                    <input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
                                </div>
                                <br>
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <i class="bi bi-envelope-at"></i>
                                    </div>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                                </div>
                                <br>
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <i class="bi bi-lock"></i>
                                    </div>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                                </div>
                                <br>
                            </div>
                            <button type="submit" name="submit" class="btn btn-dark text-Light bg-primary">Registrasi</button>
                        </form>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h6>Sudah Punya Akun?</h6>
                                <a href="index.php" class="btn btn-dark text-light bg-secondary">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src=""></script>
</body>

</html>