<!DOCTYPE html>
<html>

<head>
    <title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
    <link rel="stylesheet" type="text/css" href="">
    <style>
        body {
            width: 100%;
            height: 100%;
            background-image: linear-gradient(to right, #5b247a, #1bcedf);
        }
    </style>
</head>

<body>
    <a href="index.php">Lihat Semua Data</a>

    <br />
    <h3>Edit data</h3>

    <?php
    include "../koneksi.php";
    $id = $_GET['idbarang'];
    $query_mysql = mysqli_query($conn, "SELECT * FROM barang WHERE idbarang='$id'") or die(mysqli_error($conn));
    while ($data = mysqli_fetch_array($query_mysql)) {
    ?>
        <form action="edit-aksi.php" method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>
                        <input type="hidden" name="idbarang" value="<?php echo $data['idbarang'] ?>">
                        <input type="text" name="nama" value="<?php echo $data['nama'] ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td><input type="number" name="harga" value="<?php echo $data['harga'] ?>" required></td>
                </tr>
                <tr>
                    <td>Stok</td>
                    <td><select name="stok" id="stok">
                            <option value="tersedia">Tersedia</option>
                            <option value="habis">Habis</option>
                        </select></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
            </table>
        </form>
    <?php } ?>
</body>

</html>