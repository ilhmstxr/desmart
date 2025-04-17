<?php
include '../koneksi.php';
$id = $_POST['user_id'];

$query = "DELETE FROM user WHERE user_id = '$id'";
$result = mysqli_query($koneksi, $query);
echo "<script>alert('User telah dihapus!'); window.location.href='../dashboard.php';</script>";
