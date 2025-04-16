<?php
include '../koneksi.php';

session_start();
// simpan data u ser
$_SESSION['userId'] = $user['id'];



if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($koneksi, $query);
    if ($result) {
        header("Location: ../dashboard.php");
    }
}
