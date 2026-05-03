<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Reservasi Admin - EloraStay</title>

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
    font-size:28px;
    font-weight:bold;
}

.menu a{
    color:white;
    text-decoration:none;
    margin-left:25px;
    font-size:16px;
    font-weight:bold;
}

/* Container */
.container{
    padding:40px 60px;
}

/* Top */
.topbar{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:20px;
}

.search{
    padding:10px;
    border:1px solid #ccc;
    border-radius:6px;
}

/* Title */
.section-title{
    margin:20px 0;
}

.section-title h2{
    font-size:28px;
}

.section-title p{
    font-size:18px;
}

/* Button */
.btn-area{
    text-align:right;
    margin:20px 0;
}

.btn{
    background:#f3a7cf;
    color:white;
    padding:12px 25px;
    border-radius:20px;
    text-decoration:none;
    font-weight:bold;
}

/* Table */
.table-wrapper{
    background:#efefef;
    border-radius:50px;
    padding:35px;
    margin-top:30px;
}

.table-reservasi{
    width:100%;
    border-collapse:collapse;
}

.table-reservasi th{
    text-align:left;
    font-size:20px;
    padding:12px;
    border-bottom:3px solid #777;
}

.table-reservasi td{
    padding:12px;
    border-bottom:2px solid #aaa;
    font-size:16px;
}

/* Status */
.status-menunggu{
    color:#d9534f;
    font-weight:bold;
}

.status-checkin{
    color:#5cb85c;
    font-weight:bold;
}

/* Footer */
.footer{
    background:#ea97c4;
    color:white;
    padding:35px 60px;
    margin-top:50px;
    display:grid;
    grid-template-columns:repeat(3,1fr);
}

.footer h3{
    margin-bottom:10px;
}

.copy{
    background:#e282b7;
    text-align:center;
    padding:12px;
    color:white;
}
</style>
</head>
<body>

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

    <!-- Topbar -->
    <div class="topbar">
        <h4>Reservasi</h4>
        <input type="text" class="search" placeholder="Cari....">
    </div>

    <!-- Title -->
    <div class="section-title">
        <h2>Daftar Reservasi</h2>
        <p>Kelola reservasi kamar hotel</p>
    </div>

    <!-- Button -->
    <div class="btn-area">
        <a href="#" class="btn">+ Tambah Reservasi</a>
    </div>

    <!-- Table -->
    <div class="table-wrapper">
        <table class="table-reservasi">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Kamar</th>
                    <th>Check-in</th>
                    <th>Harga</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse($reservasi as $row)
                <tr>
                    <td>{{ $row->id }}</td>

                    <td>{{ $row->pelanggan->nama ?? '-' }}</td>

                    <td>{{ $row->kamar->nama_kamar ?? '-' }}</td>

                    <td>{{ $row->checkin }}</td>

                    <td>
                        Rp {{ number_format($row->harga ?? 0,0,',','.') }}
                    </td>

                    <td>
                        @if($row->status == 'Menunggu')
                            <span class="status-menunggu">Menunggu</span>
                        @else
                            <span class="status-checkin">Check-in</span>
                        @endif
                    </td>

                    <td>
                        <a href="{{ route('reservasi.edit', $row->id) }}">Edit</a> |

                        <form action="{{ route('reservasi.destroy', $row->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="border:none;background:none;color:red;cursor:pointer;">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>

                @empty
                <tr>
                    <td colspan="7" style="text-align:center;">
                        Tidak ada data reservasi
                    </td>
                </tr>
                @endforelse
            </tbody>

        </table>
    </div>

</div>

<!-- Footer -->
<div class="footer">
    <div>
        <h3>EloraStay</h3>
        <p>Platform booking hotel terpercaya untuk pengalaman terbaik Anda.</p>
    </div>

    <div>
        <h3>Link</h3>
        <p>Beranda<br>Daftar Kamar<br>Reservasi Saya</p>
    </div>

    <div>
        <h3>Hubungi Kami</h3>
        <p>Email: info@elorastay.com<br>Telepon: +62 123 456 7890</p>
    </div>
</div>

<div class="copy">
    © 2026 EloraStay. All rights reserved.
</div>

</body>
</html>