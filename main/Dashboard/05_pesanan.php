<?php
session_start();
require '../koneksi.php';

// Pastikan session userId tersedia
if (!isset($_SESSION['userId'])) {
    echo "<script>alert('Silakan login terlebih dahulu'); window.location.href='../authenticate/login.html';</script>";
    exit();
}

$userId = $_SESSION['userId'];

// Ambil profil usaha milik user
$queryUsaha = "SELECT id FROM profil_usaha WHERE user_id = $userId";
$resultUsaha = mysqli_query($koneksi, $queryUsaha);

$pesananList = [];
$profilUsahaId = 0;

if ($resultUsaha && mysqli_num_rows($resultUsaha) > 0) {
    $dataUsaha = mysqli_fetch_assoc($resultUsaha);
    $profilUsahaId = $dataUsaha['id'];

    // Ambil semua transaksi di mana user adalah PENJUAL (berdasarkan profil_usaha_id)
    $queryPesanan = mysqli_query($koneksi, "
    SELECT t.*, u.name AS nama_pembeli
    FROM Transaksi t
    JOIN Users u ON t.pembeli_id = u.id
    WHERE t.profil_usaha_id = $profilUsahaId
");


    if (!$queryPesanan) {
        die("Query error: " . mysqli_error($koneksi));
    }

    while ($row = mysqli_fetch_assoc($queryPesanan)) {
        $pesananList[] = $row;
    }
} else {
    die("Profil usaha tidak ditemukan.");
}
?>



<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Desmart</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <header>
            <div class="logo">Desmart</div>
            <input type="text" placeholder="Search...">
        </header>
        <div class="welcome-message">
            <h1>Selamat Datang di Desmart!</h1>
        </div>
        <div class="content-wrapper">
            <nav>
                <ul>
                    <li><a href="01_Dashboard.php">Dashboard</a></li>

                    <li><a href="02_manajemenProduk.php">Manajemen Produk</a></li>
                    <li><a href="03_setorHasilUsaha.php">Setor Hasil Usaha</a></li>
                    <li><a href="04_katalogProduk.php">Lihat Katalog Produk</a></li>
                    <li class="active"><a href="#">Pesanan</a></li>
                    <li><a href="06_riwayatPenjualan.php">Riwayat Penjualan</a></li>
                    <li><a href="07_pengaturan.php">Pengaturan</a></li>
                    <li><a href="08_laporanAnalitik.php">Laporan & Analitik</a></li>
                    <li><a href="../authenticate/logout.php">Keluar</a></li>
                </ul>
            </nav>
            <!-- dashboard -->
            <main>
                <section class="overview">
                    <h2> Pesanan</h2>
                    <div class="stats">
                        <div class="stat">
                            <h3>Total Luas Tanah</h3>
                            <p>1,200 / 1,500 Acres</p>
                        </div>
                        <div class="stat">
                            <h3>Revenue</h3>
                            <p>Rp50,000</p>
                        </div>
                    </div>
                </section>
                <section class="task-management">
                    <h2>Daftar Pesanan Masuk</h2>
                    <table>
                        <tr>
                            <th>No</th>
                            <th>Pembeli</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Metode Pembayaran</th>
                            <th>Tanggal</th>
                            <th>Alamat Pengiriman</th>
                            <th>Catatan</th>
                        </tr>
                        <?php if (count($pesananList) > 0): ?>
                            <?php $i = 1;
                            foreach ($pesananList as $pesanan): ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= htmlspecialchars($pesanan['nama_pembeli']) ?></td>
                                    <td>Rp<?= number_format($pesanan['total'], 0, ',', '.') ?></td>
                                    <td><?= htmlspecialchars($pesanan['status']) ?></td>
                                    <td><?= htmlspecialchars($pesanan['metode_pembayaran']) ?></td>
                                    <td><?= date('d-m-Y H:i', strtotime($pesanan['tanggal_transaksi'])) ?></td>
                                    <td><?= htmlspecialchars($pesanan['alamat_pengiriman']) ?></td>
                                    <td><?= htmlspecialchars($pesanan['catatan']) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="8">Belum ada pesanan masuk.</td>
                            </tr>
                        <?php endif; ?>
                    </table>
                </section>

            </main>
        </div>
    </div>
</body>

</html>