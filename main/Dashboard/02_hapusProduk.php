<?php
include '../koneksi.php';
session_start();

// Cek apakah user sudah login
if (!isset($_SESSION['userId'])) {
    echo "<script>alert('Silakan login terlebih dahulu'); window.location.href='../authenticate/login.html';</script>";
    exit();
}

$userId = $_SESSION['userId'];

// Validasi ID produk dari parameter GET
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    echo "<script>alert('ID produk tidak valid!'); window.location.href='02_manajemenProduk.php';</script>";
    exit();
}

$produkId = intval($_GET['id']);

// Pastikan produk milik user yang sedang login
$queryCek = "
    SELECT p.id 
    FROM Produk p
    JOIN profil_usaha pu ON p.profil_usaha_id = pu.id
    WHERE p.id = ? AND pu.user_id = ?
";
$stmt = $koneksi->prepare($queryCek);
$stmt->bind_param("ii", $produkId, $userId);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo "<script>alert('Produk tidak ditemukan atau Anda tidak memiliki akses!'); window.location.href='02_manajemenProduk.php';</script>";
    exit();
}

// Jika valid, hapus produk
$queryHapus = "DELETE FROM Produk WHERE id = ?";
$stmtHapus = $koneksi->prepare($queryHapus);
$stmtHapus->bind_param("i", $produkId);

if ($stmtHapus->execute()) {
    echo "<script>alert('Produk berhasil dihapus.'); window.location.href='02_manajemenProduk.php';</script>";
} else {
    echo "<script>alert('Gagal menghapus produk!'); window.location.href='02_manajemenProduk.php';</script>";
}
?>
