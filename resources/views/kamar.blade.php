<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<title>Daftar Kamar - EloraStay</title>

<style>
body {
    margin: 0;
    font-family: 'Poppins', sans-serif;
    background-color: #ffe4ec;
}

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
    font-weight: 400;
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

/* Hero */
.hero {
    height: 300px;
    background: url('https://images.unsplash.com/photo-1566073771259-6a8506099945') center/cover;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
}

.hero::before {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background: rgba(236,72,153,0.4);
}

.hero-content {
    position: relative;
    color: white;
    text-align: center;
}

/* Room */
.room-list {
    padding: 40px;

    display: grid;

    grid-template-columns: repeat(auto-fit, minmax(320px, 380px));

    gap: 30px;

    justify-content: center;
}

/* Card */
.card {
    width: 100%;
    max-width: 380px;

    background: white;

    border-radius: 18px;

    overflow: hidden;

    box-shadow: 0 5px 15px rgba(0,0,0,0.1);

    transition: 0.3s;

    cursor: pointer;
}

/* Hover card */
.card:hover {
    transform: translateY(-8px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
}

/* Image */
.card img {
    width: 100%;
    height: 240px;
    object-fit: cover;
}

.card-body {
    position: relative;
    padding: 15px;
    padding-bottom: 60px;
}

.price {
    color: #ec4899;
    font-weight: bold;
}

/* Tombol */
.btn-detail {
    position: absolute;
    right: 15px;
    bottom: 15px;
    background: #ec4899;
    color: white;
    border: none;
    padding: 10px 16px;
    border-radius: 8px;
    cursor: pointer;
}

.btn-detail:hover {
    background: #db2777;
}

.btn-pesan {
    width: 100%;
    margin-top: 20px;
    background: #ec4899;
    color: white;
    padding: 12px;
    border: none;
    border-radius: 10px;
    cursor: pointer;
}

/* Modal */
.modal {
    display: none;
    position: fixed;
    z-index: 999;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.6);
    overflow-y: auto;
    padding: 40px 0;
}

.modal-content {
    background: white;
    width: 90%;
    max-width: 700px;
    margin: auto;
    border-radius: 15px;
    padding: 20px;
    position: relative;
    max-height: 90vh;
    overflow-y: auto;
}

.modal-content img {
    width: 100%;
    border-radius: 10px;
    margin-bottom: 15px;
}

.close {
    position: absolute;
    right: 15px;
    top: 10px;
    font-size: 22px;
    cursor: pointer;
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

<!-- Room List -->
<div class="room-list">

<div class="card" onclick="openModal('deluxe')">
    <img src="{{ asset('img/kamar/deluxe.jpeg') }}">
    <div class="card-body">
        <h4>Deluxe Room</h4>
        <p>Kamar nyaman dengan desain modern dan pemandangan kota yang menenangkan.</p>
        <p class="price">Rp 500.000</p>
        <button class="btn-detail" onclick="openModal('deluxe')">Lihat Detail</button>
    </div>
</div>

<div class="card" onclick="openModal('executive')">
    <img src="{{ asset('img/kamar/executive.jpeg') }}">
    <div class="card-body">
        <h4>Executive Room</h4>
        <p>Kamar eksklusif untuk tamu bisnis dengan fasilitas modern Dirancang khusus untuk tamu bisnis.</p>
        <p class="price">Rp 600.000</p>
        <button class="btn-detail" onclick="openModal('executive')">Lihat Detail</button>
    </div>
</div>

<div class="card" onclick="openModal('superior')">
    <img src="{{ asset('img/kamar/suite.jpeg') }}">
    <div class="card-body">
        <h4>Superior Suite</h4>
        <p>Suite mewah dengan ruang tamu terpisah, fasilitas premium, dan pemandangan indah.</p>
        <p class="price">Rp 700.000</p>
        <button class="btn-detail" onclick="openModal('superior')">Lihat Detail</button>
    </div>
</div>

<div class="card" onclick="openModal('family')">
    <img src="{{ asset('img/kamar/family.jpeg') }}">
    <div class="card-body">
        <h4>Family Room</h4>
        <p>Kamar luas cocok untuk keluarga, dengan fasilitas yang memadai untuk kenyamanan semua anggota keluarga.</p>
        <p class="price">Rp 850.000</p>
        <button class="btn-detail" onclick="openModal('family')">Lihat Detail</button>
    </div>
</div>

<!-- Standard Room -->
<div class="card" onclick="openModal('standard')">
    <img src="https://images.unsplash.com/photo-1505693416388-ac5ce068fe85">
    <div class="card-body">
        <h4>Standard Room</h4>
        <p>Kamar minimalis dengan desain sederhana dan nyaman untuk pengalaman menginap praktis.</p>
        <p class="price">Rp 350.000</p>
        <button class="btn-detail" onclick="openModal('standard')">
            Lihat Detail
        </button>
    </div>
</div>

<!-- Junior Suite -->
<div class="card" onclick="openModal('junior')">
    <img src="https://images.unsplash.com/photo-1566665797739-1674de7a421a">
    <div class="card-body">
        <h4>Junior Suite</h4>
        <p>Suite modern dengan area santai nyaman dan suasana mewah yang menenangkan lengkap dengan fasilitas premium.</p>
        <p class="price">Rp 950.000</p>
        <button class="btn-detail" onclick="openModal('junior')">
            Lihat Detail
        </button>
    </div>
</div>

<!-- Presidential Suite -->
<div class="card" onclick="openModal('presidential')">
    <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b">
    <div class="card-body">
        <h4>Presidential Suite</h4>
        <p>Suite mewah dengan ruang tamu pribadi dan fasilitas premium eksklusif.</p>
        <p class="price">Rp 2.500.000</p>
        <button class="btn-detail" onclick="openModal('presidential')">
            Lihat Detail
        </button>
    </div>
</div>

</div>

<!-- MODAL -->
<div id="roomModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">✖</span>
        <div id="modalContent"></div>
    </div>
</div>

<script>
const rooms = {
    deluxe: {
        name: "Deluxe Room",
        price: 500000,
        img: "/img/kamar/deluxe.jpeg",
        desc: "Kamar nyaman dengan desain modern dan pemandangan kota yang menenangkan. Cocok untuk Anda yang menginginkan istirahat berkualitas dengan suasana hangat dan fasilitas lengkap.",
        size: "32m²",
        capacity: "2 Orang",
        rating: "4.8"
    },
    executive: {
        name: "Executive Room",
        price: 600000,
        img: "/img/kamar/executive.jpeg",
        desc: "Dirancang khusus untuk tamu bisnis, kamar ini menawarkan kenyamanan ekstra dengan fasilitas premium dan ruang yang mendukung produktivitas selama menginap.",
        size: "40m²",
        capacity: "2 Orang",
        rating: "4.7"
    },
    superior: {
        name: "Superior Suite",
        price: 700000,
        img: "/img/kamar/suite.jpeg",
        desc: "Suite mewah dengan ruang tamu terpisah, fasilitas premium, dan pemandangan indah.",
        size: "45m²",
        capacity: "3 Orang",
        rating: "4.8"
    },
    family: {
        name: "Family Room",
        price: 850000,
        img: "/img/kamar/family.jpeg",
        desc: "Kamar luas yang dirancang untuk keluarga, memberikan kenyamanan maksimal.",
        size: "55m²",
        capacity: "4 Orang",
        rating: "4.6"
    },
    standard: {
        name: "Standard Room",
        price: 350000,
        img: "https://images.unsplash.com/photo-1505693416388-ac5ce068fe85",
        desc: "Kamar minimalis dan nyaman untuk pengalaman menginap praktis.",
        size: "32m²",
        capacity: "2 Orang",
        rating: "4.5"
    },
    junior: {
        name: "Junior Suite",
        price: 950000,
        img: "https://images.unsplash.com/photo-1566665797739-1674de7a421a",
        desc: "Suite modern dengan area santai nyaman dan suasana mewah yang menenangkan.",
        size: "40m²",
        capacity: "3 Orang",
        rating: "4.7"
    },
    presidential: {
        name: "Presidential Suite",
        price: 2500000,
        img: "https://images.unsplash.com/photo-1582719478250-c89cae4dc85b",
        desc: "Suite mewah dengan ruang tamu pribadi dan fasilitas premium eksklusif.",
        size: "80m²",
        capacity: "6 Orang",
        rating: "4.9"
    }
};

let selectedRoom = null;

function openModal(type) {
    selectedRoom = rooms[type];

    document.getElementById("roomModal").style.display = "block";

    document.getElementById("modalContent").innerHTML = `
        <img src="${selectedRoom.img}">

        <h2>${selectedRoom.name}</h2>
        <p>${selectedRoom.desc}</p>

        <p>
            👥 ${selectedRoom.capacity} |
            📐 ${selectedRoom.size} |
            ⭐ ${selectedRoom.rating}
        </p>

        <ul>
            <li>✔ WiFi Gratis</li>
            <li>✔ AC</li>
            <li>✔ Smart TV</li>
            <li>✔ Sarapan Gratis</li>
            <li>✔ Kamar Mandi Dalam</li>
        </ul>

        <h3 style="color:#ec4899;">
            Rp ${selectedRoom.price.toLocaleString()}
        </h3>

        <button class="btn-pesan" onclick="goToPayment()">
            Pesan Saya
        </button>
    `;
}

function closeModal() {
    document.getElementById("roomModal").style.display = "none";
}

window.onclick = function(e) {
    if (e.target === document.getElementById("roomModal")) {
        closeModal();
    }
}

function goToPayment() {
    if (!selectedRoom) {
        alert("Pilih kamar dulu!");
        return;
    }

    localStorage.setItem("bookingData", JSON.stringify(selectedRoom));
    window.location.href = "/pembayaran";
}
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