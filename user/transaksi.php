<?php
require "../koneksi.php";
session_start();

$id = $_SESSION["iduser"];
$result = mysqli_query($conn, "SELECT * FROM pembelian WHERE iduser = '$id' ");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <header>
        <nav class="navbar">
            <div class="menu">
                <a href="index.php">Home</a>
                <a href="produk.php">Produk</a>
            </div>

            <a href="../logout.php">Logout</a>
        </nav>
    </header>

    <div class="container">
        <h2 class="text-center">Transaksi</h2>
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Produk</th>
                <th>Jumlah Beli</th>
                <th>Total Pembayaran</th>
                <th>Status</th>
            </tr>
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
                <tr>
                    <td><?= $nomor++ ?></td>
                    <td><?= $data["nama"] ?></td>
                    <td><?= $data["harga"] ?></td>
                    <td><?= $data["stok"] ?></td>
                    <td><?= $data["harga"] * $data["stok"] ?></td>
                    <td><?= $status ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>