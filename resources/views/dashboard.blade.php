<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Dashboard - EloraStay</title>

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

        <a href="/"
           class="relative font-semibold after:content-[''] after:absolute after:left-0 after:-bottom-1 after:w-0 after:h-[3px] after:bg-white after:rounded-full hover:after:w-full after:transition-all">

            Beranda
        </a>

        <a href="/kamar"
           class="relative font-semibold after:content-[''] after:absolute after:left-0 after:-bottom-1 after:w-0 after:h-[3px] after:bg-white after:rounded-full hover:after:w-full after:transition-all">

            Daftar Kamar
        </a>

        <a href="/pembayaran"
           class="relative font-semibold after:content-[''] after:absolute after:left-0 after:-bottom-1 after:w-0 after:h-[3px] after:bg-white after:rounded-full hover:after:w-full after:transition-all">

            Pembayaran
        </a>

        <a href="/reservasi"
           class="relative font-semibold after:content-[''] after:absolute after:left-0 after:-bottom-1 after:w-0 after:h-[3px] after:bg-white after:rounded-full hover:after:w-full after:transition-all">

            Reservasi
        </a>

    </div>

    <!-- Login -->
    <a href="/login"
       id="loginBtn"
       class="bg-white text-pink-500 px-4 py-2 rounded-full font-bold hover:bg-pink-100 transition">

        Login
    </a>

    <!-- Logout -->
    <button
        id="logoutBtn"
        onclick="logout()"
        class="hidden bg-white text-pink-500 px-4 py-2 rounded-full font-bold hover:bg-pink-100 transition">

        Logout
    </button>

</nav>

<!-- Hero -->
<section
    class="h-[300px] bg-cover bg-center flex items-center justify-center relative"
    style="background-image: url('https://images.unsplash.com/photo-1566073771259-6a8506099945')">

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

<!-- Features -->
<section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5 p-10">

    <!-- Card 1 -->
    <div class="bg-white rounded-2xl p-6 shadow-md hover:-translate-y-2 transition text-center">

        <div class="text-4xl mb-3">🏨</div>

        <h3 class="font-bold text-lg mb-2">
            Hotel Terpercaya
        </h3>

        <p class="text-gray-500 text-sm leading-6">
            Kami bekerja sama dengan hotel terbaik untuk memastikan
            kenyamanan dan kualitas menginap Anda.
        </p>

    </div>

    <!-- Card 2 -->
    <div class="bg-white rounded-2xl p-6 shadow-md hover:-translate-y-2 transition text-center">

        <div class="text-4xl mb-3">⭐</div>

        <h3 class="font-bold text-lg mb-2">
            Rating Terbaik
        </h3>

        <p class="text-gray-500 text-sm leading-6">
            Semua kamar memiliki ulasan tinggi dari pelanggan
            yang telah merasakan pengalaman menginap.
        </p>

    </div>

    <!-- Card 3 -->
    <div class="bg-white rounded-2xl p-6 shadow-md hover:-translate-y-2 transition text-center">

        <div class="text-4xl mb-3">⚡</div>

        <h3 class="font-bold text-lg mb-2">
            Booking Instan
        </h3>

        <p class="text-gray-500 text-sm leading-6">
            Pesan kamar hanya dalam beberapa klik tanpa proses
            yang ribet dan langsung terkonfirmasi.
        </p>

    </div>

    <!-- Card 4 -->
    <div class="bg-white rounded-2xl p-6 shadow-md hover:-translate-y-2 transition text-center">

        <div class="text-4xl mb-3">📞</div>

        <h3 class="font-bold text-lg mb-2">
            Dukungan 24/7
        </h3>

        <p class="text-gray-500 text-sm leading-6">
            Tim kami siap membantu Anda kapan saja jika terjadi
            kendala saat reservasi atau menginap.
        </p>

    </div>

</section>

<!-- Room Section -->
<section class="px-5 py-6">

    <!-- Header -->
    <div class="flex items-center justify-between">

        <h3 class="text-2xl font-bold">
            Pilihan kamar terpopuler
        </h3>

        <a href="/kamar"
           class="text-pink-500 font-bold hover:text-pink-600 transition hover:translate-x-2 inline-flex items-center gap-2">

            Lihat Semua →
        </a>

    </div>

    <!-- Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">

        <!-- CARD 1 -->
        <div onclick="window.location.href='/kamar'"
             class="bg-white rounded-2xl p-4 shadow-md hover:-translate-y-2 transition cursor-pointer">

            <img
                src="{{ asset('img/kamar/deluxe.jpeg') }}"
                alt="Deluxe Room"
                class="w-full h-[220px] object-cover rounded-xl">

            <h4 class="font-bold text-xl mt-4 mb-2">
                Deluxe Room
            </h4>

            <p class="text-gray-500 text-sm leading-6">
                Kamar nyaman dengan desain modern dan pemandangan kota
                yang menenangkan. Cocok untuk Anda yang menginginkan
                istirahat berkualitas dengan suasana hangat dan fasilitas lengkap.
            </p>

            <div class="text-pink-500 font-bold mt-4">
                Rp. 500.000
            </div>

        </div>

        <!-- CARD 2 -->
        <div onclick="window.location.href='/kamar'"
             class="bg-white rounded-2xl p-4 shadow-md hover:-translate-y-2 transition cursor-pointer">

            <img
                src="/img/kamar/suite.jpeg"
                alt="Superior Suite"
                class="w-full h-[220px] object-cover rounded-xl">

            <h4 class="font-bold text-xl mt-4 mb-2">
                Superior Suite
            </h4>

            <p class="text-gray-500 text-sm leading-6">
                Suite mewah dengan ruang tamu terpisah, fasilitas premium,
                dan pemandangan indah. Ideal untuk Anda yang menginginkan
                pengalaman menginap yang lebih eksklusif dan nyaman.
            </p>

            <div class="text-pink-500 font-bold mt-4">
                Rp. 750.000
            </div>

        </div>

    </div>

</section>

@guest
<!-- CTA -->
<section class="bg-pink-400 text-white text-center py-12 px-5 mt-10">

    <div id="daftarSection">

        <h3 class="text-3xl font-bold mb-3">
            Siap untuk pengalaman terbaik?
        </h3>

        <p class="mb-5">
            Daftar sekarang dan dapatkan promo
        </p>

        <button
            onclick="window.location.href='/registrasi'"
            class="bg-white text-pink-500 px-6 py-3 rounded-xl font-bold hover:bg-pink-100 transition">

            Daftar Sekarang
        </button>

    </div>

</section>
@endguest


<!-- Footer -->
<footer class="bg-gradient-to-r from-pink-400 to-pink-500 text-white mt-10">

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 px-6 py-10">

        <!-- Brand -->
        <div>

            <h3 class="text-2xl font-bold mb-3">
                EloraStay
            </h3>

            <p class="text-sm leading-6">
                Platform booking hotel terpercaya dengan pengalaman
                terbaik untuk Anda.
            </p>

        </div>

        <!-- Menu -->
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

window.onload = function () {

    const isLogin = localStorage.getItem("isLogin");

    const loginBtn = document.getElementById("loginBtn");

    const logoutBtn = document.getElementById("logoutBtn");

    const daftarSection = document.getElementById("daftarSection");

    if (isLogin === "true") {

        if (loginBtn) {
            loginBtn.style.display = "none";
        }

        if (logoutBtn) {
            logoutBtn.style.display = "inline-block";
        }

        if (daftarSection) {
            daftarSection.style.display = "none";
        }

    } else {

        if (loginBtn) {
            loginBtn.style.display = "inline-block";
        }

        if (logoutBtn) {
            logoutBtn.style.display = "none";
        }

        if (daftarSection) {
            daftarSection.style.display = "block";
        }
    }
}

function logout() {

    localStorage.removeItem("isLogin");

    alert("Logout berhasil");

    window.location.href = "/dashboard";
}

</script>

</body>
</html>