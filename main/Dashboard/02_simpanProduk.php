<?php
include '../koneksi.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id              = isset($_POST['id']) ? intval($_POST['id']) : null;
    $profil_usaha_id = intval($_POST['profil_usaha_id']);
    $nama_produk     = mysqli_real_escape_string($koneksi, $_POST['nama_produk']);
    $kategori        = mysqli_real_escape_string($koneksi, $_POST['kategori']);
    $harga           = floatval($_POST['harga']);
    $stok            = intval($_POST['stok']);
    $deskripsi       = mysqli_real_escape_string($koneksi, $_POST['deskripsi']);
    $lokasi          = mysqli_real_escape_string($koneksi, $_POST['lokasi']);
    $setor_id        = !empty($_POST['setor_id']) ? intval($_POST['setor_id']) : "NULL";

    // Handle upload foto
    $foto_url = '';
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
        $targetDir = "../uploads/produk/";
        if (!file_exists($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        $fileName = basename($_FILES['foto']['name']);
        $fileExt = pathinfo($fileName, PATHINFO_EXTENSION);
        $newFileName = uniqid('produk_') . '.' . $fileExt;
        $targetFilePath = $targetDir . $newFileName;

        if (move_uploaded_file($_FILES['foto']['tmp_name'], $targetFilePath)) {
            $foto_url = $targetFilePath;
        }
    }

    // Cek apakah produk sudah ada (edit mode)
    if (!empty($id)) {
        $cekQuery = "SELECT id FROM Produk WHERE id = $id AND profil_usaha_id = $profil_usaha_id";
        $cekResult = mysqli_query($koneksi, $cekQuery);

        if ($cekResult && mysqli_num_rows($cekResult) > 0) {
            // Update data produk
            $updateQuery = "UPDATE Produk SET 
                nama_produk = '$nama_produk',
                kategori = '$kategori',
                harga = $harga,
                stok = $stok,
                deskripsi = '$deskripsi',
                lokasi = '$lokasi',
                setor_id = $setor_id";

            if (!empty($foto_url)) {
                $updateQuery .= ", foto_url = '$foto_url'";
            }

            $updateQuery .= " WHERE id = $id AND profil_usaha_id = $profil_usaha_id";

            if (mysqli_query($koneksi, $updateQuery)) {
                echo "<script>alert('Produk berhasil diperbarui'); window.location.href='02_manajemenProduk.php';</script>";
            } else {
                echo "Gagal update produk: " . mysqli_error($koneksi);
            }
            exit();
        }
    }

    // Jika tidak ditemukan, lakukan INSERT
    $insertQuery = "INSERT INTO Produk (
        profil_usaha_id, setor_id, nama_produk, kategori, harga, stok, deskripsi, foto_url, lokasi
    ) VALUES (
        $profil_usaha_id, $setor_id, '$nama_produk', '$kategori', $harga, $stok, '$deskripsi', '$foto_url', '$lokasi'
    )";

    if (mysqli_query($koneksi, $insertQuery)) {
        echo "<script>alert('Produk berhasil disimpan'); window.location.href='02_manajemenProduk.php';</script>";
    } else {
        echo "Gagal menyimpan produk: " . mysqli_error($koneksi);
    }
}
?>
