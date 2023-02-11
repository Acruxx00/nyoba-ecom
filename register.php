<?php
require 'koneksi.php';
session_start();

function registrasi(){
    
}

if (isset($_POST['register'])) {
    if (registrasi($_POST) > 0) {
        echo "
            <script>
                alert('Registrasi akun berhasil, silahkan login!');
                document.location.href = 'login.php';
            </script>
            ";
    } else {
        echo mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Register | AptPrinters</title>
</head>

<body class="body bg-dark">
    <div class="registerContainer bg-light w-75 p-4 rounded-3 mt-5 mx-auto">
        <form action="" method="post">
            <h1 class="display-5">Registrasi</h1>
            <hr class="mb-4">
            <div class="row align-items-center mb-3">
                <input type="hidden" name="gambarUser" id="gambarUser" value="noPhoto.jpg">
                <div class="col-4">
                    <label for="namaUser" class="form-label">Nama</label>
                </div>
                <div class="col">
                    <input type="text" name="namaUser" id="namaUser" class="form-control" autocomplete="off">
                </div>
            </div>
            <div class="row align-items-center mb-3">
                <div class="col-4">
                    <label for="usernameUser" class="form-label">Username</label>
                </div>
                <div class="col">
                    <input type="text" name="usernameUser" id="usernameUser" class="form-control" autocomplete="off">
                </div>
            </div>
            <div class="row align-items-center mb-3">
                <div class="col-4">
                    <label for="passwordUser" class="form-label">Password</label>
                </div>
                <div class="col">
                    <input type="password" name="passwordUser" id="passwordUser" class="form-control">
                </div>
            </div>
            <input type="hidden" name="statusUser" id="statusUser" value="customer">
            <div class="row align-items-center mb-3">
                <div class="col-4">
                    <label for="repasswordUser" class="form-label">Konfirmasi Password</label>
                </div>
                <div class="col">
                    <input type="password" name="repasswordUser" id="repasswordUser" class="form-control">
                </div>
            </div>
            <div class="row align-items-center mb-4">
                <div class="col-4">
                    <label for="alamatUser" class="form-label">Alamat</label>
                </div>
                <div class="col">
                    <input type="text" name="alamatUser" id="alamatUser" class="form-control" autocomplete="off">
                </div>
            </div>
            <div class="btn-register mb-4">
                <button type="submit" name="register" class="btn btn-primary">Register</button>
            </div>
            <div>
                Sudah punya akun?<a href="login.php" class="text-decoration-none"> Login</a>
            </div>
        </form>
    </div>
</body>

</html>