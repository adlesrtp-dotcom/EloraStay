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

            <button
                onclick="pilihMetode('qris')"
                class="w-full bg-pink-500 hover:bg-pink-600 text-white py-3 rounded-xl font-semibold transition">

                QRIS
            </button>

            <button
                onclick="pilihMetode('cod')"
                class="w-full bg-pink-500 hover:bg-pink-600 text-white py-3 rounded-xl font-semibold transition">

                Bayar di Tempat
            </button>

        </div>

        <!-- QRIS -->
        <div id="qris"
             class="hidden text-center mt-6">

            <p class="mb-4 font-medium">
                Scan QR
            </p>

            <img
                src="/img/qris.jpg"
                class="w-[220px] mx-auto rounded-xl shadow-md">

            <button
                onclick="bayar('QRIS','Lunas')"
                class="w-full bg-pink-500 hover:bg-pink-600 text-white py-3 rounded-xl font-semibold transition mt-5">

                Saya Sudah Bayar
            </button>

        </div>

        <!-- COD -->
        <div id="cod"
             class="hidden mt-6">

            <p class="mb-4 text-center font-medium">
                Bayar di hotel
            </p>

            <button
                onclick="bayar('COD','Menunggu')"
                class="w-full bg-pink-500 hover:bg-pink-600 text-white py-3 rounded-xl font-semibold transition">

                Konfirmasi
            </button>

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

// Ambil data kamar
const data = JSON.parse(localStorage.getItem("bookingData"));

document.getElementById("infoKamar").innerText =
    data.name + " | Rp " + data.price.toLocaleString();

let total = 0;

// Hitung total
function hitung() {

    let c1 = new Date(checkin.value);
    let c2 = new Date(checkout.value);

    if (c2 > c1) {

        let malam = (c2 - c1) / (1000 * 60 * 60 * 24);

        total = malam * data.price;

        totalHarga.innerText =
            "Total: Rp " + total.toLocaleString();
    }
}

checkin.onchange = hitung;
checkout.onchange = hitung;

// Metode pembayaran
function pilihMetode(m) {

    qris.classList.add("hidden");
    cod.classList.add("hidden");

    if (m == "qris") {
        qris.classList.remove("hidden");
    } else {
        cod.classList.remove("hidden");
    }
}

// Bayar
function bayar(metode, status) {

    if (!nama.value || total <= 0) {

        alert("Lengkapi data!");
        return;
    }

    outNama.innerText = nama.value;
    outKamar.innerText = data.name;
    outTanggal.innerText = checkin.value + " - " + checkout.value;
    outMetode.innerText = metode;
    outStatus.innerText = status;
    outTotal.innerText = "Rp " + total.toLocaleString();

    hasil.classList.remove("hidden");
}

// Simpan reservasi
function simpanReservasi(status, metode) {

    let booking = JSON.parse(localStorage.getItem("bookingData"));

    let newData = {

        resi: "ELS-" + Math.floor(Math.random() * 1000000),

        room: booking.name,

        total: booking.price,

        checkin: "20 Apr 2026",

        checkout: "23 Apr 2026",

        guest: "2 orang",

        method: metode,

        status: status
    };

    let data =
        JSON.parse(localStorage.getItem("reservations")) || [];

    data.push(newData);

    localStorage.setItem("reservations", JSON.stringify(data));
}

simpanReservasi("Lunas","QRIS");
simpanReservasi("Menunggu","COD");

// Login check
const isLogin = localStorage.getItem("isLogin");

if (isLogin !== "true") {

    alert("Silakan login terlebih dahulu!");

    window.location.href = "/dashboard";
}

// Logout
function logout() {

    localStorage.removeItem("isLogin");

    alert("Logout berhasil");

    window.location.href = "/dashboard";
}

</script>

@endsection