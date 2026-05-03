<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pelanggan - EloraStay</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family:Arial, sans-serif;
    background:#f8eef4;
}

/* Navbar */
.navbar{
    background:#ea97c4;
    padding:18px 50px;
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.logo{
    color:white;
    font-size:32px;
    font-weight:bold;
}

.menu a{
    color:white;
    text-decoration:none;
    margin-left:30px;
    font-size:18px;
    font-weight:bold;
}

/* Content */
.container{
    width:100%;
    padding:40px 60px;
    min-height:700px;
}

.topbar{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:25px;
}

.title h2{
    font-size:38px;
    margin-bottom:8px;
}

.title p{
    font-size:22px;
}

.search{
    width:320px;
    padding:14px;
    border:1px solid #ccc;
    border-radius:8px;
    font-size:17px;
}

/* Button */
.btn-area{
    text-align:right;
    margin:30px 0;
}

.btn{
    background:#f3a7cf;
    color:white;
    text-decoration:none;
    padding:14px 28px;
    border-radius:30px;
    font-size:18px;
    font-weight:bold;
}

/* Table */
.table-box{
    background:#f3f3f3;
    border-radius:30px;
    padding:35px;
}

table{
    width:100%;
    border-collapse:collapse;
}

th,td{
    padding:18px 12px;
    border-bottom:1px solid #999;
    text-align:left;
    font-size:18px;
}

th{
    font-size:22px;
    font-weight:bold;
}

/* Footer */
.footer{
    background:#ea97c4;
    color:white;
    padding:35px 60px;
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:30px;
}

.footer h3{
    margin-bottom:15px;
    font-size:26px;
}

.footer p{
    line-height:30px;
    font-size:18px;
}

.copy{
    background:#e282b7;
    color:white;
    text-align:center;
    padding:15px;
    font-size:18px;
}
</style>
</head>
<body>

<!-- Navbar -->
<div class="navbar">

    <div class="logo">EloraStay</div>

    <div class="menu">
        <a href="{{ route('dashboard') }}">Dashboard</a>
        <a href="{{ route('pelanggan') }}">Pelanggan</a>
        <a href="{{ route('reservasi') }}">Reservasi</a>
        <a href="{{ route('kamar') }}">Kamar</a>
        <a href="{{ route('pembayaran') }}">Pembayaran</a>
    </div>

</div>

<!-- Content -->
<div class="container">

    <div class="topbar">

        <div class="title">
            <h2>Daftar Pelanggan</h2>
            <p>Kelola data pelanggan hotel</p>
        </div>

        <input type="text" class="search" placeholder="Cari....">

    </div>

    <div class="btn-area">
        <a href="#" class="btn">+ Tambah Pelanggan</a>
    </div>

    <!-- Table -->
    <div class="table-box">

        <table>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>

            <tr>
                <td>PL-001</td>
                <td>John Doe</td>
                <td>john@example.com</td>
                <td>+62 812 3456 7890</td>
                <td>Jakarta</td>
                <td>Edit | Hapus</td>
            </tr>

            <tr>
                <td>PL-002</td>
                <td>Jane Smith</td>
                <td>jane@example.com</td>
                <td>+62 812 1111 2222</td>
                <td>Bandung</td>
                <td>Edit | Hapus</td>
            </tr>

            <tr>
                <td>PL-003</td>
                <td>Ahmad Rahman</td>
                <td>ahmad@example.com</td>
                <td>+62 813 5555 4444</td>
                <td>Bali</td>
                <td>Edit | Hapus</td>
            </tr>

            <tr>
                <td>PL-004</td>
                <td>Sarah Johnson</td>
                <td>sarah@example.com</td>
                <td>+62 812 9876 5432</td>
                <td>Yogyakarta</td>
                <td>Edit | Hapus</td>
            </tr>

            <tr>
                <td>PL-005</td>
                <td>Michael Chen</td>
                <td>michael@example.com</td>
                <td>+62 812 3333 7777</td>
                <td>Jakarta</td>
                <td>Edit | Hapus</td>
            </tr>

        </table>

    </div>

</div>

<!-- Footer -->
<div class="footer">

    <div>
        <h3>EloraStay</h3>
        <p>Platform booking hotel terpercaya untuk pengalaman menginap terbaik Anda.</p>
    </div>

    <div>
        <h3>Link</h3>
        <p>
            Beranda<br>
            Daftar Kamar<br>
            Reservasi Saya
        </p>
    </div>

    <div>
        <h3>Hubungi Kami</h3>
        <p>
            Email: info@elorastay.com<br>
            Telepon: +62 123 456 7890<br>
            Instagram: @elorastay
        </p>
    </div>

</div>

<div class="copy">
    © 2026 EloraStay. All rights reserved.
</div>

</body>
</html>