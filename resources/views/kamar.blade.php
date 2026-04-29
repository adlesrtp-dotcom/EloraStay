<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Kamar - EloraStay</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-100 font-sans">

<!-- Navbar -->
<nav class="bg-pink-400 text-white px-6 py-3 flex justify-between">
    <h1 class="font-bold text-lg">EloraStay</h1>
    <div class="space-x-4">
        <a href="/">Beranda</a>
        <a href="#">Daftar Kamar</a>
        <a href="#">Reservasi Saya</a>
        <a href="#">Pembayaran</a>
        <button class="bg-white text-pink-500 px-3 py-1 rounded">Login</button>
    </div>
</nav>

<!-- Header -->
<div class="p-6">
    <h2 class="text-2xl font-bold">Daftar Kamar</h2>
    <p class="text-gray-600">Temukan kamar yang tersedia</p>
</div>

<!-- Filter -->
<div class="bg-pink-200 mx-6 p-5 rounded-xl grid grid-cols-3 gap-4 text-center">

    <div>
        <p class="mb-2 text-sm">Rentang Harga</p>
        <button class="bg-pink-100 px-4 py-2 rounded w-full">Semua Harga</button>
    </div>

    <div>
        <p class="mb-2 text-sm">Kapasitas</p>
        <button class="bg-pink-100 px-4 py-2 rounded w-full">2 Orang</button>
    </div>

    <div>
        <p class="mb-2 text-sm">Urutkan</p>
        <button class="bg-pink-100 px-4 py-2 rounded w-full">Unggulan</button>
    </div>

</div>

<!-- Room List -->
<div class="p-6 grid grid-cols-2 gap-6">

    <!-- Card 1 -->
    <div class="bg-white rounded-xl shadow">
        <div class="relative">
            <img src="https://via.placeholder.com/400x200" class="rounded-t-xl w-full">
            <span class="absolute top-2 right-2 bg-yellow-400 text-white text-xs px-2 py-1 rounded">⭐ 4.8</span>
        </div>
        <div class="p-3">
            <h4 class="font-semibold">Deluxe Room</h4>
            <p class="text-sm text-gray-500">Kamar deluxe dengan pemandangan kota yang menakjubkan</p>
            <p class="text-pink-500 font-bold mt-1">Rp. 500.000</p>
            <button class="bg-pink-500 text-white px-3 py-1 rounded mt-2 float-right">Pesan Saya</button>
        </div>
    </div>

    <!-- Card 2 -->
    <div class="bg-white rounded-xl shadow">
        <div class="relative">
            <img src="https://via.placeholder.com/400x200" class="rounded-t-xl w-full">
            <span class="absolute top-2 right-2 bg-yellow-400 text-white text-xs px-2 py-1 rounded">⭐ 4.7</span>
        </div>
        <div class="p-3">
            <h4 class="font-semibold">Executive Room</h4>
            <p class="text-sm text-gray-500">Kamar eksklusif untuk tamu bisnis dengan fasilitas modern</p>
            <p class="text-pink-500 font-bold mt-1">Rp. 600.000</p>
            <button class="bg-pink-500 text-white px-3 py-1 rounded mt-2 float-right">Pesan Saya</button>
        </div>
    </div>

    <!-- Card 3 -->
    <div class="bg-white rounded-xl shadow">
        <div class="relative">
            <img src="https://via.placeholder.com/400x200" class="rounded-t-xl w-full">
            <span class="absolute top-2 right-2 bg-yellow-400 text-white text-xs px-2 py-1 rounded">⭐ 4.8</span>
        </div>
        <div class="p-3">
            <h4 class="font-semibold">Superior Suite</h4>
            <p class="text-sm text-gray-500">Suite premium dengan ruang tamu terpisah</p>
            <p class="text-pink-500 font-bold mt-1">Rp. 700.000</p>
            <button class="bg-pink-500 text-white px-3 py-1 rounded mt-2 float-right">Pesan Saya</button>
        </div>
    </div>

    <!-- Card 4 -->
    <div class="bg-white rounded-xl shadow">
        <div class="relative">
            <img src="https://via.placeholder.com/400x200" class="rounded-t-xl w-full">
            <span class="absolute top-2 right-2 bg-yellow-400 text-white text-xs px-2 py-1 rounded">⭐ 4.6</span>
        </div>
        <div class="p-3">
            <h4 class="font-semibold">Family Room</h4>
            <p class="text-sm text-gray-500">Kamar luas cocok untuk keluarga</p>
            <p class="text-pink-500 font-bold mt-1">Rp. 850.000</p>
            <button class="bg-pink-500 text-white px-3 py-1 rounded mt-2 float-right">Pesan Saya</button>
        </div>
    </div>

</div>

<!-- Footer -->
<footer class="bg-pink-400 text-white p-6 grid grid-cols-3">
    <div>
        <h4 class="font-bold">EloraStay</h4>
        <p class="text-sm">Platform booking hotel terpercaya</p>
    </div>

    <div>
        <h4 class="font-bold">Link</h4>
        <p class="text-sm">Beranda</p>
        <p class="text-sm">Daftar Kamar</p>
        <p class="text-sm">Reservasi Saya</p>
    </div>

    <div>
        <h4 class="font-bold">Hubungi Kami</h4>
        <p class="text-sm">email@elorastay.com</p>
        <p class="text-sm">+62 123 456 7890</p>
    </div>
</footer>

</body>
</html>