<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pembayaran - EloraStay</title>

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

        /* Card */
        .card {
            margin: 20px;
            background: white;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 3px 8px rgba(0,0,0,0.1);
        }

        /* Payment Method */
        .method button {
            width: 100%;
            text-align: left;
            background: #fbcfe8;
            padding: 12px;
            border: none;
            border-radius: 8px;
            margin-bottom: 10px;
            cursor: pointer;
        }

            .payment-card {
    background: #fff;
    margin: 20px;
    padding: 25px;
    border-radius: 15px;
    box-shadow: 0 6px 15px rgba(0,0,0,0.08);
    position: relative;
}

/* Header */
.payment-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.payment-header h3 {
    margin: 0;
    font-size: 18px;
}

/* Badge status */
.status-badge {
    padding: 6px 14px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: bold;
}

/* Body */
.payment-body {
    margin-top: 15px;
}

.payment-body .item {
    display: flex;
    justify-content: space-between;
    margin-bottom: 12px;
    font-size: 14px;
}

.payment-body span {
    color: #666;
}

/* Garis */
hr {
    border: none;
    border-top: 1px solid #f3c6d3;
    margin: 15px 0;
}

/* Footer status kanan bawah */
.payment-footer {
    position: absolute;
    bottom: 15px;
    right: 20px;
    font-size: 13px;
    font-weight: bold;
}
        /* Form */
        label {
            font-size: 14px;
        }

        input {
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            border: none;
            background: #fce7f3;
            margin-top: 5px;
        }

        .row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
        }

        /* Button */
        .btn {
            width: 100%;
            padding: 12px;
            margin-top: 20px;
            background-color: #ec4899;
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-weight: bold;
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
    <h2>Pembayaran</h2>
    <p>Selesaikan pembayaran untuk mengkonfirmasi reservasi Anda</p>
</div>

<!-- METODE PEMBAYARAN -->
<!-- METODE PEMBAYARAN -->
<div class="card">
    <h3>Metode Pembayaran</h3>

    <div class="method">
        <button onclick="pilihMetode('qris')">QRIS</button>
        <button onclick="pilihMetode('cod')">Bayar di Tempat</button>
    </div>
</div>

<!-- DETAIL PEMBAYARAN -->
<div class="card">
    <h3>Detail Pembayaran</h3>

    <!-- QRIS -->
<div id="qrisForm" style="display:none; text-align:center;">
    <p>Scan QR Code berikut untuk melakukan pembayaran</p>
    <img src="{{ asset('img/qris.jpg') }}" style="width:200px; margin:10px auto;">

    <button class="btn" onclick="bayarQRIS()">Saya Sudah Bayar</button>
</div>

    <!-- COD -->
    <div id="codForm" style="display:none;">
        <p>Pembayaran akan dilakukan langsung di hotel saat check-in.</p>

        <div style="margin-top:10px;">
            <label>Nama Pemesan</label>
            <input type="text" placeholder="Nama Anda">
        </div>

        <div style="margin-top:10px;">
            <label>Nomor HP</label>
            <input type="text" placeholder="08xxxxxxxxxx">
        </div>

        <button class="btn">Konfirmasi Reservasi</button>
    </div>
</div>

<!-- DETAIL PEMBAYARAN -->
<div id="hasilPembayaran" class="payment-card" style="display:none;">

    <!-- Header -->
    <div class="payment-header">
        <h3>Detail Pembayaran</h3>
        <span id="statusBadge" class="status-badge"></span>
    </div>

    <hr>

    <!-- Detail -->
    <div class="payment-body">

        <div class="item">
            <span>Nama Pemesan</span>
            <strong id="nama"></strong>
        </div>

        <div class="item">
            <span>Metode Pembayaran</span>
            <strong id="metode"></strong>
        </div>

        <div class="item">
            <span>No Resi</span>
            <strong id="resi"></strong>
        </div>

        <div class="item">
            <span>Tipe Kamar</span>
            <strong id="kamar"></strong>
        </div>

        <div class="item">
            <span>Tanggal Menginap</span>
            <strong id="tanggal"></strong>
        </div>

    </div>

    <!-- Footer -->
    <div class="payment-footer">
        <span id="statusText"></span>
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

<script>
function pilihMetode(metode) {
    document.getElementById("qrisForm").style.display = "none";
    document.getElementById("codForm").style.display = "none";
    document.getElementById("hasilPembayaran").style.display = "none";

    if (metode === "qris") {
        document.getElementById("qrisForm").style.display = "block";
    } else {
        document.getElementById("codForm").style.display = "block";
    }
}

function bayarQRIS() {
    isiData("Lunas", "QRIS");
}

function bayarCOD() {
    isiData("Menunggu", "Bayar di Tempat");
}

// 🔹 Function isi data (dipakai dua-duanya)
function isiData(statusText, metodeBayar) {

    let nama = "Selda Putri";
    let kamar = "Deluxe Room";
    let tanggal = "20 Apr 2026 - 23 Apr 2026";
    let resi = "ELS-" + Math.floor(Math.random() * 1000000);

    document.getElementById("nama").innerText = nama;
    document.getElementById("resi").innerText = resi;
    document.getElementById("kamar").innerText = kamar;
    document.getElementById("tanggal").innerText = tanggal;

    // ✅ tampilkan metode
    document.getElementById("metode").innerText = metodeBayar;

    let badge = document.getElementById("statusBadge");
    badge.innerText = statusText;

    if (statusText === "Lunas") {
        badge.style.background = "#d1fae5";
        badge.style.color = "#065f46";
    } else {
        badge.style.background = "#fef3c7";
        badge.style.color = "#92400e";
    }

    document.getElementById("hasilPembayaran").style.display = "block";
}

</script>
</body>
</html>