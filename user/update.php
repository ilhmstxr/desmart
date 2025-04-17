<?php
include '../koneksi.php';

if (isset($_POST['id']) && isset($_POST['email']) && isset($_POST['password'])) {
    $id = $_POST['id'];
    $email = $_POST['email'];
    $password = $_POST['password']; // Pastikan password dienkripsi jika perlu

    // Update data di database
    $query = "UPDATE user SET email = '$email', password = '$password' WHERE user_id = '$id'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>alert('Data berhasil diperbarui!'); window.location.href='../dashboard.php';</script>";
    } else {
        echo "<script>alert('Gagal memperbarui data!'); window.location.href='user/edit.php?id=$id';</script>";
    }
} else {
    echo "<script>alert('Data tidak lengkap!'); window.location.href='../dashboard.php';</script>";
}
