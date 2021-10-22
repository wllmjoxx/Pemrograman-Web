<?php 
$namaServer = "sql101.epizy.com";
$username = "epiz_30130401";
$password = "bvkxY1vbXs4mKo";
$namaDatabase = "epiz_30130401_aplikasi_sederhana";

// Membuat koneksi

$conn = mysqli_connect($namaServer,$username,$password,$namaDatabase);

// Cek koneksi

if(!$conn) {
    die("Koneksi Gagal: " . mysqli_connect_error());

}

?>