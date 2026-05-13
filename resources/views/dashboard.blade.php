<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Dashboard - EloraStay</title>

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
            gap: 35px;

            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }

        .nav-menu a {
        position: relative;
        color: white;
        text-decoration: none;
        font-size: 15px;
        font-weight: 600;
        padding-bottom: 5px;
        transition: 0.3s;
        }

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
            text-decoration: none;
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

        /* Overlay */
        .hero::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            background: rgba(236, 72, 153, 0.4);
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

        /* Features */
        .features {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            padding: 40px 20px;
            text-align: center;
        }

        .feature-card {
            background: white;
            padding: 25px;
            border-radius: 15px;
            transition: 0.3s;
            box-shadow: 0 4px 10px rgba(0,0,0,0.08);
        }

        .feature-card:hover {
            transform: translateY(-5px);
        }

        .icon {
            font-size: 35px;
            margin-bottom: 10px;
        }

        .feature-card h3 {
            margin-bottom: 10px;
        }

        .feature-card p {
            font-size: 14px;
            color: #666;
        }

        /* Lihat Semua */
        .lihat-semua {
            color: #ec4899;
            font-weight: bold;
            text-decoration: none;
            font-size: 14px;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            transition: 0.3s;
        }

        .lihat-semua:hover {
            color: #db2777;
            gap: 10px;
        }

        /* Room */
        .room-section {
            padding: 20px;
        }

        .room-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .room-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-top: 20px;
        }

        .card {
            background: white;
            border-radius: 15px;
            padding: 15px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            cursor: pointer;
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card img{
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-radius: 10px;
            display: block;
        }

        .card p {
            color: #666;
            font-size: 14px;
            line-height: 1.6;
        }

        /* CTA */
        .cta {
            background-color: #f472b6;
            color: white;
            text-align: center;
            padding: 40px 20px;
            margin-top: 40px;
        }

        .btn-daftar {
            display: inline-block;
            margin-top: 15px;
            background: white;
            color: #ec4899;
            padding: 12px 24px;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn-daftar:hover {
            background: #ffe4ec;
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
    <div class="logo">EloraStay</div>

    <div class="nav-menu">
        <a href="/">Beranda</a>
        <a href="/kamar">Daftar Kamar</a>
        <a href="/pembayaran">Pembayaran</a>
        <a href="/reservasi">Reservasi</a>
    </div>

    <!-- tombol login -->
    <a href="/login" class="login-btn" id="loginBtn">
        Login
    </a>

    <!-- tombol logout -->
    <button class="login-btn"
        id="logoutBtn"
        onclick="logout()"
        style="display:none;">

        Logout

    </button>
</div>

<!-- Hero -->
<div class="hero">
    <div class="hero-content">
        <h1>Temukan Hotel Impian Anda</h1>
        <p>Booking mudah, cepat, dan terpercaya hanya di EloraStay</p>
    </div>
</div>

<!-- Features -->
<div class="features">

    <div class="feature-card">
        <div class="icon">🏨</div>
        <h3>Hotel Terpercaya</h3>
        <p>
            Kami bekerja sama dengan hotel terbaik untuk memastikan 
            kenyamanan dan kualitas menginap Anda.
        </p>
    </div>

    <div class="feature-card">
        <div class="icon">⭐</div>
        <h3>Rating Terbaik</h3>
        <p>
            Semua kamar memiliki ulasan tinggi dari pelanggan 
            yang telah merasakan pengalaman menginap.
        </p>
    </div>

    <div class="feature-card">
        <div class="icon">⚡</div>
        <h3>Booking Instan</h3>
        <p>
            Pesan kamar hanya dalam beberapa klik tanpa proses 
            yang ribet dan langsung terkonfirmasi.
        </p>
    </div>

    <div class="feature-card">
        <div class="icon">📞</div>
        <h3>Dukungan 24/7</h3>
        <p>
            Tim kami siap membantu Anda kapan saja jika terjadi 
            kendala saat reservasi atau menginap.
        </p>
    </div>

</div>

<!-- Room -->
<div class="room-section">

    <div class="room-header">
        <h3>Pilihan kamar terpopuler</h3>

        <a href="/kamar" class="lihat-semua">
            Lihat Semua →
        </a>
    </div>

    <div class="room-grid">

        <!-- CARD 1 -->
        <div class="card" onclick="window.location.href='/kamar'">

             <img src="{{ asset('img/kamar/deluxe.jpeg') }}" alt="Deluxe Room">

            <h4>Deluxe Room</h4>

            <p>
                Kamar nyaman dengan desain modern dan pemandangan kota 
                yang menenangkan. Cocok untuk Anda yang menginginkan 
                istirahat berkualitas dengan suasana hangat dan fasilitas lengkap.
            </p>

            <b style="color:#ec4899;">Rp. 500.000</b>

        </div>

        <!-- CARD 2 -->
        <div class="card" onclick="window.location.href='/kamar'">

             <img src="/img/kamar/suite.jpeg" alt="Superior Suite">

            <h4>Superior Suite</h4>

            <p>
                Suite mewah dengan ruang tamu terpisah, fasilitas premium, 
                dan pemandangan indah. Ideal untuk Anda yang menginginkan 
                pengalaman menginap yang lebih eksklusif dan nyaman.
            </p>

            <b style="color:#ec4899;">Rp. 750.000</b>

        </div>

    </div>
</div>

<!-- CTA -->
<div class="cta">

    <div class="cta-section" id="daftarSection">

        <h3>Siap untuk pengalaman terbaik?</h3>

        <p>Daftar sekarang dan dapatkan promo</p>

        <button class="btn-daftar"
            onclick="window.location.href='/registrasi'">

            Daftar Sekarang

        </button>

    </div>

</div>

<!-- Footer -->
<footer class="footer">

    <div class="footer-container">

        <!-- Brand -->
        <div class="footer-section">
            <h3>EloraStay</h3>

            <p>
                Platform booking hotel terpercaya dengan pengalaman 
                terbaik untuk Anda.
            </p>
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

window.onload = function () {

    const isLogin = localStorage.getItem("isLogin");

    const loginBtn = document.getElementById("loginBtn");

    const logoutBtn = document.getElementById("logoutBtn");

    const daftarSection = document.getElementById("daftarSection");

    // jika sudah login
    if (isLogin === "true") {

        // sembunyikan login
        if (loginBtn) {
            loginBtn.style.display = "none";
        }

        // tampilkan logout
        if (logoutBtn) {
            logoutBtn.style.display = "inline-block";
        }

        // sembunyikan daftar sekarang
        if (daftarSection) {
            daftarSection.style.display = "none";
        }
    }

    // jika belum login
    else {

        // tampilkan login
        if (loginBtn) {
            loginBtn.style.display = "inline-block";
        }

        // sembunyikan logout
        if (logoutBtn) {
            logoutBtn.style.display = "none";
        }

        // tampilkan daftar sekarang
        if (daftarSection) {
            daftarSection.style.display = "block";
        }
    }
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