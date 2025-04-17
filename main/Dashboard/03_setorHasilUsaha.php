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

$setorList = [];
$profilUsahaId = 0;

if ($resultUsaha && mysqli_num_rows($resultUsaha) > 0) {
    $dataUsaha = mysqli_fetch_assoc($resultUsaha);
    $profilUsahaId = $dataUsaha['id'];

    // Ambil semua data setor hasil berdasarkan profil usaha
    $querySetor = "SELECT * FROM Setor_Hasil WHERE profil_usaha_id = $profilUsahaId ORDER BY tanggal_setor ASC";
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
            <h1>Selamat Datang di Desmart!</h1>
        </div>
        <div class="content-wrapper">
            <nav>
                <ul>
                    <li><a href="01_Dashboard.php">Dashboard</a></li>
                    <li><a href="02_manajemenProduk.php">Manajemen Produk</a></li>
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
                <div class="form-container">
                    <h2>Form Setor Ternak / Panen</h2>
                    <form id="panenForm" action="03_prosesSetor.php" method="POST">
                        <input type="hidden" name="profil_usaha_id" value="<?= $profilUsahaId ?>">
                        <div class="form-group">
                            <label for="nama_komoditas">Nama Komoditas</label>
                            <input type="text" id="nama_komoditas" name="nama_komoditas" required oninput="validateTextInput(this)">
                            <span class="error-message" id="error-message">Hanya bisa diisi menggunakan huruf</span>
                        </div>
                        <div class="form-group">
                            <label for="jumlah">Jumlah</label>
                            <input type="number" id="jumlah" name="jumlah" required>
                        </div>
                        <div class="form-group">
                            <label for="satuan">Satuan</label>
                            <select id="satuan" name="satuan">
                                <option value="ons">Ons</option>
                                <option value="ml">Mililiter (ml)</option>
                                <option value="gram">Gram (g)</option>
                                <option value="liter">Liter (L)</option>
                                <option value="kilogram">Kilogram (Kg)</option>
                                <option value="ton">Ton</option>
                                <option value="kuintal">Kuintal</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_setor">Tanggal Setor</label>
                            <input type="datetime-local" id="tanggal_setor" name="tanggal_setor">
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <textarea id="keterangan" name="keterangan" rows="3" placeholder="Opsional..."></textarea>
                        </div>
                        <button type="submit" class="btn">Simpan</button>
                    </form>
                </div>

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
