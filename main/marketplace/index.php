<?php
include '../koneksi.php';
session_start();

// Ambil data produk dari database
$query = "SELECT * FROM Produk";
$result = mysqli_query($koneksi, $query);
$produkList = [];

while ($row = mysqli_fetch_assoc($result)) {
  $produkList[] = $row;
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DESMART</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="marketplace.css" />
</head>

<body>
  <header>
    <h1>DESMART</h1>
  </header>

  <div class="main-container">
    <aside>
      <h3>Filter Kategori</h3>
      <div id="category-filters">
        <label><input type="checkbox" value="pangan" onchange="filterProducts()"> Pangan</label><br />
        <label><input type="checkbox" value="sayurbuah" onchange="filterProducts()"> Sayur & Buah</label><br />
        <label><input type="checkbox" value="perkebunan" onchange="filterProducts()"> Perkebunan</label><br />
        <label><input type="checkbox" value="industri" onchange="filterProducts()"> Industri</label><br />
        <label><input type="checkbox" value="ternakbesar" onchange="filterProducts()"> Ternak Besar</label><br />
        <label><input type="checkbox" value="ternakkecil" onchange="filterProducts()"> Ternak Kecil</label><br />
        <label><input type="checkbox" value="unggas" onchange="filterProducts()"> Unggas</label><br />
      </div>
      <h3 style="margin-top:1rem;">Urutkan Harga</h3>
      <label><input type="radio" name="priceSort" value="" checked onchange="filterProducts()"> Semua</label><br />
      <label><input type="radio" name="priceSort" value="low" onchange="filterProducts()"> Murah ke Mahal</label><br />
      <label><input type="radio" name="priceSort" value="high" onchange="filterProducts()"> Mahal ke Murah</label>
    </aside>

    <div style="flex: 1;">
      <section class="toolbar">
        <input type="text" id="search" placeholder="Cari produk..." oninput="searchProducts()" />
        <button onclick="viewCart()">🛒 Keranjang</button>
      </section>

      <main>
        <h2 style="padding: 1rem;">Katalog Produk</h2>
        <div id="product-list" class="product-grid"></div>

        <section id="cart-section">
          <form action="">
            <h3>Keranjang Belanja</h3>
            <ul id="cart-items"></ul>
            <!-- <button type="submit"><i class="fa-solid fa-cart-plus"></i></button> -->
            <button type="submit">Checkout</button>
          </form>
        </section>
      </main>
    </div>
  </div>

  <script>
    const cart = [];
    const allProducts = <?php echo json_encode($produkList); ?>;

    function saveCartToServer() {
      fetch("save_cart.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/json"
        },
        body: JSON.stringify({
          user_id: 1, // Sesuaikan dengan ID user login
          cart: cart
        })
      })
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          console.log("Keranjang berhasil disimpan ke server.");
        } else {
          console.error("Gagal menyimpan keranjang.");
        }
      })
      .catch(error => console.error("Error saat mengirim ke server:", error));
    }

    function addToCart(productName) {
      cart.push(productName);
      alert(`Ditambahkan ke keranjang: ${productName}`);
      updateCart();
    }

    function updateCart() {
      const cartList = document.getElementById("cart-items");
      cartList.innerHTML = "";
      cart.forEach(item => {
        const li = document.createElement("li");
        li.textContent = item;
        cartList.appendChild(li);
      });
    }

    function displayProducts(products) {
      const container = document.getElementById("product-list");
      container.innerHTML = "";
      products.forEach(p => {
        container.innerHTML += `
          <div class="product-card">
            <img src="images/${p.foto_url}" alt="${p.nama_produk}" />
            <h3>${p.nama_produk}</h3>
            <p>Rp${parseInt(p.harga).toLocaleString()} /kg</p>
            <button onclick="addToCart('${p.nama_produk}')">+ Keranjang</button>
          </div>`;
      });
    }

    function filterProducts() {
      const selectedCategories = Array.from(document.querySelectorAll('#category-filters input:checked')).map(cb => cb.value);
      const priceSort = document.querySelector('input[name="priceSort"]:checked').value;

      let filtered = allProducts.filter(p => selectedCategories.length === 0 || selectedCategories.includes(p.kategori));

      if (priceSort === "low") filtered.sort((a, b) => a.harga - b.harga);
      if (priceSort === "high") filtered.sort((a, b) => b.harga - a.harga);

      const searchQuery = document.getElementById("search").value.toLowerCase();
      filtered = filtered.filter(p => p.nama_produk.toLowerCase().includes(searchQuery));

      displayProducts(filtered);
    }

    function searchProducts() {
      filterProducts();
    }

    function viewCart() {
      document.getElementById("cart-section").scrollIntoView({ behavior: "smooth" });
    }

    window.onload = () => {
      displayProducts(allProducts);
    }
  </script>
</body>

</html>
