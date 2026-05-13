<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard Admin - EloraStay</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family:Arial, sans-serif;
    background:#f7eef3;
}

.wrapper{
    width:100%;
    min-height:100vh;
}

/* Navbar */
.navbar{
    width:100%;
    background:#e89ac2;
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
    margin-left:35px;
    font-size:20px;
    font-weight:bold;
}

/* Content */
.container{
    width:100%;
    padding:40px 50px;
}

.topbar{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:35px;
}

.topbar h1{
    font-size:42px;
}

.search{
    width:350px;
    padding:14px 18px;
    border:1px solid #ccc;
    border-radius:8px;
    font-size:18px;
}

/* Cards */
.cards{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:30px;
    margin-bottom:40px;
}

.card{
    background:#f1dbe4;
    border-radius:20px;
    padding:35px;
    min-height:190px;
}

.card h3{
    font-size:28px;
    margin-bottom:25px;
}

.card p{
    color:#e91e63;
    font-size:38px;
    font-weight:bold;
}

/* Table */
.table-box{
    background:#f1dbe4;
    padding:30px;
    border-radius:20px;
}

.table-box h2{
    margin-bottom:25px;
    font-size:30px;
}

table{
    width:100%;
    border-collapse:collapse;
}

th,td{
    padding:18px;
    text-align:left;
    border-bottom:1px solid #aaa;
    font-size:18px;
}

th{
    font-size:20px;
}

/* Footer */
.footer{
    margin-top:50px;
    background:#e89ac2;
    color:white;
    padding:35px 50px;
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:30px;
}

.footer h3{
    margin-bottom:15px;
    font-size:26px;
}

.footer p{
    font-size:18px;
    line-height:30px;
}

.copy{
    background:#d67ca8;
    text-align:center;
    color:white;
    padding:18px;
    font-size:18px;
}
</style>
</head>
<body>

<div class="wrapper">

    <!-- Navbar -->
    <div class="navbar">
        <div class="logo">EloraStay</div>

        <div class="menu">
            <a href="{{ route('dashboard') }}">Dashboard</a>
            <a href="{{ route('pelangganadmin') }}">Pelanggan</a>
            <a href="{{ route('reservasiadmin') }}">Reservasi</a>
            <a href="{{ route('kamaradmin') }}">Kamar</a>
            <a href="{{ route('pembayaranadmin') }}">Pembayaran</a>
        </div>
    </div>

    <!-- Content -->
    <div class="container">

        <div class="topbar">
            <h1>Dashboard</h1>
            <input type="text" class="search" placeholder="Cari Data...">
        </div>

        <!-- Cards -->
        <div class="cards">

            <div class="card">
                <h3>Total Pelanggan</h3>
                <p>320</p>
            </div>

            <div class="card">
                <h3>Total Reservasi</h3>
                <p>150</p>
            </div>

            <div class="card">
                <h3>Total Kamar</h3>
                <p>60</p>
            </div>

            <div class="card">
                <h3>Pendapatan</h3>
                <p>Rp 9.800.000</p>
            </div>

        </div>

        <!-- Table -->
        <div class="table-box">
            <h2>Reservasi Terbaru</h2>

            <table>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Check In</th>
                    <th>Status</th>
                </tr>

                <tr>
                    <td>RS-001</td>
                    <td>John Doe</td>
                    <td>11 Apr 2026</td>
                    <td style="color:red;">Menunggu</td>
                </tr>

                <tr>
                    <td>RS-002</td>
                    <td>Jane Smith</td>
                    <td>12 Apr 2026</td>
                    <td style="color:green;">Check In</td>
                </tr>

                <tr>
                    <td>RS-003</td>
                    <td>Michael Chen</td>
                    <td>13 Apr 2026</td>
                    <td style="color:red;">Menunggu</td>
                </tr>

                <tr>
                    <td>RS-004</td>
                    <td>Siti Rahma</td>
                    <td>14 Apr 2026</td>
                    <td style="color:green;">Check In</td>
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
                Dashboard<br>
                Pelanggan<br>
                Reservasi<br>
                Kamar
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