<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
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

<style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background: #ffffff;
        color: #222;
    }

    .container {
        padding-top: 100px;
        width: 90%;
        max-width: 1200px;
        margin: 30px auto;
    }

    h2 {
        font-family: "NotoIKEA", "Verdana", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        font-size: 32px;
        margin-bottom: 30px;
    }

    .cart-item {
        display: grid;
        grid-template-columns: 130px 1fr 200px 150px;
        align-items: center;
        gap: 20px;
        padding: 25px 0;
        border-top: 1px solid #000000ff;     /* ← garis atas */
        border-bottom: 1px solid #000000ff;  /* ← garis bawah */
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
</style>
</head>

<body>
@include('partials.navbar')


<div class="container">
    <h2>Keranjang belanja Anda</h2>

    <div class="cart-item">
        <img src="https://www.ikea.com/id/en/images/products/sandsberg-chair-black__0905071_pe596671_s5.jpg" alt="kursi">

        <div class="info">
            <h3>Brankas 6 Laci</h3>
            <p>kursi<br>Berat paket: 3.84 kg<br>Total berat paket: 7.68 kg</p>
            <div class="item-price">Rp 250.000</div>
        </div>

        <div class="qty-control">
            <button onclick="changeQty(-1)">−</button>
            <span id="qty">2</span>
            <button onclick="changeQty(1)">+</button>
        </div>

        <div>
            <div class="subtotal" id="subtotal">Rp 500.000</div>
            <div class="icons">
                <span onclick="alert('Ditambahkan ke wishlist ❤️')">♡</span>
                <span onclick="removeItem()">🗑️</span>
            </div>
        </div>
    </div>

</div>

<script>
    let price = 250000;
    let qty = 2;

    function formatRupiah(angka) {
        return "Rp " + angka.toLocaleString("id-ID");
    }

    function updateSubtotal() {
        document.getElementById("subtotal").textContent = formatRupiah(price * qty);
    }

    function changeQty(n) {
        qty += n;
        if (qty < 1) qty = 1;
        document.getElementById("qty").textContent = qty;
        updateSubtotal();
    }

    function removeItem() {
        if (confirm("Hapus item dari keranjang?")) {
            document.querySelector(".cart-item").remove();
            alert("Item dihapus!");
        }
    }
</script>
@include('partials.footer')

</body>
</html>