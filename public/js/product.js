// js/product.js
window.addEventListener("DOMContentLoaded", () => {
  // Ambil parameter id dari URL (contoh: product.html?id=2)
  const params = new URLSearchParams(window.location.search);
  const id = parseInt(params.get("id"));

  // Ambil semua produk dari localStorage
  const products = JSON.parse(localStorage.getItem("products")) || [];

  // Jika id tidak valid atau produk tidak ditemukan
  if (isNaN(id) || !products[id]) {
    document.querySelector(".product-container").innerHTML =
      "<h2 style='text-align:center; width:100%'>Produk tidak ditemukan.</h2>";
    return;
  }

  // Ambil data produk berdasarkan id
  const product = products[id];

  // Isi data ke HTML
  document.getElementById("productName").textContent = product.name;
  document.getElementById("productDesc").textContent = product.desc;
  document.getElementById("productPrice").textContent =
    "Rp " + product.price.toLocaleString("id-ID");

  // Tampilkan gambar utama
  const mainImage = document.getElementById("mainImage");
  const thumbContainer = document.getElementById("thumbnailContainer");

  // Jika produk punya banyak gambar (array), gunakan itu
  if (product.images && Array.isArray(product.images)) {
    mainImage.src = product.images[0];
    thumbContainer.innerHTML = "";

    product.images.forEach((src) => {
      const img = document.createElement("img");
      img.src = src;
      img.onclick = () => (mainImage.src = src);
      thumbContainer.appendChild(img);
    });
  } else {
    // Jika cuma satu gambar
    mainImage.src = product.image || "images/no-image.png";
  }
});

// Quantity control
document.addEventListener("DOMContentLoaded", () => {
  const minusBtn = document.getElementById("minusBtn");
  const plusBtn = document.getElementById("plusBtn");
  const quantityInput = document.getElementById("quantity");

  minusBtn.addEventListener("click", () => {
    let value = parseInt(quantityInput.value);
    if (value > 1) {
      quantityInput.value = value - 1;
    }
  });

  plusBtn.addEventListener("click", () => {
    let value = parseInt(quantityInput.value);
    quantityInput.value = value + 1;
  });
});
