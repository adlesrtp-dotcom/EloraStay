<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Lupa Password - EloraStay</title>
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

<body class="bg-pink-100 font-poppins min-h-screen flex flex-col">

<!-- NAVBAR -->
<nav class="bg-gradient-to-r from-pink-400 to-pink-500 text-white px-6 md:px-10 py-4 flex justify-between items-center shadow-md">

    <div class="text-2xl font-bold">
        EloraStay
    </div>

</nav>

<!-- MAIN -->
<main class="flex-1 flex items-center justify-center px-4 py-10">

    <!-- CARD -->
    <div class="bg-white w-full max-w-md rounded-3xl shadow-xl p-8">

        <!-- HEADER -->
        <div class="bg-gradient-to-r from-pink-400 to-pink-500 text-white rounded-2xl p-6 text-center mb-6">

            <h2 class="text-2xl font-bold mb-2">
                Lupa Password
            </h2>

            <p class="text-sm">
                Masukkan email dan nomor HP yang terdaftar untuk menerima link reset password.
            </p>

        </div>

        <form action="{{ route('password.check') }}" method="POST">
        @csrf

        <!-- Email -->
        <div class="mb-5">
            <input
                type="email"
                name="email"
                value="{{ old('email') }}"
                placeholder="Masukkan Email"
                required
                class="w-full px-5 py-3 rounded-full border border-pink-200 focus:outline-none focus:ring-2 focus:ring-pink-400">
        </div>

        <!-- Nomor HP -->
        <div class="mb-5">
            <input
                type="tel"
                name="telepon"
                value="{{ old('telepon') }}"
                pattern="[0-9]{10,15}"
                placeholder="Masukkan Nomor HP"
                required
                class="w-full px-5 py-3 rounded-full border border-pink-200 focus:outline-none focus:ring-2 focus:ring-pink-400">
        </div>

        <button
            type="submit"
            class="w-full bg-gradient-to-r from-pink-400 to-pink-500 hover:from-pink-500 hover:to-pink-600 text-white py-3 rounded-full font-semibold transition duration-300 shadow-md">
            Verifikasi
        </button>

        @if(session('error'))
        <div class="mb-4 bg-red-100 text-red-700 p-3 rounded-lg">
            {{ session('error') }}
        </div>
        @endif

        @if(session('success'))
        <div class="mb-4 bg-green-100 text-green-700 p-3 rounded-lg">
            {{ session('success') }}
        </div>
        @endif
    </form>


        <!-- LOGIN -->
        <p class="text-center text-sm text-gray-600 mt-6">

            Kembali ke
            <a href="/login" class="text-pink-500 font-semibold hover:underline">
                Login
            </a>

        </p>

    </div>

</main>

<!-- FOOTER -->
<footer class="bg-gradient-to-r from-pink-400 to-pink-500 text-white mt-10">

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 px-6 py-10">

        <!-- BRAND -->
        <div>

            <h3 class="text-2xl font-bold mb-3">
                EloraStay
            </h3>

            <p class="text-sm leading-6">
                Platform booking hotel terpercaya dengan pengalaman terbaik untuk Anda.
            </p>

        </div>

        <!-- MENU -->
        <div>

            <h4 class="text-xl font-semibold mb-3">
                Menu
            </h4>

            <div class="space-y-2 text-sm">

                <p>🏠 Beranda</p>
                <p>🛏️ Daftar Kamar</p>
                <p>📄 Reservasi</p>
                <p>💳 Pembayaran</p>

            </div>

        </div>

        <!-- KONTAK -->
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

    <!-- BOTTOM -->
    <div class="text-center py-4 bg-black/10 text-sm">
        © 2026 EloraStay. All rights reserved.
    </div></footer>

</body>
</html>