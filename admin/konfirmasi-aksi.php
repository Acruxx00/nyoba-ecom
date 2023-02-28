<?php
include '../koneksi.php';
$query_mysql = mysqli_query($conn, "SELECT * FROM pembelian") or die(mysqli_connect_error());
$nomor = 1;
while ($data = mysqli_fetch_array($query_mysql)) {
?>
    <div class="modal fade" id="konfirmasi<?= $data["id"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi Transaksi</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <p>Apakah ingin mengkonfirmasi transaksi ini?</p>
                        <input type="hidden" name="id" value="<?= $row["id"] ?>">
                        <button type="submit" name="verifikasi" class="btn btn-success">Konfirmasi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php } ?>