<?php

$conn = mysqli_connect("localhost", "root", "", "ecom");
if (!$conn) {
    echo "Failed Connection ";
}

$all = mysqli_query($conn, 'select * from user');
// $data = mysqli_fetch_assoc($all);


// function login($data)
// {
//     global $conn;
//     $username = $data['username'];
//     $password = $data['password'];

//     $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

//     if (mysqli_num_rows($result) === 1) {
//         $row = mysqli_fetch_assoc($result);

//         if ($password == $row['password']) {
//             $_SESSION['login'] = true;

//             if ($row['level'] == 'user') {
//                 $_SESSION['username'] = $row['username'];
//                 $_SESSION['level'] = 'user';
//                 header("Location: index.php");
//                 exit;
//             }
//             if ($row['level'] == 'admin') {
//                 $_SESSION['username'] = $row['username'];
//                 $_SESSION['level'] = 'admin';
//                 header("Location: index.php");
//                 exit;
//             }
//         } else {
//             $_SESSION['passwordSalah'] = true;
//         }
//     } else {
//         $_SESSION['usernameTidakDitemukan'] = true;
//     }
// }
