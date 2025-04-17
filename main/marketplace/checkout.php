<?php
include '../koneksi.php';

$data = json_decode(file_get_contents("php://input"), true);

$user_id = $data['user_id'];
$cart = $data['cart'];

if (!$user_id || empty($cart)) {
  echo json_encode(["success" => false, "message" => "Data tidak lengkap"]);
  exit;
}

// Buat transaksi
$insertTransaksi = $koneksi->query("INSERT INTO Transaksi (user_id, tanggal) VALUES ($user_id, NOW())");

if ($insertTransaksi) {
  $transaksi_id = $koneksi->insert_id;

  foreach ($cart as $nama_produk) {
    // Ambil data produk berdasarkan nama
    $result = $koneksi->query("SELECT id, harga FROM Produk WHERE nama_produk = '$nama_produk'");
    $produk = $result->fetch_assoc();

    if ($produk) {
      $produk_id = $produk['id'];
      $harga = $produk['harga'];
      $jumlah = 1; // Default 1, bisa dikembangkan
      $subtotal = $jumlah * $harga;

      $koneksi->query("INSERT INTO Transaksi_Detail (transaksi_id, produk_id, jumlah, harga_satuan, subtotal)
                      VALUES ($transaksi_id, $produk_id, $jumlah, $harga, $subtotal)");
    }
  }

  echo json_encode(["success" => true]);
} else {
  echo json_encode(["success" => false, "message" => "Gagal menyimpan transaksi"]);
}
?>
