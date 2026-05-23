<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>EloraStay</title>

    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- TAILWIND -->
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        poppins: ['Poppins', 'sans-serif']
                    }
                }
            }
        }
    </script>

</head>

<body class="bg-pink-100 font-poppins">

@include('components.navbar')

@yield('content')

@include('components.footer')

<script>

window.onload = function () {

    const isLogin = localStorage.getItem("isLogin");

    const loginBtn = document.getElementById("loginBtn");

    const logoutBtn = document.getElementById("logoutBtn");

    const daftarSection = document.getElementById("daftarSection");

    if (isLogin === "true") {

        if (loginBtn) {
            loginBtn.style.display = "none";
        }

        if (logoutBtn) {
            logoutBtn.style.display = "inline-block";
        }

        if (daftarSection) {
            daftarSection.style.display = "none";
        }

    } else {

        if (loginBtn) {
            loginBtn.style.display = "inline-block";
        }

        if (logoutBtn) {
            logoutBtn.style.display = "none";
        }

        if (daftarSection) {
            daftarSection.style.display = "block";
        }
    }
}

function logout() {

    localStorage.removeItem("isLogin");

    alert("Logout berhasil");

    window.location.href = "/dashboard";
}

</script>

</body>
</html>