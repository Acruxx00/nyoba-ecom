<?php
include '../koneksi.php';
$id = $_GET['idbarang'];
mysqli_query($conn, "DELETE FROM barang WHERE idbarang='$id'") or die(mysqli_connect_error());

header("location:index.php?pesan=hapus");
