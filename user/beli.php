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

    <br />
    <h3>Beli</h3>

    <?php
    include "../koneksi.php";
    $id = $_GET['id'];
    $query_mysql = mysqli_query($conn, "SELECT * FROM barang WHERE id='$id'") or die(mysqli_error($conn));
    while ($data = mysqli_fetch_array($query_mysql)) {
    ?>
        <form action="beli-aksi.php" method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                        <input type="text" name="nama" readonly value="<?php echo $data['nama'] ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td><input type="number" name="harga" readonly value="<?php echo $data['harga'] ?>" required></td>
                </tr>
                <tr>
                    <td>Stok</td>
                    <td><input type="number" name="stok" required></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" required></td>
                </tr>
                <tr>
                    <td>Kode Pos</td>
                    <td><input type="number" name="kodepos" required></td>
                </tr>
                <tr>
                    <td><input type="radio" name="pengiriman" value="JNE" id="jne" required> <label for="jne">JNE</label></td>
                    <td><input type="radio" name="pengiriman" value="J&T" id="jnt" required> <label for="jnt">J&T</label></td>
                    <td><input type="radio" name="pengiriman" value="SiCepat" id="sicepat" required> <label for="sicepat">SiCepat</label></td>
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