<?php
include '../koneksi.php';
session_start();

// Pastikan user sudah login
if (!isset($_SESSION['userId'])) {
    echo "<script>alert('Silakan login terlebih dahulu'); window.location.href='../authenticate/login.html';</script>";
    exit();
}

$userId = $_SESSION['userId'];

// Ambil profil usaha berdasarkan user ID
$queryUsaha = "SELECT id FROM profil_usaha WHERE user_id = $userId";
$resultUsaha = mysqli_query($koneksi, $queryUsaha);

$produkList = [];

if ($resultUsaha && mysqli_num_rows($resultUsaha) > 0) {
    $dataUsaha = mysqli_fetch_assoc($resultUsaha);
    $profilUsahaId = $dataUsaha['id'];

    // Ambil semua produk berdasarkan profil usaha
    $queryProduk = "SELECT * FROM Produk WHERE profil_usaha_id = $profilUsahaId";
    $resultProduk = mysqli_query($koneksi, $queryProduk);

    if ($resultProduk) {
        while ($row = mysqli_fetch_assoc($resultProduk)) {
            $produkList[] = $row;
        }
    }
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
                    <li><a href="01_Dashboard.html">Dashboard</a></li>
                    <li class="active"><a href="#">Manajemen Produk</a></li>
                    <li><a href="03_setorHasilUsaha.html">Setor Hasil Usaha</a></li>
                    <li><a href="04_katalogProduk.html">Lihat Katalog Produk</a></li>
                    <li><a href="05_pesanan.html">Pesanan</a></li>
                    <li><a href="06_riwayatPenjualan.html">Riwayat Penjualan</a></li>
                    <li><a href="07_pengaturan.html">Pengaturan</a></li>
                    <li><a href="08_laporanAnalitik.html">Laporan & Analitik</a></li>
                    <li><a href="../authenticate/logout.php">Keluar</a></li>
                </ul>
            </nav>
            <main>
                <section class="overview">
                    <h2>Manajemen Produk</h2>
                    <div class="stats">
                        <div class="stat">
                            <h3>Total Produk</h3>
                            <p><?= count($produkList) ?> item</p>
                        </div>
                        <div class="stat">
                            <h3>Revenue</h3>
                            <p>Rp50,000</p> <!-- Placeholder -->
                        </div>
                    </div>
                </section>

                <section class="task-management">
                    <h2>Daftar Produk</h2>
                    <table>
                        <tr>
                            <th>No. </th>
                            <th>Nama Produk</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Lokasi</th>
                        </tr>
                        <?php if (count($produkList) > 0): ?>
                            <?php
                            $p = 1; // Inisialisasi nomor urut
                            foreach ($produkList as $produk):
                            ?>
                                <tr>
                                    <td><?= $p++ ?></td>
                                    <td><?= htmlspecialchars($produk['nama_produk']) ?></td>
                                    <td><?= htmlspecialchars($produk['kategori']) ?></td>
                                    <td>Rp<?= number_format($produk['harga'], 2, ',', '.') ?></td>
                                    <td><?= $produk['stok'] ?></td>
                                    <td><?= htmlspecialchars($produk['lokasi']) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="6">Belum ada produk terdaftar.</td>
                            </tr>
                        <?php endif; ?>

                    </table>
                </section>
            </main>
        </div>
    </div>
</body>

</html>