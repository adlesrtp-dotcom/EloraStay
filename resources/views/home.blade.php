<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EloraStay</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #ffe4ec;
        }

        /* Navbar */
       /* Navbar Modern */
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

.login-btn:hover {
    background: #ffe4ec;
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

        /* Search */
        .search-box {
            background-color: #fbcfe8;
            margin: 20px;
            padding: 20px;
            border-radius: 15px;
        }

        .search-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
            margin-top: 10px;
        }

        .search-grid input,
        .search-grid button {
            padding: 10px;
            border-radius: 5px;
            border: none;
        }

        .search-grid button {
            background-color: #ec4899;
            color: white;
            cursor: pointer;
        }

        /* Features */
        .features {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            text-align: center;
            padding: 20px;
        }

        /* Room */
        .room-section {
            padding: 20px;
        }

        .room-header {
            display: flex;
            justify-content: space-between;
        }

        .room-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            margin-top: 10px;
        }

        .card {
            background: white;
            border-radius: 15px;
            padding: 15px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .card img {
            width: 100%;
            border-radius: 10px;
        }

        .card button {
            background-color: #ec4899;
            color: white;
            border: none;
            padding: 5px 10px;
            margin-top: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        /* CTA */
        .cta {
            background-color: #f472b6;
            color: white;
            text-align: center;
            padding: 20px;
        }

        .cta button {
            background: white;
            color: #f472b6;
            border: none;
            padding: 10px 15px;
            margin-top: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Footer */
        /* Footer Modern */
.footer {
    background: linear-gradient(to right, #f472b6, #ec4899);
    color: white;
    margin-top: 40px;
}

.footer-container {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    padding: 30px 20px;
    gap: 20px;
}

.footer-section h3,
.footer-section h4 {
    margin-bottom: 10px;
}

.footer-section p {
    font-size: 14px;
    line-height: 1.6;
}

.footer-section a {
    display: block;
    color: white;
    text-decoration: none;
    margin-bottom: 8px;
    font-size: 14px;
    transition: 0.3s;
}

.footer-section a:hover {
    transform: translateX(5px);
    color: #ffe4ec;
}

.footer-bottom {
    text-align: center;
    padding: 15px;
    background-color: rgba(0,0,0,0.1);
    font-size: 13px;
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
        <button>Booking Sekarang</button>
    </div>
</div>

<!-- Search -->
<div class="search-box">
    <h2>Cari Kamar & Booking Hotel</h2>
    <p>Temukan kamar hotel impian Anda dengan harga terbaik</p>

    <div class="search-grid">
        <input type="text" placeholder="Cari Kota atau Hotel">
        <input type="date">
        <input type="date">
        <button>Cari Kamar</button>
    </div>
</div>

<!-- Features -->
<div class="features">
    <div>Hotel Terpercaya</div>
    <div>Rating Terbaik</div>
    <div>Booking Instan</div>
    <div>Dukungan 24/7</div>
</div>

<!-- Room -->
<div class="room-section">
    <div class="room-header">
        <h3>Pilihan kamar terpopuler</h3>
        <a href="#" style="color:#ec4899;">Lihat Semua →</a>
    </div>

    <div class="room-grid">
        <div class="card">
            <img src="{{ asset('img/kamar/deluxe.jpeg') }}" class="room-img">
            <h4>Deluxe Room</h4>
            <p>Kamar dengan pemandangan kota</p>
            <b style="color:#ec4899;">Rp. 500.000</b>
            <br>
            <button>Pesan Saya</button>
        </div>

        <div class="card">
            <img src="{{ asset('img/kamar/suite.jpeg') }}" class="room-img">
            <h4>Superior Suite</h4>
            <p>Suite mewah dan luas</p>
            <b style="color:#ec4899;">Rp. 750.000</b>
            <br>
            <button>Pesan Saya</button>
        </div>
    </div>
</div>

<!-- CTA -->
<div class="cta">
    <h3>Siap untuk pengalaman terbaik?</h3>
    <p>Daftar sekarang dan dapatkan promo</p>
    <button>Daftar Sekarang</button>
</div>

<!-- Footer -->
<footer class="footer">
    <div class="footer-container">

        <!-- Brand -->
        <div class="footer-section">
            <h3>EloraStay</h3>
            <p>Platform booking hotel terpercaya dengan pengalaman terbaik untuk Anda.</p>
        </div>

        <!-- Navigation -->
        <div class="footer-section">
            <h4>Menu</h4>
            <a href="/">🏠 Beranda</a>
            <a href="/kamar">🛏️ Daftar Kamar</a>
            <a href="/reservasi">📄 Reservasi</a>
            <a href="/pembayaran">💳 Pembayaran</a>
        </div>

        <!-- Contact -->
        <div class="footer-section">
            <h4>Kontak</h4>
            <p>📧 email@elorastay.com</p>
            <p>📞 +62 123 456 7890</p>
            <p>📍 Indonesia</p>
        </div>

    </div>

    <!-- Bottom -->
    <div class="footer-bottom">
        <p>© 2026 EloraStay. All rights reserved.</p>
    </div>
</footer>
</body>
</html>