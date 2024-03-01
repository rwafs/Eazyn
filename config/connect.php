<?php

# tanda dolar $ untuk membuat variabel, di php setiap akhir perintah wajib pakai titik koma!
$username = "root";
$password = "";
$host = "localhost";

$is_connect = mysqli_connect($host, $username, $password);
#mysqli_connect adalah function, yg di dalam kurung namanya parameter

if($is_connect){
    mysqli_select_db($is_connect, "izin_db");
    //use izin_fb; di mysql/xampp
    //mysqli_select_db ditaruh di if($is_connect) supaya dapat memastikan bahwa mysql sudah konek baru bisa menjalankan mysqli_select_db
} else{
    echo "Oops...";
}

#kalau di python namanya print, kalau di php namanya echo
