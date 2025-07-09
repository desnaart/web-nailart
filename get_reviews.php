<?php
include 'koneksi.php'; // Menggunakan koneksi yang sudah ada

$sql = "SELECT name, review, created_at FROM reviews ORDER BY created_at DESC";
$result = $koneksi->query($sql);

$reviews = [];
while ($row = $result->fetch_assoc()) {
    $reviews[] = $row;
}

echo json_encode($reviews);
$koneksi->close();
?>
