<?php
require 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="">
</head>

<body>

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-center">Registrasi</h4>

                        <form action="register-aksi.php" method="post" name="register">
                            <input type="text" class="form-control" name="username" placeholder="Username"><br>
                            <input type="email" class="form-control" name="email" placeholder="Email"><br>
                            <input type="password" class="form-control" name="password" placeholder="Password"><br>
                            <!-- <input type="password" class="form-control" name="confirmpass" placeholder="Konfirmasi Password"> -->
                            <input type="hidden" class="form-control" name="level" value="user">
                            <p>Sudah punya akun? <a href="index.php">Login</a></p>

                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src=""></script>
</body>

</html>