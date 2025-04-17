<?php
session_start();
$data = json_decode(file_get_contents("php://input"), true);

// Koneksi ke database (ganti sesuai konfigurasi kamu)
$conn = new mysqli("localhost", "root", "", "desmart_db");

if ($conn->connect_error) {
  http_response_code(500);
  echo json_encode(["error" => "Koneksi gagal"]);
  exit;
}

foreach ($data['cart'] as $item) {
  $stmt = $conn->prepare("INSERT INTO cart_items (product_name, user_id) VALUES (?, ?)");
  $stmt->bind_param("si", $item, $data['user_id']); // Pastikan ada user_id
  $stmt->execute();
}

echo json_encode(["success" => true]);
?>
