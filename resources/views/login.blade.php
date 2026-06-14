<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login - EloraStay</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

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

<nav class="bg-gradient-to-r from-pink-400 to-pink-500 text-white px-6 py-4 flex justify-between items-center">

    <div class="text-2xl font-bold">
        EloraStay
    </div>

</nav>

<div class="flex flex-col md:flex-row min-h-[calc(100vh-72px)]">

    <div
        class="flex-1 bg-cover bg-center relative"
        style="background-image:url('https://images.unsplash.com/photo-1566073771259-6a8506099945')">

        <div class="absolute inset-0 bg-pink-500/50"></div>

        <div class="absolute bottom-12 left-10 text-white max-w-md z-10">

            <h1 class="text-4xl font-bold mb-3">
                Temukan Hotel Impian Anda
            </h1>

            <p class="text-lg leading-7">
                Booking mudah, cepat, dan terpercaya hanya di EloraStay
            </p>

        </div>

    </div>

    <div class="flex-1 flex justify-center items-center p-6">

        <div class="bg-white w-full max-w-md rounded-3xl shadow-xl p-8">

            <div class="bg-gradient-to-r from-pink-400 to-pink-500 text-white rounded-2xl p-6 text-center mb-6">

                <h3 class="text-2xl font-bold">
                    Selamat Datang
                </h3>

                <p class="text-sm mt-2">
                    Login untuk mengakses akun Anda
                </p>

            </div>

            <form action="{{ route('login.process') }}" method="POST">

                @csrf

                @if(session('error'))
                    <div class="bg-red-100 text-red-700 p-3 rounded-lg mb-4">
                        {{ session('error') }}
                    </div>
                @endif

                <div class="mb-4">

                    <input
                        type="text"
                        name="login"
                        placeholder="Email atau Username"
                        required
                        class="w-full px-5 py-3 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-pink-400">

                </div>

                <div class="mb-2">

                    <input
                        type="password"
                        name="password"
                        placeholder="Password"
                        required
                        class="w-full px-5 py-3 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-pink-400">

                </div>

                <div class="text-right mb-5">

                    <a
                        href="/lupa-password"
                        class="text-pink-500 text-sm hover:underline">

                        Lupa password?

                    </a>

                </div>

                <button
                    type="submit"
                    class="w-full bg-gradient-to-r from-pink-400 to-pink-500 text-white py-3 rounded-full font-bold hover:opacity-90 transition">

                    Masuk

                </button>

                <div class="text-center text-sm text-gray-400 my-5">
                    atau
                </div>

                <button
                    type="button"
                    class="w-full border border-gray-300 py-3 rounded-full flex items-center justify-center gap-3 hover:bg-gray-50 transition">

                    <img
                        src="https://upload.wikimedia.org/wikipedia/commons/0/09/IOS_Google_icon.png"
                        class="w-5 h-5">

                    Lanjutkan dengan Google

                </button>

                <div class="text-center text-sm mt-5">

                    Belum punya akun?

                    <a
                        href="/registrasi"
                        class="text-pink-500 font-semibold hover:underline">

                        Daftar sekarang

                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

<footer class="bg-gradient-to-r from-pink-400 to-pink-500 text-white mt-10">

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 px-6 py-10">

        <div>

            <h3 class="text-2xl font-bold mb-3">
                EloraStay
            </h3>

            <p class="text-sm leading-6">
                Platform booking hotel terpercaya dengan pengalaman terbaik untuk Anda.
            </p>

        </div>

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

    <div class="text-center py-4 bg-black/10 text-sm">
        © 2026 EloraStay. All rights reserved.
    </div>

</footer>

</body>
</html>