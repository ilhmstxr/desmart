<?php
include 'connectDatabase.php';

if (isset($_GET['id_produk'])) {
    $id_produk = $_GET['id_produk'];
    $result = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk = '$id_produk'");
    $row = mysqli_fetch_assoc($result);
}

if (isset($_POST['update'])) {
    $id_produk = $_POST['id_produk'];
    $nama_produk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $qty = $_POST['qty'];
    $status = $_POST['status'];

    $query = "UPDATE produk SET nama_produk='$nama_produk', harga='$harga', qty='$qty', status='$status' WHERE id_produk='$id_produk'";
    if (mysqli_query($koneksi, $query)) {
        header("Location: Produk.php");
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
</head>
<body>
    <h2>Edit Produk</h2>
    <form action="update.php" method="POST">
        <input type="hidden" name="id_produk" value="<?php echo $row['id_produk']; ?>">
        <label>Nama Produk:</label>
        <input type="text" name="nama_produk" value="<?php echo $row['nama_produk']; ?>" required>
        <br>
        <label>Harga:</label>
        <input type="number" name="harga" value="<?php echo $row['harga']; ?>" required>
        <br>
        <label>Qty:</label>
        <input type="number" name="qty" value="<?php echo $row['qty']; ?>" required>
        <br>
        <label>Status:</label>
        <input type="number" name="status" value="<?php echo $row['status']; ?>" required>
        <br>
        <button type="submit" name="update">Update</button>
    </form>
</body>
</html>
