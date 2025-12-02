<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FurnitureApik | Admin Produk</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <style>
    body {
      font-family: "Poppins", sans-serif;
      background: #fafafa;
      margin: 0;
      padding: 20px;
    }

    .admin-container {
      max-width: 1100px;
      margin: 0 auto;
      background: white;
      padding: 25px;
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .admin-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: #f1f1f1;
      color: #130b0b;
      padding: 15px 25px;
      border-radius: 8px;
      margin-bottom: 20px;
      flex-wrap: wrap;
      gap: 10px;
    }

    .btn-logout {
      background-color: #cb1100;
      border: none;
      padding: 10px 18px;
      color: white;
      font-weight: 600;
      border-radius: 6px;
      cursor: pointer;
      transition: background 0.3s;
    }

    .btn-logout:hover {
      background-color: #000;
    }

    .btn-primary,
    .btn-secondary {
      border: none;
      padding: 10px 16px;
      border-radius: 6px;
      font-weight: 600;
      cursor: pointer;
    }

    .btn-primary {
      background: #3aaaf9;
      color: white;
    }

    .btn-primary:hover {
      background: #2996e0;
    }

    .btn-secondary {
      background: #ccc;
    }

    .btn-secondary:hover {
      background: #bbb;
    }

    .actions {
      margin-bottom: 15px;
      display: flex;
      justify-content: flex-end;
    }

    .product-table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 15px;
      overflow-x: auto;
      display: block;
    }

    .product-table th,
    .product-table td {
      border: 1px solid #e0e0e0;
      padding: 12px;
      text-align: center;
      font-size: 14px;
      word-break: break-word;
    }

    .product-table th {
      background: #f3f3f3;
    }

    .product-table img.thumb {
      width: 80px;
      height: 80px;
      object-fit: cover;
      border-radius: 6px;
    }

    /* ====== Popup ====== */
    .popup {
      display: none;
      justify-content: center;
      align-items: center;
      position: fixed;
      inset: 0;
      background: rgba(0, 0, 0, 0.5);
      z-index: 1000;
      padding: 15px;
      overflow-y: auto;
      /* agar bisa discroll di layar kecil */
    }

    .popup-content {
      background: #fff;
      padding: 20px 25px;
      width: 420px;
      max-width: 100%;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
      animation: popupFade 0.3s ease;
    }

    @keyframes popupFade {
      from {
        opacity: 0;
        transform: translateY(-10px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .popup-content h3 {
      margin-bottom: 15px;
      text-align: center;
      font-size: 18px;
      color: #333;
    }

    .popup-content input,
    .popup-content textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 12px;
      border-radius: 6px;
      border: 1px solid #ddd;
      font-size: 14px;
    }

    .preview-main {
      display: block;
      width: 100%;
      max-height: 200px;
      object-fit: cover;
      margin-bottom: 10px;
      border-radius: 6px;
    }

    .preview-small {
      width: 60px;
      height: 60px;
      object-fit: cover;
      border-radius: 4px;
      margin-right: 5px;
    }

    .preview-side {
      display: flex;
      gap: 5px;
      margin-bottom: 10px;
      flex-wrap: wrap;
    }

    .form-buttons {
      display: flex;
      justify-content: flex-end;
      gap: 10px;
    }

    /* ==================== RESPONSIVE ==================== */
    @media (max-width: 500px) {
      body {
        padding: 10px;
      }

      .admin-container {
        padding: 15px;
      }

      .admin-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
        text-align: left;
        padding: 15px;
      }

      .admin-header h2 {
        font-size: 18px;
      }

      .actions {
        justify-content: center;
      }

      .product-table th,
      .product-table td {
        font-size: 12px;
        padding: 8px;
      }

      .product-table img.thumb {
        width: 60px;
        height: 60px;
      }

      /* ===== Responsif untuk Popup ===== */
      .popup {
        align-items: flex-start;
        padding: 10px;
      }

      .popup-content {
        width: 100%;
        max-width: 100%;
        border-radius: 8px;
        margin-top: 50px;
        /* beri jarak dari atas agar tidak nempel */
      }

      .popup-content h3 {
        font-size: 16px;
        margin-bottom: 10px;
      }

      .popup-content input,
      .popup-content textarea {
        font-size: 13px;
        padding: 10px;
        padding-right: 0%;
      }

      .preview-main {
        max-height: 160px;
      }

      .preview-small {
        width: 50px;
        height: 50px;
      }

      .form-buttons {
        flex-direction: column;
        gap: 8px;
      }

      .form-buttons button {
        width: 100%;
        font-size: 14px;
        padding: 10px;
      }
    }
  </style>

</head>

<body>
  <div class="admin-container">
    <!-- Header Admin -->
    <div class="admin-header">
      <h2>{{ __('Panel Admin - FurnitureApik') }}</h2>
      <button class="btn-logout" onclick="logout()">{{ __('Logout') }}</button>
    </div>

    <h2>{{ __('Daftar Produk') }}</h2>

    <div class="actions">
      <button id="addProductBtn" class="btn-primary">+ Tambah Produk</button>
    </div>

    <table class="product-table">
      <thead>
        <tr>
          <th>Foto</th>
          <th>Nama Produk</th>
          <th>Harga</th>
          <th>Deskripsi</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody id="productTableBody">
        <!-- data produk diisi lewat JS -->
      </tbody>
    </table>
  </div>

  <!-- Popup Form Tambah/Edit Produk -->
  <div class="popup" id="productPopup">
    <div class="popup-content">
      <h3 id="popupTitle">{{ __('Tambah Produk') }}</h3>
      <form id="productForm">
        <label>Foto Produk:</label>
        <input type="file" id="productImage" accept="image/*" multiple required />

        <div class="preview-wrapper">
          <img id="previewImage" class="preview-main" src="" alt="Preview Utama" />
          <div class="preview-side" id="previewSide"></div>
        </div>

        <label>Nama Produk:</label>
        <input type="text" id="productName" required />

        <label>Harga (Rp):</label>
        <input type="number" id="productPrice" required />

        <label>Deskripsi:</label>
        <textarea id="productDesc" rows="4" required></textarea>

        <div class="form-buttons">
          <button type="button" class="btn-secondary" id="cancelBtn">{{ __('Batal') }}</button>
          <button type="submit" class="btn-primary">{{ __('Simpan') }}</button>
        </div>
      </form>
    </div>
  </div>

  <script>
    const user = JSON.parse(localStorage.getItem("user"));
    if (!user) {
      Swal.fire({
        title: "Akses Ditolak!",
        text: "Silakan login terlebih dahulu.",
        icon: "warning",
        confirmButtonColor: "#f39c12",
      }).then(() => window.location.href = "login.html");
    } else if (user.email !== "rikkarikku1@gmail.com") {
      Swal.fire({
        title: "Akses Dibatasi!",
        text: "Hanya admin yang dapat membuka halaman ini.",
        icon: "error",
        confirmButtonColor: "#d33",
      }).then(() => window.location.href = "index.html");
    }

    function logout() {
      Swal.fire({
        title: "Keluar dari Akun?",
        text: "Anda akan keluar dari sesi admin.",
        icon: "question",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonColor: "#3085d6",
        confirmButtonText: "Ya, keluar",
        cancelButtonText: "Batal"
      }).then(result => {
        if (result.isConfirmed) {
          localStorage.removeItem("user");
          Swal.fire({
            title: "Berhasil Logout",
            text: "Anda telah keluar.",
            icon: "success",
            confirmButtonColor: "#3aaaf9",
          }).then(() => window.location.href = "login.html");
        }
      });
    }

    const addProductBtn = document.getElementById('addProductBtn');
    const popup = document.getElementById('productPopup');
    const cancelBtn = document.getElementById('cancelBtn');
    const form = document.getElementById('productForm');
    const preview = document.getElementById('previewImage');
    const productTableBody = document.getElementById('productTableBody');
    const imageInput = document.getElementById('productImage');

    let db;
    let editIndex = null;
    let uploadedImages = [];

    const request = indexedDB.open('FurnitureApikDB', 1);
    request.onerror = e => console.error('❌ IndexedDB error:', e);
    request.onsuccess = e => { db = e.target.result; renderProducts(); };
    request.onupgradeneeded = e => {
      db = e.target.result;
      db.createObjectStore('products', { keyPath: 'id', autoIncrement: true });
    };

    form.addEventListener('submit', e => {
      e.preventDefault();
      const name = document.getElementById('productName').value;
      const price = parseInt(document.getElementById('productPrice').value);
      const desc = document.getElementById('productDesc').value;
      const product = { name, price, desc, images: uploadedImages };

      const tx = db.transaction('products', 'readwrite');
      const store = tx.objectStore('products');
      editIndex !== null ? (product.id = editIndex, store.put(product)) : store.add(product);

      tx.oncomplete = () => {
        popup.style.display = 'none';
        Swal.fire({
          title: "Berhasil!",
          text: editIndex ? "Produk berhasil diperbarui." : "Produk berhasil ditambahkan.",
          icon: "success",
          confirmButtonColor: "#3aaaf9",
        });
        renderProducts();
      };
    });

    function renderProducts() {
      const tx = db.transaction('products', 'readonly');
      const store = tx.objectStore('products');
      store.getAll().onsuccess = e => {
        const products = e.target.result;
        productTableBody.innerHTML = "";
        products.forEach(p => {
          const thumb = p.images?.[0] || "";
          productTableBody.innerHTML += `
            <tr>
              <td><img src="${thumb}" alt="Produk" class="thumb"></td>
              <td>${p.name}</td>
              <td>Rp${p.price.toLocaleString('id-ID')}</td>
              <td>${p.desc}</td>
              <td>
                <button class="btn-primary" onclick="editProduct(${p.id})">{{ __('Edit') }}</button>
                <button class="btn-secondary" onclick="deleteProduct(${p.id})">{{ __('Hapus') }}</button>
              </td>
            </tr>
          `;
        });
      };
    }

    function editProduct(id) {
      const tx = db.transaction('products', 'readonly');
      const store = tx.objectStore('products');
      store.get(id).onsuccess = e => {
        const p = e.target.result;
        editIndex = id;
        document.getElementById('popupTitle').textContent = 'Edit Produk';
        document.getElementById('productName').value = p.name;
        document.getElementById('productPrice').value = p.price;
        document.getElementById('productDesc').value = p.desc;
        preview.src = p.images?.[0] || '';
        uploadedImages = p.images || [];
        popup.style.display = 'flex';
      };
    }

    function deleteProduct(id) {
      Swal.fire({
        title: "Hapus Produk?",
        text: "Tindakan ini tidak bisa dibatalkan.",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonColor: "#3085d6",
        confirmButtonText: "Ya, hapus",
        cancelButtonText: "Batal"
      }).then(result => {
        if (result.isConfirmed) {
          const tx = db.transaction('products', 'readwrite');
          tx.objectStore('products').delete(id);
          tx.oncomplete = () => {
            Swal.fire("Terhapus!", "Produk berhasil dihapus.", "success");
            renderProducts();
          };
        }
      });
    }

    addProductBtn.addEventListener('click', () => {
      editIndex = null;
      form.reset();
      preview.src = '';
      uploadedImages = [];
      document.getElementById('popupTitle').textContent = 'Tambah Produk';
      popup.style.display = 'flex';
    });

    cancelBtn.addEventListener('click', () => popup.style.display = 'none');

    imageInput.addEventListener('change', e => {
      const files = Array.from(e.target.files).slice(0, 4);
      uploadedImages = [];
      const previewSide = document.getElementById('previewSide');
      previewSide.innerHTML = '';

      files.forEach(file => {
        const reader = new FileReader();
        reader.onload = ev => {
          uploadedImages.push(ev.target.result);
          const img = document.createElement('img');
          img.src = ev.target.result;
          img.className = 'preview-small';
          previewSide.appendChild(img);
        };
        reader.readAsDataURL(file);
      });

      if (files.length > 0) preview.src = URL.createObjectURL(files[0]);
    });
  </script>
</body>

</html>