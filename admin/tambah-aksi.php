<?php
include '../koneksi.php';
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$result = mysqli_query($conn, "INSERT INTO barang VALUES('','$nama','$harga','$stok')");

header("location:index.php?pesan=input");
