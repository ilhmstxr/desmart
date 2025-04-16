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

