<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registrasi - EloraStay</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f5e6ee;
        }

        /* NAVBAR */
        .navbar {
            background: #f062a6;
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            color: white;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
        }

        .login-btn {
            background: #ff85c1;
            padding: 6px 12px;
            border-radius: 5px;
        }

        /* CONTAINER */
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 85vh;
        }

        .card {
            background: #f9f9f9;
            padding: 30px;
            width: 350px;
            border-radius: 15px;
        }

        .card-header {
            background: #f062a6;
            color: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            font-size: 13px;
            margin-top: 10px;
            display: block;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 20px;
            border: 1px solid #ccc;
        }

        .forgot {
            text-align: right;
            font-size: 12px;
            color: #f062a6;
            margin-top: 5px;
        }

        .btn {
            width: 100%;
            padding: 10px;
            margin-top: 15px;
            border: none;
            border-radius: 8px;
            background: #f062a6;
            color: white;
            cursor: pointer;
        }

        .divider {
            text-align: center;
            margin: 15px 0;
            font-size: 12px;
            color: #999;
        }

        .btn-google {
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #ccc;
            background: white;
            cursor: pointer;
        }

        .register {
            text-align: center;
            margin-top: 10px;
            font-size: 12px;
        }

        .register a {
            color: #f062a6;
            text-decoration: none;
        }

        .terms {
            text-align: center;
            font-size: 11px;
            margin-top: 10px;
        }

        /* FOOTER */
        .footer {
            background: #f4a8c7;
            padding: 30px;
            color: white;
            display: flex;
            justify-content: space-around;
            font-size: 12px;
        }

        .copyright {
            text-align: center;
            background: #f4a8c7;
            color: white;
            padding: 10px;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<div class="navbar">
    <div><b>EloraStay</b></div>
    <div>
        <a href="/">Beranda</a>
        <a href="/kamar">Daftar Kamar</a>
        <a href="#">Reservasi Saya</a>
        <a href="#">Pembayaran</a>
        <a href="/login" class="login-btn">Login</a>
    </div>
</div>

<!-- FORM -->
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Daftar Akun</h3>
            <small>Buat akun baru untuk mulai booking</small>
        </div>

        <form method="POST" action="{{ route('register.process') }}">
            @csrf

            <label>Nama Lengkap</label>
            <input type="text" name="nama" required>

            <label>Email</label>
            <input type="email" name="email" required>

            <label>Password</label>
            <input type="password" name="password" required>

            <button type="submit" class="btn">Daftar</button>

            <div class="divider">atau</div>

            <button type="button" class="btn-google">
                <img src="https://upload.wikimedia.org/wikipedia/commons/0/09/IOS_Google_icon.png"
                     style="width:18px; margin-right:8px;">
                Lanjutkan dengan Google
            </button>

            <div class="register">
                Sudah punya akun? <a href="/login">Login</a>
            </div>
        </form>

        <div class="terms">
            Dengan melanjutkan, Anda menyetujui 
            <a href="#">Syarat & Ketentuan</a> dan 
            <a href="#">Kebijakan Privasi</a>.
        </div>
    </div>
</div>

<!-- FOOTER -->
<div class="footer">
    <div>
        <h4>EloraStay</h4>
        <p>Platform booking hotel terpercaya.</p>
    </div>

    <div>
        <h4>Link Cepat</h4>
        <p>Beranda</p>
        <p>Daftar Kamar</p>
    </div>

    <div>
        <h4>Hubungi Kami</h4>
        <p>Email: info@elorastay.com</p>
    </div>
</div>

<div class="copyright">
    © 2026 EloraStay
</div>

</body>
</html>