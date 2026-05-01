<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reservasi Saya - EloraStay</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #ffe4ec;
        }

        /* Navbar */
          .navbar {
    background: linear-gradient(to right, #f472b6, #ec4899);
    color: white;
    padding: 15px 25px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

/* Logo */
.logo {
    font-size: 20px;
    font-weight: bold;
}

/* Menu */
.nav-menu {
    display: flex;
    gap: 20px;
}

.nav-menu a {
    color: white;
    text-decoration: none;
    font-size: 14px;
    position: relative;
    transition: 0.3s;
}

/* Hover underline effect */
.nav-menu a::after {
    content: "";
    position: absolute;
    width: 0%;
    height: 2px;
    background: white;
    left: 0;
    bottom: -4px;
    transition: 0.3s;
}

.nav-menu a:hover::after {
    width: 100%;
}

/* Login button */
.login-btn {
    background: white;
    color: #ec4899;
    border: none;
    padding: 6px 14px;
    border-radius: 20px;
    cursor: pointer;
    font-weight: bold;
    transition: 0.3s;
}

/* Hero Image */
.hero {
    height: 300px;
    background: url('https://images.unsplash.com/photo-1566073771259-6a8506099945') center/cover no-repeat;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
}

/* Overlay biar teks kebaca */
.hero::before {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background: rgba(236, 72, 153, 0.4); /* pink overlay */
    top: 0;
    left: 0;
}

/* Text */
.hero-content {
    position: relative;
    color: white;
    text-align: center;
}

.hero-content h1 {
    font-size: 28px;
    margin-bottom: 10px;
}

.hero-content p {
    margin-bottom: 15px;
}

.hero-content button {
    background: white;
    color: #ec4899;
    border: none;
    padding: 10px 20px;
    border-radius: 20px;
    cursor: pointer;
    font-weight: bold;
}

.login-btn:hover {
    background: #ffe4ec;
}

        /* Header */
        .header {
            padding: 20px;
        }

        .header p {
            color: #666;
        }

        /* Container */
        .container {
            padding: 0 20px;
        }

        /* Card */
        .card {
            background: white;
            border-radius: 20px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 3px 8px rgba(0,0,0,0.1);
        }

        .card h3 {
            margin: 0;
        }

        .sub-text {
            color: #888;
            font-size: 14px;
        }

        /* Info Grid */
        .info-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
        }

        .info-grid p:first-child {
            color: #888;
        }

        hr {
            border: 1px solid #f9a8d4;
            margin: 15px 0;
        }

        /* Bottom */
        .bottom {
            display: flex;
            justify-content: space-between;
            font-size: 14px;
        }

        .price {
            color: #ec4899;
            font-weight: bold;
        }

        /* Button */
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
            background-color: #ec4899;
            color: white;
        }

        .btn-secondary {
            background-color: #fbcfe8;
            color: #be185d;
        }

        .btn-full {
            width: 100%;
            margin-top: 15px;
        }

        /* Footer */
        footer {
            background-color: #f472b6;
            color: white;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            padding: 20px;
            margin-top: 30px;
        }

        footer p {
            font-size: 14px;
        }
    </style>
</head>

<body>

<!-- Navbar -->
<div class="navbar">
    <div class="logo">EloraStay</div>

    <div class="nav-menu">
        <a href="/">Beranda</a>
        <a href="/kamar">Daftar Kamar</a>
        <a href="/reservasi">Reservasi</a>
        <a href="/pembayaran">Pembayaran</a>
    </div>

    <button class="login-btn">Login</button>
</div>
<div class="hero">
    <div class="hero-content">
        <h1>Temukan Hotel Impian Anda</h1>
        <p>Booking mudah, cepat, dan terpercaya hanya di EloraStay</p>  
    </div>
</div>
<!-- Header -->
<div class="header">
    <h2>Reservasi Saya</h2>
    <p>Kelola dan lihat detail reservasi Anda</p>
</div>

<!-- LIST RESERVASI -->
<div class="container">

    <!-- Card 1 -->
    <div class="card">
        <h3>Deluxe Room</h3>
        <p class="sub-text">EloraStay Jakarta</p>

        <div class="info-grid">
            <div>
                <p>Check-in</p>
                <p>Sen, 20 Apr 2026</p>
            </div>
            <div>
                <p>Check-out</p>
                <p>Kam, 23 Apr 2026</p>
            </div>
            <div>
                <p>Tamu</p>
                <p>2 orang</p>
            </div>
        </div>

        <hr>

        <div class="bottom">
            <div>
                <p class="sub-text">Kode Booking</p>
                <p>ELS-2026-001</p>
            </div>

            <div style="text-align:right;">
                <p class="sub-text">Total Pembayaran</p>
                <p class="price">Rp 1.500.000</p>
            </div>
        </div>

        <div class="btn-group">
            <button class="btn btn-primary">Lihat Detail</button>
            <button class="btn btn-secondary">Batalkan</button>
        </div>
    </div>

    <!-- Card 2 -->
    <div class="card">
        <h3>Deluxe Room</h3>
        <p class="sub-text">EloraStay Jakarta</p>

        <div class="info-grid">
            <div>
                <p>Check-in</p>
                <p>Sen, 20 Apr 2026</p>
            </div>
            <div>
                <p>Check-out</p>
                <p>Kam, 23 Apr 2026</p>
            </div>
            <div>
                <p>Tamu</p>
                <p>2 orang</p>
            </div>
        </div>

        <hr>

        <div class="bottom">
            <div>
                <p class="sub-text">Kode Booking</p>
                <p>ELS-2026-001</p>
            </div>

            <div style="text-align:right;">
                <p class="sub-text">Total Pembayaran</p>
                <p class="price">Rp 1.500.000</p>
            </div>
        </div>

        <button class="btn btn-primary btn-full">Lihat Detail</button>
    </div>

</div>

<!-- Footer -->
<footer>
    <div>
        <h4>EloraStay</h4>
        <p>Platform booking hotel terpercaya</p>
    </div>

    <div>
        <h4>Link</h4>
        <p>Beranda</p>
        <p>Daftar Kamar</p>
        <p>Reservasi Saya</p>
    </div>

    <div>
        <h4>Hubungi Kami</h4>
        <p>email@elorastay.com</p>
        <p>+62 123 456 7890</p>
    </div>
</footer>

</body>
</html>