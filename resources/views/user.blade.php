<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akun Pengguna</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/user.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

</head>

<body>
    <div id="navbar"></div>

    <div class="profile-header">
        <div class="profile-info">
            <div class="avatar" id="avatar">{{ __('R') }}</div>
            <div class="profile-details">
                <h2 id="name">{{ __('Rikka Rikku') }}</h2>
                <p id="phone">+6281229397753</p>
                <p id="email">rikkarikku1@gmail.com</p>
            </div>
            <i class="fas fa-pen edit-icon"></i>
        </div>
    </div>

    <div class="account-wrapper">
        <div class="account-container">
            <div class="menu-item" data-content="alamat">
                <div class="menu-left">
                    <div class="menu-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <div class="menu-text">{{ __('Alamat Pengiriman') }}</div>
                </div>
                <i class="fas fa-chevron-right arrow"></i>
            </div>

            <div class="menu-item" data-content="transaksi">
                <div class="menu-left">
                    <div class="menu-icon"><i class="fas fa-shopping-bag"></i></div>
                    <div class="menu-text">{{ __('Transaksi') }}</div>
                </div>
                <i class="fas fa-chevron-right arrow"></i>
            </div>

            <div class="menu-item" data-content="ubahsandi">
                <div class="menu-left">
                    <div class="menu-icon"><i class="fas fa-lock"></i></div>
                    <div class="menu-text">{{ __('Ubah Sandi') }}</div>
                </div>
                <i class="fas fa-chevron-right arrow"></i>
            </div>

            <div class="menu-item" onclick="logout()">
                <div class="menu-left">
                    <div class="menu-icon"><i class="fas fa-sign-out-alt"></i></div>
                    <div class="menu-text">{{ __('Keluar') }}</div>
                </div>
                <i class="fas fa-chevron-right arrow"></i>
            </div>
        </div>

        <div class="account-content" id="account-content">
            <h3>{{ __('Selamat Datang di Akun Anda') }}</h3>
            <p>{{ __('Pilih menu untuk melihat detail akun Anda.') }}</p>
        </div>
    </div>

    <!-- POPUP EDIT ALAMAT -->
    <div class="popup-overlay" id="popupOverlay">
        <div class="popup-box">
            <h3>{{ __('Edit Alamat') }}</h3>
            <form id="editAddressForm">
                <label>{{ __('Nama Penerima') }}</label>
                <input type="text" id="editName" required>
                <label>{{ __('Alamat') }}</label>
                <input type="text" id="editAddress" required>
                <label>{{ __('Nomor HP') }}</label>
                <input type="text" id="editPhone" required>
                <div class="popup-buttons">
                    <button type="button" class="btn-cancel" onclick="closePopup()">{{ __('Batal') }}</button>
                    <button type="submit" class="btn-save">{{ __('Simpan') }}</button>
                </div>
            </form>
        </div>
    </div>



    <script>
        // Navbar & footer
        fetch("navbar.html")
            .then(r => r.text())
            .then(d => {
                document.getElementById("navbar").innerHTML = d;

                // Jalankan ulang fungsi hamburger setelah navbar dimuat
                const hamburger = document.querySelector('#navbar #hamburger');
                const navMenu = document.querySelector('#navbar #nav-menu');

                if (hamburger && navMenu) {
                    hamburger.addEventListener('click', () => {
                        navMenu.classList.toggle('active');
                        document.body.classList.toggle('nav-open');

                        // Kunci scroll saat menu terbuka agar tidak goyang
                        document.body.style.overflow = navMenu.classList.contains('active') ? 'hidden' : '';

                        // Ubah ikon burger ↔ X
                        hamburger.innerHTML = navMenu.classList.contains('active')
                            ? '<i class="fa-solid fa-xmark"></i>'
                            : '<i class="fa-solid fa-bars"></i>';
                    });
                }
            });

        fetch("footer.html").then(r => r.text()).then(d => document.getElementById("footer").innerHTML = d);


        // ==== Data user ====
        const user = JSON.parse(localStorage.getItem('userData')) || {
            name: "Rikka Rikku",
            phone: "+6281229397753",
            email: "rikkarikku1@gmail.com",
            address: "Jl. Mawar No. 12, Bandung"
        };

        document.getElementById("name").textContent = user.name;
        document.getElementById("phone").textContent = user.phone;
        document.getElementById("email").textContent = user.email;
        document.getElementById("avatar").textContent = user.email.charAt(0).toUpperCase();

        function logout() {
            localStorage.removeItem('userData');
            alert("Anda telah keluar.");
            window.location.href = "login.html";
        }

        const menuItems = document.querySelectorAll(".menu-item[data-content]");
        const contentArea = document.getElementById("account-content");

        menuItems.forEach(item => {
            item.addEventListener("click", () => {
                menuItems.forEach(m => m.classList.remove("active"));
                item.classList.add("active");

                const type = item.dataset.content;
                if (type === "alamat") {
                    contentArea.innerHTML = `
            <h3>{{ __('Alamat Pengiriman') }}</h3>
            <div class="address-box">
                <button class="edit-address-btn" onclick="openPopup()"><i class="fas fa-pen"></i></button>
                <strong id="displayName">${user.name}</strong><br>
                <span id="displayAddress">${user.address}</span><br>
                <span id="displayPhone">${user.phone}</span>
            </div>
            `;
                } else if (type === "transaksi") {
                    contentArea.innerHTML = `
            <h3>{{ __('Riwayat Transaksi') }}</h3>
            <ul class="transaction-list">
                <li>Pesanan #00123 - Meja Kayu - Selesai</li>
                <li>Pesanan #00122 - Kursi Minimalis - Dikirim</li>
                <li>Pesanan #00121 - Rak Dinding - Diproses</li>
            </ul>
            `;
                } else if (type === "ubahsandi") {
                    contentArea.innerHTML = `
            <h3>{{ __('Ubah Kata Sandi') }}</h3>
            <form class="password-form">
                <label>{{ __('Password Lama') }}</label>
                <input type="password" placeholder="{{ __('Masukkan password lama') }}" required>
                <label>{{ __('Password Baru') }}</label>
                <input type="password" placeholder="{{ __('Masukkan password baru') }}" required>
                <button type="submit" class="btn-save">{{ __('Simpan Perubahan') }}</button>
            </form>
            `;
                }
            });
        });

        // ==== Popup control ====
        const popupOverlay = document.getElementById("popupOverlay");
        function openPopup() {
            document.getElementById("editName").value = user.name;
            document.getElementById("editAddress").value = user.address;
            document.getElementById("editPhone").value = user.phone;
            popupOverlay.style.display = "flex";
        }
        function closePopup() {
            popupOverlay.style.display = "none";
        }

        // ==== Simpan alamat ====
        document.getElementById("editAddressForm").addEventListener("submit", e => {
            e.preventDefault();
            user.name = document.getElementById("editName").value;
            user.address = document.getElementById("editAddress").value;
            user.phone = document.getElementById("editPhone").value;
            localStorage.setItem('userData', JSON.stringify(user));
            document.getElementById("displayName").textContent = user.name;
            document.getElementById("displayAddress").textContent = user.address;
            document.getElementById("displayPhone").textContent = user.phone;
            closePopup();
        });
    </script>
    <div id="footer"></div>
</body>

</html>