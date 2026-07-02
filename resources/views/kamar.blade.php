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
<section class="px-6 py-10">

    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8 justify-items-center">

        @foreach($tipeKamars as $tipe)

        <div
            class="w-full max-w-[380px] bg-white rounded-2xl overflow-hidden shadow-md hover:-translate-y-2 hover:shadow-xl transition relative">

            <!-- Gambar -->
            <img src="{{ asset('img/kamar/' . $tipe->gambar) }}"
                 class="w-full h-[240px] object-cover">

            <!-- Content -->
            <div class="p-5 pb-20">

                <h4 class="text-xl font-bold mb-2">
                    {{ $tipe->nama_tipe }}
                </h4>

                <p class="text-gray-500 text-sm leading-6">
                    {{ $tipe->deskripsi }}
                </p>

                <p class="text-pink-500 font-bold mt-3">
                    Rp {{ number_format($tipe->harga, 0, ',', '.') }}
                </p>

                <p class="text-sm text-gray-400 mt-2">
                    🛏️ Sisa kamar:
                    <span class="font-semibold text-green-500">
                        {{ $tipe->kamars->where('status','tersedia')->count() }}/3
                    </span>
                </p>

               <button

                    onclick='openModal(

                        @json($tipe->id),
                        @json($tipe->nama_tipe),
                        @json($tipe->deskripsi),
                        @json(asset("img/kamar/".$tipe->gambar)),
                        @json($tipe->kapasitas),
                        @json($tipe->ukuran),
                        @json($tipe->rating),
                        @json($tipe->harga),
                        @json($tipe->kamars->where("status","tersedia")->count()),
            @json($tipe->fasilitas)
                    )'

                    class="bg-pink-500 hover:bg-pink-600 text-white px-4 py-2 rounded-lg transition">

                    Lihat Detail

                </button>

            </div>

        </div>

        @endforeach

    </div>

</section>

    </div>
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

function openModal(tipeId, nama, desc, img, capacity, size, rating, price, available, fasilitas) {

    document.getElementById("roomModal").classList.remove("hidden");

    document.getElementById("modalContent").innerHTML = `

        <img src="${img}"
             class="w-full rounded-xl mb-5 h-[320px] object-cover">

        <h2 class="text-3xl font-bold mb-3">
            ${nama}
        </h2>

        <p class="text-gray-500 leading-7 mb-4">
            ${desc}
        </p>

        <p class="mb-3 text-sm text-gray-600">
            👥 ${capacity}
            • 📐 ${size}
            • ⭐ ${rating}
        </p>

        <p class="mb-5 text-sm text-gray-500">
            🛏️ Sisa kamar: <b>${available} / 3</b>
        </p>

        <!-- fasilitas -->
        <ul class="space-y-2 text-sm text-gray-600 mb-6">
            ${fasilitas.map(f => `
                <li>✔ ${f.nama_fasilitas}</li>
            `).join('')}
        </ul>

        <h3 class="text-pink-500 text-2xl font-bold mb-5">
            Rp ${parseInt(price).toLocaleString('id-ID')}
        </h3>

        <button
            id="bookingBtn"
            class="w-full bg-pink-500 hover:bg-pink-600 text-white py-3 rounded-xl font-semibold transition">

            Pesan Sekarang
        </button>

    `;

    // BUTTON EVENT
    document.getElementById("bookingBtn").onclick = function () {

        const bookingData = {

            tipe_kamar_id: tipeId,
            nama_tipe: nama,
            harga: price

        };

        localStorage.setItem(
            "booking",
            JSON.stringify(bookingData)
        );

        window.location.href = "/pembayaran";
    };
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