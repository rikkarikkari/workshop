<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar Slide dari Kanan</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

  <style>
    /* ===== NAVBAR UTAMA ===== */
    body {
      margin: 0;
font-family: "NotoIKEA", "Verdana", -apple-system, BlinkMacSystemFont,
             "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif !important;      overflow-x: hidden;
    }

    .navbar {
      height: 80px;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 1000;
      background-color: #fff;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 5rem;
      box-sizing: border-box;
      box-shadow: 0 4px 8px -2px rgba(0, 0, 0, 0.15);

    }

    .nav-left .logo-icon {
      width: 60px;
      height: auto;
    }

    .nav-center {
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
      display: flex;
      gap: 3rem;
      list-style: none;
      margin: 0;
      padding: 0;
    }

    .nav-center a {
      text-decoration: none;
      color: #333;
      font-weight: 500;
      transition: color 0.3s, font-size 0.3s;
      font-size: 2rem;
    }

    .nav-center a:hover {
      color: #3aaaf9;
    }

    .nav-right {
      display: flex;
      align-items: center;
      gap: 2rem;
    }

    .nav-right .btn {
      color: #333;
      font-size: 2rem;
      transition: 0.3s;
    }

    .nav-right .btn:hover {
      color: #3aaaf9;
    }

    /* From Uiverse.io by OnCloud125252 */
    .inputBox_container {
      display: flex;
      align-items: center;
      flex-direction: row;
      max-width: 14em;
      width: fit-content;
      height: fit-content;
      background-color: #c8d0df;
      border-radius: 0.8em;
      overflow: hidden;
    }

    .search_icon {
      height: 1em;
      padding: 0 0.5em 0 0.8em;
      fill: #000000;
    }

    .inputBox {
      background-color: transparent;
      color: #000000;
      outline: none;
      width: 100%;
      border: 0;
      padding: 0.5em 1.5em 0.5em 0;
      font-size: 1em;
    }

    ::placeholder {
      color: #000000;
    }

    .hamburger {
      display: none;
      font-size: 2rem;
      cursor: pointer;
      color: #333;
    }


    /* ===== RESPONSIVE - 1024px ↓ ===== */
    @media (max-width: 1024px) {
      .navbar {
        justify-content: center;
      }

      .nav-center {
        position: static;
        transform: none;
        margin: 0 auto;
        display: flex;
        justify-content: center;
        gap: 1rem;
      }

      .nav-center a {
        font-size: 1.6rem;

      }


    }

    /* ===== RESPONSIVE - 425px ===== */
@media (max-width: 435px) {
  .navbar {
    justify-content: center;
  }

  .nav-right {
    gap: 3rem;
  }

  .nav-center {
    position: fixed;
    top: 80px;                    /* FIX: selalu berada di bawah navbar */
    left: 0;
    width: 100%;
    background: #fff;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
    gap: 0.2rem;
    
        align-items: center;
    text-align: center;

    max-height: 0;               /* Kondisi awal tertutup */
    overflow: hidden;
    opacity: 0;

    transition: max-height 1s ease, opacity 0.5s ease, padding 0.5s ease;
  }

  .nav-center.active {
    max-height: 250px;           /* Saat aktif → muncul ke bawah */
    opacity: 1;
    padding: 1rem 0;
  }

  .hamburger {
    display: block;
    cursor: pointer;
  }

  .logo-icon {
    display: none;
  }

  .search-icon {
    font-size: 0.5rem;
  }

  .search-container input {
    width: 100px;
    font-size: 1rem;
  }
}

  </style>
</head>

<body>
  <nav class="navbar">
    <!-- Logo -->
    <div class="nav-left">
      <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo-icon">
    </div>

    <!-- Menu Tengah -->
<ul class="nav-center text-uppercase" id="nav-menu">
    <li><a href="{{ url('/') }}">{{ __('Home') }}</a></li>
    <li><a href="{{ route('product.page') }}">{{ __('Product') }}</a></li>
    <li><a href="{{ url('/') }}#footer">{{ __('Contact') }}</a></li>
    <li><a href="{{ route('login.page') }}">{{ __('Account') }}</a></li>
</ul>


    <!-- Bagian Kanan -->
    <div class="nav-right">
      <a href="{{ route('cart.page') }}" class="btn"><i class="fas fa-shopping-cart"></i></a>
      <div class="inputBox_container">
        <svg class="search_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" alt="search icon">
          <path
            d="M46.599 46.599a4.498 4.498 0 0 1-6.363 0l-7.941-7.941C29.028 40.749 25.167 42 21 42 9.402 42 0 32.598 0 21S9.402 0 21 0s21 9.402 21 21c0 4.167-1.251 8.028-3.342 11.295l7.941 7.941a4.498 4.498 0 0 1 0 6.363zM21 6C12.717 6 6 12.714 6 21s6.717 15 15 15c8.286 0 15-6.714 15-15S29.286 6 21 6z">
          </path>
        </svg>
        <input class="inputBox" id="inputBox" type="text" placeholder="{{ __('Search For Products') }}">
      </div>
      <div class="hamburger" id="hamburger">
        <i class="fa-solid fa-bars"></i>
      </div>
    </div>
  </nav>

  <script>
    const hamburger = document.getElementById('hamburger');
    const navMenu = document.getElementById('nav-menu');

    hamburger.addEventListener('click', () => {
      navMenu.classList.toggle('active');
      hamburger.innerHTML = navMenu.classList.contains('active')
        ? '<i class="fa-solid fa-xmark"></i>'
        : '<i class="fa-solid fa-bars"></i>';
    });
  </script>
</body>

</html>