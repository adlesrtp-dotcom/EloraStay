<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

<title>Pembayaran - EloraStay</title>

<!-- FONT -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<!-- TAILWIND -->
<script src="https://cdn.tailwindcss.com"></script>

<script>
tailwind.config = {
    theme: {
        extend: {
            fontFamily: {
                poppins: ['Poppins', 'sans-serif']
            }
        }
    }
}
</script>

</head>

<body class="bg-pink-100 font-poppins">

<!-- Navbar -->
<nav class="bg-gradient-to-r from-pink-400 to-pink-500 text-white px-8 py-5 flex items-center justify-between relative">

    <!-- Logo -->
    <div class="text-xl font-bold">
        EloraStay
    </div>

    <!-- Menu -->
    <div class="absolute left-1/2 -translate-x-1/2 flex gap-8">

        <a href="/dashboard"
           class="relative pb-1 hover:after:w-full after:content-[''] after:absolute after:left-0 after:-bottom-1 after:w-0 after:h-[3px] after:bg-white after:rounded-full after:transition-all {{ request()->path() == '/' ? 'after:w-full font-semibold' : '' }}">

            Beranda
        </a>

        <a href="/kamar"
           class="relative pb-1 hover:after:w-full after:content-[''] after:absolute after:left-0 after:-bottom-1 after:w-0 after:h-[3px] after:bg-white after:rounded-full after:transition-all {{ request()->is('kamar') ? 'after:w-full font-semibold' : '' }}">

            Daftar Kamar
        </a>

        <a href="/pembayaran"
           class="relative pb-1 hover:after:w-full after:content-[''] after:absolute after:left-0 after:-bottom-1 after:w-0 after:h-[3px] after:bg-white after:rounded-full after:transition-all {{ request()->is('pembayaran') ? 'after:w-full font-semibold' : '' }}">

            Pembayaran
        </a>

        <a href="/reservasi"
           class="relative pb-1 hover:after:w-full after:content-[''] after:absolute after:left-0 after:-bottom-1 after:w-0 after:h-[3px] after:bg-white after:rounded-full after:transition-all {{ request()->is('reservasi') ? 'after:w-full font-semibold' : '' }}">

            Reservasi
        </a>

    </div>

    <!-- Logout -->
    <button
        onclick="logout()"
        class="bg-white text-pink-500 px-5 py-2 rounded-full font-bold hover:bg-pink-100 transition">

        Logout
    </button>

</nav>

<!-- Hero -->
<section
    class="h-[300px] bg-cover bg-center flex items-center justify-center relative"
    style="background-image:url('https://images.unsplash.com/photo-1566073771259-6a8506099945')">

    <!-- Overlay -->
    <div class="absolute inset-0 bg-pink-500/40"></div>

    <!-- Content -->
    <div class="relative text-center text-white px-4">

        <h1 class="text-4xl font-bold mb-3">
            Temukan Hotel Impian Anda
        </h1>

        <p class="text-lg">
            Booking mudah, cepat, dan terpercaya hanya di EloraStay
        </p>

    </div>

</section>

<!-- Container -->
<section class="max-w-4xl mx-auto px-5 py-10">

    <!-- Data Pemesanan -->
    <div class="bg-white rounded-2xl p-6 shadow-md mb-6">

        <h3 class="text-2xl font-bold mb-5">
            Data Pemesanan
        </h3>

        <p id="infoKamar"
           class="mb-5 text-pink-500 font-semibold">
        </p>

        <!-- Nama -->
        <div class="mb-4">

            <label class="block mb-2 font-medium">
                Nama
            </label>

            <input
                type="text"
                id="nama"
                class="w-full bg-pink-100 rounded-xl px-4 py-3 outline-none focus:ring-2 focus:ring-pink-400">

        </div>

        <!-- Checkin -->
        <div class="mb-4">

            <label class="block mb-2 font-medium">
                Check-in
            </label>

            <input
                type="date"
                id="checkin"
                class="w-full bg-pink-100 rounded-xl px-4 py-3 outline-none focus:ring-2 focus:ring-pink-400">

        </div>

        <!-- Checkout -->
        <div class="mb-4">

            <label class="block mb-2 font-medium">
                Check-out
            </label>

            <input
                type="date"
                id="checkout"
                class="w-full bg-pink-100 rounded-xl px-4 py-3 outline-none focus:ring-2 focus:ring-pink-400">

        </div>

        <!-- Total -->
        <div
            id="totalHarga"
            class="text-pink-500 font-bold text-lg mt-5">

            Total: Rp 0
        </div>

    </div>

    <!-- Metode Pembayaran -->
    <div class="bg-white rounded-2xl p-6 shadow-md mb-6">

        <h3 class="text-2xl font-bold mb-5">
            Metode Pembayaran
        </h3>

        <div class="space-y-4">

            <button
                onclick="pilihMetode('qris')"
                class="w-full bg-pink-500 hover:bg-pink-600 text-white py-3 rounded-xl font-semibold transition">

                QRIS
            </button>

            <button
                onclick="pilihMetode('cod')"
                class="w-full bg-pink-500 hover:bg-pink-600 text-white py-3 rounded-xl font-semibold transition">

                Bayar di Tempat
            </button>

        </div>

        <!-- QRIS -->
        <div id="qris"
             class="hidden text-center mt-6">

            <p class="mb-4 font-medium">
                Scan QR
            </p>

            <img
                src="/img/qris.jpg"
                class="w-[220px] mx-auto rounded-xl shadow-md">

            <button
                onclick="bayar('QRIS','Lunas')"
                class="w-full bg-pink-500 hover:bg-pink-600 text-white py-3 rounded-xl font-semibold transition mt-5">

                Saya Sudah Bayar
            </button>

        </div>

        <!-- COD -->
        <div id="cod"
             class="hidden mt-6">

            <p class="mb-4 text-center font-medium">
                Bayar di hotel
            </p>

            <button
                onclick="bayar('COD','Menunggu')"
                class="w-full bg-pink-500 hover:bg-pink-600 text-white py-3 rounded-xl font-semibold transition">

                Konfirmasi
            </button>

        </div>

    </div>

    <!-- Hasil -->
    <div
        id="hasil"
        class="hidden bg-white rounded-2xl p-6 shadow-md">

        <h3 class="text-2xl font-bold mb-5">
            Detail Pembayaran
        </h3>

        <div class="space-y-3 text-gray-700">

            <p>Nama: <b id="outNama"></b></p>
            <p>Kamar: <b id="outKamar"></b></p>
            <p>Tanggal: <b id="outTanggal"></b></p>
            <p>Metode: <b id="outMetode"></b></p>
            <p>Status: <b id="outStatus"></b></p>
            <p>Total: <b id="outTotal"></b></p>

        </div>

    </div>

</section>

<!-- Footer -->
<footer class="bg-gradient-to-r from-pink-400 to-pink-500 text-white mt-10">

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 px-6 py-10">

        <!-- Brand -->
        <div>

            <h3 class="text-2xl font-bold mb-3">
                EloraStay
            </h3>

            <p class="text-sm leading-6">
                Platform booking hotel terpercaya dengan pengalaman terbaik untuk Anda.
            </p>

        </div>

        <!-- Navigation -->
        <div>

            <h4 class="text-xl font-semibold mb-3">
                Menu
            </h4>

            <div class="space-y-2 text-sm">

                <a href="/" class="block hover:translate-x-2 transition">
                    🏠 Beranda
                </a>

                <a href="/kamar" class="block hover:translate-x-2 transition">
                    🛏️ Daftar Kamar
                </a>

                <a href="/reservasi" class="block hover:translate-x-2 transition">
                    📄 Reservasi
                </a>

                <a href="/pembayaran" class="block hover:translate-x-2 transition">
                    💳 Pembayaran
                </a>

            </div>

        </div>

        <!-- Contact -->
        <div>

            <h4 class="text-xl font-semibold mb-3">
                Kontak
            </h4>

            <div class="space-y-2 text-sm">

                <p>📧 email@elorastay.com</p>
                <p>📞 +62 123 456 7890</p>
                <p>📍 Indonesia</p>

            </div>

        </div>

    </div>

    <!-- Bottom -->
    <div class="text-center py-4 bg-black/10 text-sm">
        © 2026 EloraStay. All rights reserved.
    </div>

</footer>

<script>

// Ambil data kamar
const data = JSON.parse(localStorage.getItem("bookingData"));

document.getElementById("infoKamar").innerText =
    data.name + " | Rp " + data.price.toLocaleString();

let total = 0;

// Hitung total
function hitung() {

    let c1 = new Date(checkin.value);
    let c2 = new Date(checkout.value);

    if (c2 > c1) {

        let malam = (c2 - c1) / (1000 * 60 * 60 * 24);

        total = malam * data.price;

        totalHarga.innerText =
            "Total: Rp " + total.toLocaleString();
    }
}

checkin.onchange = hitung;
checkout.onchange = hitung;

// Metode pembayaran
function pilihMetode(m) {

    qris.classList.add("hidden");
    cod.classList.add("hidden");

    if (m == "qris") {
        qris.classList.remove("hidden");
    } else {
        cod.classList.remove("hidden");
    }
}

// Bayar
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

    hasil.classList.remove("hidden");
}

// Simpan reservasi
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

    let data =
        JSON.parse(localStorage.getItem("reservations")) || [];

    data.push(newData);

    localStorage.setItem("reservations", JSON.stringify(data));
}

simpanReservasi("Lunas","QRIS");
simpanReservasi("Menunggu","COD");

// Login check
const isLogin = localStorage.getItem("isLogin");

if (isLogin !== "true") {

    alert("Silakan login terlebih dahulu!");

    window.location.href = "/dashboard";
}

// Logout
function logout() {

    localStorage.removeItem("isLogin");

    alert("Logout berhasil");

    window.location.href = "/dashboard";
}

</script>

</body>
</html>