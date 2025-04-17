<?php
include 'connectDatabase.php';

$result = mysqli_query($koneksi, "SELECT * FROM produk");

if (!$result) {
    die("Query error: " . mysqli_error($koneksi));
}

// Hanya menampilkan isi tabel, tanpa <table> dan <thead>
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>{$row['nama_produk']}</td>
            <td>Rp " . number_format($row['harga'], 0, ',', '.') . "</td>
            <td>{$row['qty']}</td>
            <td>{$row['status']}</td>
            <td>
                <a href='update.php?id_produk={$row['id_produk']}' class='btn btn-warning'>Edit</a>
                <a href='delete.php?id_produk={$row['id_produk']}' class='btn btn-danger' onclick='return confirm(\"Yakin ingin menghapus?\");'>Hapus</a>
            </td>
          </tr>";
}
?>
