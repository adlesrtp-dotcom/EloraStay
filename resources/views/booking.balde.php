<!DOCTYPE html>
<html>
<head>
    <title>Booking - EloraStay</title>
    <style>
        body {
            background: #fde4ec;
            font-family: sans-serif;
        }

        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
        }

        .card {
            background: white;
            padding: 20px;
            border-radius: 15px;
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 8px;
            border: none;
            background: #fbcfe8;
        }

        button {
            background: #ec4899;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }

        .method button {
            width: 100%;
            margin-bottom: 10px;
            background: #fbcfe8;
            color: black;
        }

        .payment-card {
            background: white;
            padding: 20px;
            border-radius: 15px;
            position: relative;
        }

        .item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .status {
            position: absolute;
            bottom: 10px;
            right: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">

    <!-- DETAIL KAMAR -->
    <div class="card">
        <h3>Detail Kamar</h3>
        <p>Deluxe Room</p>
        <p>Rp 500.000 / malam</p>
    </div>

    <!-- FORM -->
    <div class="card">
        <h3>Data Pemesan</h3>

        <label>Nama</label>
        <input type="text" id="namaInput">

        <label>No HP</label>
        <input type="text" id="hpInput">

        <label>Tanggal</label>
        <input type="text" id="tanggalInput" placeholder="20 Apr - 23 Apr">
    </div>

    <!-- METODE -->
    <div class="card">
        <h3>Metode Pembayaran</h3>

        <div class="method">
            <button onclick="pilihMetode('qris')">QRIS</button>
            <button onclick="pilihMetode('cod')">Bayar di Tempat</button>
        </div>

        <div id="qrisForm" style="display:none; text-align:center;">
            <img src="{{ asset('img/qris.png') }}" width="150">
            <button onclick="bayarQRIS()">Saya Sudah Bayar</button>
        </div>

        <div id="codForm" style="display:none;">
            <button onclick="bayarCOD()">Konfirmasi</button>
        </div>
    </div>

    <!-- HASIL -->
    <div id="hasilPembayaran" class="payment-card" style="display:none;">
        <h3>Detail Pembayaran</h3>

        <div class="item">
            <span>Nama</span>
            <span id="nama"></span>
        </div>

        <div class="item">
            <span>No Resi</span>
            <span id="resi"></span>
        </div>

        <div class="item">
            <span>Kamar</span>
            <span id="kamar"></span>
        </div>

        <div class="item">
            <span>Tanggal</span>
            <span id="tanggal"></span>
        </div>

        <div class="item">
            <span>Metode</span>
            <span id="metode"></span>
        </div>

        <div class="status" id="statusText"></div>
    </div>

</div>

<script>
function pilihMetode(m) {
    document.getElementById("qrisForm").style.display = "none";
    document.getElementById("codForm").style.display = "none";

    if (m === "qris") {
        document.getElementById("qrisForm").style.display = "block";
    } else {
        document.getElementById("codForm").style.display = "block";
    }
}

function isiData(status, metode) {
    let nama = document.getElementById("namaInput").value;
    let tanggal = document.getElementById("tanggalInput").value;
    let resi = "ELS-" + Math.floor(Math.random()*10000);

    document.getElementById("nama").innerText = nama;
    document.getElementById("resi").innerText = resi;
    document.getElementById("kamar").innerText = "Deluxe Room";
    document.getElementById("tanggal").innerText = tanggal;
    document.getElementById("metode").innerText = metode;
    document.getElementById("statusText").innerText = status;

    document.getElementById("hasilPembayaran").style.display = "block";
}

function bayarQRIS() {
    isiData("Lunas", "QRIS");
}

function bayarCOD() {
    isiData("Menunggu Pembayaran di Tempat", "Bayar di Tempat");
}
</script>

</body>
</html>