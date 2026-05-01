<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reservasi  - EloraStay</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-pink-100 via-pink-50 to-white min-h-screen font-sans">

<!-- Navbar -->
<nav class="bg-white/70 backdrop-blur-md shadow-sm px-6 py-3 flex justify-between items-center sticky top-0 z-50">
    <h1 class="font-bold text-xl text-pink-600">EloraStay</h1>

    <div class="space-x-6 text-sm font-medium">
        <a href="/" class="hover:text-pink-500 transition">Beranda</a>
        <a href="/kamar" class="hover:text-pink-500 transition">Daftar Kamar</a>
        <a href="/reservasi" class="hover:text-pink-500 transition">Reservasi</a>
        <a href="/pembayaran" class="hover:text-pink-500 transition">Pembayaran</a>
    </div>

    <button class="bg-pink-500 hover:bg-pink-600 text-white px-4 py-1 rounded-lg shadow transition">
        Login
    </button>
</nav>

<!-- Header -->
<div class="p-6">
    <h2 class="text-2xl font-bold">Reservasi</h2>
    <p class="text-gray-600">Kelola dan lihat detail reservasi Anda</p>
</div>

<!-- LIST RESERVASI -->
<div class="px-6 space-y-6">

    <!-- Card 1 -->
    <div class="bg-white rounded-2xl p-5 shadow">
        <h3 class="font-semibold text-lg">Deluxe Room</h3>
        <p class="text-sm text-gray-500">EloraStay Jakarta</p>

        <!-- Info -->
        <div class="grid grid-cols-3 text-sm text-center mt-4">
            <div>
                <p class="text-gray-500">Check-in</p>
                <p>Sen, 20 Apr 2026</p>
            </div>
            <div>
                <p class="text-gray-500">Check-out</p>
                <p>Kam, 23 Apr 2026</p>
            </div>
            <div>
                <p class="text-gray-500">Tamu</p>
                <p>2 orang</p>
            </div>
        </div>

        <hr class="my-3 border-pink-300">

        <!-- Bottom -->
        <div class="flex justify-between items-center text-sm">
            <div>
                <p class="text-gray-500">Kode Booking</p>
                <p>ELS-2026-001</p>
            </div>

            <div class="text-right">
                <p class="text-gray-500">Total Pembayaran</p>
                <p class="text-pink-500 font-bold">Rp 1.500.000</p>
            </div>
        </div>

        <!-- Button -->
        <div class="flex gap-4 mt-4">
            <a href="/pembayaran" 
                class="bg-pink-500 text-white px-4 py-2 rounded w-1/2 text-center">
                Lihat Detail
            </a>
            <button class="bg-pink-200 text-pink-600 px-4 py-2 rounded w-1/2">Batalkan</button>
        </div>
    </div>

    <!-- Card 2 -->
    <div class="bg-white rounded-2xl p-5 shadow">
        <h3 class="font-semibold text-lg">Deluxe Room</h3>
        <p class="text-sm text-gray-500">EloraStay Jakarta</p>

        <div class="grid grid-cols-3 text-sm text-center mt-4">
            <div>
                <p class="text-gray-500">Check-in</p>
                <p>Sen, 20 Apr 2026</p>
            </div>
            <div>
                <p class="text-gray-500">Check-out</p>
                <p>Kam, 23 Apr 2026</p>
            </div>
            <div>
                <p class="text-gray-500">Tamu</p>
                <p>2 orang</p>
            </div>
        </div>

        <hr class="my-3 border-pink-300">

        <div class="flex justify-between items-center text-sm">
            <div>
                <p class="text-gray-500">Kode Booking</p>
                <p>ELS-2026-001</p>
            </div>

            <div class="text-right">
                <p class="text-gray-500">Total Pembayaran</p>
                <p class="text-pink-500 font-bold">Rp 1.500.000</p>
            </div>
        </div>

        <div class="mt-4">
            <button class="bg-pink-500 text-white px-4 py-2 rounded w-full">Lihat Detail</button>
        </div>
    </div>

</div>

<!-- Footer -->
<footer class="bg-pink-400 text-white p-6 mt-10 grid grid-cols-3">
    <div>
        <h4 class="font-bold">EloraStay</h4>
        <p class="text-sm">Platform booking hotel terpercaya</p>
    </div>

    <div>
        <h4 class="font-bold">Link</h4>
        <p class="text-sm">Beranda</p>
        <p class="text-sm">Daftar </p>
        <p class="text-sm">Reservasi </p>
    </div>

    <div>
        <h4 class="font-bold">Hubungi Kami</h4>
        <p class="text-sm">email@elorastay.com</p>
        <p class="text-sm">+62 123 456 7890</p>
    </div>
</footer>

</body>
</html>