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

.logo { font-size: 20px; font-weight: bold; }

.nav-menu { display: flex; gap: 20px; }

.nav-menu a {
    color: white;
    text-decoration: none;
    font-size: 14px;
}

.login-btn {
    background: white;
    color: #ec4899;
    border: none;
    padding: 6px 14px;
    border-radius: 20px;
    cursor: pointer;
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
    width: 100%; height: 100%;
    background: rgba(236,72,153,0.4);
}

.hero-content {
    position: relative;
    color: white;
    text-align: center;
}

/* Header */
.header { padding: 20px; }

/* Container */
.container { padding: 0 20px; }

/* Card */
.card {
    background: white;
    border-radius: 20px;
    padding: 20px;
    margin-bottom: 20px;
    box-shadow: 0 3px 8px rgba(0,0,0,0.1);
}

.sub-text { color: #888; font-size: 14px; }

.info-grid {
    display: grid;
    grid-template-columns: repeat(3,1fr);
    text-align: center;
    margin-top: 15px;
}

hr { border: 1px solid #f9a8d4; margin: 15px 0; }

.bottom {
    display: flex;
    justify-content: space-between;
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
}

/* Status badge */
.badge {
    display: inline-block;
    padding: 5px 10px;
    border-radius: 20px;
    font-size: 12px;
    margin-top: 10px;
}

.lunas { background:#d1fae5; color:#065f46; }
.menunggu { background:#fef3c7; color:#92400e; }

/* MODAL */
.modal {
    display: none;
    position: fixed;
    z-index: 999;
    left:0; top:0;
    width:100%; height:100%;
    background: rgba(0,0,0,0.6);
}

.modal-content {
    background: white;
    width: 90%;
    max-width: 500px;
    margin: 80px auto;
    padding: 20px;
    border-radius: 15px;
}

.close {
    float:right;
    cursor:pointer;
    font-size:20px;
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
    <button class="login-btn">Login</button>
</div>

<!-- Hero -->
<div class="hero">
    <div class="hero-content">
        <h1>Temukan Hotel Impian Anda</h1>
        <p>Booking mudah, cepat, dan terpercaya</p>
    </div>
</div>

<!-- Header -->
<div class="header">
    <h2>Reservasi Saya</h2>
    <p>Kelola dan lihat detail reservasi Anda</p>
</div>

<!-- LIST -->
<div class="container" id="reservasiList"></div>

<!-- MODAL DETAIL -->
<div id="detailModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">✖</span>
        <div id="modalBody"></div>
    </div>
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

</footer>

<script>

// ambil data
function getData() {
    return JSON.parse(localStorage.getItem("reservations")) || [];
}

// render
function render() {
    const list = document.getElementById("reservasiList");
    list.innerHTML = "";

    const data = getData();

    if(data.length === 0){
        list.innerHTML = "<p>Tidak ada reservasi</p>";
        return;
    }

    data.reverse().forEach(res => {

        const statusClass = res.status === "Lunas" ? "lunas" : "menunggu";

        list.innerHTML += `
        <div class="card">
            <h3>${res.room}</h3>
            <p class="sub-text">EloraStay Jakarta</p>

            <span class="badge ${statusClass}">${res.status}</span>

            <div class="info-grid">
                <div>
                    <p>Check-in</p>
                    <p>${res.checkin}</p>
                </div>
                <div>
                    <p>Check-out</p>
                    <p>${res.checkout}</p>
                </div>
                <div>
                    <p>Tamu</p>
                    <p>${res.guest}</p>
                </div>
            </div>

            <hr>

            <div class="bottom">
                <div>
                    <p class="sub-text">Kode</p>
                    <p>${res.resi}</p>
                </div>
                <div>
                    <p class="sub-text">Total</p>
                    <p class="price">Rp ${res.total.toLocaleString()}</p>
                </div>
            </div>

            <div class="btn-group">
                <button class="btn btn-primary" onclick="detail('${res.resi}')">Lihat Detail</button>
                <button class="btn btn-secondary" onclick="hapus('${res.resi}')">Batalkan</button>
            </div>
        </div>`;
    });
}

// detail modal
function detail(resi){
    const data = getData().find(r => r.resi === resi);

    document.getElementById("detailModal").style.display = "block";

    document.getElementById("modalBody").innerHTML = `
        <h2>${data.room}</h2>
        <p>Kode: ${data.resi}</p>
        <p>Status: ${data.status}</p>
        <p>Metode: ${data.method}</p>
        <p>Tanggal: ${data.checkin} - ${data.checkout}</p>
        <p>Tamu: ${data.guest}</p>
        <h3 style="color:#ec4899;">Rp ${data.total.toLocaleString()}</h3>
    `;
}

function closeModal(){
    document.getElementById("detailModal").style.display = "none";
}

// hapus
function hapus(resi){
    let data = getData().filter(r => r.resi !== resi);
    localStorage.setItem("reservations", JSON.stringify(data));
    render();
}

// init
render();

</script>


</body>
</html>