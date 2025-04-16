<?php
include '../koneksi.php';

// Pastikan ID tersedia di URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil data berdasarkan ID
    $query = "SELECT * FROM user WHERE user_id = '$id'";
    $result = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_assoc($result);

    // Jika data tidak ditemukan
    if (!$data) {
        echo "<script>alert('User tidak ditemukan!'); window.location.href='dashboard.php';</script>";
        exit();
    }
} else {
    echo "<script>alert('ID tidak valid!'); window.location.href='dashboard.php';</script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <title>Edit User</title>
    <link href="../dashboard.css" rel="stylesheet">

</head>

<body>
    <div class="container-fluid pt-5">

        <div class="card mb-4">
            <div class="card-header">
                Edit User </div>
            <div class="card-body">

                <form class="user" action="update.php" method="post">
                    <input type="hidden" name="id" value="<?= $data['user_id']; ?>">

                    <div class="form-group">
                        <input type="email" class="form-control form-control-user" name="email"
                            id="exampleInputEmail" value="<?= $data['email']; ?>" placeholder="Masukkan Email" required>
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control form-control-user" name="password"
                            id="exampleInputPassword" placeholder="Masukkan Password Baru" required>
                    </div>

                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Simpan Perubahan
                            </button>
                        </div>
                        <div class="col">
                            <a href="../dashboard.php" class="btn btn-secondary btn-user btn-block">
                                Batal
                            </a>
                        </div>
                    </div>

                </form>
            </div>
        </div>


    </div>
</body>

</html>