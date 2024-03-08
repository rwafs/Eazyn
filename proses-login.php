<?php

include 'config/connect.php'; //menghubungkan ke file koneksi.php untuk membuat koneksi ke database

$username = $_POST['username']; //mengambil nilai username dari form
$password = $_POST['password']; // mengambil nilai password dari form

$query = "SELECT * FROM siswa WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) { //jika query menghasilkan satu atau lebih baris
    session_start(); //memulai sesi
    $_SESSION['username'] = $username;
    header('Location: index.php');
}
else {
    echo 'Login gagal! Username atau password salah.';
}