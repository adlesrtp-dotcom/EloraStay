<!-- resources/views/kamar.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>EloraStay - Kamar</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family:Arial, sans-serif;
    background:#f7edf3;
}

/* Navbar */
.navbar{
    width:100%;
    background:#ee9cc8;
    padding:18px 50px;
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.logo{
    color:white;
    font-size:28px;
    font-weight:bold;
}

.menu a{
    color:white;
    text-decoration:none;
    margin-left:25px;
    font-size:17px;
    font-weight:bold;
    transition:0.3s;
}

.menu a:hover{
    color:#ffe6f2;
}

/* Container */
.container{
    width:95%;
    max-width:1600px;
    margin:auto;
    padding:35px 0;
}

/* Top */
.topbar{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:25px;
}

.topbar h1{
    font-size:38px;
}

.topbar p{
    font-size:20px;
    color:#444;
    margin-top:8px;
}

.search input{
    padding:12px 18px;
    width:300px;
    border:1px solid #ccc;
    border-radius:8px;
    font-size:16px;
}

/* Button */
.btn{
    display:inline-block;
    margin-bottom:25px;
    background:#ee9cc8;
    color:white;
    padding:14px 28px;
    border-radius:10px;
    text-decoration:none;
    font-weight:bold;
    font-size:18px;
}

/* Table */
.table-box{
    background:white;
    border-radius:18px;
    padding:25px;
    box-shadow:0 5px 15px rgba(0,0,0,0.08);
}

table{
    width:100%;
    border-collapse:collapse;
}

th{
    text-align:left;
    padding:16px;
    font-size:18px;
    border-bottom:2px solid #ddd;
}

td{
    padding:16px;
    font-size:17px;
    border-bottom:1px solid #eee;
}

.status-tersedia{
    color:green;
    font-weight:bold;
}

.status-penuh{
    color:red;
    font-weight:bold;
}

/* Footer */
.footer{
    background:#ee9cc8;
    color:white;
    margin-top:50px;
    padding:40px 50px;
}

.footer-box{
    display:flex;
    justify-content:space-between;
    gap:30px;
}

.footer h3{
    margin-bottom:12px;
}

.footer p{
    line-height:1.8;
    font-size:16px;
}

.footer a{
    color:white;
    text-decoration:none;
}

.copy{
    text-align:center;
    margin-top:25px;
    padding-top:15px;
    border-top:1px solid rgba(255,255,255,0.4);
}
</style>
</head>
<body>

<!-- Navbar -->
<div class="navbar">

    <div class="logo">EloraStay</div>

    <div class="menu">
        <div class="menu">
    <a href="/dashboardadmin">Dashboard</a>
    <a href="/pelangganadmin">Pelanggan</a>
    <a href="/reservasiadmin">Reservasi</a>
    <a href="/kamaradmin">Kamar</a>
    <a href="/pembayaranadmin">Pembayaran</a>
</div>
    </div>

</div>

<!-- Content -->
<div class="container">

    <div class="topbar">

        <div>
            <h1>Kamar</h1>
            <p>Kelola data kamar hotel</p>
        </div>

        <div class="search">
            <input type="text" placeholder="Cari kamar...">
        </div>

    </div>

    <a href="#" class="btn">
        + Tambah Kamar
    </a>

    <div class="table-box">

        <table>

            <tr>
                <th>ID</th>
                <th>Nama Kamar</th>
                <th>Tipe</th>
                <th>Harga</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>

            <tr>
                <td>KM-001</td>
                <td>Suite Premium</td>
                <td>VIP</td>
                <td>Rp 3.500.000</td>
                <td class="status-tersedia">Tersedia</td>
                <td>Edit | Hapus</td>
            </tr>

            <tr>
                <td>KM-002</td>
                <td>Deluxe Room</td>
                <td>Deluxe</td>
                <td>Rp 2.500.000</td>
                <td class="status-penuh">Penuh</td>
                <td>Edit | Hapus</td>
            </tr>

            <tr>
                <td>KM-003</td>
                <td>Standard Room</td>
                <td>Standard</td>
                <td>Rp 1.500.000</td>
                <td class="status-tersedia">Tersedia</td>
                <td>Edit | Hapus</td>
            </tr>

            <tr>
                <td>KM-004</td>
                <td>Family Room</td>
                <td>Family</td>
                <td>Rp 2.800.000</td>
                <td class="status-tersedia">Tersedia</td>
                <td>Edit | Hapus</td>
            </tr>

        </table>

    </div>

</div>

<!-- Footer -->
<div class="footer">

    <div class="footer-box">

        <div>
            <h3>EloraStay</h3>

            <p>
                Platform booking hotel terpercaya
                <br>
                untuk pengalaman menginap terbaik.
            </p>
        </div>

        <div>
            <h3>Link</h3>

            <p>
                <a href="{{ url('/dashboard') }}">Dashboard</a><br>

                <a href="{{ url('/pelangganadmin') }}">Pelanggan</a><br>

                <a href="{{ url('/reservasiadmin') }}">Reservasi</a><br>

                <a href="{{ url('/kamaradmin') }}">Kamar</a><br>

                <a href="{{ url('/pembayaranadmin') }}">Pembayaran</a>
            </p>
        </div>

        <div>
            <h3>Hubungi Kami</h3>

            <p>
                Email: info@elorastay.com<br>
                Telepon: +62 123 456 7890
            </p>
        </div>

    </div>

    <div class="copy">
        © 2026 EloraStay. All rights reserved.
    </div>

</div>

</body>
</html>