<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOPER Tambah Barang</title>
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

    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand text-light" href="#">TOPER</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-light active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light active" aria-current="page" href="konfirmasi.php">Konfirmasi</a>
                        </li>
                    </ul>
                    <span class="navbar-text">
                        <a href="../logout.php" class="btn btn-danger text-black bg-danger text-decoration-none">log out</a>
                    </span>
                </div>
            </div>
        </nav>
    </div>

    <form action="tambah-aksi.php" method="post">
        <table>
            <tr>
                <td class="text-light">Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td class="text-light">Harga</td>
                <td><input type="number" name="harga"></td>
            </tr>
            <tr>
                <td class="text-light">Stok</td>
                <td><input type="text" readonly name="stok" value="tersedia"></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" value="Simpan" class="btn btn-success"></td>
            </tr>
        </table>
    </form>

</body>

</html>