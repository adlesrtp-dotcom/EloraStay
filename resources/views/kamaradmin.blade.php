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

               <form action="{{ route('kamaradmin') }}"
      method="GET"
      class="flex gap-3">

    <input
        type="text"
        name="search"
        value="{{ request('search') }}"
        placeholder="Cari kamar..."
        class="w-full sm:w-72 px-5 py-3 border border-gray-300 rounded-xl outline-none focus:border-pink-500 focus:ring-2 focus:ring-pink-300">

    <button
        type="submit"
        class="bg-pink-500 hover:bg-pink-600 text-white font-bold px-6 py-3 rounded-xl">
        Cari
    </button>

    <a href="{{ route('kamaradmin') }}"
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
                        <th class="p-5 text-left">Nama Kamar</th>
                        <th class="p-5 text-left">Tipe</th>
                        <th class="p-5 text-left">Harga</th>
                        <th class="p-5 text-left">Status</th>
                        <th class="p-5 text-center">Detail Kamar</th>
                      

                    </tr>

                </thead>

              <tbody>

                @forelse($kamar as $k)

                <tr class="border-b hover:bg-pink-50 transition">

                    <td class="p-5">
                        KM-{{ str_pad($k->id, 3, '0', STR_PAD_LEFT) }}
                    </td>

                    <td class="p-5">
                        {{ $k->nomor_kamar }}
                    </td>

                    <td class="p-5">
                        {{ $k->tipeKamar->nama_tipe ?? '-' }}
                    </td>

                    <td class="p-5">
                        Rp {{ number_format($k->tipeKamar->harga ?? 0, 0, ',', '.') }}
                    </td>

                    <td class="p-5">

                        @if($k->status == 'tersedia')

                            <span class="bg-green-100 text-green-600 px-4 py-2 rounded-full text-sm font-bold">
                                Tersedia
                            </span>

                        @else

                            <span class="bg-red-100 text-red-600 px-4 py-2 rounded-full text-sm font-bold">
                                Terisi
                            </span>

                        @endif

                    </td>

                    <td class="p-5 text-center">

                        <a href="{{ route('kamaradmin', ['detail' => $k->tipe_kamar_id]) }}"
                        class="bg-pink-500 hover:bg-pink-600 text-white px-5 py-2 rounded-lg font-semibold">
                            Detail
                        </a>

                    </td>

                </tr>

                @empty

                <tr>

                    <td colspan="6"
                        class="p-5 text-center text-gray-500">
                        Belum ada data kamar
                    </td>

                </tr>

                @endforelse

                </tbody>

            </table>

        </div>

        @if($detail)

<div class="bg-white p-8 rounded-3xl shadow mt-8">

    <h2 class="text-2xl font-bold mb-6">
        Detail {{ $detail->nama_tipe }}
    </h2>

    <table class="w-full">

        <thead>

            <tr class="bg-pink-100">

                <th class="p-3 text-left">No</th>
                <th class="p-3 text-left">Fasilitas</th>
                <th class="p-3 text-center">Aksi</th>

            </tr>

        </thead>

        <tbody>

        @foreach($detail->fasilitas as $f)

        <tr class="border-b">

            <td class="p-3">
                {{ $loop->iteration }}
            </td>

            <td class="p-3">

                <form action="{{ route('fasilitas.update',$f->id) }}"
                      method="POST"
                      class="flex gap-3">

                    @csrf
                    @method('PUT')

                    <input
                        type="text"
                        name="nama_fasilitas"
                        value="{{ $f->nama_fasilitas }}"
                        class="border rounded-lg px-3 py-2 w-full">

                    <button
                        class="bg-blue-500 text-white px-4 rounded-lg">

                        Simpan

                    </button>

                </form>

            </td>

            <td class="p-3 text-center">

                <form action="{{ route('fasilitas.destroy',$f->id) }}"
                      method="POST">

                    @csrf
                    @method('DELETE')

                    <button
                        onclick="return confirm('Hapus fasilitas?')"
                        class="bg-red-500 text-white px-4 py-2 rounded-lg">

                        Hapus

                    </button>

                </form>

            </td>

        </tr>

        @endforeach

        </tbody>

    </table>

    <hr class="my-6">

    <h3 class="text-xl font-bold mb-3">
        Tambah Fasilitas
    </h3>

    <form action="{{ route('fasilitas.store',$detail->id) }}"
          method="POST"
          class="flex gap-3">

        @csrf

        <input
            type="text"
            name="nama_fasilitas"
            placeholder="Masukkan fasilitas..."
            class="border rounded-lg px-4 py-2 w-full"
            required>

        <button
            class="bg-green-500 hover:bg-green-600 text-white px-6 rounded-lg">

            Tambah

        </button>

    </form>

</div>

@endif

    </div>
    
        <div class="bg-pink-600 text-center py-4">
            © 2026 EloraStay. All rights reserved.
        </div>

    </footer>

</div>

</body>
</html>