<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pelanggan - EloraStay</title>

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
                Daftar Pelanggan
            </h1>

            <p class="text-lg">
                Kelola data pelanggan hotel dengan mudah dan modern.
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
                    Daftar Pelanggan
                </h2>

                <p class="text-gray-600">
                    Kelola data pelanggan hotel
                </p>
            </div>

            <!-- Actions -->
            <div class="flex flex-col sm:flex-row gap-4 w-full lg:w-auto">

                <form method="GET" action="{{ route('pelangganadmin') }}"
      class="flex gap-3">

    <input
        type="text"
        name="cari"
        value="{{ request('cari') }}"
        placeholder="Cari pelanggan..."
        class="w-full sm:w-72 px-5 py-3 border border-gray-300 rounded-xl outline-none focus:border-pink-500 focus:ring-2 focus:ring-pink-300">

    <button
        type="submit"
        class="bg-pink-500 hover:bg-pink-600 text-white px-5 py-3 rounded-xl font-semibold">
        Cari
    </button>

     <a href="{{ route('pelangganadmin') }}"
       class="bg-gray-400 hover:bg-gray-500 text-white font-bold px-6 py-3 rounded-xl">
        Reset
    </a>
</form>

            </div>

        </div>

        <!-- Table -->
        <div class="bg-white p-8 rounded-3xl shadow overflow-x-auto">

            <table class="w-full border-collapse min-w-[900px]">

                <thead>

                    <tr class="bg-pink-100 text-gray-700">

                        <th class="p-5 text-left">ID</th>
                        <th class="p-5 text-left">Nama</th>
                        <th class="p-5 text-left">Email</th>
                        <th class="p-5 text-left">Telepon</th>
                        <th class="p-5 text-left">Alamat</th>

                    </tr>

                </thead>

               <tbody>

@forelse($pelanggan as $user)

<tr class="border-b hover:bg-pink-50 transition">

    <td class="p-5">
        PL-{{ str_pad($user->id, 3, '0', STR_PAD_LEFT) }}
    </td>

    <td class="p-5">
        {{ $user->name }}
    </td>

    <td class="p-5">
        {{ $user->email }}
    </td>

    <td class="p-5">
        {{ $user->telepon ?? '-' }}
    </td>

    <td class="p-5">
        -
    </td>



</tr>

@empty

<tr>

    <td colspan="5"
    class="p-5 text-center text-gray-500">
        Belum ada pelanggan
    </td>

</tr>

@endforelse

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