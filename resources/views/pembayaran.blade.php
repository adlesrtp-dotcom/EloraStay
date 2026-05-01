<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pembayaran - EloraStay</title>

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
    <h2 class="text-2xl font-bold">Pembayaran</h2>
    <p class="text-gray-600">Selesaikan pembayaran untuk mengkonfirmasi reservasi Anda</p>
</div>

<!-- METODE PEMBAYARAN -->
<div class="mx-6 bg-white p-6 rounded-2xl shadow mb-6">
    <h3 class="font-semibold mb-4">Metode Pembayaran</h3>

    <div class="space-y-3">
        <button class="w-full text-left bg-pink-100 p-3 rounded">Kartu Debit/Kredit</button>
        <button class="w-full text-left bg-pink-100 p-3 rounded">E-wallet</button>
        <button class="w-full text-left bg-pink-100 p-3 rounded">Transfer Bank</button>
    </div>
</div>

<!-- DETAIL PEMBAYARAN -->
<div class="mx-6 bg-white p-6 rounded-2xl shadow mb-10">
    <h3 class="font-semibold mb-4">Detail Pembayaran</h3>

    <!-- Nomor Kartu -->
    <div class="mb-3">
        <label class="text-sm">Nomor Kartu</label>
        <input type="text" class="w-full p-3 rounded bg-pink-100 mt-1" placeholder="1234 5678 9012 3456">
    </div>

    <!-- Nama -->
    <div class="mb-3">
        <label class="text-sm">Nama Pemegang Kartu</label>
        <input type="text" class="w-full p-3 rounded bg-pink-100 mt-1" placeholder="Nama Anda">
    </div>

    <!-- Expired -->
    <div class="grid grid-cols-2 gap-3">
        <div>
            <label class="text-sm">Bulan</label>
            <input type="text" class="w-full p-3 rounded bg-pink-100 mt-1" placeholder="MM">
        </div>
        <div>
            <label class="text-sm">Tahun</label>
            <input type="text" class="w-full p-3 rounded bg-pink-100 mt-1" placeholder="YY">
        </div>
    </div>

    <!-- Button -->
    <a href="/reservasi" 
        class="bg-pink-500 text-white w-full py-3 rounded mt-6 text-center block">
        Bayar Sekarang
    </a>
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