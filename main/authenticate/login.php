<?php
include '../koneksi.php';

session_start();

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // ambil data user berdasarkan email
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($koneksi, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        // jika password tidak di-hash, langsung bandingkan:
        if ($password === $user['password']) {
            $_SESSION['userId'] = $user['id']; // GUNAKAN nama kolom sebenarnya
            header("Location: ../Dashboard/01_Dashboard.html");
        } else {
            echo "<script>alert('Email atau password salah!'); window.location.href='login.html';</script>";
        }
    } else {
        echo false; // email tidak ditemukan
    }
}