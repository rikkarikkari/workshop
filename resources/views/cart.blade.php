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

        h2 {
            font-family: "NotoIKEA", "Verdana", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            font-size: 3rem;
            margin: 4rem auto;
            margin-top: 2rem;
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

        .stickyCheckoutBottom {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: #ffffff;
            border-top: 2px solid #000;
            padding: 15px 20px;
            box-shadow: 0 -3px 12px rgba(0, 0, 0, 0.15);
            z-index: 9999;
        }

        .checkout-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-family: "NotoIKEA", Arial, sans-serif;
        }

        .checkout-total {
            font-size: 1.4rem;
            font-weight: bold;
        }

        .checkout-btn {
            background: #ffdd00;
            border: none;
            padding: 12px 25px;
            font-size: 18px;
            font-weight: bold;
            border-radius: 10px;
            cursor: pointer;
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

        /* SUBTOTAL MELAYANG DI BAWAH */
        .stickyCheckoutBottom {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: #ffffff;
            border-top: 2px solid #000;
            padding: 15px 20px;
            box-shadow: 0 -3px 12px rgba(0, 0, 0, 0.15);
            z-index: 9999;
        }

        .checkout-content {
            width: 90%;
            margin: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .checkout-total {
            font-size: 1.4rem;
            font-weight: bold;
        }

        .checkout-btn {
            background: #ffdd00;
            border: none;
            padding: 12px 25px;
            font-size: 18px;
            font-weight: bold;
            border-radius: 10px;
            cursor: pointer;
        }

        /* ============================
   SUPER SMALL DEVICES (≤ 360px)
   ============================ */
        @media (max-width: 475px) {

            .container {
                width: 95%;
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

            .container h2 {
                font-size: 2.5rem;
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
                <h2>Keranjang belanja Anda</h2>
                <div class="cart-header">
                    <div></div> <!-- kolom gambar (kosong) -->
                    <div></div> <!-- kolom nama (kosong) -->
                    <div>Jumlah</div> <!-- kolom QTY -->
                    <div>Subtotal</div> <!-- kolom subtotal -->
                </div>

                <div class="cart-item">

                    <!-- FOTO -->
                    <img src="{{ asset('images/new_product_img_1.jpg') }}" alt="Kursi">

                    <!-- INFO PRODUK -->
                    <div class="info">
                        <h3>Kursi</h3>
                        <p>kursi<br>Berat paket: 3.84 kg<br>Total berat paket: 7.68 kg</p>
                        <div class="item-price">Rp 250.000</div>
                    </div>

                    <!-- JUMLAH (QTY) -->
                    <div class="qty-control">
                        <button onclick="changeQty(-1)">−</button>
                        <span id="qty">2</span>
                        <button onclick="changeQty(1)">+</button>
                    </div>

                    <!-- SUBTOTAL + ICON DI BAWAH -->
                    <div class="subtotal-area">
                        <div class="subtotal" id="subtotal">Rp 500.000</div>

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


            </div>
            </div>
            <div class="stickyCheckoutBottom">
                <div class="checkout-content">
                    <div class="checkout-total">
                        Subtotal: <span id="floatingTotal">Rp 500.000</span>
                    </div>
                    <button class="checkout-btn">Checkout</button>
                </div>
            </div>

        </main>
        <script>
            let price = 250000;
            let qty = 2;

            // Format rupiah
            function formatRupiah(angka) {
                return "Rp " + angka.toLocaleString("id-ID");
            }

            // Update subtotal dalam item + subtotal melayang
            function updateAllSubtotal() {
                let total = price * qty;

                document.getElementById("subtotal").textContent = formatRupiah(total);
                document.getElementById("floatingTotal").textContent = formatRupiah(total);
            }

            // Ubah jumlah
            function changeQty(n) {
                qty += n;
                if (qty < 1) qty = 1;

                document.getElementById("qty").textContent = qty;
                updateAllSubtotal();
            }

            // Hapus item
            function removeItem() {
                if (confirm("Hapus item dari keranjang?")) {
                    document.querySelector(".cart-item").remove();
                    document.getElementById("floatingTotal").textContent = "Rp 0";
                }
            }

            // Load awal
            updateAllSubtotal();
        </script>




    </body>
    @include('partials.footer')

</html>