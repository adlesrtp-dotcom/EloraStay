<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Registrasi - EloraStay</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

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

<!-- NAVBAR -->
<nav class="bg-gradient-to-r from-pink-400 to-pink-500 text-white px-8 py-5 flex items-center justify-between">

    <div class="text-2xl font-bold">
        EloraStay
    </div>

</nav>

<!-- MAIN -->
<div class="flex flex-col md:flex-row min-h-[calc(100vh-72px)]">

    <!-- LEFT -->
    <div
        class="flex-1 bg-cover bg-center relative"
        style="background-image:url('https://images.unsplash.com/photo-1566073771259-6a8506099945')">

        <!-- Overlay -->
        <div class="absolute inset-0 bg-pink-500/40"></div>

        <!-- Content -->
        <div class="absolute inset-0 flex items-center justify-center text-center px-6">

            <div class="relative z-10 text-white max-w-lg">

                <h1 class="text-4xl font-bold mb-4">
                    Temukan Hotel Impian Anda
                </h1>

                <p class="text-lg leading-7">
                    Booking mudah, cepat, dan terpercaya hanya di EloraStay
                </p>

            </div>

        </div>

    </div>

    <!-- RIGHT -->
    <div class="flex-1 flex items-center justify-center p-6">

        <!-- Card -->
        <div class="bg-white w-full max-w-md rounded-3xl shadow-xl p-8">

            <!-- Header -->
            <div class="bg-gradient-to-r from-pink-400 to-pink-500 text-white rounded-2xl p-6 text-center mb-6">

                <h3 class="text-2xl font-bold">
                    Daftar Akun
                </h3>

                <p class="text-sm mt-2">
                    Buat akun baru untuk mulai booking
                </p>

            </div>

            <!-- FORM -->
            <form method="POST" action="{{ route('register.process') }}">

                @csrf

                <!-- Nama -->
                <div class="mb-4">

                    <input
                        type="text"
                        name="nama"
                        placeholder="Nama Lengkap"
                        required
                        class="w-full px-5 py-3 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-pink-400">

                </div>

                <!-- Email -->
                <div class="mb-4">

                    <input
                        type="email"
                        name="email"
                        placeholder="Email"
                        required
                        class="w-full px-5 py-3 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-pink-400">

                </div>
                <!-- Nomor Telepon -->
                <div class="mb-4">

                    <input
                        type="text"
                        name="telepon"
                        placeholder="Nomor Telepon"
                        required
                        class="w-full px-5 py-3 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-pink-400">

                </div>
                                <!-- Password -->
                <div class="mb-4">

                    <input
                        type="password"
                        name="password"
                        placeholder="Password"
                        required
                        class="w-full px-5 py-3 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-pink-400">

                </div>

                <!-- Konfirmasi -->
                <div class="mb-5">

                    <input
                        type="password"
                        name="password_confirmation"
                        placeholder="Konfirmasi Password"
                        required
                        class="w-full px-5 py-3 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-pink-400">

                </div>

                <!-- Button -->
                <button
                    type="submit"
                    class="w-full bg-gradient-to-r from-pink-400 to-pink-500 text-white py-3 rounded-full font-bold hover:opacity-90 transition">

                    Daftar

                </button>

                <!-- Divider -->
                <div class="text-center text-sm text-gray-400 my-5">
                    atau
                </div>

                <!-- Google -->
                <button
                    type="button"
                    class="w-full border border-gray-300 py-3 rounded-full flex items-center justify-center gap-3 hover:bg-gray-50 transition">

                    <img
                        src="https://upload.wikimedia.org/wikipedia/commons/0/09/IOS_Google_icon.png"
                        class="w-5 h-5">

                    Daftar dengan Google

                </button>

                <!-- Login -->
                <div class="text-center text-sm mt-5">

                    Sudah punya akun?

                    <a
                        href="/login"
                        class="text-pink-500 font-semibold hover:underline">

                        Login

                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

<!-- FOOTER -->
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

</body>
</html>