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
        html,
        body {
            width: 100%;
            height: 100%;
            background-image: linear-gradient(to right, #e4e4e4, #000000);
        }

        .navbar {
            background-image: linear-gradient(to right, #000000, #e4e4e4);
        }

        .navbar-brand,
        strong,
        .akun {
            color: #ffffff;
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
        </div>
    </nav>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-15 ">
                <div class="card position-absolute top-50 start-50 translate-middle" style="width: 20rem; background-image: linear-gradient(to right, #000000, #e4e4e4);">
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
                            <button type="submit" name="submit" class="btn btn-white text-black bg-white">Login</button>
                        </form>
                    </div>
                    <div class="card-body">

                        <a href="register.php" class="btn btn-black text-white bg-black">Register</a>
                        <a href="nologin.php" class="text-black">as Guest</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>