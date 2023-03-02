<?php
// require "config/functions.php";

// if (isset($_SESSION["login"])) {
//     header("Location: dashboard.php");
// }

// if (isset($_POST["submit"])) {
//     $username = $_POST["username"];
//     $password = $_POST["password"];

//     $result = mysqli_query($conn, "SELECT * FROM tb_users WHERE username = '$username'");

//     // cek username
//     if (mysqli_num_rows($result) === 1) {
//         // cek password
//         $row = mysqli_fetch_assoc($result);
//         if (password_verify($password, $row["password"])) {
//             $_SESSION["login"] = true;
//             $_SESSION["name"] = $username;
//             $_SESSION["id_user"] = $row["id_user"];
//             header("Location: dashboard.php");
//         }
//     }
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>TOPER</title>
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
            <a class="navbar-brand text-light fs-1" href="#">TOPER</a>
        </div>
    </nav>
    <?php $alert = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Masukan Username dan Password Dengan Benar!!</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>'; ?>
    <?php if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == 'gagal') {
            echo $alert;
        }
    } ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-15 ">
                <div class="card position-absolute top-50 start-50 translate-middle bg-light-emphasis" style="width: 20rem;">
                    <div class="card-header"> <strong>Login </strong></div>
                    <div class="card-body">
                        <form action="ceklogin.php" method="post">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <i class="bi bi-person"></i>
                                    </div>
                                    <input type="text" name="username" id="username" class="form-control" placeholder="Username" autocomplete="off" required>
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
                            <button type="submit" name="submit" class="btn btn-dark text-dark bg-primary">Login</button>
                        </form>
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col">
                                <a href="register.php" class="btn btn-dark text-dark bg-warning">Register</a>
                            </div>
                            <div class="col-4">
                                <a href="nologin.php" class="text-black">as Guest</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js    "></script>
</body>

</html>