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

<!-- Container -->
<section class="max-w-4xl mx-auto px-5 py-10">

    <!-- Data Pemesanan -->
    <div class="bg-white rounded-2xl p-6 shadow-md mb-6">

        <h3 class="text-2xl font-bold mb-5">
            Data Pemesanan
        </h3>

        <p id="infoKamar"
           class="mb-5 text-pink-500 font-semibold">
        </p>

        <!-- Nama -->
        <div class="mb-4">

            <label class="block mb-2 font-medium">
                Nama
            </label>

            <input
                type="text"
                id="nama"
                class="w-full bg-pink-100 rounded-xl px-4 py-3 outline-none focus:ring-2 focus:ring-pink-400">

        </div>

        <!-- Checkin -->
        <div class="mb-4">

            <label class="block mb-2 font-medium">
                Check-in
            </label>

            <input
                type="date"
                id="checkin"
                class="w-full bg-pink-100 rounded-xl px-4 py-3 outline-none focus:ring-2 focus:ring-pink-400">

        </div>

        <!-- Checkout -->
        <div class="mb-4">

            <label class="block mb-2 font-medium">
                Check-out
            </label>

            <input
                type="date"
                id="checkout"
                class="w-full bg-pink-100 rounded-xl px-4 py-3 outline-none focus:ring-2 focus:ring-pink-400">

        </div>

        <!-- Total -->
        <div
            id="totalHarga"
            class="text-pink-500 font-bold text-lg mt-5">

            Total: Rp 0
        </div>

    </div>

   <!-- Metode Pembayaran -->
<div class="bg-white rounded-2xl p-6 shadow-md mb-6">

    <h3 class="text-2xl font-bold mb-5">
        Metode Pembayaran
    </h3>

    <div class="space-y-4">

        <!-- TRANSFER -->
        <button
            onclick="pilihMetode('transfer')"
            class="w-full bg-pink-500 hover:bg-pink-600 text-white py-3 rounded-xl font-semibold transition">

            Transfer Bank
        </button>

        <!-- COD -->
        <button
            onclick="pilihMetode('cod')"
            class="w-full bg-pink-500 hover:bg-pink-600 text-white py-3 rounded-xl font-semibold transition">

            Bayar di Tempat
        </button>

    </div>

    <!-- TRANSFER -->
    <div id="transfer"
         class="hidden text-center mt-6">

        <p class="mb-4 font-medium">
            Transfer ke rekening berikut:
        </p>

        <div class="bg-pink-100 rounded-xl p-5 text-left mb-5">

            <p class="font-bold text-lg mb-2">
                Bank BCA
            </p>

            <p class="mb-2">
                1234567890
            </p>

            <p>
                A/N EloraStay Hotel
            </p>

        </div>

        <!-- FORM -->
        <form action="/booking" method="POST">

            @csrf

            <input type="hidden"
                   name="nama_kamar"
                   id="formKamar">

            <input type="hidden"
                   name="total"
                   id="formTotal">

            <input type="hidden"
                   name="metode"
                   value="Transfer Bank">

            <button
                type="submit"
                onclick="bayar('Transfer Bank','Menunggu Verifikasi')"
                class="w-full bg-pink-500 hover:bg-pink-600 text-white py-3 rounded-xl font-semibold transition">

                Saya Sudah Transfer
            </button>

        </form>

    </div>

    <!-- COD -->
    <div id="cod"
         class="hidden mt-6">

        <p class="mb-4 text-center font-medium">
            Bayar langsung di hotel
        </p>

        <!-- FORM -->
        <form action="/booking" method="POST">

            @csrf

            <input type="hidden"
                   name="nama_kamar"
                   id="formKamar2">

            <input type="hidden"
                   name="total"
                   id="formTotal2">

            <input type="hidden"
                   name="metode"
                   value="COD">

            <button
                type="submit"
                onclick="bayar('COD','Menunggu')"
                class="w-full bg-pink-500 hover:bg-pink-600 text-white py-3 rounded-xl font-semibold transition">

                Konfirmasi Booking
            </button>

        </form>

    </div>

</div>
    <!-- Hasil -->
    <div
        id="hasil"
        class="hidden bg-white rounded-2xl p-6 shadow-md">

        <h3 class="text-2xl font-bold mb-5">
            Detail Pembayaran
        </h3>

        <div class="space-y-3 text-gray-700">

            <p>Nama: <b id="outNama"></b></p>
            <p>Kamar: <b id="outKamar"></b></p>
            <p>Tanggal: <b id="outTanggal"></b></p>
            <p>Metode: <b id="outMetode"></b></p>
            <p>Status: <b id="outStatus"></b></p>
            <p>Total: <b id="outTotal"></b></p>

        </div>

    </div>

</section>

<script>

// AMBIL DATA DARI LOCAL STORAGE
const data = JSON.parse(localStorage.getItem("booking"));

if (!data) {

    alert("Silakan pilih kamar terlebih dahulu!");

    window.location.href = "/kamar";
}

// TAMPILKAN INFO KAMAR
document.getElementById("infoKamar").innerText =
    data.nama_tipe + " | Rp " +
    parseInt(data.harga).toLocaleString('id-ID');

let total = 0;

// HITUNG TOTAL HARGA
function hitung() {

    let c1 = new Date(checkin.value);
    let c2 = new Date(checkout.value);

    if (c2 > c1) {

        let malam =
            (c2 - c1) / (1000 * 60 * 60 * 24);

        total = malam * data.harga;

        totalHarga.innerText =
            "Total: Rp " +
            total.toLocaleString('id-ID');
    }
}

checkin.onchange = hitung;
checkout.onchange = hitung;

// PILIH METODE
function pilihMetode(m) {

    transfer.classList.add("hidden");
    cod.classList.add("hidden");

    if (m == "transfer") {

        transfer.classList.remove("hidden");

    } else {

        cod.classList.remove("hidden");
    }
}

// BAYAR
function bayar(metode, status) {

    if (
        !nama.value ||
        !checkin.value ||
        !checkout.value ||
        total <= 0
    ) {

        alert("Lengkapi data terlebih dahulu!");
        return;
    }

    // OUTPUT
    outNama.innerText = nama.value;

    outKamar.innerText =
        data.nama_tipe;

    outTanggal.innerText =
        checkin.value + " - " + checkout.value;

    outMetode.innerText = metode;

    outStatus.innerText = status;

    outTotal.innerText =
        "Rp " + total.toLocaleString('id-ID');

    hasil.classList.remove("hidden");

    // SIMPAN RESERVASI
    simpanReservasi(status, metode);
}

// SIMPAN RESERVASI
function simpanReservasi(status, metode) {

    let newData = {

        resi:
            "ELS-" +
            Math.floor(Math.random() * 1000000),

        room: data.nama_tipe,

        total: total,

        checkin: checkin.value,

        checkout: checkout.value,

        guest: "2 Orang",

        method: metode,

        status: status
    };

    let reservations =
        JSON.parse(localStorage.getItem("reservations")) || [];

    reservations.push(newData);

    localStorage.setItem(
        "reservations",
        JSON.stringify(reservations)
    );
}

// LOGIN CHECK
const isLogin = localStorage.getItem("isLogin");

if (isLogin !== "true") {

    alert("Silakan login terlebih dahulu!");

    window.location.href = "/dashboard";
}

// LOGOUT
function logout() {

    localStorage.removeItem("isLogin");

    alert("Logout berhasil");

    window.location.href = "/dashboard";
}

</script>

@endsection