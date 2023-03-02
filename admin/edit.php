<!DOCTYPE html>
<html>

<head>
    <title>Edit Barang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        body {
            width: 100%;
            height: 100%;
            background-image: linear-gradient(to right, #5b247a, #1bcedf);
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
                            <a class="nav-link text-light active" aria-current="page" href="tambah.php">Tambah Barang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light active" aria-current="page" href="konfirmasi.php">Konfirmasi</a>
                        </li>
                    </ul>
                    <span class="navbar-text">
                        <a href="../logout.php" class="btn btn-danger text-black bg-danger text-decoration-none">log out</a>
                    </span>
                </div>
            </div>
        </nav>
    </div>


    <?php
    include "../koneksi.php";
    $id = $_GET['idbarang'];
    $query_mysql = mysqli_query($conn, "SELECT * FROM barang WHERE idbarang='$id'") or die(mysqli_error($conn));
    while ($data = mysqli_fetch_array($query_mysql)) {
    ?>
        <form action="edit-aksi.php" method="post">
            <table>
                <tr>
                    <td class="text-light">Nama</td>
                    <td>
                        <input type="hidden" name="idbarang" value="<?php echo $data['idbarang'] ?>">
                        <input type="text" name="nama" value="<?php echo $data['nama'] ?>" required>
                    </td>
                </tr>
                <tr>
                    <td class="text-light">Harga</td>
                    <td><input type="number" name="harga" value="<?php echo $data['harga'] ?>" required></td>
                </tr>
                <tr>
                    <td class="text-light">Stok</td>
                    <td><select name="stok" id="stok">
                            <option value="tersedia">Tersedia</option>
                            <option value="habis">Habis</option>
                        </select></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan" class="btn btn-warning"></td>
                </tr>
            </table>
        </form>
    <?php } ?>
</body>

</html>