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
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <title>tokoprinter - bersama</title>
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
            <a class="navbar-brand text-light fs-1" href="#">Navbar</a>
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
                    <div class="card-header"> <strong> Login Page </strong></div>
                    <div class="card-body">
                        <form action="ceklogin.php" method="post">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="25" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                                        </svg>
                                    </div>
                                    <input type="text" name="username" id="username" class="form-control" placeholder="Username" autocomplete="off" required>
                                </div>
                                <br>
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="25" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
                                            <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z" />
                                        </svg>
                                    </div>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                                </div>
                                <br>
                            </div>
                            <button type="submit" name="submit" class="btn btn-black text-white bg-black">Login</button>
                        </form>
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col">
                                <a href="register.php" class="btn btn-black text-white bg-info">Register</a>
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