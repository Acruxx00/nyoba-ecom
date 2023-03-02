<?php
require "../koneksi.php";
session_start();

$id = $_SESSION["iduser"];
$username = $_SESSION["username"];

$result = mysqli_query($conn, "SELECT barang.nama AS barang, 
pembelian.harga, 
user.username, 
pembelian.stok, 
pembelian.alamat, 
pembelian.status, 
pembelian.pengiriman  FROM pembelian
INNER JOIN barang ON pembelian.idbarang = barang.idbarang
INNER JOIN user ON pembelian.iduser = user.iduser 
WHERE username = '$username' ORDER BY id DESC;");


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOPER Transaksi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        body {
            width: 100%;
            height: 100%;
            background-image: linear-gradient(to right, #5b247a, #1bcedf);
        }

        table {
            margin-top: 150px;
        }
    </style>
</head>

<body>

    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand text-light" href="#">TOPER</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-light active" aria-current="page" href="index.php">Home</a>
                        </li>
                    </ul>
                    <span class="navbar-text">
                        <a href="../logout.php" class="btn btn-danger text-black bg-danger text-decoration-none">log out</a>
                    </span>
                </div>
            </div>
        </nav>
    </div>

    <table class="table table-info">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">harga</th>
                <th scope="col">Jumlah Beli</th>
                <th scope="col">Total Pembayaran</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <?php
        $nomor = 1;
        while ($data = mysqli_fetch_assoc($result)) :

            $status = "";
            if ($data["status"] == 2) {
                $status = "Konfirmasi di tolak";
            } else if ($data["status"] == 1) {
                $status = "Berhasil di konfirmasi";
            } else if ($data["status"] == 0) {
                $status = "Belum di konfirmasi";
            }

        ?>
            <tbody>
                <tr>
                    <td scope="row"><?= $nomor++ ?></td>
                    <td><?= $data["barang"] ?></td>
                    <td><?= $data["harga"] ?></td>
                    <td><?= $data["stok"] ?></td>
                    <td><?= $data["harga"] ?></td>
                    <td><?= $status ?></td>
                </tr>
            </tbody>
        <?php endwhile; ?>
    </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>