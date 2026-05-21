<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

<title>Daftar Kamar - EloraStay</title>

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

<!-- Room List -->
<section class="px-6 py-10">

    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8 justify-items-center">

        <!-- Deluxe -->
        <div onclick="openModal('deluxe')"
             class="w-full max-w-[380px] bg-white rounded-2xl overflow-hidden shadow-md hover:-translate-y-2 hover:shadow-xl transition cursor-pointer">

            <img src="{{ asset('img/kamar/deluxe.jpeg') }}"
                 class="w-full h-[240px] object-cover">

            <div class="p-5 relative pb-16">

                <h4 class="text-xl font-bold mb-2">
                    Deluxe Room
                </h4>

                <p class="text-gray-500 text-sm leading-6">
                    Kamar nyaman dengan desain modern dan pemandangan kota yang menenangkan.
                </p>

                <p class="text-pink-500 font-bold mt-3">
                    Rp 500.000
                </p>

                <button
                    onclick="openModal('deluxe')"
                    class="absolute right-5 bottom-5 bg-pink-500 hover:bg-pink-600 text-white px-4 py-2 rounded-lg transition">

                    Lihat Detail
                </button>

            </div>

        </div>

        <!-- Executive -->
        <div onclick="openModal('executive')"
             class="w-full max-w-[380px] bg-white rounded-2xl overflow-hidden shadow-md hover:-translate-y-2 hover:shadow-xl transition cursor-pointer">

            <img src="{{ asset('img/kamar/executive.jpeg') }}"
                 class="w-full h-[240px] object-cover">

            <div class="p-5 relative pb-16">

                <h4 class="text-xl font-bold mb-2">
                    Executive Room
                </h4>

                <p class="text-gray-500 text-sm leading-6">
                    Kamar eksklusif untuk tamu bisnis dengan fasilitas modern.
                </p>

                <p class="text-pink-500 font-bold mt-3">
                    Rp 600.000
                </p>

                <button
                    onclick="openModal('executive')"
                    class="absolute right-5 bottom-5 bg-pink-500 hover:bg-pink-600 text-white px-4 py-2 rounded-lg transition">

                    Lihat Detail
                </button>

            </div>

        </div>

        <!-- Superior -->
        <div onclick="openModal('superior')"
             class="w-full max-w-[380px] bg-white rounded-2xl overflow-hidden shadow-md hover:-translate-y-2 hover:shadow-xl transition cursor-pointer">

            <img src="{{ asset('img/kamar/suite.jpeg') }}"
                 class="w-full h-[240px] object-cover">

            <div class="p-5 relative pb-16">

                <h4 class="text-xl font-bold mb-2">
                    Superior Suite
                </h4>

                <p class="text-gray-500 text-sm leading-6">
                    Suite mewah dengan ruang tamu terpisah dan fasilitas premium.
                </p>

                <p class="text-pink-500 font-bold mt-3">
                    Rp 700.000
                </p>

                <button
                    onclick="openModal('superior')"
                    class="absolute right-5 bottom-5 bg-pink-500 hover:bg-pink-600 text-white px-4 py-2 rounded-lg transition">

                    Lihat Detail
                </button>

            </div>

        </div>

        <!-- Family -->
        <div onclick="openModal('family')"
             class="w-full max-w-[380px] bg-white rounded-2xl overflow-hidden shadow-md hover:-translate-y-2 hover:shadow-xl transition cursor-pointer">

            <img src="{{ asset('img/kamar/family.jpeg') }}"
                 class="w-full h-[240px] object-cover">

            <div class="p-5 relative pb-16">

                <h4 class="text-xl font-bold mb-2">
                    Family Room
                </h4>

                <p class="text-gray-500 text-sm leading-6">
                    Kamar luas cocok untuk keluarga dengan fasilitas lengkap.
                </p>

                <p class="text-pink-500 font-bold mt-3">
                    Rp 850.000
                </p>

                <button
                    onclick="openModal('family')"
                    class="absolute right-5 bottom-5 bg-pink-500 hover:bg-pink-600 text-white px-4 py-2 rounded-lg transition">

                    Lihat Detail
                </button>

            </div>

        </div>

        <!-- Standard -->
        <div onclick="openModal('standard')"
             class="w-full max-w-[380px] bg-white rounded-2xl overflow-hidden shadow-md hover:-translate-y-2 hover:shadow-xl transition cursor-pointer">

            <img src="https://images.unsplash.com/photo-1505693416388-ac5ce068fe85"
                 class="w-full h-[240px] object-cover">

            <div class="p-5 relative pb-16">

                <h4 class="text-xl font-bold mb-2">
                    Standard Room
                </h4>

                <p class="text-gray-500 text-sm leading-6">
                    Kamar minimalis dengan desain sederhana dan nyaman.
                </p>

                <p class="text-pink-500 font-bold mt-3">
                    Rp 350.000
                </p>

                <button
                    onclick="openModal('standard')"
                    class="absolute right-5 bottom-5 bg-pink-500 hover:bg-pink-600 text-white px-4 py-2 rounded-lg transition">

                    Lihat Detail
                </button>

            </div>

        </div>

        <!-- Junior -->
        <div onclick="openModal('junior')"
             class="w-full max-w-[380px] bg-white rounded-2xl overflow-hidden shadow-md hover:-translate-y-2 hover:shadow-xl transition cursor-pointer">

            <img src="https://images.unsplash.com/photo-1566665797739-1674de7a421a"
                 class="w-full h-[240px] object-cover">

            <div class="p-5 relative pb-16">

                <h4 class="text-xl font-bold mb-2">
                    Junior Suite
                </h4>

                <p class="text-gray-500 text-sm leading-6">
                    Suite modern dengan area santai nyaman dan suasana mewah.
                </p>

                <p class="text-pink-500 font-bold mt-3">
                    Rp 950.000
                </p>

                <button
                    onclick="openModal('junior')"
                    class="absolute right-5 bottom-5 bg-pink-500 hover:bg-pink-600 text-white px-4 py-2 rounded-lg transition">

                    Lihat Detail
                </button>

            </div>

        </div>

    </div>

</section>

<!-- MODAL -->
<div id="roomModal"
     class="hidden fixed inset-0 z-50 bg-black/60 overflow-y-auto py-10">

    <div class="bg-white w-[90%] max-w-[700px] mx-auto rounded-2xl p-6 relative">

        <!-- Close -->
        <span onclick="closeModal()"
              class="absolute top-4 right-5 text-2xl cursor-pointer">

            ✖
        </span>

        <!-- Content -->
        <div id="modalContent"></div>

    </div>

</div>

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

const rooms = {

    deluxe: {
        name: "Deluxe Room",
        price: 500000,
        img: "/img/kamar/deluxe.jpeg",
        desc: "Kamar nyaman dengan desain modern dan pemandangan kota yang menenangkan.",
        size: "32m²",
        capacity: "2 Orang",
        rating: "4.8"
    },

    executive: {
        name: "Executive Room",
        price: 600000,
        img: "/img/kamar/executive.jpeg",
        desc: "Dirancang khusus untuk tamu bisnis dengan fasilitas premium.",
        size: "40m²",
        capacity: "2 Orang",
        rating: "4.7"
    },

    superior: {
        name: "Superior Suite",
        price: 700000,
        img: "/img/kamar/suite.jpeg",
        desc: "Suite mewah dengan ruang tamu terpisah dan fasilitas premium.",
        size: "45m²",
        capacity: "3 Orang",
        rating: "4.8"
    },

    family: {
        name: "Family Room",
        price: 850000,
        img: "/img/kamar/family.jpeg",
        desc: "Kamar luas yang dirancang untuk keluarga.",
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
        desc: "Suite modern dengan area santai nyaman dan suasana mewah.",
        size: "40m²",
        capacity: "3 Orang",
        rating: "4.7"
    }
};

let selectedRoom = null;

function openModal(type) {

    selectedRoom = rooms[type];

    document.getElementById("roomModal").classList.remove("hidden");

    document.getElementById("modalContent").innerHTML = `

        <img src="${selectedRoom.img}"
             class="w-full rounded-xl mb-5 h-[320px] object-cover">

        <h2 class="text-3xl font-bold mb-3">
            ${selectedRoom.name}
        </h2>

        <p class="text-gray-500 leading-7 mb-4">
            ${selectedRoom.desc}
        </p>

        <p class="mb-5 text-sm">
            👥 ${selectedRoom.capacity}
            • 📐 ${selectedRoom.size}
            • ⭐ ${selectedRoom.rating}
        </p>

        <ul class="space-y-2 text-sm text-gray-600 mb-6">
            <li>✔ WiFi Gratis</li>
            <li>✔ AC</li>
            <li>✔ Smart TV</li>
            <li>✔ Sarapan Gratis</li>
            <li>✔ Kamar Mandi Dalam</li>
        </ul>

        <h3 class="text-pink-500 text-2xl font-bold mb-5">
            Rp ${selectedRoom.price.toLocaleString()}
        </h3>

        <button
            onclick="goToPayment()"
            class="w-full bg-pink-500 hover:bg-pink-600 text-white py-3 rounded-xl font-semibold transition">

            Pesan Saya
        </button>
    `;
}

function closeModal() {

    document.getElementById("roomModal").classList.add("hidden");
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

const isLogin = localStorage.getItem("isLogin");

if (isLogin !== "true") {

    alert("Silakan login terlebih dahulu!");

    window.location.href = "/dashboard";
}

function logout() {

    localStorage.removeItem("isLogin");

    alert("Logout berhasil");

    window.location.href = "/dashboard";
}

</script>

</body>
</html>