<?php 
include 'connectDatabase.php'; 
if(isset($_POST['submit'])){ 
  $nama = $_POST['nama']; 
//   $profesi = $_POST['profesi']; 
  $nik = $_POST['nik']; 
  $tanggal_lahir = $_POST['tanggal_lahir'];
  $alamat = $_POST['alamat'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $noHp = $_POST['no_hp'];
   
  $query = "INSERT INTO user (nama, nik, tanggal_lahir, alamat, jenis_kelamin, no_ho) VALUES ('$nama', '$nik', '$tanggal_lahir', '$alamat', '$jenis_kelamin', '$no_hp')"; 
  mysqli_query($koneksi, $query); 
  echo "Data berhasil ditambahkan."; 
} 
?>