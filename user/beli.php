<!DOCTYPE html>
<html>

<head>
    <title>Toper Beli Barang</title>
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
                            <a class="nav-link text-light active" aria-current="page" href="transaksi.php">transaksi</a>
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
    session_start();
    $id = $_GET['idbarang'];
    $iduser = $_SESSION["iduser"];
    $query_mysql = mysqli_query($conn, "SELECT * FROM barang WHERE idbarang='$id'") or die(mysqli_error($conn));
    while ($data = mysqli_fetch_array($query_mysql)) {
    ?>
        <form action="beli-aksi.php" method="post">
            <table>
                <tr>
                    <td class="text-light">Nama Barang</td>
                    <td>
                        <input type="hidden" name="iduser" value="<?php echo $iduser ?>">
                        <input type="hidden" name="idbarang" value="<?php echo $data['idbarang'] ?>">
                        <input type="text" name="nama" readonly value="<?php echo $data['nama'] ?>" required>
                    </td>
                </tr>
                <tr>
                    <td class="text-light">Harga Satuan</td>
                    <td><input type="number" name="harga" readonly value="<?php echo $data['harga'] ?>" required></td>
                </tr>
                <tr>
                    <td class="text-light">Jumlah Barang</td>
                    <td><input type="number" name="stokbeli" required></td>
                </tr>
                <tr>
                    <td class="text-light">Alamat</td>
                    <td><input type="text" name="alamat" required></td>
                </tr>
                <tr>
                    <td class="text-light">Kode Pos</td>
                    <td><input type="number" name="kodepos" required></td>
                </tr>
                <tr>
                    <td><input type="hidden" name="status" value="0" required></td>
                </tr>
                <tr>
                    <td><input type="radio" name="pengiriman" value="JNE" id="jne" required> <label for="jne" class="text-light">JNE</label></td>
                    <td style="text-align: center;"><input type="radio" name="pengiriman" value="J&T" id="jnt" required> <label for="jnt" class="text-light">J&T</label></td>
                    <td><input type="radio" name="pengiriman" value="SiCepat" id="sicepat" required> <label for="sicepat" class="text-light">SiCepat</label></td>
                </tr>
                <tr>
                    <td><a href="index.php" class="btn btn-danger text-light bg-danger text-decoration-none">Kembali</a></td>
                    <?php
                    $username = $_SESSION["username"];
                    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
                    $data = mysqli_fetch_assoc($result);
                    ?>
                    <br>
                    <input type="hidden" name="username" value="<?php echo $data["username"]; ?>">
                    <td><button type="submit" class="btn btn-success">beli</button></td>
                </tr>
            </table>
        </form>
    <?php } ?>
</body>

</html>