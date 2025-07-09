<?php
$servername = "localhost";
$username = "root"; // Ganti sesuai konfigurasi MySQL Anda
$password = "";
$dbname = "nail_art_studio";

// Buat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari POST
$name = $_POST['name'];
$email = $_POST['email'];
$service = $_POST['service'];
$date = $_POST['date'];
$time = $_POST['time'];

// Query untuk menyimpan data
$sql = "INSERT INTO bookings (name, email, service, date, time) VALUES ('$name', '$email', '$service', '$date', '$time')";

if ($conn->query($sql) === TRUE) {
    echo "success";
} else {
    echo "error: " . $conn->error;
}

$conn->close();
?>
