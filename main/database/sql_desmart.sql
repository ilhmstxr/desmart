-- Tabel Users (pengguna sistem: pembeli, penjual, admin)
CREATE TABLE Users (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
email VARCHAR(100) UNIQUE NOT NULL,
password VARCHAR(255) NOT NULL,
role VARCHAR(20) NOT NULL, -- (pembeli, penjual, admin)
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabel Profil_Usaha (merchant yang dapat menjual produk)
CREATE TABLE Profil_Usaha (
id INT AUTO_INCREMENT PRIMARY KEY,
user_id INT NOT NULL,
nama_usaha VARCHAR(100),
deskripsi TEXT,
kontak VARCHAR(100),
alamat VARCHAR(255),
FOREIGN KEY (user_id) REFERENCES Users(id)
);

-- Tabel Setor_Hasil (stok gudang milik profil usaha)
CREATE TABLE Setor_Hasil (
id              INT AUTO_INCREMENT PRIMARY KEY,
profil_usaha_id INT NOT NULL,
nama_komoditas  VARCHAR(100) NOT NULL,
jumlah          INT NOT NULL,
satuan          VARCHAR(50),
tanggal_setor   TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
keterangan      TEXT,
FOREIGN KEY (profil_usaha_id) REFERENCES Profil_Usaha(id)
);

-- Tabel Produk (etalase barang yang dijual dari hasil panen/ternak)
CREATE TABLE Produk (
id               INT AUTO_INCREMENT PRIMARY KEY,
profil_usaha_id  INT NOT NULL,
setor_id         INT, -- opsional, jika produk berasal dari stok
nama_produk      VARCHAR(100) NOT NULL,
kategori         VARCHAR(50),
harga            DECIMAL(10,2) NOT NULL,
stok             INT DEFAULT 0,
deskripsi        TEXT,
foto_url         VARCHAR(255),
lokasi           VARCHAR(100),
created_at       TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
FOREIGN KEY (profil_usaha_id) REFERENCES Profil_Usaha(id),
FOREIGN KEY (setor_id) REFERENCES Setor_Hasil(id) ON DELETE SET NULL
);

-- Tabel Pemakaian_Stok (log penggunaan stok hasil panen untuk produk)
CREATE TABLE Pemakaian_Stok (
id         INT AUTO_INCREMENT PRIMARY KEY,
setor_id   INT NOT NULL,
produk_id  INT NOT NULL,
jumlah     INT NOT NULL,
tanggal    TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
FOREIGN KEY (setor_id) REFERENCES Setor_Hasil(id),
FOREIGN KEY (produk_id) REFERENCES Produk(id)
);

-- Tabel Transaksi
CREATE TABLE Transaksi (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT NOT NULL, -- pembeli
  total DECIMAL(12,2) NOT NULL,
  status VARCHAR(10) DEFAULT 'menunggu_pembayaran', -- ENUM'menunggu_pembayaran', 'diproses', 'dikirim', 'selesai', 'dibatalkan'
  metode_pembayaran VARCHAR(50),
  tanggal_transaksi TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  alamat_pengiriman TEXT,
  catatan TEXT,
  FOREIGN KEY (user_id) REFERENCES Users(id)
);

-- Tabel Transaksi_Detail
CREATE TABLE Transaksi_Detail (
  id INT AUTO_INCREMENT PRIMARY KEY,
  transaksi_id INT NOT NULL, 
  produk_id INT NOT NULL,
  jumlah INT NOT NULL,
  harga_satuan DECIMAL(10,2) NOT NULL,
  subtotal DECIMAL(10,2) NOT NULL,
  FOREIGN KEY (transaksi_id) REFERENCES Transaksi(id), -- foreign key ke tabel transaksi
  FOREIGN KEY (produk_id) REFERENCES Produk(id) -- foreign key ke tabel produk
);

-- Tabel Keranjang
CREATE TABLE Keranjang (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT NOT NULL,
  produk_id INT NOT NULL,
  jumlah INT NOT NULL,
  FOREIGN KEY (user_id) REFERENCES Users(id),
  FOREIGN KEY (produk_id) REFERENCES Produk(id)
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

-- -- tabel jadwal panen (pending)
-- CREATE TABLE Jadwal_Panen (
--   id INT AUTO_INCREMENT PRIMARY KEY,
--   profil_usaha_id INT NOT NULL,
--   komoditas VARCHAR(100),
--   tanggal_panen DATE,
--   estimasi_hasil INT,
--   satuan VARCHAR(50),
--   catatan TEXT,
--   FOREIGN KEY (profil_usaha_id) REFERENCES Profil_Usaha(id)
-- );

-- tabel ulasan (pending)
-- CREATE TABLE Ulasan_Produk (
--   id INT AUTO_INCREMENT PRIMARY KEY,
--   produk_id INT,
--   user_id INT,
--   rating INT CHECK (rating BETWEEN 1 AND 5),
--   komentar TEXT,
--   tanggal TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
--   FOREIGN KEY (produk_id) REFERENCES Produk(id),
--   FOREIGN KEY (user_id) REFERENCES Users(id)
-- );

--  tabel alamat pengiriman (pending)
-- CREATE TABLE Alamat_Pengiriman (
--   id INT AUTO_INCREMENT PRIMARY KEY,
--   user_id INT,
--   label VARCHAR(50), -- Rumah, Kantor, dll
--   alamat_lengkap TEXT,
--   kota VARCHAR(100),
--   kode_pos VARCHAR(10),
--   nomor_hp VARCHAR(20),
--   FOREIGN KEY (user_id) REFERENCES Users(id)
-- );

-- -- Tabel Lahan (lahan milik petani untuk pelacakan panen) (pending)
-- CREATE TABLE Lahan (
-- id INT AUTO_INCREMENT PRIMARY KEY,
-- profil_usaha_id INT NOT NULL,
-- nama_lahan VARCHAR(100),
-- lokasi TEXT,
-- luas DECIMAL(10,2), -- dalam hektar
-- deskripsi TEXT,
-- FOREIGN KEY (profil_usaha_id) REFERENCES Profil_Usaha(id)
-- );

-- -- Tabel Panen (catatan hasil panen dari lahan) (pending)
-- CREATE TABLE Panen (
-- id INT AUTO_INCREMENT PRIMARY KEY,
-- lahan_id INT NOT NULL,
-- nama_komoditas VARCHAR(100),
-- jumlah INT,
-- satuan VARCHAR(50),
-- tanggal_panen DATE,
-- keterangan TEXT,
-- FOREIGN KEY (lahan_id) REFERENCES Lahan(id)
-- );

-- -- Tabel Logistik (pelacakan pengiriman produk) (pending)
-- CREATE TABLE Logistik (
-- id INT AUTO_INCREMENT PRIMARY KEY,
-- transaksi_id INT NOT NULL,
-- status_pengiriman VARCHAR(50),
-- tanggal_update TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
-- lokasi_terkini VARCHAR(100),
-- keterangan TEXT,
-- FOREIGN KEY (transaksi_id) REFERENCES Transaksi(id)
-- );

