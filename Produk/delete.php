<?php
include 'connectDatabase.php';

if (isset($_GET['id_produk'])) {
    $id_produk = $_GET['id_produk'];
    $query = "DELETE FROM produk WHERE id_produk = '$id_produk'";
    
    if (mysqli_query($koneksi, $query)) {
        header("Location: produk.php");
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>
