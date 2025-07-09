<?php
include 'koneksi.php';

$name = $_POST['name'];
$review = $_POST['review'];

// Simple validation (bisa ditambah nanti)
if (!empty($name) && !empty($review)) {
    $stmt = $koneksi->prepare("INSERT INTO reviews (name, review, created_at) VALUES (?, ?, NOW())");
    $stmt->bind_param("ss", $name, $review);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo json_encode(["status" => "success"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Failed to insert review."]);
    }

    $stmt->close();
} else {
    echo json_encode(["status" => "error", "message" => "Incomplete input."]);
}

$koneksi->close();
?>
