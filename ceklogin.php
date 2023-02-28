<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
require 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];



// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($conn, "select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if ($cek > 0) {

    $data = mysqli_fetch_assoc($login);
    $_SESSION['iduser'] = $data['iduser'];
    // cek jika user login sebagai admin
    if ($data['level'] == "admin") {

        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";


        // alihkan ke halaman dashboard admin
        header("location:admin/index.php");

        // cek jika user login sebagai pegawai
    }
    // else if ($data['level'] == "pegawai") {
    //     // buat session login dan username
    //     $_SESSION['username'] = $username;
    //     $_SESSION['level'] = "pegawai";
    //     // alihkan ke halaman dashboard pegawai
    //     header("location:halaman_pegawai.php");
    // } 
    else {
        // alihkan ke halaman login kembali
        header("location:user/index.php");
    }
} else {
    $alert = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div> ';
    header("location:index.php?pesan=gagal");
}
