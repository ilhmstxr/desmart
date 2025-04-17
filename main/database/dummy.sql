-- Data Dummy
-- Users
INSERT INTO Users (name, email, password, role) VALUES
('Andi Petani', 'andi@desa.com', 'password123', 'seller'),
('Budi Pembeli', 'budi@kota.com', 'password123', 'customer'),
('Citra Peternak', 'citra@desa.com', 'password123', 'seller');

-- Profil Usaha
INSERT INTO Profil_Usaha (user_id, nama_usaha, deskripsi, kontak, alamat) VALUES
(1, 'Usaha Tani Subur', 'Menjual hasil pertanian segar dari desa.', '08123456789', 'Desa Sukamaju'),
(3, 'Peternakan Sapi Maju', 'Hasil ternak lokal berkualitas.', '08987654321', 'Desa Kertajaya');

-- Setor Hasil
INSERT INTO Setor_Hasil (profil_usaha_id, nama_komoditas, jumlah, satuan, keterangan) VALUES
(1, 'Beras Cianjur', 500, 'kg', 'Beras hasil panen Oktober'),
(1, 'Jagung', 300, 'kg', 'Jagung manis segar'),
(2, 'Sapi Potong', 10, 'ekor', 'Siap potong'),
(2, 'Susu Sapi Segar', 200, 'liter', 'Diperah pagi hari');

-- Produk (25 jenis, variasi dari hasil pertanian dan peternakan)
INSERT INTO Produk (profil_usaha_id, setor_id, nama_produk, kategori, harga, stok, deskripsi, foto_url, lokasi) VALUES
(1, 1, 'Beras Organik 1kg', 'Pangan', 12000, 100, 'Beras putih organik dari Cianjur', '', 'Cianjur'),
(1, 1, 'Beras Merah 1kg', 'Pangan', 15000, 50, 'Beras merah sehat dan alami', '', 'Cianjur'),
(1, 2, 'Jagung Manis 500g', 'Sayur & Buah', 8000, 60, 'Jagung segar langsung dari ladang', '', 'Cianjur'),
(1, 2, 'Jagung Pipil Kering 1kg', 'Industri', 10000, 40, 'Untuk bahan pakan atau industri', '', 'Cianjur'),
(2, 3, 'Daging Sapi Segar 1kg', 'Ternak Besar', 120000, 20, 'Potongan daging sapi segar', '', 'Kertajaya'),
(2, 3, 'Iga Sapi 1kg', 'Ternak Besar', 140000, 10, 'Iga sapi premium', '', 'Kertajaya'),
(2, 4, 'Susu Sapi Botol 1L', 'Ternak Besar', 20000, 50, 'Susu sapi segar botolan', '', 'Kertajaya'),
(2, 4, 'Susu Pasteurisasi 1L', 'Ternak Besar', 25000, 30, 'Susu sapi dipasteurisasi', '', 'Kertajaya'),
(1, NULL, 'Tomat Merah 1kg', 'Sayur & Buah', 10000, 100, 'Tomat segar dari ladang', '', 'Sukamaju'),
(1, NULL, 'Wortel Organik 1kg', 'Sayur & Buah', 9000, 80, 'Wortel sehat bebas pestisida', '', 'Sukamaju'),
(1, NULL, 'Bayam Hijau 1 ikat', 'Sayur & Buah', 5000, 70, 'Bayam segar dan hijau', '', 'Sukamaju'),
(1, NULL, 'Cabai Merah Keriting 1kg', 'Sayur & Buah', 30000, 25, 'Cabai pedas segar', '', 'Sukamaju'),
(1, NULL, 'Kacang Panjang 1 ikat', 'Sayur & Buah', 4000, 40, 'Kacang panjang muda', '', 'Sukamaju'),
(1, NULL, 'Terong Ungu 1kg', 'Sayur & Buah', 8000, 30, 'Terong segar', '', 'Sukamaju'),
(2, NULL, 'Ayam Kampung 1 ekor', 'Unggas', 50000, 15, 'Ayam kampung siap masak', '', 'Kertajaya'),
(2, NULL, 'Telur Ayam 1 lusin', 'Unggas', 27000, 40, 'Telur ayam kampung segar', '', 'Kertajaya'),
(2, NULL, 'Daging Kambing 1kg', 'Ternak Kecil', 110000, 15, 'Daging kambing segar', '', 'Kertajaya'),
(2, NULL, 'Kambing Potong 1 ekor', 'Ternak Kecil', 1800000, 3, 'Kambing sehat siap potong', '', 'Kertajaya'),
(2, NULL, 'Daging Ayam 1kg', 'Unggas', 35000, 25, 'Potongan ayam kampung', '', 'Kertajaya'),
(1, NULL, 'Madu Hutan 250ml', 'Industri', 45000, 10, 'Madu asli dari hutan', '', 'Sukamaju'),
(1, NULL, 'Minyak Kelapa 1L', 'Industri', 35000, 20, 'Minyak kelapa alami', '', 'Sukamaju'),
(1, NULL, 'Kopi Arabika 200g', 'Perkebunan', 30000, 30, 'Kopi biji arabika panggang', '', 'Sukamaju'),
(1, NULL, 'Teh Hijau Kering 100g', 'Perkebunan', 15000, 25, 'Teh hijau dari perkebunan lokal', '', 'Sukamaju'),
(1, NULL, 'Bawang Merah 1kg', 'Sayur & Buah', 20000, 45, 'Bawang merah lokal', '', 'Sukamaju'),
(1, NULL, 'Ubi Cilembu 1kg', 'Pangan', 12000, 50, 'Ubi manis dari Cilembu', '', 'Sukamaju');

-- dummy transaksi
-- 10 Transaksi tambahan, selang-seling antara 2 seller
INSERT INTO Transaksi (user_id, profil_usaha_id, total, status, metode_pembayaran, alamat_pengiriman, catatan) VALUES
(2, 1, 38000.00, 'selesai', 'Transfer Bank', 'Jl. Melati No.10', 'Cepat ya'),
(2, 2, 175000.00, 'dikirim', 'COD', 'Jl. Dahlia No.20', ''),
(2, 1, 42000.00, 'diproses', 'E-wallet', 'Jl. Melati No.10', 'Titip tetangga'),
(2, 2, 140000.00, 'menunggu_pembayaran', 'Transfer Bank', 'Jl. Dahlia No.20', 'Kirim jam 9'),
(2, 1, 55000.00, 'selesai', 'Transfer Bank', 'Jl. Melati No.10', ''),
(2, 2, 195000.00, 'diproses', 'COD', 'Jl. Dahlia No.20', ''),
(2, 1, 22000.00, 'selesai', 'E-wallet', 'Jl. Melati No.10', 'Segera ya'),
(2, 2, 150000.00, 'dikirim', 'Transfer Bank', 'Jl. Dahlia No.20', 'Kambing jangan lupa'),
(2, 1, 27000.00, 'selesai', 'E-wallet', 'Jl. Melati No.10', ''),
(2, 2, 215000.00, 'diproses', 'Transfer Bank', 'Jl. Dahlia No.20', 'Telur duluan ya');

-- dummy transaksi detail
INSERT INTO Transaksi_Detail (transaksi_id, produk_id, jumlah, harga_satuan, subtotal) VALUES
-- Transaksi 3
(3, 10, 2, 9000.00, 18000.00),
(3, 13, 2, 10000.00, 20000.00),

-- Transaksi 4
(4, 6, 1, 140000.00, 140000.00),
(4, 8, 1, 25000.00, 25000.00),
(4, 16, 1, 10000.00, 10000.00),

-- Transaksi 5
(5, 11, 2, 5000.00, 10000.00),
(5, 14, 1, 30000.00, 30000.00),
(5, 23, 1, 2000.00, 2000.00),

-- Transaksi 6
(6, 6, 1, 140000.00, 140000.00),

-- Transaksi 7
(7, 19, 1, 45000.00, 45000.00),
(7, 20, 1, 10000.00, 10000.00),

-- Transaksi 8
(8, 15, 1, 50000.00, 50000.00),
(8, 16, 1, 27000.00, 27000.00),
(8, 5, 1, 120000.00, 120000.00),

-- Transaksi 9
(9, 24, 1, 20000.00, 20000.00),
(9, 21, 1, 2000.00, 2000.00),

-- Transaksi 10
(10, 7, 2, 20000.00, 40000.00),
(10, 5, 1, 110000.00, 110000.00)