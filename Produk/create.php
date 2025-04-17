<?php
include 'connectDatabase.php';

if (isset($_POST['tambah'])) {
    $nama_produk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $qty = $_POST['qty'];
    $status = $_POST['status'];

    $query = "INSERT INTO produk (nama_produk, harga, qty, status) VALUES ('$nama_produk', '$harga', '$qty', '$status')";
    if (mysqli_query($koneksi, $query)) {
        header("Location: Produk.php");
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>
