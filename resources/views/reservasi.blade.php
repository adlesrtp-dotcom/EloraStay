<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

<title>Reservasi Saya - EloraStay</title>

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
            Booking mudah, cepat, dan terpercaya
        </p>

    </div>

</section>

<!-- Header -->
<section class="px-6 py-8">

    <h2 class="text-3xl font-bold text-gray-800 mb-2">
        Reservasi Saya
    </h2>

    <p class="text-gray-600">
        Kelola dan lihat detail reservasi Anda
    </p>

</section>

<!-- LIST -->
<section
    id="reservasiList"
    class="px-6 pb-10">
</section>

<!-- MODAL -->
<div
    id="detailModal"
    class="hidden fixed inset-0 bg-black/60 z-50">

    <div class="bg-white w-[90%] max-w-lg mx-auto mt-24 rounded-2xl p-6 relative">

        <!-- Close -->
        <button
            onclick="closeModal()"
            class="absolute top-4 right-5 text-2xl text-gray-500 hover:text-pink-500">

            ✖
        </button>

        <!-- Body -->
        <div id="modalBody"></div>

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

// Ambil data
function getData() {
    return JSON.parse(localStorage.getItem("reservations")) || [];
}

// Render data
function render() {

    const list = document.getElementById("reservasiList");

    list.innerHTML = "";

    const data = getData();

    if (data.length === 0) {

        list.innerHTML = `
            <div class="bg-white rounded-2xl p-8 text-center shadow-md">
                <p class="text-gray-500">
                    Tidak ada reservasi
                </p>
            </div>
        `;

        return;
    }

    data.reverse().forEach(res => {

        const statusClass =
            res.status === "Lunas"
            ? "bg-green-100 text-green-700"
            : "bg-yellow-100 text-yellow-700";

        list.innerHTML += `
        <div class="bg-white rounded-3xl p-6 mb-6 shadow-md hover:shadow-xl transition">

            <h3 class="text-2xl font-bold text-gray-800">
                ${res.room}
            </h3>

            <p class="text-sm text-gray-400 mt-1">
                EloraStay Jakarta
            </p>

            <span class="inline-block mt-4 px-4 py-1 rounded-full text-sm font-semibold ${statusClass}">
                ${res.status}
            </span>

            <!-- Info -->
            <div class="grid grid-cols-1 md:grid-cols-3 text-center gap-4 mt-6">

                <div>
                    <p class="text-gray-400 text-sm">
                        Check-in
                    </p>

                    <p class="font-semibold text-gray-700">
                        ${res.checkin}
                    </p>
                </div>

                <div>
                    <p class="text-gray-400 text-sm">
                        Check-out
                    </p>

                    <p class="font-semibold text-gray-700">
                        ${res.checkout}
                    </p>
                </div>

                <div>
                    <p class="text-gray-400 text-sm">
                        Tamu
                    </p>

                    <p class="font-semibold text-gray-700">
                        ${res.guest}
                    </p>
                </div>

            </div>

            <!-- Divider -->
            <div class="border-t border-pink-200 my-6"></div>

            <!-- Bottom -->
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">

                <div>

                    <p class="text-gray-400 text-sm">
                        Kode
                    </p>

                    <p class="font-semibold text-gray-700">
                        ${res.resi}
                    </p>

                </div>

                <div>

                    <p class="text-gray-400 text-sm">
                        Total
                    </p>

                    <p class="text-pink-500 font-bold text-xl">
                        Rp ${res.total.toLocaleString()}
                    </p>

                </div>

            </div>

            <!-- Button -->
            <div class="flex gap-4 mt-6">

                <button
                    onclick="detail('${res.resi}')"
                    class="flex-1 bg-pink-500 hover:bg-pink-600 text-white py-3 rounded-xl font-semibold transition">

                    Lihat Detail
                </button>

                <button
                    onclick="hapus('${res.resi}')"
                    class="flex-1 bg-pink-200 hover:bg-pink-300 text-gray-700 py-3 rounded-xl font-semibold transition">

                    Batalkan
                </button>

            </div>

        </div>
        `;
    });
}

// Detail modal
function detail(resi) {

    const data =
        getData().find(r => r.resi === resi);

    document
        .getElementById("detailModal")
        .classList.remove("hidden");

    document.getElementById("modalBody").innerHTML = `

        <h2 class="text-3xl font-bold text-gray-800 mb-5">
            ${data.room}
        </h2>

        <div class="space-y-3 text-gray-700">

            <p>
                <span class="font-semibold">Kode:</span>
                ${data.resi}
            </p>

            <p>
                <span class="font-semibold">Status:</span>
                ${data.status}
            </p>

            <p>
                <span class="font-semibold">Metode:</span>
                ${data.method}
            </p>

            <p>
                <span class="font-semibold">Tanggal:</span>
                ${data.checkin} - ${data.checkout}
            </p>

            <p>
                <span class="font-semibold">Tamu:</span>
                ${data.guest}
            </p>

        </div>

        <h3 class="text-pink-500 text-2xl font-bold mt-6">
            Rp ${data.total.toLocaleString()}
        </h3>
    `;
}

// Close modal
function closeModal() {

    document
        .getElementById("detailModal")
        .classList.add("hidden");
}

// Hapus reservasi
function hapus(resi) {

    let data =
        getData().filter(r => r.resi !== resi);

    localStorage.setItem(
        "reservations",
        JSON.stringify(data)
    );

    render();
}

// Init
render();



// Logout
function logout() {

    localStorage.removeItem("isLogin");

    alert("Logout berhasil");

    window.location.href = "/dashboard";
}

</script>

</body>
</html>