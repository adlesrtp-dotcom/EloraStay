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
                Masukkan email untuk reset password
            </p>

        </div>

        <!-- FORM -->
        <form onsubmit="resetPassword(event)">

            <!-- INPUT -->
            <div class="mb-5">

                <input
                    type="email"
                    id="email"
                    placeholder="Masukkan email"
                    required
                    class="w-full px-5 py-3 rounded-full border border-pink-200 focus:outline-none focus:ring-2 focus:ring-pink-400">

            </div>

            <!-- BUTTON -->
            <button
                type="submit"
                class="w-full bg-gradient-to-r from-pink-400 to-pink-500 hover:from-pink-500 hover:to-pink-600 text-white py-3 rounded-full font-semibold transition duration-300 shadow-md">

                Kirim Link Reset
            </button>

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
    </div>

</footer>

<!-- SCRIPT -->
<script>

function resetPassword(e) {

    e.preventDefault();

    const email =
        document.getElementById("email").value;

    if (email === "") {

        alert("Email wajib diisi!");

        return;
    }

    // simulasi kirim email
    alert(
        "Link reset password telah dikirim ke " + email
    );

    // redirect login
    window.location.href = "/login";
}

</script>

</body>
</html>