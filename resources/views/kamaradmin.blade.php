<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kamar Admin - EloraStay</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-pink-50 font-sans text-gray-800">

<div class="w-full min-h-screen">

    <!-- Navbar -->
    <nav class="w-full bg-pink-500 px-10 py-5 flex justify-between items-center">

        <div class="text-white text-3xl font-bold">
            EloraStay
        </div>

        <div class="space-x-6">
            <a href="{{ route('dashboardadmin') }}"
               class="text-white font-semibold hover:text-pink-100 transition">
                Dashboard
            </a>

            <a href="{{ route('pelangganadmin') }}"
               class="text-white font-semibold hover:text-pink-100 transition">
                Pelanggan
            </a>

            <a href="{{ route('reservasiadmin') }}"
               class="text-white font-semibold hover:text-pink-100 transition">
                Reservasi
            </a>

            <a href="{{ route('kamaradmin') }}"
               class="text-white font-semibold hover:text-pink-100 transition">
                Kamar
            </a>

            <a href="{{ route('pembayaranadmin') }}"
               class="text-white font-semibold hover:text-pink-100 transition">
                Pembayaran
            </a>
        </div>

    </nav>

    <!-- Hero -->
    <section
        class="w-full h-[260px] bg-cover bg-center flex items-center justify-center text-center text-white"
        style="background-image:
        linear-gradient(rgba(240,92,168,0.45), rgba(240,92,168,0.45)),
        url('https://images.unsplash.com/photo-1566073771259-6a8506099945?q=80&w=1400&auto=format&fit=crop');">

        <div>
            <h1 class="text-5xl font-bold mb-3">
                Data Kamar Hotel
            </h1>

            <p class="text-lg">
                Kelola data kamar hotel dengan tampilan modern.
            </p>
        </div>

    </section>

    <!-- Content -->
    <div class="p-10">

        <!-- Topbar -->
        <div class="flex flex-col lg:flex-row lg:justify-between lg:items-center gap-6 mb-8">

            <!-- Title -->
            <div>
                <h2 class="text-4xl font-bold mb-2">
                    Daftar Kamar
                </h2>

                <p class="text-gray-600">
                    Kelola data kamar hotel
                </p>
            </div>

            <!-- Actions -->
            <div class="flex flex-col sm:flex-row gap-4 w-full lg:w-auto">

                <input
                    type="text"
                    placeholder="Cari kamar..."
                    class="w-full sm:w-72 px-5 py-3 border border-gray-300 rounded-xl outline-none focus:border-pink-500 focus:ring-2 focus:ring-pink-300">

                <button
                    class="bg-pink-500 hover:bg-pink-600 transition text-white font-bold px-6 py-3 rounded-xl">
                    + Tambah Kamar
                </button>

            </div>

        </div>

        <!-- Table -->
        <div class="bg-white p-8 rounded-3xl shadow overflow-x-auto">

            <table class="w-full border-collapse min-w-[900px]">

                <thead>

                    <tr class="bg-pink-100 text-gray-700">

                        <th class="p-5 text-left">ID</th>
                        <th class="p-5 text-left">Nama Kamar</th>
                        <th class="p-5 text-left">Tipe</th>
                        <th class="p-5 text-left">Harga</th>
                        <th class="p-5 text-left">Status</th>
                        <th class="p-5 text-left">Aksi</th>

                    </tr>

                </thead>

                <tbody>

                    <tr class="border-b hover:bg-pink-50 transition">

                        <td class="p-5">KM-001</td>
                        <td class="p-5">Suite Premium</td>
                        <td class="p-5">VIP</td>
                        <td class="p-5">Rp 3.500.000</td>

                        <td class="p-5">
                            <span class="bg-green-100 text-green-600 px-4 py-2 rounded-full text-sm font-bold">
                                Tersedia
                            </span>
                        </td>

                        <td class="p-5 space-x-3">
                            <a href="#" class="text-pink-500 font-bold hover:underline">
                                Edit
                            </a>

                            <a href="#" class="text-red-500 font-bold hover:underline">
                                Hapus
                            </a>
                        </td>

                    </tr>

                    <tr class="border-b hover:bg-pink-50 transition">

                        <td class="p-5">KM-002</td>
                        <td class="p-5">Deluxe Room</td>
                        <td class="p-5">Deluxe</td>
                        <td class="p-5">Rp 2.500.000</td>

                        <td class="p-5">
                            <span class="bg-red-100 text-red-600 px-4 py-2 rounded-full text-sm font-bold">
                                Penuh
                            </span>
                        </td>

                        <td class="p-5 space-x-3">
                            <a href="#" class="text-pink-500 font-bold hover:underline">
                                Edit
                            </a>

                            <a href="#" class="text-red-500 font-bold hover:underline">
                                Hapus
                            </a>
                        </td>

                    </tr>

                    <tr class="border-b hover:bg-pink-50 transition">

                        <td class="p-5">KM-003</td>
                        <td class="p-5">Standard Room</td>
                        <td class="p-5">Standard</td>
                        <td class="p-5">Rp 1.500.000</td>

                        <td class="p-5">
                            <span class="bg-green-100 text-green-600 px-4 py-2 rounded-full text-sm font-bold">
                                Tersedia
                            </span>
                        </td>

                        <td class="p-5 space-x-3">
                            <a href="#" class="text-pink-500 font-bold hover:underline">
                                Edit
                            </a>

                            <a href="#" class="text-red-500 font-bold hover:underline">
                                Hapus
                            </a>
                        </td>

                    </tr>

                    <tr class="hover:bg-pink-50 transition">

                        <td class="p-5">KM-004</td>
                        <td class="p-5">Family Room</td>
                        <td class="p-5">Family</td>
                        <td class="p-5">Rp 2.800.000</td>

                        <td class="p-5">
                            <span class="bg-green-100 text-green-600 px-4 py-2 rounded-full text-sm font-bold">
                                Tersedia
                            </span>
                        </td>

                        <td class="p-5 space-x-3">
                            <a href="#" class="text-pink-500 font-bold hover:underline">
                                Edit
                            </a>

                            <a href="#" class="text-red-500 font-bold hover:underline">
                                Hapus
                            </a>
                        </td>

                    </tr>

                </tbody>

            </table>

        </div>

    </div>
    
        <div class="bg-pink-600 text-center py-4">
            © 2026 EloraStay. All rights reserved.
        </div>

    </footer>

</div>

</body>
</html>