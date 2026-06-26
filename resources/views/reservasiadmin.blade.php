<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservasi Admin - EloraStay</title>

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
                Reservasi Hotel
            </h1>

            <p class="text-lg">
                Kelola data reservasi hotel dengan tampilan modern.
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
                    Daftar Reservasi
                </h2>

                <p class="text-gray-600">
                    Kelola reservasi kamar hotel
                </p>
            </div>

            <!-- Actions -->
            <div class="flex flex-col sm:flex-row gap-4 w-full lg:w-auto">

                <form action="{{ route('reservasiadmin') }}" method="GET"
      class="flex gap-3">

                    <input
                        type="text"
                        name="search"
                        value="{{ request('search') }}"
                        placeholder="Cari nama pelanggan..."
                        class="w-full sm:w-72 px-5 py-3 border border-gray-300 rounded-xl outline-none focus:border-pink-500">

                    <button
                        type="submit"
                        class="bg-pink-500 hover:bg-pink-600 text-white font-bold px-6 py-3 rounded-xl">
                        Cari
                    </button>

                     <a href="{{ route('reservasiadmin') }}"
                        class="bg-gray-400 hover:bg-gray-500 text-white font-bold px-6 py-3 rounded-xl">
                            Reset
                        </a>

                </form>

                
            </div>

        </div>

        <!-- Table -->
        <div class="bg-white p-8 rounded-3xl shadow overflow-x-auto">

            <table class="w-full border-collapse min-w-[1000px]">

                <thead>

                    <tr class="bg-pink-100 text-gray-700">

                        <th class="p-5 text-left">ID</th>
                        <th class="p-5 text-left">Nama</th>
                        <th class="p-5 text-left">Kamar</th>
                        <th class="p-5 text-left">Check-in</th>
                        <th class="p-5 text-left">Harga</th>
                        <th class="p-5 text-left">Status</th>
                        <th class="p-5 text-left">Aksi</th> 

                    </tr>

                </thead>

               <tbody>

                @forelse($reservasi as $r)

                <tr class="border-b hover:bg-pink-50 transition">

                    <td class="p-5">
                        RS-{{ str_pad($r->id, 3, '0', STR_PAD_LEFT) }}
                    </td>

                    <td class="p-5">
                        {{ $r->user->name ?? '-' }}
                    </td>

                    <td class="p-5">
                        {{ optional(optional($r->kamar)->tipeKamar)->nama_tipe ?? '-' }}
                    </td>

                    <td class="p-5">
                        {{ $r->check_in }}
                    </td>

                    <td class="p-5">
                        Rp {{ number_format($r->total_harga,0,',','.') }}
                    </td>

                    <td class="p-5">

                        @if($r->status == 'pending')

                            <span class="bg-yellow-100 text-yellow-600 px-4 py-2 rounded-full text-sm font-bold">
                                Pending
                            </span>

                        @elseif($r->status == 'lunas')

                            <span class="bg-blue-100 text-blue-600 px-4 py-2 rounded-full text-sm font-bold">
                                Lunas
                            </span>

                        @elseif($r->status == 'checkin')

                            <span class="bg-purple-100 text-purple-600 px-4 py-2 rounded-full text-sm font-bold">
                                Check In
                            </span>

                        @elseif($r->status == 'checkout')

                            <span class="bg-green-100 text-green-600 px-4 py-2 rounded-full text-sm font-bold">
                                Check Out
                            </span>

                        @endif

                    </td>
                    <td class="p-5">

                    @if($r->status == 'lunas')

                        <a href="{{ route('reservasi.status', [$r->id,'checkin']) }}"
                        class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg">
                            Check In
                        </a>

                    @elseif($r->status == 'checkin')

                        <a href="{{ route('reservasi.status', [$r->id,'checkout']) }}"
                        class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg">
                            Check Out
                        </a>

                    @elseif($r->status == 'checkout')

                        <span class="text-green-600 font-bold">
                            Selesai
                        </span>

                    @else

                        -

                    @endif

                </td>
                </tr>

                @empty

                <tr>

                    <td colspan="7"
                        class="p-5 text-center text-gray-500">
                        Belum ada reservasi
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