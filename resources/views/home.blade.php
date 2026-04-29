<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EloraStay</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-100 font-sans">

<!-- Navbar -->
<nav class="bg-pink-400 text-white px-6 py-3 flex justify-between">
    <h1 class="font-bold text-lg">EloraStay</h1>
    <div class="space-x-4">
        <a href="#">Beranda</a>
        <a href="#">Reservasi Saya</a>
        <a href="#">Daftar Kamar</a>
        <a href="#">Pembayaran</a>
        <button class="bg-white text-pink-500 px-3 py-1 rounded">Login</button>
    </div>
</nav>

<!-- Search -->
<div class="bg-pink-200 m-6 p-6 rounded-xl">
    <h2 class="text-xl font-bold">Cari Kamar & Booking Hotel</h2>
    <p class="text-sm mb-4">Temukan kamar hotel impian Anda dengan harga terbaik</p>

    <div class="grid grid-cols-4 gap-3">
        <input type="text" placeholder="Cari Kota atau Hotel" class="p-2 rounded">
        <input type="date" class="p-2 rounded">
        <input type="date" class="p-2 rounded">
        <button class="bg-pink-500 text-white rounded px-4">Cari Kamar</button>
    </div>
</div>

<!-- Features -->
<div class="grid grid-cols-4 text-center px-6 py-4">
    <div>Hotel Terpercaya</div>
    <div>Rating Terbaik</div>
    <div>Booking Instan</div>
    <div>Dukungan 24/7</div>
</div>

<!-- Room -->
<div class="p-6">
    <div class="flex justify-between mb-4">
        <h3 class="font-semibold">Pilihan kamar terpopuler</h3>
        <a href="#" class="text-pink-500">Lihat Semua →</a>
    </div>

    <div class="grid grid-cols-2 gap-4">
        <div class="bg-white rounded-xl shadow p-3">
            <img src="https://via.placeholder.com/300" class="rounded-lg mb-2">
            <h4 class="font-semibold">Deluxe Room</h4>
            <p class="text-sm">Kamar dengan pemandangan kota</p>
            <p class="text-pink-500 font-bold">Rp. 500.000</p>
            <button class="bg-pink-500 text-white px-3 py-1 rounded mt-2">Pesan Saya</button>
        </div>

        <div class="bg-white rounded-xl shadow p-3">
            <img src="https://via.placeholder.com/300" class="rounded-lg mb-2">
            <h4 class="font-semibold">Superior Suite</h4>
            <p class="text-sm">Suite mewah dan luas</p>
            <p class="text-pink-500 font-bold">Rp. 750.000</p>
            <button class="bg-pink-500 text-white px-3 py-1 rounded mt-2">Pesan Saya</button>
        </div>
    </div>
</div>

<!-- CTA -->
<div class="bg-pink-400 text-white text-center py-6">
    <h3 class="text-lg font-bold">Siap untuk pengalaman terbaik?</h3>
    <p>Daftar sekarang dan dapatkan promo</p>
    <button class="bg-white text-pink-500 px-4 py-2 mt-2 rounded">Daftar Sekarang</button>
</div>

<!-- Footer -->
<footer class="bg-pink-300 p-6 text-white grid grid-cols-3">
    <div>
        <h4 class="font-bold">EloraStay</h4>
        <p>Platform booking hotel terpercaya</p>
    </div>
    <div>
        <h4 class="font-bold">Link</h4>
        <p>Beranda</p>
        <p>Daftar Kamar</p>
    </div>
    <div>
        <h4 class="font-bold">Kontak</h4>
        <p>email@elorastay.com</p>
        <p>+62 123 456 789</p>
    </div>
</footer>

</body>
</html>