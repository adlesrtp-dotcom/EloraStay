<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Pelanggan - EloraStay</title>
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
        }

        .card-header {
            background: #f062a6;
            color: white;
            padding: 15px;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-size: 13px;
            margin-top: 10px;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 20px;
            border: 1px solid #ccc;
        }

        textarea {
            border-radius: 10px;
            resize: none;
        }

        .btn-group {
            display: flex;
            gap: 10px;
            margin-top: 15px;
        }

        .btn {
            flex: 1;
            padding: 10px;
            border-radius: 8px;
            border: none;
            cursor: pointer;
        }

        .btn-primary {
            background: #f062a6;
            color: white;
        }

        .btn-secondary {
            background: #ddd;
            color: #666;
        }

        .terms {
            font-size: 11px;
            margin-top: 10px;
            text-align: center;
        }

        .terms a {
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

<!-- FORM -->
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Tambah Pelanggan</h3>
            <small>Isi data pelanggan hotel baru</small>
        </div>

        <form method="POST" action="{{ route('pelanggan.store') }}">
            @csrf

            <label>Nama Pelanggan</label>
            <input type="text" name="nama" required>

            <label>Email</label>
            <input type="email" name="email" required>

            <label>Nomor Hp</label>
            <input type="text" name="hp" required>

            <label>Alamat</label>
            <textarea name="alamat" rows="3" required></textarea>

            <div class="btn-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="button" onclick="window.location.href='/kamar'" class="btn btn-secondary">
                    Kembali
                </button>
            </div>

            <div class="terms">
                Dengan melanjutkan, Anda menyetujui 
                <a href="#">Syarat & Ketentuan</a> dan 
                <a href="#">Kebijakan Privasi</a> kami.
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
        <p>Telepon: +62 123 456 7890</p>
        <p>Instagram: @elorastay</p>
    </div>
</div>

<div class="copyright">
    © 2026 EloraStay. All rights reserved.
</div>

</body>
</html>