<?php
require "../koneksi.php";
$query_mysql = mysqli_query($conn, "SELECT * FROM pembelian WHERE status = '0'");

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
    <title>Konfirmasi Pembayaran</title>
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <header>
        <nav class="navbar">
            <div class="menu">
                <a href="index.php">Home</a>
                <a href="konfirmasi.php">konfirmasi pembelian</a>


            </div>

            <a href="../logout.php">Logout</a>
        </nav>
    </header>

    <div class="container">
        <h2 class="text-center">Konfirmasi Pembayaran</h2>
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>harga</th>
                <th>Jumlah Beli</th>
                <th>Total Pembayaran</th>
                <th>Aksi</th>
            </tr>
            <?php $nomor = 1;
            while ($data = mysqli_fetch_array($query_mysql)) : ?>
                <tr>
                    <td><?= $nomor++ ?></td>
                    <td><?= $data['nama'] ?></td>
                    <td><?= $data['harga'] ?></td>
                    <td><?= $data['stok'] ?></td>
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