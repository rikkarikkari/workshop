<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register | FurnitureApik</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />

    <!-- Google Identity -->
    <script src="https://accounts.google.com/gsi/client" async defer></script>
</head>

<body>
    <div class="login-box">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo-icon" />
        <p class="subtitle">{{ __('Daftar untuk membuat akun baru') }}</p>

        <!-- Form register -->
        <form id="registerForm">
            <label for="fullname">{{ __('Nama Lengkap') }}</label>
            <input type="text" id="fullname" placeholder="{{ __('Masukkan nama lengkap') }}" required />

            <label for="email">{{ __('Email') }}</label>
            <input type="email" id="email" placeholder="{{ __('Masukkan email') }}" required />

            <label for="username">{{ __('Username') }}</label>
            <input type="text" id="username" placeholder="{{ __('Masukkan username') }}" required />

            <label for="password">{{ __('Kata Sandi') }}</label>
            <input type="password" id="password" placeholder="{{ __('Masukkan kata sandi') }}" required />

            <label for="confirm-password">{{ __('Konfirmasi Kata Sandi') }}</label>
            <input type="password" id="confirm-password" placeholder="{{ __('Ulangi kata sandi') }}" required />

            <div class="button-group">
                <button type="submit" class="btn register-btn">{{ __('Daftar') }}</button>
                <button type="button" class="btn login-btn" onclick="window.location.href='login'">{{ __('Login') }}</button>
            </div>
        </form>

        <div class="divider"><span>{{ __('atau') }}</span></div>

        <!-- Tombol Daftar dengan Google -->
        <div id="g_id_onload" data-client_id="476359365013-9gp1072u5ljsahdrk5p0d8rnpghn4llh.apps.googleusercontent.com"
            data-context="signup" data-ux_mode="popup" data-callback="handleCredentialResponse">{{ __('') }}</div>

        <div class="g_id_signin" data-type="standard" data-shape="rectangular" data-theme="outline"
            data-text="signup_with" data-size="large" data-logo_alignment="left">{{ __('') }}</div>
    </div>

    <script src="{{ asset('js/register.js') }}"></script>
</body>

</html>