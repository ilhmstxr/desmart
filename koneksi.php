<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "desmart";

$koneksi = mysqli_connect($host, $user, $password, $db);

if (!$koneksi) {
    die("gagal : " . mysqli_connect_error());
}
?>
