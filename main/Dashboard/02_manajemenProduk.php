<?php
include '../koneksi.php';
session_start();

// Pastikan user sudah login
if (!isset($_SESSION['userId'])) {
    echo "<script>alert('Silakan login terlebih dahulu'); window.location.href='../authenticate/login.php'';</script>";
    exit();
}

$userId = $_SESSION['userId'];

// Ambil profil usaha berdasarkan user ID
$queryUsaha = "SELECT id FROM profil_usaha WHERE user_id = $userId";
$resultUsaha = mysqli_query($koneksi, $queryUsaha);

$setorList = [];

if ($resultUsaha && mysqli_num_rows($resultUsaha) > 0) {
    $dataUsaha = mysqli_fetch_assoc($resultUsaha);
    $profilUsahaId = $dataUsaha['id'];

    // Ambil semua data setor hasil berdasarkan profil usaha
    $querySetor = "SELECT * FROM Setor_Hasil WHERE profil_usaha_id = $profilUsahaId ORDER BY tanggal_setor DESC";
    $resultSetor = mysqli_query($koneksi, $querySetor);

    if ($resultSetor) {
        while ($row = mysqli_fetch_assoc($resultSetor)) {
            $setorList[] = $row;
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
                    <li><a href="01_Dashboard.php">Dashboard</a></li>
                    <li><a href="03_setorHasilUsaha.php">Manajemen Produk</a></li>
                    <li class="active"><a href="#">Setor Hasil Usaha</a></li>
                    <li><a href="04_katalogProduk.php">Lihat Katalog Produk</a></li>
                    <li><a href="05_pesanan.php">Pesanan</a></li>
                    <li><a href="06_riwayatPenjualan.php">Riwayat Penjualan</a></li>
                    <li><a href="07_pengaturan.php">Pengaturan</a></li>
                    <li><a href="08_laporanAnalitik.php">Laporan & Analitik</a></li>
                    <li><a href="../authenticate/logout.php">Keluar</a></li>
                </ul>
            </nav>
            <!-- dashboard -->
            <main>
                <section class="overview">
                    <h2>Setor Hasil Usaha</h2>
                    <div class="stats">
                        <div class="stat">
                            <h3>Total Komoditas</h3>
                            <p><?= count($setorList) ?> data</p>
                        </div>
                        <div class="stat">
                            <h3>Revenue</h3>
                            <p>Rp50,000</p> <!-- Placeholder -->
                        </div>
                    </div>
                </section>

                <section class="task-management">
                    <h2>Data Setoran Komoditas</h2>
                    <table>
                        <tr>
                            <th>No.</th>
                            <th>Nama Komoditas</th>
                            <th>Jumlah</th>
                            <th>Satuan</th>
                            <th>Tanggal</th>
                            <th>Keterangan</th>
                        </tr>
                        <?php if (count($setorList) > 0): ?>
                            <?php
                            $n = 1;
                            foreach ($setorList as $setor):
                            ?>
                                <tr>
                                    <td><?= $n++ ?></td>
                                    <td><?= htmlspecialchars($setor['nama_komoditas']) ?></td>
                                    <td><?= $setor['jumlah'] ?></td>
                                    <td><?= htmlspecialchars($setor['satuan']) ?></td>
                                    <td><?= date('d-m-Y', strtotime($setor['tanggal_setor'])) ?></td>
                                    <td><?= htmlspecialchars($setor['keterangan']) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="6">Belum ada hasil yang disetor.</td>
                            </tr>
                        <?php endif; ?>
                    </table>
                </section>
            </main>
        </div>
    </div>
</body>

</html>
