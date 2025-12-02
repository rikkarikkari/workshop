<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furniture Site</title>
    <!-- normalize css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
        integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- custom utilities css -->
    <link rel="stylesheet" href="{{ asset('css/utilities.css') }}">
    <!-- custom main css -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">

</head>

<body>
@include('partials.navbar')

    <!-- header -->
    <header class="header bg-light-brown flex" id="home">
        <div class="container">
            <div class="header-content grid text-center">
                <div class="header-left">
                    <div class="text-box">
                        <h1>{{ __('Desain yang modern dengan kualitas terbaik') }}</h1>
                        <p class="text">{{ __('Tingkatkan suasana ruangan dengan desain furniture modern yang dibuat dengan                            tujuan memberikan rasa nyaman pada ruangan anda') }}</p>
                        <a href="#" class="btn-header text-white bg-brown">{{ __('shop now') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- end of header -->

    <!-- main content -->
    <main>
        <!-- top new products section -->
        <section id="top-new-product"></section>
        <section id="new-products" class="new-products py bg-light-grey-color-shade">
            <div class="container">
                <div class="section-title text-center">
                    <h2>{{ __('top new products') }}</h2>
                    <p class="lead">{{ __('Produk terbaru dari FurnitureApik dengan kualitas terbaik.') }}</p>
                    <div class="line"></div>
                </div>

                <div class="new-products-content grid">
                    <div class="new-product-item">
                        <div class="image">
                            <img src="{{ asset('images/new_product_img_1.jpg') }}" alt="">
                        </div>
                        <div class="info">
                            <p class="name">{{ __('Kursi Restoran') }}</p>
                            <div class="price">
                                <span class="old text-grey">{{ __('Rp300.000') }}</span>
                                <span class="new text-brown">Rp250.000<span>
                            </div>
                        </div>
                    </div>

                    <div class="new-product-item">
                        <div class="image">
                            <img src="{{ asset('images/new_product_img_2.jpg') }}" alt="">
                        </div>
                        <div class="info">
                            <p class="name">{{ __('Kursi Rumah Elegan') }}</p>
                            <div class="price">
                                <span class="old text-grey">{{ __('Rp250.000') }}</span>
                                <span class="new text-brown">Rp200.000<span>
                            </div>
                        </div>
                    </div>

                    <div class="new-product-item">
                        <div class="image">
                            <img src="{{ asset('images/new_product_img_3.jpg') }}" alt="">
                        </div>
                        <div class="info">
                            <p class="name">{{ __('Kursi Nakas Rumah') }}</p>
                            <div class="price">
                                <span class="old text-grey">{{ __('Rp400.000') }}</span>
                                <span class="new text-brown">Rp350.000<span>
                            </div>
                        </div>
                    </div>

                    <div class="new-product-item">
                        <div class="image">
                            <img src="{{ asset('images/new_product_img_4.png') }}" alt="">
                        </div>
                        <div class="info">
                            <p class="name">{{ __('Brankas Magnetic Key') }}</p>
                            <div class="price">
                                <span class="old text-grey">{{ __('Rp500.000') }}</span>
                                <span class="new text-brown">Rp450.000<span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of top new products section -->

        <!-- category section -->

        <section class="category py bg-light-brown" id="category">
            <div class="container">
                <section id="category"></section>
                <div class="category-content grid">
                    <div class="category-item">
                        <img src="{{ asset('images/category_img_1.jpg') }}">
                        <div class="category-badge bg-white text-dark flex">{{ __('Set Kursi Unik') }}</div>
                    </div>
                    <div class="category-item">
                        <img src="{{ asset('images/category_img_2.jpg') }}" alt="Brankas 6 Laci">
                        <div class="category-badge bg-white text-dark flex">{{ __('Brankas 6 Laci') }}</div>
                    </div>
                    <div class="category-item">
                        <img src="{{ asset('images/category_img_3.jpg') }}">
                        <div class="category-badge bg-white text-dark flex">{{ __('Almari Klasik') }}</div>
                    </div>
                    <div class="category-item">
                        <img src="{{ asset('images/category_img_4.jpg') }}">
                        <div class="category-badge bg-white text-dark flex">{{ __('Brankas 5 Laci') }}</div>
                    </div>
                    <div class="category-item">
                        <img src="{{ asset('images/category_img_5.jpg') }}">
                        <div class="category-badge bg-white text-dark flex">{{ __('Brankas Unik') }}</div>
                    </div>
                    <div class="category-item">
                        <img src="{{ asset('images/category_img_6.jpg') }}">
                        <div class="category-badge bg-white text-dark flex">{{ __('Set Meja Sultan') }}</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of category section -->

@include('product', ['hide_navbar' => true])


        <!-- catalog section -->
        <section class="catalog bg-brown" id="catalog">
            <div class="catalog-content grid text-center">
                <div class="catalog-left">
                    <iframe
                        src="https://www.youtube.com/embed/_9WiYbnrUp8?autoplay=0&mute=1&loop=1&playlist=_9WiYbnrUp8"
                        frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
                    </iframe>
                </div>
                <div class="catalog-right text-white flex">
                    <div class="text">
                        <h1>{{ __('Interior Desain & Custom Furniture') }}</h1>
                    </div>
                    <p class="text">{{ __('FurnitureApik menyediakan layanan konsultasi desain interior dan pembuatan furnitur                        khusus yang disesuaikan dengan ruang Anda. Tim FurnitureApik menggabungkan kreativitas,                        ketelitian, dan bahan berkualitas untuk menciptakan kenyamanan bagi rumah Anda.') }}</p>
                    <p class="text">Dari konsep hingga pemasangan — FurnitureApik dapat mewujudkan ruang impian Anda
                        menjadi kenyataan.</p>
                </div>
            </div>
        </section>
        <!-- end of catalog section -->
    </main>
    <!-- end of main content -->
@include('partials.footer')

    </div>

    <script>
        // Auto scroll halus saat swipe di mobile
        document.addEventListener("DOMContentLoaded", function () {
            const carousels = document.querySelectorAll(".new-products-content, .category-content");

            carousels.forEach(carousel => {
                let isDown = false;
                let startX;
                let scrollLeft;

                carousel.addEventListener("mousedown", (e) => {
                    isDown = true;
                    carousel.classList.add("active");
                    startX = e.pageX - carousel.offsetLeft;
                    scrollLeft = carousel.scrollLeft;
                });
                carousel.addEventListener("mouseleave", () => {
                    isDown = false;
                    carousel.classList.remove("active");
                });
                carousel.addEventListener("mouseup", () => {
                    isDown = false;
                    carousel.classList.remove("active");
                });
                carousel.addEventListener("mousemove", (e) => {
                    if (!isDown) return;
                    e.preventDefault();
                    const x = e.pageX - carousel.offsetLeft;
                    const walk = (x - startX) * 1.5; // percepatan scroll
                    carousel.scrollLeft = scrollLeft - walk;
                });
            });
        });
    </script>


    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.querySelectorAll(".category-item").forEach(item => {
                item.addEventListener("click", function () {
                    const id = this.getAttribute("data-id");
                    console.log("Menuju ke:", `product.html?id=${id}`);
                    window.location.href = `product.html?id=${id}`;
                });
            });
        });
    </script>

            <script>
        fetch("navbar.html")
        .then(res => res.text())
        .then(data => {
            document.getElementById("navbar").innerHTML = data;

            // Jalankan ulang skrip setelah navbar dimuat
            const hamburger = document.getElementById('hamburger');
            const navMenu = document.getElementById('nav-menu');

            if (hamburger && navMenu) {
                hamburger.addEventListener('click', () => {
                navMenu.classList.toggle('active');
                hamburger.innerHTML = navMenu.classList.contains('active')
                    ? '<i class="fa-solid fa-xmark"></i>'
                    : '<i class="fa-solid fa-bars"></i>';

                // Tambahkan efek dorong isi index.html ke bawah
                document.body.classList.toggle('nav-open');
                });
            }
        })
        .catch(err => console.error("Gagal memuat navbar:", err));
            </script>

    <!-- custom js -->
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>