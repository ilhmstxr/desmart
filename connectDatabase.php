<?php
$host = "localhost"; 
$user = "root"; 
$password = ""; 
$database = "desmart"; 

$koneksi = mysqli_connect($host, $user, $password, $database); 
if (!$koneksi) { 
die("Koneksi gagal: " . mysqli_connect_error()); 
} 
?>

Koneksi ke database menggunakan PDO

<?php
try { 
    $dsn = "mysql:host=localhost;dbname=desmart"; 
    $username = "root"; 
    $password = ""; 
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION); 
     
    $pdo = new PDO($dsn, $username, $password, $options); 
    echo "Koneksi berhasil!"; 
} catch (PDOException $e) { 
    echo "Koneksi gagal: " . $e->getMessage(); 
} 
?>