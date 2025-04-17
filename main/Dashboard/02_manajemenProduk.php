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
$profilUsahaId = 0;

if ($resultUsaha && mysqli_num_rows($resultUsaha) > 0) {
    $dataUsaha = mysqli_fetch_assoc($resultUsaha);
    $profilUsahaId = $dataUsaha['id'];

    // Ambil data dari tabel Produk
    $queryProduk = "SELECT * FROM Produk WHERE profil_usaha_id = $profilUsahaId ORDER BY created_at DESC";
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
    <title>Manajemen Produk - Desmart</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <header>
            <div class="logo">Desmart</div>
            <input type="text" placeholder="Search...">
        </header>
        <div class="welcome-message">
            <h1>Manajemen Produk</h1>
        </div>
        <div class="content-wrapper">
            <nav>
                <ul>
                    <li><a href="01_Dashboard.html">Dashboard</a></li>
                    <li class="active"><a href="#">Manajemen Produk</a></li>
                    <li><a href="03_setorHasilUsaha.php">Setor Hasil Usaha</a></li>
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
                    <h2>Data Produk</h2>
                    <div class="stats">
                        <div class="stat">
                            <h3>Total Produk</h3>
                            <p><?= count($produkList) ?> data</p>
                        </div>
                        <div class="stat">
                            <h3>Total Stok</h3>
                            <p>
                                <?php
                                $totalStok = array_sum(array_column($produkList, 'stok'));
                                echo $totalStok;
                                ?> unit
                            </p>
                        </div>
                    </div>
                </section>

                <section class="task-management">
                    <h2>Daftar Produk</h2>
                    <table>
                        <tr>
                            <th>No.</th>
                            <th>Nama Produk</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Lokasi</th>
                            <th>Tanggal Dibuat</th>
                        </tr>
                        <?php if (count($produkList) > 0): ?>
                            <?php
                            $n = 1;
                            foreach ($produkList as $produk):
                            ?>
                                <tr>
                                    <td><?= $n++ ?></td>
                                    <td><?= htmlspecialchars($produk['nama_produk']) ?></td>
                                    <td><?= htmlspecialchars($produk['kategori']) ?></td>
                                    <td>Rp<?= number_format($produk['harga'], 0, ',', '.') ?></td>
                                    <td><?= $produk['stok'] ?></td>
                                    <td><?= htmlspecialchars($produk['lokasi']) ?></td>
                                    <td><?= date('d-m-Y H:i', strtotime($produk['created_at'])) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="7">Belum ada produk yang tersedia.</td>
                            </tr>
                        <?php endif; ?>
                    </table>
                </section>
            </main>
        </div>
    </div>
</body>

</html>
