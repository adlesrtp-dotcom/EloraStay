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
            Booking mudah, cepat, dan terpercaya hanya di EloraStay
        </p>

    </div>

</section>

<!-- Room List -->
<!-- Room List -->
<section class="px-6 py-10">

    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8 justify-items-center">

       @foreach($tipeKamars as $tipe)
<div class="w-full max-w-[380px] bg-white rounded-2xl overflow-hidden shadow-md">

    <img src="{{ asset('img/kamar/' . $tipe->gambar) }}"
         class="w-full h-[240px] object-cover">

    <div class="p-5">

        <h4 class="text-xl font-bold mb-2">
            {{ $tipe->nama_tipe }}
        </h4>

        <p class="text-gray-500 text-sm">
            {{ $tipe->deskripsi }}
        </p>

        <p class="text-pink-500 font-bold mt-3">
            Rp {{ number_format($tipe->harga, 0, ',', '.') }}
        </p>

        <p class="text-sm text-gray-400 mt-2">
            Sisa kamar:
            {{ $tipe->kamars->where('status','tersedia')->count() }} / 3
        </p>

        <button class="bg-pink-500 text-white px-4 py-2 rounded-lg mt-4"
                onclick="openModal({{ $tipe->id }})">

            Lihat Detail
        </button>

    </div>
</div>
@endforeach
    </div>
</section>

<!-- MODAL -->
<div id="roomModal"
     class="hidden fixed inset-0 z-50 bg-black/60 overflow-y-auto py-10">

    <div class="bg-white w-[90%] max-w-[700px] mx-auto rounded-2xl p-6 relative">

        <!-- Close -->
        <span onclick="closeModal()"
              class="absolute top-4 right-5 text-2xl cursor-pointer text-gray-600">

            ✖
        </span>

        <!-- CONTENT -->
        <div id="modalContent"></div>

    </div>
</div>

<script>

function openModal(nama, desc, img, capacity, size, rating, price, available) {

    document.getElementById("roomModal").classList.remove("hidden");

    document.getElementById("modalContent").innerHTML = `
        <img src="${img}" class="w-full rounded-xl mb-5 h-[320px] object-cover">

        <h2 class="text-3xl font-bold mb-3">${nama}</h2>

        <p class="text-gray-500 mb-3">${desc}</p>

        <p class="text-sm mb-2">
            👥 ${capacity} • 📐 ${size} • ⭐ ${rating}
        </p>

        <p class="text-sm mb-5">
            🛏️ Sisa kamar: <b>${available} / 3</b>
        </p>

        <h3 class="text-pink-500 text-2xl font-bold mb-5">
            Rp ${parseInt(price).toLocaleString()}
        </h3>

        <button class="w-full bg-pink-500 text-white py-3 rounded-xl">
            Pesan Sekarang
        </button>
    `;
}

function closeModal() {
    document.getElementById("roomModal").classList.add("hidden");
}

window.onclick = function(e) {
    if (e.target === document.getElementById("roomModal")) {
        closeModal();
    }
}

</script>

@endsection