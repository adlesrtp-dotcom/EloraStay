<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - EloraStay</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-50 font-sans">

<div class="w-full min-h-screen">

    <!-- Navbar -->
    <nav class="w-full bg-pink-500 px-10 py-5 flex justify-between items-center">

        <div class="text-white text-3xl font-bold">
            EloraStay
        </div>

        <div class="space-x-6">
            <a href="{{ route('dashboardadmin') }}" class="text-white font-semibold hover:text-pink-100">
                Dashboard
            </a>

            <a href="{{ route('pelangganadmin') }}" class="text-white font-semibold hover:text-pink-100">
                Pelanggan
            </a>

            <a href="{{ route('reservasiadmin') }}" class="text-white font-semibold hover:text-pink-100">
                Reservasi
            </a>

            <a href="{{ route('kamaradmin') }}" class="text-white font-semibold hover:text-pink-100">
                Kamar
            </a>

            <a href="{{ route('pembayaranadmin') }}" class="text-white font-semibold hover:text-pink-100">
                Pembayaran
            </a>
        </div>

    </nav>

    <!-- Hero -->
    <section 
        class="w-full h-[320px] bg-cover bg-center flex items-center justify-center text-center text-white"
        style="background-image:
        linear-gradient(rgba(240,92,168,0.4), rgba(240,92,168,0.4)),
        url('https://images.unsplash.com/photo-1566073771259-6a8506099945?q=80&w=1400&auto=format&fit=crop');">

        <div>
            <h1 class="text-5xl font-bold mb-3">
                Dashboard Admin EloraStay
            </h1>

            <p class="text-lg">
                Kelola data hotel, reservasi, pelanggan, dan pembayaran dengan mudah.
            </p>
        </div>

    </section>

    <!-- Content -->
    <div class="p-10">

        <!-- Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5 mb-10">

            <div class="bg-white p-8 rounded-2xl shadow text-center">
                <h3 class="text-xl text-gray-700 mb-4 font-semibold">
                    Total Pelanggan
                </h3>

                <p class="text-4xl font-bold text-pink-500">
                    {{ $totalPelanggan }}
                </p>
                </div>

            <div class="bg-white p-8 rounded-2xl shadow text-center">
                <h3 class="text-xl text-gray-700 mb-4 font-semibold">
                    Total Reservasi
                </h3>

                <p class="text-4xl font-bold text-pink-500">
                    {{ $totalReservasi }}   
                </p>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow text-center">
                <h3 class="text-xl text-gray-700 mb-4 font-semibold">
                    Total Kamar
                </h3>

                <p class="text-4xl font-bold text-pink-500">
                    {{ $totalKamar }}
                </p>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow text-center">
                <h3 class="text-xl text-gray-700 mb-4 font-semibold">
                    Pendapatan
                </h3>

                <p class="text-2xl font-bold text-pink-500 break-words">
                    Rp {{ number_format($totalPendapatan, 0, ',', '.') }}
                </p>
            </div>

        </div>

        <!-- Table -->
        <div class="bg-white p-8 rounded-2xl shadow mb-10 overflow-x-auto">

            <h2 class="text-2xl font-bold text-gray-800 mb-6">
                Reservasi Terbaru
            </h2>

            <table class="w-full border-collapse">

                <thead>
                    <tr class="bg-pink-100 text-gray-700">
                        <th class="p-4 text-left">ID</th>
                        <th class="p-4 text-left">Nama</th>
                        <th class="p-4 text-left">Check In</th>
                        <th class="p-4 text-left">Status</th>
                    </tr>
                </thead>

                <tbody>

                @forelse($reservasiTerbaru as $r)

                <tr class="border-b">
                    <td class="p-4">
                        RS-{{ str_pad($r->id, 3, '0', STR_PAD_LEFT) }}
                    </td>

                    <td class="p-4">
                        {{ $r->user->name ?? '-' }}
                    </td>

                    <td class="p-4">
                        {{ $r->check_in }}
                    </td>

                    <td class="p-4 font-bold">
                        {{ $r->status }}
                    </td>
                </tr>

                @empty

                <tr>
                    <td colspan="4" class="p-4 text-center">
                        Belum ada data reservasi
                    </td>
                </tr>

                @endforelse

                </tbody>

            </table>

        </div>

        <!-- Features -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">

            <div class="bg-white p-7 rounded-2xl shadow text-center">
                <h3 class="text-pink-500 text-xl font-bold mb-4">
                    Kelola Reservasi
                </h3>

                <p class="text-gray-600">
                    Mempermudah admin dalam memantau semua reservasi pelanggan.
                </p>
            </div>

            <div class="bg-white p-7 rounded-2xl shadow text-center">
                <h3 class="text-pink-500 text-xl font-bold mb-4">
                    Data Pelanggan
                </h3>

                <p class="text-gray-600">
                    Mengelola informasi pelanggan secara cepat dan aman.
                </p>
            </div>

            <div class="bg-white p-7 rounded-2xl shadow text-center">
                <h3 class="text-pink-500 text-xl font-bold mb-4">
                    Pembayaran Hotel
                </h3>

                <p class="text-gray-600">
                    Melihat transaksi pembayaran hotel dengan mudah.
                </p>
            </div>

        </div>

    </div>

    <!-- Footer -->

        <div class="bg-pink-600 text-center py-4">
            © 2026 EloraStay. All rights reserved.
        </div>

    </footer>

</div>

</body>
</html>