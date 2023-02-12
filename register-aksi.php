<?php
include 'koneksi.php';
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$level = $_POST['level'];
// $result = mysqli_query($conn, "INSERT INTO user VALUES('','$username','$email','$password', $level)");

// mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$email', '$password', '$level')");
// return mysqli_affected_rows($conn);

// header("location:index.php?pesan=regis");
$password = md5($password);
if (mysqli_query($conn, "INSERT INTO user (username,email,password,level) VALUES ('$username','$email','$password', '$level')")) {
    //print "<script>document.write('Account created :)');</script>";
    header('location: index.php');
} else {
    echo 'Error :(';
}
