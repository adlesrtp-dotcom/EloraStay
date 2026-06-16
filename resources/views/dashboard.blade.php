@extends('layouts.app')

@section('content')

<!-- Hero -->
<section
    class="h-[300px] bg-cover bg-center flex items-center justify-center relative"
    style="background-image: url('https://images.unsplash.com/photo-1566073771259-6a8506099945')">

    <!-- Overlay -->
    <div class="absolute inset-0 bg-pink-500/40"></div>

    <!-- Content -->
    <div class="relative text-center text-white px-4">

        <h1 class="text-4xl font-bold mb-3">
            Temukan Hotel Impian Anda
        </h1>

        <p class="text-lg">
            Booking mudah, cepat, dan terpercaya hanya di EloraStay
        </p>

    </div>

</section>

<!-- Features -->
<section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5 p-10">

    <!-- Card 1 -->
    <div class="bg-white rounded-2xl p-6 shadow-md hover:-translate-y-2 transition text-center">

        <div class="text-4xl mb-3">🏨</div>

        <h3 class="font-bold text-lg mb-2">
            Hotel Terpercaya
        </h3>

        <p class="text-gray-500 text-sm leading-6">
            Kami bekerja sama dengan hotel terbaik untuk memastikan
            kenyamanan dan kualitas menginap Anda.
        </p>

    </div>

    <!-- Card 2 -->
    <div class="bg-white rounded-2xl p-6 shadow-md hover:-translate-y-2 transition text-center">

        <div class="text-4xl mb-3">⭐</div>

        <h3 class="font-bold text-lg mb-2">
            Rating Terbaik
        </h3>

        <p class="text-gray-500 text-sm leading-6">
            Semua kamar memiliki ulasan tinggi dari pelanggan
            yang telah merasakan pengalaman menginap.
        </p>

    </div>

    <!-- Card 3 -->
    <div class="bg-white rounded-2xl p-6 shadow-md hover:-translate-y-2 transition text-center">

        <div class="text-4xl mb-3">⚡</div>

        <h3 class="font-bold text-lg mb-2">
            Booking Instan
        </h3>

        <p class="text-gray-500 text-sm leading-6">
            Pesan kamar hanya dalam beberapa klik tanpa proses
            yang ribet dan langsung terkonfirmasi.
        </p>

    </div>

    <!-- Card 4 -->
    <div class="bg-white rounded-2xl p-6 shadow-md hover:-translate-y-2 transition text-center">

        <div class="text-4xl mb-3">📞</div>

        <h3 class="font-bold text-lg mb-2">
            Dukungan 24/7
        </h3>

        <p class="text-gray-500 text-sm leading-6">
            Tim kami siap membantu Anda kapan saja jika terjadi
            kendala saat reservasi atau menginap.
        </p>

    </div>

</section>

<!-- Room Section -->
<section class="px-5 py-6">

    <!-- Header -->
    <div class="flex items-center justify-between">

        <h3 class="text-2xl font-bold">
            Pilihan kamar terpopuler
        </h3>

        <a href="/kamar"
           class="text-pink-500 font-bold hover:text-pink-600 transition hover:translate-x-2 inline-flex items-center gap-2">

            Lihat Semua →
        </a>

    </div>

    <!-- Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">

        <!-- CARD 1 -->
        <div onclick="window.location.href='/kamar'"
             class="bg-white rounded-2xl p-4 shadow-md hover:-translate-y-2 transition cursor-pointer">

            <img
                src="{{ asset('img/kamar/deluxe.jpeg') }}"
                alt="Deluxe Room"
                class="w-full h-[220px] object-cover rounded-xl">

            <h4 class="font-bold text-xl mt-4 mb-2">
                Deluxe Room
            </h4>

            <p class="text-gray-500 text-sm leading-6">
                Kamar nyaman dengan desain modern dan pemandangan kota
                yang menenangkan. Cocok untuk Anda yang menginginkan
                istirahat berkualitas dengan suasana hangat dan fasilitas lengkap.
            </p>

            <div class="text-pink-500 font-bold mt-4">
                Rp. 500.000
            </div>

        </div>

        <!-- CARD 2 -->
        <div onclick="window.location.href='/kamar'"
             class="bg-white rounded-2xl p-4 shadow-md hover:-translate-y-2 transition cursor-pointer">

            <img
                src="/img/kamar/suite.jpeg"
                alt="Superior Suite"
                class="w-full h-[220px] object-cover rounded-xl">

            <h4 class="font-bold text-xl mt-4 mb-2">
                Superior Suite
            </h4>

            <p class="text-gray-500 text-sm leading-6">
                Suite mewah dengan ruang tamu terpisah, fasilitas premium,
                dan pemandangan indah. Ideal untuk Anda yang menginginkan
                pengalaman menginap yang lebih eksklusif dan nyaman.
            </p>

            <div class="text-pink-500 font-bold mt-4">
                Rp. 750.000
            </div>

        </div>

    </div>

</section>

@if(!session('login'))
<section class="bg-pink-400 text-white text-center py-12 px-5 mt-10">

    <div>

        <h3 class="text-3xl font-bold mb-3">
            Siap untuk pengalaman terbaik?
        </h3>

        <p class="mb-5">
            Daftar sekarang dan dapatkan promo
        </p>

        <button
            onclick="window.location.href='/registrasi'"
            class="bg-white text-pink-500 px-6 py-3 rounded-xl font-bold">

            Daftar Sekarang

        </button>

    </div>

</section>
@endif


@endsection