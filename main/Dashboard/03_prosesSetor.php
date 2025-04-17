<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "desmart";

// Koneksi
$conn = new mysqli($host, $user, $pass, $db);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$profil_usaha_id = $_POST['profil_usaha_id'];
$nama_komoditas  = $_POST['nama_komoditas'];
$jumlah          = $_POST['jumlah'];
$satuan          = $_POST['satuan'];
$tanggal_setor   = $_POST['tanggal_setor'] ?: date("Y-m-d H:i:s"); // default ke sekarang
$keterangan      = $_POST['keterangan'];

// Query INSERT
$sql = "INSERT INTO Setor_Hasil (profil_usaha_id, nama_komoditas, jumlah, satuan, tanggal_setor, keterangan) 
        VALUES (?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("isisss", $profil_usaha_id, $nama_komoditas, $jumlah, $satuan, $tanggal_setor, $keterangan);

if ($stmt->execute()) {
    echo "<script>alert('Data berhasil disimpan!'); window.location.href = '03_setorHasilUsaha.html';</script>";
} else {
    echo "Gagal menyimpan data: " . $conn->error;
}

$stmt->close();
$conn->close();
?>
