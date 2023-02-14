<?php
if (isset($_GET["beli"])) {
    $id = $_GET["beli"];
    $query = mysqli_query($conn, "SELECT * FROM tb_produk WHERE id_produk = $id");
}

if (isset($_POST["checkout"])) {
    $nama = $_POST["nama"];
    $noktp = $_POST["noktp"];
    $kodepos = $_POST["kodepos"];
    $alamat = $_POST["alamat"];
    $pengiriman = $_POST["pengiriman"];
    $qty = $_POST["qty"];
    $iduser = $_POST["iduser"];

    $query = mysqli_query($conn, "SELECT * FROM tb_pembelian");
    $rows = mysqli_num_rows($query) + 1;
    $kode_pembayaran = "K66" . $rows;



    // cek produk di db
    $cekstoksekarang = mysqli_query($conn, "SELECT * FROM tb_produk WHERE id_produk = $id");
    $ambildatanya = mysqli_fetch_assoc($cekstoksekarang);

    $stoksekarang = $ambildatanya["stok"];

    if ($stoksekarang >= $qty) {
        $kurangkanstoksekarangdenganqty = $stoksekarang - $qty;

        $updatestokmasuk = mysqli_query($conn, "UPDATE tb_produk SET stok = $kurangkanstoksekarangdenganqty WHERE id_produk = $id");
    } else {
        echo "
        <script>
        alert('Maaf stok tidak mencukupi');
            window.location.href = 'form_beli.php?beli={$id}';
            </script>
            ";
        die;
    }

    $result = mysqli_query($conn, "INSERT INTO tb_pembelian (id_user, id_produk, nama, no_ktp, kode_pos, alamat, jasa_pengiriman, kode_pembayaran, qty, status) VALUES ('$iduser', '$id', '$nama', '$noktp', '$kodepos', '$alamat', '$pengiriman', '$kode_pembayaran', $qty, 0)");

    var_dump($result);

    if ($result) {
        header("Location: struk.php?beli=" . "$id");
    }
}
