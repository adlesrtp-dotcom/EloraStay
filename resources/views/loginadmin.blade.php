<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login Admin - EloraStay</title>
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
        EloraStay Admin
    </div>

</nav>

<div class="flex flex-col md:flex-row min-h-[calc(100vh-72px)]">

    <div
        class="flex-1 bg-cover bg-center relative"
        style="background-image:url('https://images.unsplash.com/photo-1566073771259-6a8506099945')">

        <div class="absolute inset-0 bg-pink-500/50"></div>

        <div class="absolute bottom-12 left-10 text-white max-w-md z-10">

            <h1 class="text-4xl font-bold mb-3">
                Panel Admin EloraStay
            </h1>

            <p class="text-lg leading-7">
                Kelola data hotel, reservasi, pelanggan, dan pembayaran.
            </p>

        </div>

    </div>

    <div class="flex-1 flex justify-center items-center p-6">

        <div class="bg-white w-full max-w-md rounded-3xl shadow-xl p-8">

            <div class="bg-gradient-to-r from-pink-400 to-pink-500 text-white rounded-2xl p-6 text-center mb-6">

                <h3 class="text-2xl font-bold">
                    Login Admin
                </h3>

                <p class="text-sm mt-2">
                    Masuk ke dashboard admin EloraStay
                </p>

            </div>

            @if(session('error'))
                <div class="bg-red-100 text-red-700 p-3 rounded-lg mb-4">
                    {{ session('error') }}
                </div>
            @endif

            <form action="/loginadmin" method="POST">

                @csrf

                <div class="mb-4">

                    <input
                        type="text"
                        name="username"
                        placeholder="Username"
                        required
                        class="w-full px-5 py-3 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-pink-400">

                </div>

                <div class="mb-5">

                    <input
                        type="password"
                        name="password"
                        placeholder="Password"
                        required
                        class="w-full px-5 py-3 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-pink-400">

                </div>

                <button
                    type="submit"
                    class="w-full bg-gradient-to-r from-pink-400 to-pink-500 text-white py-3 rounded-full font-bold hover:opacity-90 transition">

                    Login Admin

                </button>

                <div class="text-center mt-5">

                    <a
                        href="/login"
                        class="text-pink-500 font-semibold hover:underline">

                        Login sebagai Pelanggan

                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

<footer class="bg-gradient-to-r from-pink-400 to-pink-500 text-white mt-10">

    <div class="text-center py-4 bg-black/10 text-sm">
        © 2026 EloraStay. All rights reserved.
    </div>

</footer>

</body>
</html>