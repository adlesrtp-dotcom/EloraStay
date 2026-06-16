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
                name="nama"
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
            onclick="pilihMetode('transfer')"
            type="button"
            class="w-full bg-pink-500 hover:bg-pink-600 text-white py-3 rounded-xl font-semibold transition">

            Transfer Bank

        </button>

        <button
            onclick="pilihMetode('cod')"
            type="button"
            class="w-full bg-pink-500 hover:bg-pink-600 text-white py-3 rounded-xl font-semibold transition">

            Bayar di Tempat

        </button>

    </div>

    <form action="{{ route('reservasi.store') }}" method="POST" class="mt-6">

        @csrf

        <input type="hidden" name="tipe_kamar_id" id="tipeKamarId">
        <input type="hidden" name="harga" id="hargaKamar">
        <input type="hidden" name="checkin" id="checkinHidden">
        <input type="hidden" name="checkout" id="checkoutHidden">
        <input type="hidden" name="metode" id="metodePembayaran">

        <!-- TRANSFER -->
        <div id="transfer" class="hidden">

            <p class="mb-4 text-center font-medium">
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

            <button
                type="submit"
                onclick="return bayar('Transfer Bank','Menunggu Verifikasi')"
                class="w-full bg-pink-500 hover:bg-pink-600 text-white py-3 rounded-xl font-semibold transition">

                Saya Sudah Transfer

            </button>

        </div>

        <!-- COD -->
        <div id="cod" class="hidden">

            <p class="mb-4 text-center font-medium">
                Bayar langsung di hotel
            </p>

            <button
                type="submit"
                onclick="return bayar('COD','Menunggu')"
                class="w-full bg-pink-500 hover:bg-pink-600 text-white py-3 rounded-xl font-semibold transition">

                Konfirmasi Booking

            </button>

        </div>

    </form>

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

// ===============================
// AMBIL DATA KAMAR DARI LOCALSTORAGE
// ===============================

const data = JSON.parse(localStorage.getItem("booking"));

if (!data) {
        alert("Silakan pilih kamar terlebih dahulu!");
         window.location.href = "/kamar";
}

document.getElementById("tipeKamarId").value =
    data.tipe_kamar_id;

document.getElementById("hargaKamar").value =
    data.harga;

const tipeKamarId = document.getElementById("tipeKamarId");
const hargaKamar = document.getElementById("hargaKamar");

if (tipeKamarId) tipeKamarId.value = data.tipe_kamar_id;
if (hargaKamar) hargaKamar.value = data.harga;

// ===============================
// TAMPILKAN INFO KAMAR
// ===============================

document.getElementById("infoKamar").innerText =
    data.nama_tipe +
    " | Rp " +
    parseInt(data.harga).toLocaleString('id-ID');


// ===============================
// HITUNG TOTAL HARGA
// ===============================

let total = 0;

const nama = document.getElementById("nama");
const checkin = document.getElementById("checkin");
const checkout = document.getElementById("checkout");
const totalHarga = document.getElementById("totalHarga");

function hitung() {

    if (!checkin.value || !checkout.value) return;

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
    else {

        total = 0;

        totalHarga.innerText =
            "Total: Rp 0";
    }
}

checkin.addEventListener("change", hitung);
checkout.addEventListener("change", hitung);


// ===============================
// PILIH METODE PEMBAYARAN
// ===============================

function pilihMetode(metode) {

    document
        .getElementById("transfer")
        .classList.add("hidden");

    document
        .getElementById("cod")
        .classList.add("hidden");

    if (metode === "transfer") {

        document
            .getElementById("transfer")
            .classList.remove("hidden");

    } else {

        document
            .getElementById("cod")
            .classList.remove("hidden");
    }
}

// ===============================
// VALIDASI SEBELUM SUBMIT
// ===============================
function bayar(metode, status)
{
    if (
        !nama.value ||
        !checkin.value ||
        !checkout.value ||
        total <= 0
    ) {

        alert("Lengkapi data terlebih dahulu!");
        return false;
    }

    document.getElementById("checkinHidden").value =
        checkin.value;

    document.getElementById("checkoutHidden").value =
        checkout.value;

    document.getElementById("metodePembayaran").value =
        metode;

    return true;
}



    </script>