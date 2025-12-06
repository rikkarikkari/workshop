<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | FurnitureApik</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />

    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Google Identity -->
    <script src="https://accounts.google.com/gsi/client" async defer></script>
</head>

<body>
    <div class="login-box">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo-icon" />

        <p class="subtitle">Login untuk melakukan pemesanan</p>

        <!-- FORM LOGIN -->
        <form id="loginForm">
            <input type="text" id="username" placeholder="Masukkan email atau username" required />
            <input type="password" id="password" placeholder="Masukkan kata sandi" required />

            <div class="button-group"> <button type="submit" class="btn login-btn">{{ __('Login') }}</button> <button
                    type="button" class="btn register-btn"
                    onclick="window.location.href='register'">{{ __('Register') }}</button> </div>
        </form>

        <div class="divider"><span>atau</span></div>

        <!-- GOOGLE LOGIN -->
        <div id="g_id_onload" data-client_id="476359365013-9gp1072u5ljsahdrk5p0d8rnpghn4llh.apps.googleusercontent.com"
            data-context="signin" data-ux_mode="popup" data-callback="handleCredentialResponse"></div>

        <div class="g_id_signin" data-type="standard" data-shape="rectangular" data-theme="outline"
            data-text="signin_with" data-size="large" data-logo_alignment="left"></div>
    </div>

    <!-- SCRIPT LOGIN -->
    <!-- <script>
        // LOGIN MANUAL
        document.getElementById("loginForm").addEventListener("submit", function(e) {
            e.preventDefault();

            const username = document.getElementById("username").value.trim();
            const password = document.getElementById("password").value.trim();

            // ADMIN
            if (username === "admin" && password === "admin") {
                const adminUser = {
                    name: "Admin",
                    email: "rikkarikku1@gmail.com",
                    picture: "{{ asset('images/default-user.png') }}",
                    method: "manual",
                };

                localStorage.setItem("user", JSON.stringify(adminUser));

                Swal.fire({
                    title: "Login Berhasil!",
                    text: "Selamat datang, Admin!",
                    icon: "success",
                }).then(() => {
                    window.location.href = "{{ route('admin.page') }}";
                });
                return;
            }

            // LOGIN USER TERDAFTAR
            const storedUser = JSON.parse(localStorage.getItem("userData"));
            if (!storedUser) {
                Swal.fire({
                    title: "Belum Terdaftar",
                    text: "Silakan register terlebih dahulu.",
                    icon: "warning",
                });
                return;
            }

            if (
                (storedUser.username === username ||
                storedUser.email === username) &&
                storedUser.password === password
            ) {
                Swal.fire({
                    title: "Login Berhasil!",
                    text: "Selamat datang kembali!",
                    icon: "success",
                }).then(() => {
                    localStorage.setItem("isLoggedIn", "true");
                    localStorage.setItem("user", JSON.stringify(storedUser));
                    window.location.href = "{{ route('user.page') }}";
                });
            } else {
                Swal.fire({
                    title: "Login Gagal",
                    text: "Username/email atau kata sandi salah!",
                    icon: "error",
                });
            }
        });


        // GOOGLE LOGIN
        function handleCredentialResponse(response) {
            const data = decodeJwtResponse(response.credential);
            const user = {
                name: data.name,
                email: data.email,
                picture: data.picture,
                method: "google",
            };

            localStorage.setItem("user", JSON.stringify(user));

            if (data.email === "rikkarikku1@gmail.com") {
                window.location.href = "{{ route('admin.page') }}";
            }
        }

        // Decode JWT Google
        function decodeJwtResponse(token) {
            const base64Url = token.split(".")[1];
            const base64 = base64Url.replace(/-/g, "+").replace(/_/g, "/");
            const jsonPayload = decodeURIComponent(
                atob(base64)
                    .split("")
                    .map((c) => "%" + ("00" + c.charCodeAt(0).toString(16)).slice(-2))
                    .join("")
            );
            return JSON.parse(jsonPayload);
        }

        // CEK USER SUDAH LOGIN
        const currentUser = JSON.parse(localStorage.getItem("user"));
        if (currentUser) {
            if (currentUser.email === "rikkarikku1@gmail.com") {
                window.location.href = "{{ route('admin.page') }}";
            }
        }
    </script> -->
</body>

</html>