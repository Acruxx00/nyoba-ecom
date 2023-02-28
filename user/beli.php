<!DOCTYPE html>
<html>

<head>
    <title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
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
    <br>

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
                    <td><input type="number" name="stokbeli" required></td>
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
                    <td><input type="hidden" name="status" value="belum dikonfirmasi" required></td>
                </tr>
                <tr>
                    <td><input type="radio" name="pengiriman" value="JNE" id="jne" required> <label for="jne">JNE</label></td>
                    <td style="text-align: center;"><input type="radio" name="pengiriman" value="J&T" id="jnt" required> <label for="jnt">J&T</label></td>
                    <td><input type="radio" name="pengiriman" value="SiCepat" id="sicepat" required> <label for="sicepat">SiCepat</label></td>
                </tr>
                <tr>
                    <td><a href="index.php" class="btn btn-danger text-light bg-danger text-decoration-none">Kembali</a></td>
                    <td><button type="submit" class="btn btn-success">beli</button></td>
                </tr>
            </table>
        </form>
    <?php } ?>
</body>

</html>