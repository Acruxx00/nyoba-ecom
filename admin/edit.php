<!DOCTYPE html>
<html>

<head>
    <title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <a href="index.php">Lihat Semua Data</a>

    <br />
    <h3>Edit data</h3>

    <?php
    include "../koneksi.php";
    $id = $_GET['id'];
    $query_mysql = mysqli_query($conn, "SELECT * FROM barang WHERE id='$id'") or die(mysqli_error($conn));
    $nomor = 1;
    while ($data = mysqli_fetch_array($query_mysql)) {
    ?>
        <form action="edit-aksi.php" method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                        <input type="text" name="nama" value="<?php echo $data['nama'] ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td><input type="text" name="harga" value="<?php echo $data['harga'] ?>" required></td>
                </tr>
                <tr>
                    <td>Stok</td>
                    <td><input type="text" name="stok" value="<?php echo $data['stok'] ?>" required></td>
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