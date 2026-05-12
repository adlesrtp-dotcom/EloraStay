<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Registrasi - EloraStay</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: #f5e6ee;
}

/* NAVBAR */
.navbar {
    background: linear-gradient(to right, #f472b6, #ec4899);
    padding: 15px 40px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: white;
}


/* MAIN */
.main {
    display: flex;
    height: calc(100vh - 70px);
}

/* LEFT */
.left {
    flex: 1;
    background: url('https://images.unsplash.com/photo-1566073771259-6a8506099945') center/cover no-repeat;
    position: relative;
}

.left::before {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background: rgba(236,72,153,0.4);
}

.left-content {
    position: absolute;
    color: white;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
}

/* RIGHT */
.right {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
}

.card {
    background: #f9f9f9;
    padding: 10px;
    width: 400px;
    border-radius: 15px;
    text-align: center;
}

.card-header {
    background: #ec4899;
    color: white;
    padding: 15px;
    border-radius: 10px;
    margin-bottom: 20px;
}

input {
    width: 90%;
    padding: 10px;
    margin: 10px 0;
    border-radius: 20px;
    border: 1px solid #ccc;
}

.btn {
    width: 100%;
    background: #ec4899;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
}

.divider {
    margin: 15px 0;
    font-size: 12px;
}

.btn-google {
    width: 100%;
    padding: 10px;
    border-radius: 20px;
    border: 1px solid #ccc;
    background: white;
    display: flex;
    align-items: center;
    justify-content: center;
}

.btn-google img {
    width: 18px;
    margin-right: 8px;
}

.register {
    font-size: 12px;
    margin-top: 10px;
}

.register a {
    color: #ec4899;
    text-decoration: none;
}

/* FOOTER */
.footer {
    background: linear-gradient(to right, #f472b6, #ec4899);
    color: white;
    margin-top: 40px;
}

.footer-container {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    padding: 30px 20px;
}

.footer-section a {
    display: block;
    color: white;
    text-decoration: none;
    margin-bottom: 8px;
}
</style>
</head>

<body>

<!-- NAVBAR -->
<div class="navbar">
    <div><b>EloraStay</b></div>
</div>

<!-- MAIN -->
<div class="main">

    <!-- LEFT -->
    <div class="left">
        <div class="left-content">
            <h1>Temukan Hotel Impian Anda</h1>
            <p>Booking mudah, cepat, dan terpercaya hanya di EloraStay</p>
        </div>
    </div>

    <!-- RIGHT -->
    <div class="right">
        <div class="card">
            <div class="card-header">
                <h3>Daftar Akun</h3>
                <small>Buat akun baru untuk mulai booking</small>
            </div>

            <form method="POST" action="{{ route('register.process') }}">
            
                <input type="text" name="nama" placeholder="Nama Lengkap" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" required>

                <button type="submit" class="btn">Daftar</button>

                <div class="divider">atau</div>

                <button type="button" class="btn-google">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/0/09/IOS_Google_icon.png">
                    Daftar dengan Google
                </button>

                <div class="register">
                    Sudah punya akun? <a href="/login">Login</a>
                </div>
            </form>
        </div>
    </div>

</div>

<!-- FOOTER -->
<footer class="footer">
    <div class="footer-container">
        <div class="footer-section">
            <h3>EloraStay</h3>
            <p>Platform booking hotel terpercaya.</p>
        </div>

        <div class="footer-section">
            <a href="/">Beranda</a>
            <a href="/kamar">Daftar Kamar</a>
        </div>

        <div class="footer-section">
            <p>Email: email@elorastay.com</p>
        </div>
    </div>
</footer>

</body>
</html>