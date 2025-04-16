-- Tabel User
CREATE TABLE Users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100) UNIQUE NOT NULL,
  password VARCHAR(255) NOT NULL,
  role VARCHAR(20) NOT NULL, -- (pembeli, penjual, admin)
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabel Produk ?
CREATE TABLE Produk (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT NOT NULL, -- harusnya diganti profil usaha
  nama_produk VARCHAR(100) NOT NULL,
  kategori VARCHAR(50),
  harga DECIMAL(10,2) NOT NULL,
  stok INT DEFAULT 0,
  deskripsi TEXT,
  foto_url VARCHAR(255),
  lokasi VARCHAR(100),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (user_id) REFERENCES Users(id)
);

-- Tabel Transaksi
CREATE TABLE Transaksi (
  id INT AUTO_INCREMENT PRIMARY KEY,
  pembeli_id INT NOT NULL,
  tanggal_pesan DATETIME DEFAULT CURRENT_TIMESTAMP,
  status VARCHAR(20) DEFAULT 'menunggu',
  FOREIGN KEY (pembeli_id) REFERENCES Users(id) -- foreign key ke tabel user
);

-- Tabel Transaksi_Detail
CREATE TABLE Transaksi_Detail (
  id INT AUTO_INCREMENT PRIMARY KEY,
  transaksi_id INT NOT NULL, 
  produk_id INT NOT NULL,
  jumlah INT NOT NULL,
  subtotal DECIMAL(10,2) NOT NULL,
  FOREIGN KEY (transaksi_id) REFERENCES Transaksi(id), -- foreign key ke tabel transaksi
  FOREIGN KEY (produk_id) REFERENCES Produk(id) -- foreign key ke tabel produk
);

-- Tabel Artikel (pending)
-- CREATE TABLE Artikel (
--   id INT AUTO_INCREMENT PRIMARY KEY,
--   judul VARCHAR(150) NOT NULL,
--   isi TEXT NOT NULL,
--   kategori VARCHAR(50),
--   video_url VARCHAR(255),
--   created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
-- );

-- -- tabel harga (pending)
-- CREATE TABLE Harga_Harian (
--   id INT AUTO_INCREMENT PRIMARY KEY,
--   nama_komoditas VARCHAR(100) NOT NULL,
--   harga DECIMAL(10,2) NOT NULL,
--   tanggal DATE NOT NULL
-- );

-- -- tabel profil usaha (pending)
-- CREATE TABLE Profil_Usaha (
--   id INT AUTO_INCREMENT PRIMARY KEY,
--   user_id INT NOT NULL,
--   nama_usaha VARCHAR(100),
--   deskripsi TEXT,
--   kontak VARCHAR(100),
--   alamat VARCHAR(255),
--   FOREIGN KEY (user_id) REFERENCES Users(id)
-- );


