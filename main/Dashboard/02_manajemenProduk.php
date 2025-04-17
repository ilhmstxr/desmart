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
    $queryProduk = "SELECT * FROM Produk WHERE profil_usaha_id = $profilUsahaId ORDER BY created_at ASC";
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
    <style>
        .form-container {
            background: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            margin: 30px auto;
        }

        .form-container h2 {
            font-size: 24px;
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            font-size: 14px;
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
            width: 100%;
            box-sizing: border-box;
        }

        .error-message {
            color: red;
            font-size: 12px;
            margin-top: 5px;
            display: none;
        }

        .btn {
            width: 100%;
            padding: 12px;
            background: #4CAF50;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            transition: background 0.3s ease;
        }

        .btn:hover {
            background: #45a049;
        }
    </style>
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
                    <li><a href="01_Dashboard.php">Dashboard</a></li>
                    <li class="active"><a href="#">Manajemen Produk</a></li>
                    <li><a href="03_setorHasilUsaha.php">Setor Hasil Usaha</a></li>
                    <li><a href="04_katalogProduk.php">Lihat Katalog Produk</a></li>
                    <li><a href="05_pesanan.php">Pesanan</a></li>
                    <li><a href="06_riwayatPenjualan.php">Riwayat Penjualan</a></li>
                    <li><a href="07_pengaturan.php">Pengaturan</a></li>
                    <li><a href="08_laporanAnalitik.php">Laporan & Analitik</a></li>
                    <li><a href="../authenticate/logout.php">Keluar</a></li>
                </ul>
            </nav>

            <main>
            <div class="form-container">
                    <h2>Form Tambah Produk</h2>
                    <form id="produkForm" action="02_simpanProduk.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="profil_usaha_id" value="<?= $profilUsahaId ?>">

                        <div class="form-group">
                            <label for="nama_produk">Nama Produk</label>
                            <input type="text" id="nama_produk" name="nama_produk" required>
                        </div>

                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <input type="text" id="kategori" name="kategori">
                        </div>

                        <div class="form-group">
                            <label for="harga">Harga (Rp)</label>
                            <input type="number" id="harga" name="harga" step="0.01" required>
                        </div>

                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <input type="number" id="stok" name="stok" required>
                        </div>

                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea id="deskripsi" name="deskripsi" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="foto">Foto Produk</label>
                            <input type="file" id="foto" name="foto" accept="image/*">
                        </div>

                        <div class="form-group">
                            <label for="lokasi">Lokasi</label>
                            <input type="text" id="lokasi" name="lokasi">
                        </div>

                        <div class="form-group">
                            <label for="setor_id">Berasal dari Setoran</label>
                            <select id="setor_id" name="setor_id">
                                <option value="">-- Tidak Ada --</option>
                                <?php
                                $querySetor = "SELECT id, nama_komoditas, tanggal_setor FROM Setor_Hasil WHERE profil_usaha_id = $profilUsahaId ORDER BY tanggal_setor DESC";
                                $resultSetor = mysqli_query($koneksi, $querySetor);
                                while ($setor = mysqli_fetch_assoc($resultSetor)) {
                                    $tanggal = date('d-m-Y', strtotime($setor['tanggal_setor']));
                                    echo "<option value=\"{$setor['id']}\">{$setor['nama_komoditas']} - {$tanggal}</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <button type="submit" class="btn">Simpan Produk</button>
                    </form>
                </div>

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

    <script>
        function validateTextInput(input) {
            let regex = /[^a-zA-Z\s]/g;
            let errorMessage = document.getElementById("error-message");

            if (regex.test(input.value)) {
                errorMessage.style.display = "block";
                input.value = input.value.replace(regex, '');
            } else {
                errorMessage.style.display = "none";
            }
        }
    </script>
</body>

</html>
