@extends('layouts.app') 

@section('content') 

<!-- Hero -->
<section
    class="h-[300px] bg-cover bg-center flex items-center justify-center relative"
    style="background-image:url('https://images.unsplash.com/photo-1566073771259-6a8506099945')">

    <!-- Overlay -->
    <div class="absolute inset-0 bg-pink-500/40"></div>

    <!-- Content -->
    <div class="relative text-center text-white px-4">

        <h1 class="text-4xl font-bold mb-3">
            Temukan Hotel Impian Anda
        </h1>

        <p class="text-lg">
            Booking mudah, cepat, dan terpercaya
        </p>

    </div>

</section>

<!-- Header -->
<section class="px-6 py-8">

    <h2 class="text-3xl font-bold text-gray-800 mb-2">
        Reservasi Saya
    </h2>

    <p class="text-gray-600">
        Kelola dan lihat detail reservasi Anda
    </p>

</section>

<!-- LIST -->
<!-- LIST -->
<section class="px-6 pb-10">

@if(session('success'))

<div class="bg-green-100 text-green-700 p-4 rounded-xl mb-6">
    {{ session('success') }}
</div>

@endif

@forelse($reservasis as $res)

<div class="bg-white rounded-3xl p-6 mb-6 shadow-md hover:shadow-xl transition">

    <h3 class="text-2xl font-bold text-gray-800">
        {{ $res->kamar->tipeKamar->nama_tipe }}
    </h3>

    <p class="text-sm text-gray-400 mt-1">
        EloraStay Jakarta
    </p>

    <span class="inline-block mt-4 px-4 py-1 rounded-full text-sm font-semibold bg-yellow-100 text-yellow-700">
        {{ ucfirst($res->status) }}
    </span>

    <div class="grid grid-cols-1 md:grid-cols-3 text-center gap-4 mt-6">

        <div>
            <p class="text-gray-400 text-sm">
                Check-in
            </p>

            <p class="font-semibold text-gray-700">
                {{ $res->check_in }}
            </p>
        </div>

        <div>
            <p class="text-gray-400 text-sm">
                Check-out
            </p>

            <p class="font-semibold text-gray-700">
                {{ $res->check_out }}
            </p>
        </div>

        <div>
            <p class="text-gray-400 text-sm">
                Tamu
            </p>

            <p class="font-semibold text-gray-700">
                {{ $res->jumlah_tamu }} Orang
            </p>
        </div>

    </div>

    <div class="border-t border-pink-200 my-6"></div>

    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">

        <div>

            <p class="text-gray-400 text-sm">
                Kode Reservasi
            </p>

            <p class="font-semibold text-gray-700">
                ELS-{{ str_pad($res->id, 5, '0', STR_PAD_LEFT) }}
            </p>

        </div>

        <div>

            <p class="text-gray-400 text-sm">
                Total
            </p>

            <p class="text-pink-500 font-bold text-xl">
                Rp {{ number_format($res->total_harga,0,',','.') }}
            </p>

        </div>

    </div>

</div>

@empty

<div class="bg-white rounded-2xl p-8 text-center shadow-md">

    <p class="text-gray-500">
        Tidak ada reservasi
    </p>

</div>

@endforelse

</section>

<script>

function logout()
{
    localStorage.removeItem("isLogin");

    alert("Logout berhasil");

    window.location.href = "/dashboard";
}

</script>

@endsection