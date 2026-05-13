<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<title>Pembayaran - EloraStay</title>

<style>
body {
    margin: 0;
    font-family: 'Poppins', sans-serif;
    background-color: #ffe4ec;
}

/* NAVBAR */
/* Navbar */
.navbar {
    background: linear-gradient(to right, #f472b6, #ec4899);
    color: white;
    padding: 18px 35px;

    display: flex;
    align-items: center;
    justify-content: space-between;

    position: relative;
}

.logo {
    font-size: 20px;
    font-weight: bold;
}

/* Menu Tengah */
.nav-menu {
    display: flex;
    gap: 35px;

    position: absolute;
    left: 50%;
    transform: translateX(-50%);
}

/* Link */
.nav-menu a {
    position: relative;
    color: white;
    text-decoration: none;
    font-size: 15px;
    font-weight: 600;
    padding-bottom: 5px;
    transition: 0.3s;
}

/* Garis bawah */
.nav-menu a::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: -6px;

    width: 0%;
    height: 3px;

    background: white;
    border-radius: 10px;

    transition: 0.3s;
}

/* Hover */
.nav-menu a:hover::after {
    width: 100%;
}

/* Active */
.nav-menu a.active::after {
    width: 100%;
}

/* Tombol Logout */
.login-btn {
    background: white;
    color: #ec4899;
    border: none;
    padding: 10px 22px;
    border-radius: 25px;
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
/* ================= FITUR PEMBAYARAN ================= */

.container {
    max-width: 800px;
    margin: 30px auto;
}

/* Card */
.card {
    background: white;
    padding: 20px;
    border-radius: 15px;
    margin-bottom: 20px;
}

/* Input */
input {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border-radius: 8px;
    border: none;
    background: #fce7f3;
}

/* Button */
.btn {
    width: 100%;
    padding: 12px;
    margin-top: 15px;
    background: #ec4899;
    color: white;
    border: none;
    border-radius: 10px;
    cursor: pointer;
}

/* Total */
.total {
    margin-top: 10px;
    color: #ec4899;
    font-weight: bold;
}

/* Result */
.result {
    background: white;
    padding: 20px;
    border-radius: 15px;
    display: none;
}
/* Footer */
      
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

    <!-- Logo -->
    <div class="logo">EloraStay</div>

    <!-- Menu Tengah -->
    <div class="nav-menu">

        <a href="/"
           class="{{ request()->path() == '/' ? 'active' : '' }}">
           Beranda
        </a>

        <a href="/kamar"
           class="{{ request()->is('kamar') ? 'active' : '' }}">
           Daftar Kamar
        </a>

        <a href="/pembayaran"
           class="{{ request()->is('pembayaran') ? 'active' : '' }}">
           Pembayaran
        </a>

        <a href="/reservasi"
           class="{{ request()->is('reservasi') ? 'active' : '' }}">
           Reservasi
        </a>

    </div>

    <!-- Logout -->
    <button class="login-btn" onclick="logout()">
        Logout
    </button>

</div>
<div class="hero">
    <div class="hero-content">
        <h1>Temukan Hotel Impian Anda</h1>
        <p>Booking mudah, cepat, dan terpercaya hanya di EloraStay</p>
        
    </div>
</div>


<div class="container">

<!-- DATA -->
<div class="card">
    <h3>Data Pemesanan</h3>

    <p id="infoKamar"></p>

    <label>Nama</label>
    <input type="text" id="nama">

    <label>Check-in</label>
    <input type="date" id="checkin">

    <label>Check-out</label>
    <input type="date" id="checkout">

    <div class="total" id="totalHarga">Total: Rp 0</div>
</div>

<!-- METODE -->
<div class="card">
    <h3>Metode Pembayaran</h3>

    <button class="btn" onclick="pilihMetode('qris')">QRIS</button>
    <button class="btn" onclick="pilihMetode('cod')">Bayar di Tempat</button>

    <div id="qris" style="display:none; text-align:center;">
        <p>Scan QR</p>
        <img src="/img/qris.jpg" width="200">
        <button class="btn" onclick="bayar('QRIS','Lunas')">Saya Sudah Bayar</button>
    </div>

    <div id="cod" style="display:none;">
        <p>Bayar di hotel</p>
        <button class="btn" onclick="bayar('COD','Menunggu')">Konfirmasi</button>
    </div>
</div>

<!-- HASIL -->
<div id="hasil" class="result">
    <h3>Detail Pembayaran</h3>

    <p>Nama: <b id="outNama"></b></p>
    <p>Kamar: <b id="outKamar"></b></p>
    <p>Tanggal: <b id="outTanggal"></b></p>
    <p>Metode: <b id="outMetode"></b></p>
    <p>Status: <b id="outStatus"></b></p>
    <p>Total: <b id="outTotal"></b></p>
</div>

</div>

<script>
// ambil data kamar
const data = JSON.parse(localStorage.getItem("bookingData"));

document.getElementById("infoKamar").innerText =
    data.name + " | Rp " + data.price.toLocaleString();

let total = 0;

// hitung total
function hitung() {
    let c1 = new Date(checkin.value);
    let c2 = new Date(checkout.value);

    if (c2 > c1) {
        let malam = (c2 - c1)/(1000*60*60*24);
        total = malam * data.price;

        totalHarga.innerText = "Total: Rp " + total.toLocaleString();
    }
}

checkin.onchange = hitung;
checkout.onchange = hitung;

// metode
function pilihMetode(m) {
    qris.style.display = "none";
    cod.style.display = "none";

    if (m == "qris") qris.style.display = "block";
    else cod.style.display = "block";
}

// bayar
function bayar(metode, status) {

    if (!nama.value || total <= 0) {
        alert("Lengkapi data!");
        return;
    }

    outNama.innerText = nama.value;
    outKamar.innerText = data.name;
    outTanggal.innerText = checkin.value + " - " + checkout.value;
    outMetode.innerText = metode;
    outStatus.innerText = status;
    outTotal.innerText = "Rp " + total.toLocaleString();

    hasil.style.display = "block";
}

function simpanReservasi(status, metode) {
    let booking = JSON.parse(localStorage.getItem("bookingData"));

    let newData = {
        resi: "ELS-" + Math.floor(Math.random() * 1000000),
        room: booking.name,
        total: booking.price,
        checkin: "20 Apr 2026",
        checkout: "23 Apr 2026",
        guest: "2 orang",
        method: metode,
        status: status
    };

    let data = JSON.parse(localStorage.getItem("reservations")) || [];
    data.push(newData);

    localStorage.setItem("reservations", JSON.stringify(data));
}
simpanReservasi("Lunas","QRIS");
simpanReservasi("Menunggu","COD");
</script>
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
<script>

const isLogin = localStorage.getItem("isLogin");

if (isLogin !== "true") {

    alert("Silakan login terlebih dahulu!");

    window.location.href = "/dashboard";
}

// logout
function logout() {

    localStorage.removeItem("isLogin");

    alert("Logout berhasil");

    window.location.href = "/dashboard";
}

</script>
</body>
</html>