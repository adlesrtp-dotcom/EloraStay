<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Lupa Password - EloraStay</title>
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
    color: white;
}

.navbar a {
    color: white;
    text-decoration: none;
    margin-left: 20px;
}

.login-btn {
    background: white;
    color: #ec4899;
    padding: 6px 12px;
    border-radius: 8px;
    font-weight: bold;
}

/* CONTAINER */
.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 80vh;
}

/* CARD */
.card {
    background: #f9f9f9;
    padding: 30px;
    width: 350px;
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
    width: 100%;
    padding: 10px;
    margin: 15px 0;
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
}

.footer-bottom {
    text-align: center;
    padding: 10px;
}
</style>
</head>

<body>

<!-- NAVBAR -->
<div class="navbar">
    <div><b>EloraStay</b></div>
    
</div>

<!-- FORM -->
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Lupa Password</h3>
            <small>Masukkan email untuk reset password</small>
        </div>

        <form onsubmit="resetPassword(event)">
            <input type="email" id="email" placeholder="Masukkan email" required>

            <button type="submit" class="btn">Kirim Link Reset</button>
        </form>

        <p style="margin-top:15px; font-size:13px;">
            Kembali ke <a href="/login" style="color:#ec4899;">Login</a>
        </p>
    </div>
</div>

<!-- FOOTER -->
<footer class="footer">
    <div class="footer-container">
        <div>
            <h3>EloraStay</h3>
            <p>Platform booking hotel terpercaya.</p>
        </div>
        <div>
            <h4>Menu</h4>
            <p>Beranda</p>
            <p>Daftar Kamar</p>
        </div>
        <div>
            <h4>Kontak</h4>
            <p>email@elorastay.com</p>
        </div>
    </div>
    <div class="footer-bottom">
        © 2026 EloraStay
    </div>
</footer>

<!-- SCRIPT -->
<script>
function resetPassword(e) {
    e.preventDefault();

    const email = document.getElementById("email").value;

    if (email === "") {
        alert("Email wajib diisi!");
        return;
    }

    // simulasi kirim email
    alert("Link reset password telah dikirim ke " + email);

    // redirect ke login
    window.location.href = "/login";
}
</script>

</body>
</html>