<?php

include '../koneksi.php';
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$result = mysqli_query($conn, "UPDATE barang SET nama='$nama', harga='$harga', stok='$stok' WHERE id='$id'");

header("location:index.php?pesan=update");
