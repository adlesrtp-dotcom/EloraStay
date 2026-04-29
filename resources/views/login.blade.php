<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - EloraStay</title>
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
            align-items: center;
            color: white;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            font-size: 14px;
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
            height: 80vh;
        }

        .card {
            background: #f9f9f9;
            padding: 30px;
            width: 350px;
            border-radius: 15px;
            text-align: center;
        }

        .card-header {
            background: #f062a6;
            color: white;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 20px;
            border: 1px solid #ccc;
        }

        .forgot {
            text-align: right;
            font-size: 12px;
            color: #f062a6;
            margin-bottom: 15px;
        }

        .btn {
            width: 100%;
            background: #f062a6;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }

        .divider {
            margin: 15px 0;
            font-size: 12px;
        }

        .btn-google {
            width: 100%;
            padding: 10px;
            border-radius: 20px;
            border: 1px solid #ccc;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .btn-google img {
            width: 18px;
            margin-right: 8px;
        }

        .register {
            font-size: 12px;
            margin-top: 10px;
        }

        .register a {
            color: #f062a6;
            text-decoration: none;
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

        .footer h4 {
            margin-bottom: 10px;
        }

        .copyright {
            text-align: center;
            background: #f4a8c7;
            color: white;
            padding: 10px;
            font-size: 12px;
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

<!-- FORM LOGIN -->
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Selamat Datang</h3>
            <small>Login untuk mengakses akun Anda</small>
        </div>

        <form method="POST" action="{{ route('login.process') }}">
            @csrf

            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>

            <div class="forgot">Lupa password?</div>

            <button type="submit" class="btn">Masuk</button>

            <div class="divider">atau</div>

            <button type="button" class="btn-google">
                <img src="https://upload.wikimedia.org/wikipedia/commons/0/09/IOS_Google_icon.png">
                Lanjutkan dengan Google
            </button>

            <div class="register">
                <p>Belum punya akun? <a href="#">Daftar sekarang</a></p>
            </div>
        </form>
    </div>
</div>

<!-- FOOTER -->
<div class="footer">
    <div>
        <h4>EloraStay</h4>
        <p>Platform booking hotel terpercaya untuk pengalaman menginap terbaik Anda.</p>
    </div>

    <div>
        <h4>Link Cepat</h4>
        <p>Beranda</p>
        <p>Daftar Kamar</p>
        <p>Reservasi Saya</p>
    </div>

    <div>
        <h4>Hubungi Kami</h4>
        <p>Email: info@elorastay.com</p>
        <p>Telepon: 0812 3456 7890</p>
        <p>Instagram: @elorastay</p>
    </div>
</div>

<div class="copyright">
    © 2026 EloraStay. All rights reserved.
</div>

</body>
</html>