<?php
$host = "localhost";
$user = "root";  // Sesuaikan dengan username MySQL Anda
$password = "";  // Sesuaikan dengan password MySQL Anda
$database = "nail_art_studio";

$koneksi = mysqli_connect($host, $user, $password, $database);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
