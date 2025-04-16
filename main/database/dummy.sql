-- Insert dummy data into Users table
INSERT INTO Users (name, email, password, role)
VALUES
  ('John Doe', 'johndoe@example.com', 'password123', 'pembeli'),
  ('Jane Doe', 'janedoe@example.com', 'password456', 'penjual'),
  ('Bob Smith', 'bobsmith@example.com', 'password789', 'admin'),
  ('Rina Wijaya', 'rinawijaya@example.com', 'password101', 'penjual'),
  ('Tono Sutanto', 'tonosutanto@example.com', 'password202', 'pembeli');

-- Insert dummy data into Produk table
INSERT INTO Produk (user_id, nama_produk, kategori, harga, stok, deskripsi, foto_url, lokasi)
VALUES
  (2, 'Beras Cianjur', 'Hasil Tani', 12000.00, 100, 'Beras putih kualitas premium', 'https://example.com/beras.jpg', 'Cianjur'),
  (4, 'Telur Ayam Kampung', 'Hasil Ternak', 18000.00, 50, 'Telur ayam kampung segar', 'https://example.com/telur.jpg', 'Sleman'),
  (2, 'Jagung Manis', 'Hasil Tani', 8000.00, 75, 'Jagung manis siap masak', 'https://example.com/jagung.jpg', 'Cianjur'),
  (5, 'Susu Sapi Murni', 'Hasil Ternak', 25000.00, 30, 'Susu sapi murni tanpa pengawet', 'https://example.com/susu.jpg', 'Lembang'),
  (4, 'Sayur Bayam', 'Hasil Tani', 4000.00, 60, 'Bayam segar dari kebun sendiri', 'https://example.com/bayam.jpg', 'Sleman'),
  (3, 'Nasi Merah Organik', 'Pangan', 16000.00, 40, 'Nasi merah sehat dan alami', 'https://example.com/nasi-merah.jpg', 'Magelang'),
  (1, 'Tomat Segar', 'Sayur & Buah', 6000.00, 80, 'Tomat merah segar siap konsumsi', 'https://example.com/tomat.jpg', 'Bandung'),
  (2, 'Alpukat Mentega', 'Sayur & Buah', 25000.00, 50, 'Alpukat mentega dari kebun lokal', 'https://example.com/alpukat.jpg', 'Garut'),
  (4, 'Bibit Kelapa Sawit', 'Perkebunan', 35000.00, 25, 'Bibit unggul kelapa sawit', 'https://example.com/kelapa-sawit.jpg', 'Riau'),
  (5, 'Pupuk Organik Granul', 'Perkebunan', 20000.00, 60, 'Pupuk organik untuk tanaman keras', 'https://example.com/pupuk.jpg', 'Kudus'),
  (2, 'Minyak Kelapa Murni', 'Industri', 30000.00, 40, 'Minyak kelapa hasil olahan mandiri', 'https://example.com/minyak.jpg', 'Bali'),
  (3, 'Keripik Pisang', 'Industri', 12000.00, 100, 'Keripik pisang manis renyah', 'https://example.com/keripik.jpg', 'Yogyakarta'),
  (4, 'Sapi Bali Betina', 'Ternak Besar', 8500000.00, 5, 'Sapi bali sehat umur 2 tahun', 'https://example.com/sapi.jpg', 'Denpasar'),
  (1, 'Kambing Etawa', 'Ternak Kecil', 2500000.00, 10, 'Kambing Etawa siap ternak', 'https://example.com/kambing.jpg', 'Malang'),
  (3, 'Bebek Peking', 'Unggas', 70000.00, 40, 'Bebek Peking untuk konsumsi', 'https://example.com/bebek.jpg', 'Brebes'),
  (5, 'Ayam Petelur', 'Unggas', 60000.00, 60, 'Ayam petelur siap produksi', 'https://example.com/ayam-petelur.jpg', 'Purwokerto'),
  (4, 'Domba Garut', 'Ternak Kecil', 1800000.00, 8, 'Domba garut jantan siap jual', 'https://example.com/domba.jpg', 'Garut'),
  (2, 'Jagung Pipilan Kering', 'Pangan', 7000.00, 150, 'Jagung kering siap giling', 'https://example.com/jagung-pipil.jpg', 'Madura'),
  (1, 'Salak Pondoh', 'Sayur & Buah', 12000.00, 100, 'Salak pondoh manis dari Sleman', 'https://example.com/salak.jpg', 'Sleman'),
  (3, 'Minyak Nilam', 'Industri', 75000.00, 20, 'Minyak atsiri dari nilam asli', 'https://example.com/nilam.jpg', 'Aceh');