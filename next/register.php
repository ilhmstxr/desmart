<?php
include '../koneksi.php';

if (isset($_POST['register'])) {
    // list parameter
    $email = $_POST['emailUser'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // cek keocockan password & confirm password 
    if ($password !== $confirm_password) {
        // error
        echo "<script>alert('Konfirmasi password tidak cocok!'); window.location.href='../authenticate/register.php';</script>";
        exit();
        // header("Location: ../authenticate/register.php");
    }

    // cek email 
    $query = "SELECT * FROM user WHERE email = '$email'";
    $queryIDterakhir = "SELECT MAX(user_id) AS last_id FROM user";
    $resultID = mysqli_query($koneksi, $queryIDterakhir);
    $result = mysqli_query($koneksi, $query);

    // jika email & password belum ditemukan 
    if (mysqli_num_rows($result) > 0) {
        // email sudah terpakai
        echo "<script>alert('Email sudah digunakan!'); window.location.href='../authenticate/register.php';</script>";
    } else {

        $id_sebelumnya = mysqli_fetch_assoc($resultID);
        $uid = ++$id_sebelumnya['last_id'];
        $query = "INSERT INTO user (user_id,email, password,role) VALUES ($uid,'$email', '$password','user')";
        if (mysqli_query($koneksi, $query)) {
            echo "<script>alert('Registrasi berhasil! Silakan login.'); window.location.href='../authenticate/login.html';</script>";
        } else {
            echo "<script>alert('Registrasi gagal, coba lagi!'); window.location.href='../authenticate/register.html';</script>";
        }
    }
}
