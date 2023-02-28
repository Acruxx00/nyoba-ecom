<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                <a class="navbar-brand text-light" href="#">Logo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-light active" aria-current="page" href="tambah.php">tambah barang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light active" aria-current="page" href="konfirmasi.php">konfirmasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light active" aria-current="page" href="#">Home</a>
                        </li>
                    </ul>
                    <span class="navbar-text">
                        <a href="../logout.php" class="btn btn-danger text-black bg-danger text-decoration-none">log out</a>
                    </span>
                </div>
            </div>
        </nav>
    </div>

    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Harga</th>
                <th scope="col">Stok</th>
                <th scope="col">Opsi</th>
            </tr>
        </thead>
        <?php
        include "../koneksi.php";
        $query_mysql = mysqli_query($conn, "SELECT * FROM barang") or die(mysqli_connect_error());
        $nomor = 1;
        while ($data = mysqli_fetch_array($query_mysql)) {
        ?>
            <tbody>
                <tr>
                    <td scope="row"><?php echo $nomor++; ?></td>
                    <td scope="col"><?php echo $data['nama']; ?></td>
                    <td scope="col"><?php echo $data['harga']; ?></td>
                    <td scope="col"><?php echo $data['stok']; ?></td>
                    <td>
                        <a class="btn btn-warning" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
                        <a class="btn btn-danger" href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>
                    </td>
                </tr>
            </tbody>
        <?php } ?>
    </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>