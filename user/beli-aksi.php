<?php
include '../koneksi.php';

$nama = $_POST['nama'];
$idbarang = $_POST['idbarang'];
$iduser = $_POST['iduser'];
$harga = $_POST['harga'];
$stok = $_POST['stokbeli'];
$alamat = $_POST['alamat'];
$kodepos = $_POST['kodepos'];
$status = $_POST['status'];
$pengiriman = $_POST['pengiriman'];

$total_harga = $harga * $stok;
mysqli_query($conn, "INSERT INTO pembelian VALUES('','$iduser', '$idbarang','$nama','$total_harga','$stok','$alamat','$kodepos','$status','$pengiriman')");
header("location:index.php?pesan=input");
