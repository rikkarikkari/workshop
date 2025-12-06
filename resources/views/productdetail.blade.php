<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk | FurnitureApik</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <style>
        /* Struktur body mengikuti user.html */
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        body {
            display: flex;
            flex-direction: column;
        }

        /* Agar content tidak tertutup navbar */
        .product-container {
            margin-top: 100px;
            /* Sama seperti user.html (navbar fixed tinggi ±80px) */
        }

        /* Footer di bawah */
        #footer {
            margin-top: auto;
        }

        /* Mobile fix */
        @media (max-width: 500px) {
            .product-container {
                margin-top: 90px;
            }
        }
    </style>
</head>

<body>

    @include('partials.navbar')
    <!-- ===================== PRODUCT SECTION ===================== -->
    <div class="product-container bg-light-brown-color">
        <div class="product-left">
            <img id="mainImage" src="image-product/brankas 6 laci/1.jpg" class="main-image">

            <div class="thumbnail-container">
                <img src="image-product/brankas 6 laci/2.jpg" class="thumb">
                <img src="image-product/brankas 6 laci/3.jpg" class="thumb">
                <img src="image-product/brankas 6 laci/4.jpg" class="thumb">
                <img src="image-product/brankas 6 laci/1.jpg" class="thumb"> <!-- TAPI HARUS DIGANTI OTOMATIS -->
            </div>
        </div>




        <div class="product-right">
            <h1 id="productName">{{ __('Meja Kayu Solid Minimalis') }}</h1>
            <p id="productDesc" class="desc">
                {{ __('Meja kayu solid berkualitas tinggi dengan desain minimalis modern. Cocok untuk ruang tamu,        ruang kerja, dan cafe.') }}
            </p>

            <p class="price" id="productPrice">{{ __('Rp 850.000') }}</p>

            <div class="quantity-control">
                <button id="minusBtn" class="qty-btn">{{ __('-') }}</button>
                <input type="number" id="quantity" value="1" min="1" />
                <button id="plusBtn" class="qty-btn">+</button>
            </div>

            <button id="addToCart" class="btn-add">{{ __('Lanjutkan Pemesanan') }}</button>
        </div>
    </div>

    @include('partials.footer')
    <script>
        const mainImage = document.getElementById("mainImage");
        const thumbnails = document.querySelectorAll(".thumb");

        thumbnails.forEach((thumb) => {
            thumb.addEventListener("click", () => {
                // Main berubah jadi thumbnail
                mainImage.src = thumb.src;

                // Thumbnail tidak berubah → tidak ada swap
            });
        });
    </script>

</body>

</html>