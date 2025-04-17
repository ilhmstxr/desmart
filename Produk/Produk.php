<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: auto;
            background: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f8f8f8;
        }
        .form-group {
            margin-bottom: 15px;
        }
        input, button {
            padding: 10px;
            margin: 5px 0;
        }
        .btn {
            cursor: pointer;
            border: none;
            padding: 10px 15px;
        }
        .btn-primary {
            background-color: #007bff;
            color: white;
        }
        .btn-warning {
            background-color: #ffc107;
            color: black;
        }
        .btn-danger {
            background-color: #dc3545;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Daftar Produk</h2>
        
        <!-- Form Tambah Produk -->
        <form action="create.php" method="POST">
            <div class="form-group">
                <input type="text" name="nama_produk" placeholder="Nama Produk" required>
            </div>
            <div class="form-group">
                <input type="number" name="harga" placeholder="Harga" required>
            </div>
            <div class="form-group">
                <input type="number" name="qty" placeholder="Jumlah (Qty)" required>
            </div>
            <div class="form-group">
                <input type="number" name="status" placeholder="Status" required>
            </div>
            <button type="submit" name="tambah" class="btn btn-primary">Tambah Produk</button>
        </form>

        <!-- Tabel Produk -->
        <table>
            <thead>
                <tr>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Qty</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php include 'read.php'; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
