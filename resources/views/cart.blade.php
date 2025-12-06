<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cart Furniture</title>

    <!-- utilities & main CSS -->
    <link rel="stylesheet" href="{{ asset('css/utilities.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex: 1;
            /* menjaga footer di bawah */
            padding-top: 100px;
        }
    </style>
</head>

<body>

    @include('partials.navbar')

    <style>
        .container {
            width: 90%;
        }

        .body {
            padding-bottom: 90px;
        }

        h2 {
            font-family: "NotoIKEA", "Verdana", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            font-size: 3rem;
        }

        .cart-item {
            display: grid;
            grid-template-columns: 130px 1fr 200px 150px;
            align-items: center;
            gap: 20px;
            padding: 25px 0;
            border-top: 1px solid #000000ff;
            /* ← garis atas */
            border-bottom: 1px solid #000000ff;
            /* ← garis bawah */
        }

        .cart-item img {
            width: 120px;
            border-radius: 4px;
        }

        .info small {
            background: #ffdd00;
            padding: 4px 7px;
            border-radius: 4px;
            font-weight: bold;
        }

        .item-price {
            background: #ffdd00;
            padding: 5px 12px;
            display: inline-block;
            margin-top: 8px;
            border-radius: 4px;
            font-weight: bold;
        }

        .qty-control {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
        }

        .qty-control button {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            border: 1px solid #ccc;
            background: white;
            cursor: pointer;
            font-size: 18px;
        }

        .subtotal {
            font-weight: bold;
            font-size: 20px;
        }

        .icons {
            display: flex;
            gap: 15px;
            font-size: 22px;
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .cart-item {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .qty-control {
                justify-content: center;
            }
        }

        .cart-header {
            display: grid;
            text-align: center;
            grid-template-columns: 130px 1fr 200px 150px;
            gap: 20px;
        }


        /* ITEM LAYOUT */
        .cart-item {
            display: grid;
            grid-template-columns: 130px 1fr 200px 150px;
            align-items: center;
            gap: 20px;
            padding: 25px 0;
            border-top: 1px solid #000;
        }

        .cart-item img {
            width: 120px;
            border-radius: 4px;
        }

        /* QTY MIRIP IKEA */
        .qty-control {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 15px;
            border: 2px solid #ddd;
            padding: 10px 25px;
            border-radius: 40px;
            width: fit-content;
            margin: auto;
        }

        .qty-control button {
            background: none;
            border: none;
            font-size: 22px;
            cursor: pointer;
        }

        /* BAGIAN SUBTOTAL + ICON */
        .subtotal-area {
            text-align: center;

        }

        .subtotal-area .subtotal {
            font-size: 1.4rem;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .delete-button {
            position: relative;
            border-radius: 6px;
            width: 115px;
            /* Lebar diperkecil */
            height: 36px;
            cursor: pointer;
            display: flex;
            align-items: center;
            border: 1px solid #cc0000;
            background-color: #e50000;
            overflow: hidden;
            transition: all 0.3s;
            transform: translateX(15px);

        }

        /* animasi umum */
        .delete-button .button__text,
        .delete-button .button__icon {
            transition: all 0.3s;
        }

        /* posisi teks */
        .delete-button .button__text {
            transform: translateX(25px);
            /* disesuaikan dari 35px */
            color: #fff;
            font-weight: 600;
            font-size: 14px;
        }

        /* ikon */
        .delete-button .button__icon {
            position: absolute;
            transform: translateX(82px);
            /* dari 109px jadi lebih kecil */
            height: 100%;
            width: 33px;
            /* dari 39px */
            background-color: #cc0000;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* ukuran ikon SVG */
        .delete-button .svg {
            width: 18px;
            /* lebih kecil agar proporsional */
        }

        /* hover */
        .delete-button:hover {
            background: #cc0000;
        }

        .delete-button:hover .button__text {
            color: transparent;
        }

        .delete-button:hover .button__icon {
            width: 113px;
            /* disesuaikan dari 148px */
            transform: translateX(0);
        }

        /* active */
        .delete-button:active .button__icon {
            background-color: #b20000;
        }

        .delete-button:active {
            border: 1px solid #b20000;
        }

        .checkout-btn {
            margin-top: 20px;
            margin-bottom: 20px;
            width: 100%;
            background: #000;
            color: #fff;
            padding: 15px;
            font-size: 16px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: 0.3s;
        }

        .checkout-btn:hover {
            background: #333;
        }

        .address-box {
            margin-top: 20px;
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.08);
            overflow: hidden;
        }

        /* HEADER */
        .address-header {
            padding: 16px 20px;
            display: flex;
            justify-content: space-between;
            font-weight: 600;
            font-size: 16px;
            cursor: pointer;
            user-select: none;
        }

        .address-header .arrow {
            transition: transform 0.3s;
        }

        .address-header.active .arrow {
            transform: rotate(180deg);
        }

        /* FORM (disembunyikan awalnya) */
        .address-form {
            padding: 0 20px;
            padding-bottom: 0;
            display: flex;
            flex-direction: column;
            gap: 14px;

            max-height: 0;
            overflow: hidden;
            transition: max-height 0.45s ease;
        }

        .address-form.show {
            max-height: 1200px;
            padding: 20px 20px 20px;
            /* cukup besar untuk seluruh form */
        }

        .address-form label {
            font-weight: 600;
            font-size: 15px;
            margin-bottom: -6px;
        }

        .address-form input,
        .address-form select {
            padding: 12px;
            width: 100%;
            border-radius: 12px;
            border: 1px solid #ddd;
            font-size: 15px;
            outline: none;
        }


        .btn-submit {
            background: #f36f21;
            color: #fff;
            padding: 14px;
            border-radius: 12px;
            border: none;
            font-size: 16px;
            margin-top: 5px;
        }

        /* BOX UTAMA */
        .shipping-box {
            background: #fff;
            border-radius: 14px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.06);
            margin-top: 20px;
            overflow: hidden;
        }

        /* HEADER */
        .shipping-header {
            padding: 15px 18px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .shipping-header .arrow-ship {
            transition: 0.3s;
        }

        .shipping-header.active .arrow-ship {
            transform: rotate(180deg);
        }

        /* OPSI (Tersembunyi awalnya) */
        .shipping-options {
            padding: 0 15px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.45s ease, padding 0.3s ease;
        }

        /* Ketika terbuka */
        .shipping-options.show {
            max-height: 1000px;
            padding: 15px;
        }

        /* Desain kartu tetap sama seperti punya Anda */
        .ship-card {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 14px;
            background: #fafafa;
            border-radius: 12px;
            margin-bottom: 10px;
            border: 1px solid #e4e4e4;
            cursor: pointer;
            transition: 0.2s;
        }

        .ship-card:hover {
            background: #f1f1f1;
        }

        .ship-card input {
            transform: scale(1.2);
            margin-right: 12px;
        }

        .ship-info {
            flex: 1;
            margin-left: 10px;
        }

        .ship-title {
            font-size: 15px;
            font-weight: 600;
        }

        .ship-desc {
            font-size: 13px;
            color: #777;
        }

        .ship-price {
            font-weight: 600;
            font-size: 15px;
            white-space: nowrap;
        }


        .address-summary {
            background: #fff;
            border: 1px solid #ddd;
            padding: 15px;
            margin-top: 15px;
            border-radius: 8px;
        }

        .address-summary button {
            margin-top: 10px;
            padding: 8px 14px;
            background: #007bff;
            color: #fff;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        .address-summary button:hover {
            background: #0056b3;
        }

        /* ============================
   SUPER SMALL DEVICES (≤ 360px)
   ============================ */
        @media (max-width: 475px) {
            .container {
                width: 95%;
            }

            h2 {
                font-size: 2rem !important;
                margin: 2rem auto;
            }

            .cart-header {
                display: none;
            }

            .cart-item {
                grid-template-columns: 100px 1fr;
                /* FOTO | INFO */
                text-align: left;
                padding: 15px 0;
                gap: 10px;
            }

            .cart-item img {
                width: 85px;
            }

            .info h3 {
                font-size: 15px;
                margin-bottom: 5px;
            }

            .info p {
                font-size: 12px;
                line-height: 14px;
            }

            .item-price {
                font-size: 13px;
                padding: 4px 7px;
            }

            .qty-control {
                order: 2;
                /* pindah tepat setelah subtotal */
                justify-content: flex-start;
                margin-left: 16px;

                /* ukuran kecil */
                gap: 6px;
                padding: 4px 10px;
                border-radius: 20px;
                transform: scale(0.85);
                transform-origin: left;
            }

            .qty-control button {
                font-size: 16px;
                /* angka tombol diperkecil */
            }

            .qty-control span {
                font-size: 15px;
                /* angka qty diperkecil */
            }
        }

        /* Subtotal */
        .subtotal-area .subtotal {
            font-size: 1.2rem;
            margin: 0;
        }

        .delete-button {
            transform: translateX(0);
        }

        /* Delete button */
        .delete-button {
            width: 90px;
            height: 32px;
            margin: 0 auto;
            /* pusat otomatis */
            transform: translateX(0);
            /* hilangkan geser */
        }

        .delete-button .button__text {
            font-size: 12px;
            transform: translateX(17px);
        }

        .delete-button .button__icon {
            width: 26px;
            transform: translateX(60px);
        }

        .delete-button:hover .button__icon {
            width: 90px;
        }

        /* ============================
   EXTRA SMALL (≤ 300px)
   ============================ */
        @media (max-width: 300px) {

            h2 {
                font-size: 1.4rem !important;
            }

            .cart-item img {
                width: 70px;
            }

            .qty-control {
                padding: 4px 10px;
                gap: 8px;
            }

            .delete-button {
                width: 80px;
                height: 28px;
            }

            .delete-button .button__text {
                font-size: 11px;
                transform: translateX(15px);
            }

            .delete-button .button__icon {
                width: 22px;
                transform: translateX(52px);
            }
        }
    </style>

    <body>
        <main>

            <div class="container">
                <h2>Keranjang Belanja Anda</h2>
                <div class="cart-header">
                    <div></div> <!-- kolom gambar (kosong) -->
                    <div></div> <!-- kolom nama (kosong) -->
                    <div>Jumlah</div> <!-- kolom QTY -->
                    <div>Subtotal</div> <!-- kolom subtotal -->
                </div>


                <div class="cart-item" data-price="250000" data-weight="3.84">

                    <img src="{{ asset('images/new_product_img_1.jpg') }}" alt="Kursi">

                    <div class="info">
                        <h3>Kursi</h3>
                        <p>kursi<br>Berat paket: 3.84 kg<br>Total berat paket: 7.68 kg</p>
                        <div class="item-price">Rp 250.000</div>
                    </div>

                    <!-- QTY -->
                    <div class="qty-control">
                        <button class="btn-minus">−</button>
                        <span class="qty">2</span>
                        <button class="btn-plus">+</button>
                    </div>

                    <!-- SUBTOTAL + DELETE -->
                    <div class="subtotal-area">
                        <div class="subtotal">Rp 500.000</div>
                        <!-- ICON DELETE -->

                        <button class="delete-button" type="button" onclick="removeItem()">
                            <span class="button__text">Delete</span>
                            <span class="button__icon">
                                <svg class="svg" height="512" viewBox="0 0 512 512" width="512"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M112,112l20,320c.95,18.49,14.4,32,32,32H348c17.67,0,30.87-13.51,32-32l20-320"
                                        style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px">
                                    </path>
                                    <line
                                        style="stroke:#fff;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px"
                                        x1="80" x2="432" y1="112" y2="112"></line>
                                    <path d="M192,112V72h0a23.93,23.93,0,0,1,24-24h80a23.93,23.93,0,0,1,24,24h0v40"
                                        style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px">
                                    </path>
                                    <line
                                        style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"
                                        x1="256" x2="256" y1="176" y2="400"></line>
                                    <line
                                        style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"
                                        x1="184" x2="192" y1="176" y2="400"></line>
                                    <line
                                        style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"
                                        x1="328" x2="320" y1="176" y2="400"></line>
                                </svg>
                            </span>
                        </button>
                    </div>
                </div>

                <div class="address-box">

                    <!-- HEADER -->
                    <div class="address-header" onclick="toggleAddress()">
                        <span>Tambah Alamat Baru</span>
                        <span class="arrow">▼</span>
                    </div>

                    <!-- FORM DI DALAM BOX YANG SAMA -->
                    <div class="address-form" id="addressForm">

                        <label>Label Alamat</label>
                        <input type="text" id="label_alamat" placeholder="Rumah / Kos / Kantor">

                        <small>Beri label alamat untuk memudahkan anda memilih alamat</small>

                        <label>Provinsi</label>
                        <select id="provinsi"></select>

                        <label>Kabupaten / Kota</label>
                        <select id="kabupaten"></select>

                        <label>Kecamatan</label>
                        <select id="kecamatan"></select>

                        <label>Kelurahan</label>
                        <select id="kelurahan"></select>

                        <label>Alamat</label>
                        <input type="text" id="alamat" placeholder="Nama jalan, RT/RW, patokan">

                        <label>Nama Penerima</label>
                        <input type="text" id="nama">

                        <label>No Handphone</label>
                        <input type="text" id="nohp">

                        <button class="btn-submit">Simpan Alamat</button>

                    </div>

                </div>


                <div class="address-summary" style="display:none;">
                    <div id="summary-text"></div>
                    <button class="btn-edit">Ubah Alamat</button>
                </div>

                <div class="shipping-box">

                    <!-- HEADER -->
                    <div class="shipping-header" onclick="toggleShipping()">
                        <span>Pilih Layanan Pengiriman</span>
                        <span class="arrow-ship">▼</span>
                    </div>

                    <!-- OPSI PENGIRIMAN -->
                    <div class="shipping-options" id="shippingOptions">

                        <!-- JNT Cargo -->
                        <label class="ship-card">
                            <input type="radio" name="shipping" value="jnt_cargo" data-price="25000">
                            <div class="ship-info">
                                <div class="ship-title">JNT Cargo</div>
                                <div class="ship-desc">Estimasi 2-4 hari</div>
                            </div>
                            <div class="ship-price">Rp 25.000</div>
                        </label>

                        <!-- JNE REG -->
                        <label class="ship-card">
                            <input type="radio" name="shipping" value="jne_reg" data-price="18000">
                            <div class="ship-info">
                                <div class="ship-title">JNE Regular</div>
                                <div class="ship-desc">Estimasi 2-3 hari</div>
                            </div>
                            <div class="ship-price">Rp 18.000</div>
                        </label>

                        <!-- SiCepat -->
                        <label class="ship-card">
                            <input type="radio" name="shipping" value="sicepat_reg" data-price="15000">
                            <div class="ship-info">
                                <div class="ship-title">SiCepat Regular</div>
                                <div class="ship-desc">Estimasi 1-2 hari</div>
                            </div>
                            <div class="ship-price">Rp 15.000</div>
                        </label>

                        <!-- AnterAja -->
                        <label class="ship-card">
                            <input type="radio" name="shipping" value="anteraja_reg" data-price="17000">
                            <div class="ship-info">
                                <div class="ship-title">AnterAja Regular</div>
                                <div class="ship-desc">Estimasi 2-3 hari</div>
                            </div>
                            <div class="ship-price">Rp 17.000</div>
                        </label>

                    </div>

                </div>


                <button class="checkout-btn">Checkout</button>



            </div>

            </div>
            </div>

        </main>
        <script>
            // Ambil Provinsi
            fetch("https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json")
                .then(res => res.json())
                .then(data => {
                    let provinsi = document.getElementById("provinsi");
                    provinsi.innerHTML = "<option value=''>Pilih Provinsi</option>";
                    data.forEach(p => {
                        provinsi.innerHTML += `<option value="${p.id}">${p.name}</option>`;
                    });
                });

            // On Change Provinsi => Load Kabupaten
            document.getElementById("provinsi").addEventListener("change", function () {
                let provID = this.value;
                fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/regencies/${provID}.json`)
                    .then(res => res.json())
                    .then(data => {
                        let kab = document.getElementById("kabupaten");
                        kab.innerHTML = "<option value=''>Pilih Kabupaten/Kota</option>";
                        data.forEach(k => {
                            kab.innerHTML += `<option value="${k.id}">${k.name}</option>`;
                        });
                    });
            });

            // On Change Kabupaten => Load Kecamatan
            document.getElementById("kabupaten").addEventListener("change", function () {
                let kabID = this.value;
                fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/districts/${kabID}.json`)
                    .then(res => res.json())
                    .then(data => {
                        let kec = document.getElementById("kecamatan");
                        kec.innerHTML = "<option value=''>Pilih Kecamatan</option>";
                        data.forEach(c => {
                            kec.innerHTML += `<option value="${c.id}">${c.name}</option>`;
                        });
                    });
            });

            // On Change Kecamatan => Load Kelurahan
            document.getElementById("kecamatan").addEventListener("change", function () {
                let kecID = this.value;
                fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/villages/${kecID}.json`)
                    .then(res => res.json())
                    .then(data => {
                        let kel = document.getElementById("kelurahan");
                        kel.innerHTML = "<option value=''>Pilih Kelurahan</option>";
                        data.forEach(d => {
                            kel.innerHTML += `<option value="${d.id}">${d.name}</option>`;
                        });
                    });
            });
        </script>

        <script>

            // format angka → Rupiah
            function formatRupiah(num) {
                return "Rp " + num.toLocaleString("id-ID");
            }

            // hitung ulang subtotal global
            function updateTotal() {
                let total = 0;
                document.querySelectorAll(".cart-item").forEach(item => {
                    let price = parseInt(item.dataset.price);
                    let qty = parseInt(item.querySelector(".qty").innerText);
                    total += price * qty;
                });
                document.getElementById("floatingTotal").innerText = formatRupiah(total);
            }

            // + qty
            document.addEventListener("click", e => {
                if (e.target.classList.contains("btn-plus")) {
                    let item = e.target.closest(".cart-item");
                    let qty = item.querySelector(".qty");
                    qty.innerText = parseInt(qty.innerText) + 1;

                    // update subtotal item
                    let price = parseInt(item.dataset.price);
                    item.querySelector(".subtotal").innerText = formatRupiah(price * qty.innerText);

                    updateTotal();
                }
            });

            // - qty
            document.addEventListener("click", e => {
                if (e.target.classList.contains("btn-minus")) {
                    let item = e.target.closest(".cart-item");
                    let qty = item.querySelector(".qty");
                    let current = parseInt(qty.innerText);

                    if (current > 1) {
                        qty.innerText = current - 1;

                        let price = parseInt(item.dataset.price);
                        item.querySelector(".subtotal").innerText = formatRupiah(price * qty.innerText);

                        updateTotal();
                    }
                }
            });

            // saat halaman pertama kali dibuka
            updateTotal();

        </script>
        <script>
            document.addEventListener("click", e => {

                // Cek apakah tombol delete ditekan
                if (e.target.closest(".delete-button")) {

                    let item = e.target.closest(".cart-item");

                    Swal.fire({
                        title: "Hapus Item?",
                        text: "Item ini akan dihapus dari keranjang.",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#d33",
                        cancelButtonColor: "#3085d6",
                        confirmButtonText: "Ya, hapus",
                        cancelButtonText: "Batal",
                    }).then(result => {

                        if (result.isConfirmed) {

                            // 🔥 Hapus item setelah user setuju
                            item.remove();
                            updateTotal();

                            Swal.fire({
                                title: "Terhapus!",
                                text: "Item berhasil dihapus.",
                                icon: "success",
                                confirmButtonColor: "#3aaaf9",
                                timer: 1300,
                                showConfirmButton: false
                            });

                        }

                    });

                }

            });
        </script>

        <script>
            function toggleAddress() {
                const form = document.getElementById('addressForm');
                const header = document.querySelector('.address-header');

                form.classList.toggle('show');     // buka / tutup form
                header.classList.toggle('active'); // rotasi arrow
            }
        </script>

        <script>
            function toggleShipping() {
                const box = document.getElementById('shippingOptions');
                const header = document.querySelector('.shipping-header');

                box.classList.toggle('show');
                header.classList.toggle('active');
            }
        </script>


        <!-- Leaflet CSS -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

        <!-- Leaflet JS -->
        <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

        <script>
            // Inisialisasi Maps di posisi default
            var map = L.map('map').setView([-6.200000, 106.816666], 13); // Jakarta

            // Load tile OpenStreetMap gratis
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19
            }).addTo(map);

            var marker;

            // Klik pada maps -> simpan lokasi
            map.on('click', function (e) {
                var lat = e.latlng.lat;
                var lng = e.latlng.lng;

                document.getElementById("lat").value = lat;
                document.getElementById("lng").value = lng;

                // Hapus marker sebelumnya
                if (marker) {
                    map.removeLayer(marker);
                }

                // Tambah marker baru
                marker = L.marker([lat, lng]).addTo(map);
            });
        </script>

        <script>
            document.querySelector(".btn-submit").onclick = function () {

                // Get value dari inputan
                let label = document.getElementById("label_alamat").value;
                let prov = document.getElementById("provinsi").selectedOptions[0]?.text;
                let kab = document.getElementById("kabupaten").selectedOptions[0]?.text;
                let kec = document.getElementById("kecamatan").selectedOptions[0]?.text;
                let kel = document.getElementById("kelurahan").selectedOptions[0]?.text;
                let alamat = document.getElementById("alamat").value;
                let nama = document.getElementById("nama").value;
                let nohp = document.getElementById("nohp").value;

                // Validasi simple
                if (!label || !alamat || !nama || !nohp) {
                    alert("Harap lengkapi semua data!");
                    return;
                }

                // Buat ringkasan alamat
                let summaryHTML = `
        <strong>${label}</strong> <br>
        ${alamat} <br>
        Kel. ${kel}, Kec. ${kec} <br>
        ${kab}, ${prov} <br><br>
        <strong>Nama penerima:</strong> ${nama} <br>
        <strong>No HP:</strong> ${nohp}
    `;

                document.getElementById("summary-text").innerHTML = summaryHTML;

                // Hide form → show summary
                document.querySelector(".address-form").style.display = "none";
                document.querySelector(".address-summary").style.display = "block";
            };

            // Tombol "Ubah Alamat"
            document.querySelector(".btn-edit").onclick = function () {
                document.querySelector(".address-form").style.display = "block";
                document.querySelector(".address-summary").style.display = "none";
            };
        </script>

    </body>
    @include('partials.footer')

</html>