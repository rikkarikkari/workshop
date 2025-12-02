<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tag
  -->
  <title>Produk Furniture</title>
  <meta name="title" content="Produk Furniture">
  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <style>
    /*-----------------------------------*\
  #CUSTOM PROPERTY
\*-----------------------------------*/

    :root {

      /**
   * colors
   */

      --red-orange-color-wheel: hsl(17, 96%, 48%);
      --middle-blue-green: hsl(167, 45%, 72%);
      --smokey-black: hsl(0, 0%, 7%);
      --spanish-gray: hsl(0, 0%, 60%);
      --granite-gray: hsl(0, 0%, 40%);
      --tan-crayola: hsl(27, 46%, 58%);
      --light-gray: hsl(0, 0%, 80%);
      --black_10: hsla(0, 0%, 0%, 0.1);
      --black_25: hsla(0, 0%, 0%, 0.25);
      --black_50: hsla(0, 0%, 0%, 0.4);
      --black_70: hsla(0, 0%, 0%, 0.7);
      --cultured: hsl(220, 16%, 96%);
      --manatee: hsl(218, 11%, 65%);
      --black: hsl(0, 0%, 0%);
      --white: hsl(0, 0%, 100%);

      /**
   * typography
   */

      --ff-roboto: 'Roboto', sans-serif;
      --ff-mr_de_haviland: 'Mr De Haviland', cursive;

      --fs-1: 6rem;
      --fs-2: 3rem;
      --fs-3: 2rem;
      --fs-4: 1.8rem;
      --fs-5: 1.4rem;
      --fs-6: 1.2rem;

      --fw-700: 700;
      --fw-500: 500;

      /**
   * spacing
   */

      --section-padding: 50px;

      /**
   * shadow
   */

      --shadow: 0 0 2px hsla(0, 0%, 0%, 0.2);

      /**
   * transition
   */

      --transition-1: 0.25s ease;
      --transition-2: 0.5s ease;
      --cubic-in: cubic-bezier(0.51, 0.03, 0.64, 0.28);
      --cubic-out: cubic-bezier(0.33, 0.85, 0.4, 0.96);

    }





    /*-----------------------------------*\
  #RESET
\*-----------------------------------*/

    *,
    *::before,
    *::after {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    li {
      list-style: none;
    }

    a,
    img,
    span,
    input,
    button,
    ion-icon {
      display: block;
    }

    a {
      color: inherit;
      text-decoration: none;
    }

    img {
      height: auto;
    }

    input,
    button {
      background: none;
      border: none;
      font: inherit;
    }

    input {
      width: 100%;
    }

    button {
      cursor: pointer;
    }

    ion-icon {
      pointer-events: none;
    }

    address {
      font-style: normal;
    }

    html {
      font-family: var(--ff-roboto);
      font-size: 10px;
      scroll-behavior: smooth;
    }

    body {
      background-color: var(--white);
      color: var(--black);
      font-size: 1.6rem;
      line-height: 1.7;
    }

    body.active {
      overflow: hidden;
    }

    :focus-visible {
      outline-offset: 4px;
    }

    ::placeholder {
      color: var(--manatee);
    }

    ::-webkit-scrollbar {
      width: 10px;
    }

    ::-webkit-scrollbar-track {
      background-color: hsl(0, 0%, 98%);
    }

    ::-webkit-scrollbar-thumb {
      background-color: hsl(0, 0%, 80%);
    }

    ::-webkit-scrollbar-thumb:hover {
      background-color: hsl(0, 0%, 70%);
    }





    /*-----------------------------------*\
  #REUSED STYLE
\*-----------------------------------*/

    .container {
      padding-inline: 15px;
    }

    .social-wrapper {
      display: flex;
      align-items: center;
    }

    .social-list {
      display: flex;
      gap: 30px;
    }

    .social-link {
      transition: var(--transition-1);
    }

    .social-link:is(:hover, :focus) {
      color: var(--tan-crayola);
    }

    .section {
      padding-block: var(--section-padding);
      padding-top: 100px;
    }

    .img-holder {
      aspect-ratio: var(--width) / var(--height);
      background-color: var(--light-gray);
      overflow: hidden;
    }

    .img-cover {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .h2,
    .h3 {
      color: var(--smokey-black);
      font-weight: var(--fw-500);
      line-height: 1.4;
    }

    .h2 {
      font-size: var(--fs-2);
    }

    .h3 {
      font-size: var(--fs-3);
    }

    .grid-list {
      display: grid;
      gap: 35px;
    }

    .has-before {
      position: relative;
      z-index: 1;
    }

    .has-before::before {
      content: "";
      position: absolute;
    }





    /*-----------------------------------*\
  #PRODUCT
\*-----------------------------------*/

    .product .section-title {
      text-align: center;
    }

    .filter-btn-list {
      margin-block: 20px 50px;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }

    .filter-btn-item {
      position: relative;
      display: flex;
    }

    .filter-btn-item:not(:last-child)::after {
      content: "";
      margin-inline: 5px;
    }

    .filter-btn {
      transition: var(--transition-1);
    }

    .filter-btn.active {
      color: var(--tan-crayola);
    }

    .product-card {
      text-align: center;
    }

    .product-card .card-banner::before {
      inset: 0;
      background-color: var(--black_10);
      opacity: 0;
      transition: var(--transition-1);
    }

    .product-card .card-banner:is(:hover, :focus-within)::before {
      opacity: 1;
    }

    .product-card .card-action-list {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, 100%);
      display: flex;
      gap: 15px;
      opacity: 0;
      transition: var(--transition-2);
    }

    .product-card .card-banner:is(:hover, :focus-within) .card-action-list {
      transform: translate(-50%, -50%);
      opacity: 1;
    }

    .product-card .card-action-btn {
      background-color: var(--white);
      font-size: 22px;
      padding: 12px;
      border-radius: 50%;
      transition: var(--transition-1);
    }

    .product-card .card-action-btn:is(:hover, :focus) {
      color: var(--tan-crayola);
    }

    .product-card .badge-list {
      position: absolute;
      top: 15px;
      left: 15px;
    }

    .product-card .badge {
      color: var(--white);
      font-size: var(--fs-5);
      font-weight: var(--fw-500);
      width: 45px;
      height: 45px;
      border-radius: 50%;
      line-height: 45px;
      margin-block-end: 10px;
    }

    .product-card .badge.orange {
      background-color: var(--red-orange-color-wheel);
    }

    .product-card .badge.cyan {
      background-color: var(--middle-blue-green);
    }

    .product-card .card-badge {
      position: absolute;
      top: 15px;
      right: 15px;
      background-color: var(--black);
      color: var(--white);
      font-weight: var(--fw-500);
      padding-inline: 15px;
    }

    .product-card .h3 {
      font-size: unset;
    }

    .product-card .card-title {
      color: var(--smokey-black);
      font-weight: var(--fw-500);
      margin-block: 18px 5px;
      transition: var(--transition-1);
    }

    .product-card .card-title:is(:hover, :focus) {
      color: var(--tan-crayola);
    }

    .product-card .card-price {
      display: flex;
      justify-content: center;
      gap: 15px;
      color: var(--granite-gray);
      font-size: var(--fs-4);
    }

    .product-card .card-price .del {
      color: var(--spanish-gray);
    }

    .product-list>* {
      display: none;
    }

    .product-list[data-filter="all"]>*,
    .product-list[data-filter="accessory"]>.accessory,
    .product-list[data-filter="decoration"]>.decoration,
    .product-list[data-filter="furniture"]>.furniture {
      display: block;
      animation: fadeUp 1s ease forwards;
    }

    @keyframes fadeUp {
      0% {
        opacity: 0;
        transform: translateY(10px);
      }

      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }



    /*-----------------------------------*\
  #MEDIA QUERIES
\*-----------------------------------*/

    /**
 * responsive for large than 575px screen
 */

    @media (min-width: 575px) {

      /**
   * REUSED STYLE
   */


      .container {
        max-width: 575px;
        width: 100%;
        margin-inline: auto;
      }

      .grid-list {
        grid-template-columns: 1fr 1%;
        column-gap: 15px;
      }

      .grid-list>li:last-child {
        grid-column: span 2;
        max-width: calc(50% - 12.5px);
        width: 100%;
        margin-inline: auto;
      }



      /**
 * responsive for large than 768px screen
 */

      @media (min-width: 768px) {

        /**
   * REUSED STYLE
   */

        .container {
          max-width: 768px;
        }



        /**
   * PRODUCT
   */

        .product .title-wrapper {
          display: flex;
          justify-content: space-between;
          align-items: center;
          margin-block-end: 80px;
        }

        .filter-btn-list {
          margin: 5;
        }


        /**
 * responsive for large than 992px screen
 */

        @media (min-width: 992px) {

          /**
   * REUSED STYLE
   */

          .container {
            max-width: 992px;
          }

          .grid-list>li:last-child {
            all: unset;
          }

          .grid-list {
            grid-template-columns: repeat(3, 1fr);
          }




          /**
 * responsive for large than 1200px screen
 */

          @media (min-width: 1200px) {

            /**
   * CUSTOM PROPERTY
   */

            :root {

              /**
     * typography
     */

              --fs-2: 3.6rem;

            }



            /**
   * REUSED STYLE
   */

            .container {
              max-width: 1200px;
            }
            /**
   * PRODUCT
   */
            .product-list {
              grid-template-columns: repeat(4, 1fr);
            }
          }
        }
      }
    }
  </style>
  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Mr+De+Haviland&family=Roboto:wght@400;500;700&display=swap"
    rel="stylesheet">

</head>

<body id="top">
@if(!isset($hide_navbar))
    @include('partials.navbar')
@endif

  </div>
  <div class="overlay" data-overlay data-nav-toggler></div>

  <main>
    <article>

      <!-- 
          - #PRODUCTS
      -->

      <section class="section product" id="product" aria-label="product">
        <div class="container">

          <div class="title-wrapper">
            <h2 class="h2 section-title">Produk FurnitureApik</h2>

            <ul class="filter-btn-list">

              <li class="filter-btn-item">
                <button class="filter-btn active" data-filter-btn="all">All Products</button>
              </li>

              <li class="filter-btn-item">
                <button class="filter-btn" data-filter-btn="accessory">Brankas</button>
              </li>

              <li class="filter-btn-item">
                <button class="filter-btn" data-filter-btn="decoration">Meja & Kursi</button>
              </li>

              <li class="filter-btn-item">
                <button class="filter-btn" data-filter-btn="furniture">Almari</button>
              </li>

            </ul>
          </div>

          <ul class="grid-list product-list" data-filter="all">

            <li class="decoration">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-1.jpg" width="300" height="300" loading="lazy"
                    alt="Animi Dolor Pariatur" class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to whishlist" title="add to whishlist">
                        <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                  </ul>

                  <ul class="badge-list">

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Animi Dolor Pariatur</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="10">$10.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="accessory">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-2.jpg" width="300" height="300" loading="lazy" alt="Art Deco Home"
                    class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to whishlist" title="add to whishlist">
                        <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                  </ul>

                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Art Deco Home</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="30">$30.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="decoration">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-3.jpg" width="300" height="300" loading="lazy"
                    alt="Artificial potted plant" class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to whishlist" title="add to whishlist">
                        <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Artificial potted plant</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="40">$40.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="accessory">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-4.jpg" width="300" height="300" loading="lazy" alt="Dark Green Jug"
                    class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to whishlist" title="add to whishlist">
                        <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Dark Green Jug</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="17.10">$17.10</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="accessory">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-5.jpg" width="300" height="300" loading="lazy"
                    alt="Drinking Glasses" class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to whishlist" title="add to whishlist">
                        <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Drinking Glasses</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="21">$21.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="furniture">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-6.jpg" width="300" height="300" loading="lazy" alt="Helen Chair"
                    class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to whishlist" title="add to whishlist">
                        <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Helen Chair</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="69.50">$69.50</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="accessory">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-7.jpg" width="300" height="300" loading="lazy"
                    alt="High Quality Glass Bottle" class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to whishlist" title="add to whishlist">
                        <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">High Quality Glass Bottle</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="30.10">$30.10</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="accessory">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-8.jpg" width="300" height="300" loading="lazy"
                    alt="Living Room & Bedroom Lights" class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to whishlist" title="add to whishlist">
                        <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Living Room & Bedroom Lights</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="45">$45.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="furniture">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-9.jpg" width="300" height="300" loading="lazy" alt="Nancy Chair"
                    class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to whishlist" title="add to whishlist">
                        <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Nancy Chair</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="90">$90.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="furniture">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-10.jpg" width="300" height="300" loading="lazy" alt="Simple Chair"
                    class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to whishlist" title="add to whishlist">
                        <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Simple Chair</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="40">$40.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="decoration">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-11.jpg" width="300" height="300" loading="lazy" alt="Smooth Disk"
                    class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to whishlist" title="add to whishlist">
                        <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Smooth Disk</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="46">$46.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="furniture">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-12.jpg" width="300" height="300" loading="lazy" alt="Table Black"
                    class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to whishlist" title="add to whishlist">
                        <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Table Black</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="67">$67.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="furniture">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-13.jpg" width="300" height="300" loading="lazy"
                    alt="Table Wood Pine" class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to whishlist" title="add to whishlist">
                        <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Table Wood Pine</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="50">$50.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="accessory">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-14.jpg" width="300" height="300" loading="lazy"
                    alt="Teapot with black tea" class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to whishlist" title="add to whishlist">
                        <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Teapot with black tea</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="25">$25.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="decoration">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-15.jpg" width="300" height="300" loading="lazy"
                    alt="Unique Decoration" class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to whishlist" title="add to whishlist">
                        <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Unique Decoration</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="15">$15.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="decoration">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-16.jpg" width="300" height="300" loading="lazy"
                    alt="Vase Of Flowers" class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to whishlist" title="add to whishlist">
                        <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Vase Of Flowers</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="77">$77.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="decoration">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-17.jpg" width="300" height="300" loading="lazy" alt="Wood Eggs"
                    class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to whishlist" title="add to whishlist">
                        <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Wood Eggs</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="19">$19.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="decoration">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-18.jpg" width="300" height="300" loading="lazy" alt="Wooden Box"
                    class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to whishlist" title="add to whishlist">
                        <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Wooden Box</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="27">$27.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="accessory">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-19.jpg" width="300" height="300" loading="lazy" alt="Wooden Cups"
                    class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to whishlist" title="add to whishlist">
                        <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Wooden Cups</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="29">$29.00</data>
                  </div>
                </div>

              </div>
            </li>

          </ul>

        </div>
    </article>
  </main>


  <!-- 
    - custom js link
  -->
  <script>
    /** @format */

    "use strict";

    /**
     * add event on element
     */
    const addEventOnElem = function (elem, type, callback) {
      if (elem.length > 1) {
        for (let i = 0; i < elem.length; i++) {
          elem[i].addEventListener(type, callback);
        }
      } else {
        elem.addEventListener(type, callback);
      }
    };

    /**
     * product filter
     */
    const filterBtns = document.querySelectorAll("[data-filter-btn]");
    const filterBox = document.querySelector("[data-filter]");

    let lastClickedFilterBtn = filterBtns[0];

    const filter = function () {
      lastClickedFilterBtn.classList.remove("active");
      this.classList.add("active");
      lastClickedFilterBtn = this;

      filterBox.setAttribute("data-filter", this.dataset.filterBtn);
    };

    addEventOnElem(filterBtns, "click", filter);


  </script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>