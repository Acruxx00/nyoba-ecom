<?php
include '../koneksi.php';
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$stok = $_POST['stokbeli'];
$alamat = $_POST['alamat'];
$kodepos = $_POST['kodepos'];
$status = $_POST['status'];
$pengiriman = $_POST['pengiriman'];
// $jumlah = $data['harga'] * $data['stok'];
// $total = $_POST[$jumlah];
mysqli_query($conn, "INSERT INTO pembelian VALUES('','$nama', '','$harga','$stok','$alamat','$kodepos','$status','$pengiriman')");

header("location:index.php?pesan=input");
