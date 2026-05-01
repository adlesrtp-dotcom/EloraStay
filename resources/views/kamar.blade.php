<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Kamar - EloraStay</title>

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

        /* Filter */
        .filter {
            background-color: #fbcfe8;
            margin: 0 20px;
            padding: 20px;
            border-radius: 15px;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            text-align: center;
        }

        .filter button {
            background-color: #fce7f3;
            padding: 10px;
            border: none;
            border-radius: 8px;
            width: 100%;
            cursor: pointer;
        }

        /* Room */
        .room-list {
            padding: 20px;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }

        .card img {
            width: 100%;
        }

        .card-body {
            padding: 15px;
        }

        .price {
            color: #ec4899;
            font-weight: bold;
        }

        .card button {
            background-color: #ec4899;
            color: white;
            border: none;
            padding: 6px 12px;
            border-radius: 6px;
            float: right;
            margin-top: 10px;
            cursor: pointer;
        }

        /* Rating */
        .image-container {
            position: relative;
        }

        .rating {
            position: absolute;
            top: 10px;
            right: 10px;
            background: #facc15;
            color: white;
            font-size: 12px;
            padding: 3px 8px;
            border-radius: 5px;
        }

        /* Footer */
        footer {
            background-color: #f472b6;
            color: white;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            padding: 20px;
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
    <h2>Daftar Kamar</h2>
    <p>Temukan kamar yang tersedia</p>
</div>

<!-- Filter -->
<div class="filter">
    <div>
        <p>Rentang Harga</p>
        <button>Semua Harga</button>
    </div>

    <div>
        <p>Kapasitas</p>
        <button>2 Orang</button>
    </div>

    <div>
        <p>Urutkan</p>
        <button>Unggulan</button>
    </div>
</div>

<!-- Room List -->
<div class="room-list">

    <!-- Card 1 -->
    <div class="card">
        <div class="image-container">
            <img src="{{ asset('img/kamar/deluxe.jpeg') }}" class="room-img">
            <span class="rating">⭐ 4.8</span>
        </div>
        <div class="card-body">
            <h4>Deluxe Room</h4>
            <p>Kamar deluxe dengan pemandangan kota yang menakjubkan</p>
            <p class="price">Rp. 500.000</p>
            <button>Pesan Saya</button>
        </div>
    </div>

    <!-- Card 2 -->
    <div class="card">
        <div class="image-container">
            <img src="{{ asset('img/kamar/executive.jpeg') }}" class="room-img">
            <span class="rating">⭐ 4.7</span>
        </div>
        <div class="card-body">
            <h4>Executive Room</h4>
            <p>Kamar eksklusif untuk tamu bisnis dengan fasilitas modern</p>
            <p class="price">Rp. 600.000</p>
            <button>Pesan Saya</button>
        </div>
    </div>

    <!-- Card 3 -->
    <div class="card">
        <div class="image-container">
            <img src="{{ asset('img/kamar/suite.jpeg') }}" class="room-img">
            <span class="rating">⭐ 4.8</span>
        </div>
        <div class="card-body">
            <h4>Superior Suite</h4>
            <p>Suite premium dengan ruang tamu terpisah</p>
            <p class="price">Rp. 700.000</p>
            <button>Pesan Saya</button>
        </div>
    </div>

    <!-- Card 4 -->
    <div class="card">
        <div class="image-container">
            <img src="{{ asset('img/kamar/family.jpeg') }}" class="room-img">
            <span class="rating">⭐ 4.6</span>
        </div>
        <div class="card-body">
            <h4>Family Room</h4>
            <p>Kamar luas cocok untuk keluarga</p>
            <p class="price">Rp. 850.000</p>
            <button>Pesan Saya</button>
        </div>
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