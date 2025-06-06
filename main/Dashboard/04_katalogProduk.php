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
                    <li class="active"><a href="#">Lihat Katalog Produk</a></li>
                    <li><a href="05_pesanan.php">Pesanan</a></li>
                    <li><a href="06_riwayatPenjualan.php">Riwayat Penjualan</a></li>
                    <li><a href="07_pengaturan.php">Pengaturan</a></li>
                    <li><a href="08_laporanAnalitik.php">Laporan & Analitik</a></li>
                    <li><a href="#">Keluar</a></li>
                </ul>
            </nav>
            <!-- dashboard -->
            <main>
                <section class="overview">
                    <h2> Katalog Produk</h2>
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
                    <h2>Manajemen Tugas</h2>
                    <table>
                        <tr>
                            <th>Tugas</th>
                            <th>Penanggung Jawab</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                        </tr>
                        <tr>
                            <td>Panen Gandum</td>
                            <td>Amba</td>
                            <td>26-Jun-2025</td>
                            <td>Dalam Proses</td>
                        </tr>
                        <tr>
                            <td>Pengaplikasian Pupuk</td>
                            <td>Rusdi</td>
                            <td>20-Jun-2025</td>
                            <td>Pending</td>
                        </tr>
                    </table>
                </section>
            </main>
        </div>
    </div>
</body>

</html>