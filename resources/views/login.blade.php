<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login - EloraStay</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: #f5e6ee;
}
/* Navbar */
        .navbar {
            background: linear-gradient(to right, #f472b6, #ec4899);
            color: white;
            padding: 15px 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

/* Logo */
        .logo {
            font-size: 20px;
            font-weight: bold;
            position: center;
        }

/* LAYOUT */
.wrapper {
    display: flex;
    height: calc(100vh - 70px);
}

/* LEFT IMAGE */
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
    background: rgba(236,72,153,0.5);
}

/* TEXT ON IMAGE */
.left-text {
    position: absolute;
    bottom: 50px;
    left: 40px;
    color: white;
    max-width: 400px;
}

.left-text h1 {
    margin: 0;
    font-size: 28px;
}

.left-text p {
    margin-top: 10px;
}

/* RIGHT FORM */
.right {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* CARD */
.card {
    background: white;
    padding: 40px;
    width: 350px;
    border-radius: 20px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}

/* HEADER */
.card-header {
    background: linear-gradient(to right, #f472b6, #ec4899);
    color: white;
    padding: 20px;
    border-radius: 15px;
    margin-bottom: 20px;
    text-align: center;
}

/* INPUT */
input {
    width: 100%;
    padding: 12px;
    margin: 10px 0;
    border-radius: 25px;
    border: 1px solid #ddd;
}

/* FORGOT */
.forgot {
    text-align: right;
    font-size: 12px;
    color: #ec4899;
    margin-bottom: 15px;
}

/* BUTTON */
.btn {
    width: 100%;
    background: linear-gradient(to right, #f472b6, #ec4899);
    color: white;
    padding: 12px;
    border: none;
    border-radius: 25px;
    cursor: pointer;
    font-weight: bold;
}

/* DIVIDER */
.divider {
    text-align: center;
    margin: 15px 0;
    font-size: 12px;
}

/* GOOGLE */
.btn-google {
    width: 100%;
    padding: 10px;
    border-radius: 25px;
    border: 1px solid #ddd;
    background: white;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
}

.btn-google img {
    width: 18px;
    margin-right: 8px;
}

/* REGISTER */
.register {
    text-align: center;
    font-size: 12px;
    margin-top: 10px;
}

.register a {
    color: #ec4899;
    text-decoration: none;
}

/* ALERT */
.alert {
    font-size: 13px;
    margin-bottom: 10px;
}

.alert-error { color: red; }
.alert-success { color: green; }

/* RESPONSIVE */
@media(max-width: 768px){
    .wrapper {
        flex-direction: column;
    }

    .left {
        height: 200px;
    }
}

/* Footer */
            
        .footer {
            background: linear-gradient(to right, #f472b6, #ec4899);
            color: white;
            margin-top: 40px;
        }

        .footer-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            padding: 30px 20px;
            gap: 20px;
        }

        .footer-section h3,
        .footer-section h4 {
            margin-bottom: 10px;
        }

        .footer-section p {
            font-size: 14px;
            line-height: 1.6;
        }

        .footer-section a {
            display: block;
            color: white;
            text-decoration: none;
            margin-bottom: 8px;
            font-size: 14px;
            transition: 0.3s;
        }

        .footer-section a:hover {
            transform: translateX(5px);
            color: #ffe4ec;
        }

        .footer-bottom {
            text-align: center;
            padding: 15px;
            background-color: rgba(0,0,0,0.1);
            font-size: 13px;
        }
</style>
</head>

<body>

<div class="navbar">
    <div class="logo">EloraStay</div>
</div>
<!-- MAIN -->
<div class="wrapper">

    <!-- LEFT IMAGE -->
    <div class="left">
        <div class="left-text">
            <h1>Temukan Hotel Impian Anda</h1>
            <p>Booking mudah, cepat, dan terpercaya hanya di EloraStay</p>
        </div>
    </div>

    <!-- RIGHT FORM -->
    <div class="right">
        <div class="card">

            <div class="card-header">
                <h3>Selamat Datang</h3>
                <small>Login untuk mengakses akun Anda</small>
            </div>

            <!-- ALERT -->
            @if(session('error'))
                <div class="alert alert-error">
                    {{ session('error') }}
                </div>
            @endif

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <!-- FORM -->
            <form onsubmit="return fakeLogin(event)">

                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>

                <div class="forgot">Lupa password?</div>

                <button type="submit" class="btn">Masuk</button>

                <div class="divider">atau</div>

                <button type="button" class="btn-google">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/0/09/IOS_Google_icon.png">
                    Lanjutkan dengan Google
                </button>

                <div class="register">
                    Belum punya akun? <a href="/registrasi">Daftar sekarang</a>
                </div>
            </form>

        </div>
    </div>

</div>

<!-- Footer -->
<footer class="footer">
    <div class="footer-container">

        <!-- Brand -->
        <div class="footer-section">
            <h3>EloraStay</h3>
            <p>Platform booking hotel terpercaya dengan pengalaman terbaik untuk Anda.</p>
        </div>

        <!-- Navigation -->
        <div class="footer-section">
            <h4>Menu</h4>
            <a href="/">🏠 Beranda</a>
            <a href="/kamar">🛏️ Daftar Kamar</a>
            <a href="/reservasi">📄 Reservasi</a>
            <a href="/pembayaran">💳 Pembayaran</a>
        </div>

        <!-- Contact -->
        <div class="footer-section">
            <h4>Kontak</h4>
            <p>📧 email@elorastay.com</p>
            <p>📞 +62 123 456 7890</p>
            <p>📍 Indonesia</p>
        </div>

    </div>
<script>
<script>
function fakeLogin(e) {
    e.preventDefault(); // ❌ stop submit ke backend

    let email = document.querySelector('input[name="email"]').value;
    let password = document.querySelector('input[name="password"]').value;

    // validasi sederhana
    if (email === "" || password === "") {
        alert("Isi email dan password dulu!");
        return false;
    }

    // simpan status login (biar bisa dipakai di halaman lain)
    localStorage.setItem("isLogin", "true");
    localStorage.setItem("userEmail", email);

    // redirect ke beranda
    window.location.href = "/";

    return false;
}
</script>
<script>
window.onload = function() {
    const isLogin = localStorage.getItem("isLogin");

    if (isLogin) {
        const loginBtn = document.querySelector(".login-btn");
        if (loginBtn) {
            loginBtn.innerText = "Logout";
            loginBtn.onclick = function() {
                localStorage.clear();
                window.location.reload();
            };
        }
    }
}
</script>

</body>
</html>