<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "desmart";

include '../koneksi.php';

function fetchProducts() {
  global $koneksi;
  $result = $koneksi->query("SELECT * FROM Produk");
  $products = [];
  while ($row = $result->fetch_assoc()) {
    $products[] = $row;
  }
  return $products;
}

$products = fetchProducts();
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DESMART</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="marketplace.css" />
</head>

<body>
  <header>
    <h1>DESMART</h1>
  </header>

  <div class="main-container">
    <aside>
      <h3>Filter Kategori</h3>
      <form method="GET">
        <div id="category-filters">
          <?php
          $categories = ["pangan", "sayurbuah", "perkebunan", "industri", "ternakbesar", "ternakkecil", "unggas"];
          foreach ($categories as $cat) {
            $checked = isset($_GET['kategori']) && in_array($cat, $_GET['kategori']) ? 'checked' : '';
            echo "<label><input type='checkbox' name='kategori[]' value='$cat' onchange='this.form.submit()' $checked> " . ucfirst($cat) . "</label><br />";
          }
          ?>
        </div>
        <h3 style="margin-top:1rem;">Urutkan Harga</h3>
        <?php
        $sort = $_GET['sort'] ?? '';
        ?>
        <label><input type="radio" name="sort" value="" onchange="this.form.submit()" <?= $sort == '' ? 'checked' : '' ?>> Semua</label><br />
        <label><input type="radio" name="sort" value="low" onchange="this.form.submit()" <?= $sort == 'low' ? 'checked' : '' ?>> Murah ke Mahal</label><br />
        <label><input type="radio" name="sort" value="high" onchange="this.form.submit()" <?= $sort == 'high' ? 'checked' : '' ?>> Mahal ke Murah</label>
      </form>
    </aside>

    <div style="flex: 1;">
      <section class="toolbar">
        <form method="GET">
          <input type="text" name="search" placeholder="Cari produk..." value="<?= $_GET['search'] ?? '' ?>" />
          <button type="submit">🔍 Cari</button>
        </form>
      </section>

      <main>
        <h2 style="padding: 1rem;">Katalog Produk</h2>
        <div id="product-list" class="product-grid"></div>

        <section id="cart-section">
          <h3>Keranjang Belanja</h3>
          <ul id="cart-items"></ul>
        <button onclick="checkout()">🛒 Checkout</button>
        </section>
      </main>
    </div>
  </div>

  <script>
    const cart = [];
    const allProducts = <?php echo json_encode($products); ?>;

    function checkout() {
      fetch("checkout.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/json"
        },
        body: JSON.stringify({
          user_id: 1,
          cart: cart
        })
      })
      .then(res => res.json())
      .then(data => {
        if (data.success) {
          alert("Checkout berhasil!");
          cart.length = 0;
          updateCart();
        } else {
          alert("Checkout gagal: " + data.message);
        }
      })
      .catch(err => {
        console.error("Checkout error:", err);
        alert("Terjadi kesalahan saat checkout.");
      });
    }

    function addToCart(productId) {
      const product = allProducts.find(p => p.id == productId);
      if (!product) return;
      const existing = cart.find(item => item.id == product.id);
      if (existing) {
        existing.jumlah += 1;
      } else {
        cart.push({ id: product.id, nama: product.nama_produk, harga: parseFloat(product.harga), jumlah: 1 });
      }
      alert(`Ditambahkan ke keranjang: ${product.nama_produk}`);
      updateCart();
    }

    function updateCart() {
      const cartList = document.getElementById("cart-items");
      cartList.innerHTML = "";
      cart.forEach(item => {
        const li = document.createElement("li");
        li.textContent = `${item.nama} x ${item.jumlah}`;
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
            <button onclick="addToCart('${p.id}')">+ Keranjang</button>
          </div>`;
      });
    }

    function filterProducts() {
      const selectedCategories = Array.from(document.querySelectorAll('#category-filters input:checked')).map(cb => cb.value);
      const priceSort = document.querySelector('input[name="sort"]:checked')?.value || "";

      let filtered = allProducts.filter(p => selectedCategories.length === 0 || selectedCategories.includes(p.kategori));

      if (priceSort === "low") filtered.sort((a, b) => a.harga - b.harga);
      if (priceSort === "high") filtered.sort((a, b) => b.harga - a.harga);

      const searchQuery = document.querySelector("input[name='search']")?.value.toLowerCase() || "";
      filtered = filtered.filter(p => p.nama_produk.toLowerCase().includes(searchQuery));

      displayProducts(filtered);
    }

    window.onload = () => {
      displayProducts(allProducts);
    };
  </script>
</body>

</html>