<?php
require "../koneksi.php";
$query_mysql = mysqli_query($conn, "SELECT barang.nama AS barang,
pembelian.id, 
pembelian.harga, 
user.username, 
pembelian.stok, 
pembelian.alamat, 
pembelian.status, 
pembelian.pengiriman  FROM `pembelian`
INNER JOIN barang ON pembelian.idbarang = barang.idbarang
INNER JOIN user ON pembelian.iduser = user.iduser WHERE status = '0'");

// isset konfirmasi
if (isset($_POST["verifikasi"])) {
    $id = $_POST["id"];

    $query_mysql = mysqli_query($conn, "UPDATE pembelian SET status = 1 WHERE id = $id");

    if ($query_mysql) {
        header("Location: konfirmasi.php");
    }
}

// isset tolak
if (isset($_POST["tolak"])) {
    $id = $_POST["id"];

    $query_mysql = mysqli_query($conn, "UPDATE pembelian SET status = 2 WHERE id = $id");

    if ($query_mysql) {
        header("Location: konfirmasi.php");
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOPER Konfirmasi Pembayaran</title>
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
                        <li class="nav-item">
                            <a class="nav-link text-light active" aria-current="page" href="tambah.php">Tambah Barang</a>
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
                <th scope="col">username</th>
                <th scope="col">Nama barang</th>
                <th scope="col">total harga</th>
                <th scope="col">Jumlah Beli</th>
                <th scope="col">Alamat</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <?php $nomor = 1;
        while ($data = mysqli_fetch_array($query_mysql)) : ?>
            <tr>
                <td scope="row"><?= $nomor++ ?></td>
                <td><?= $data['username'] ?></td>
                <td><?= $data['barang'] ?></td>
                <td><?= $data['harga'] ?></td>
                <td><?= $data['stok'] ?></td>
                <td><?= $data['alamat'] ?></td>
                <td>
                    <button type="button" class="btn btn-success my-2" data-bs-toggle="modal" data-bs-target="#konfirmasi<?= $data["id"] ?>">Konfirmasi</button>
                    <button type="button" class="btn btn-danger my-2" data-bs-toggle="modal" data-bs-target="#tolak<?= $data["id"] ?>">Tolak</button>
                </td>
            </tr>


            <!-- modal konfirmasi -->
            <div class="modal fade" id="konfirmasi<?= $data["id"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi Transaksi</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post">
                                <p>Apakah ingin mengkonfirmasi transaksi ini?</p>
                                <input type="hidden" name="id" value="<?= $data["id"] ?>">
                                <button type="submit" name="verifikasi" class="btn btn-success">Konfirmasi</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- modal tolak -->
            <div class="modal fade" id="tolak<?= $data["id"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tolak Konfirmasi</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post">
                                <p>Apakah yakin ingin menolak transaksi ini?</p>
                                <input type="hidden" name="id" value="<?= $data["id"]; ?>">
                                <button type="submit" class="btn btn-danger" name="tolak">Tolak</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        <?php endwhile; ?>
    </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>