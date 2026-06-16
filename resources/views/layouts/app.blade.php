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

</body>
</html>