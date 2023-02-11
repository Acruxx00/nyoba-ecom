<?php
include '../koneksi.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM barang WHERE id='$id'") or die(mysqli_connect_error());

header("location:index.php?pesan=hapus");
