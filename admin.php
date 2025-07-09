<?php
session_start();

// Data login admin (hardcoded)
$admin_username = "admin";
$admin_password = "salon123";

// Ambil input dari form
$username = $_POST['username'];
$password = $_POST['password'];

// Cek apakah username dan password cocok
if ($username === $admin_username && $password === $admin_password) {
    // Set session dan redirect ke home
    $_SESSION['logged_in'] = true;
    $_SESSION['username'] = $username;
    header("Location: booking.php");
    exit();
} else {
    // Gagal login
    echo "<script>alert('Username atau Password salah!'); window.location.href = 'login.html';</script>";
}
?>
