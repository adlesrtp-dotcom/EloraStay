<!-- Navbar -->
<nav class="bg-gradient-to-r from-pink-400 to-pink-500 text-white px-8 py-5 flex items-center justify-between relative">

    <!-- Logo -->
    <div class="text-xl font-bold">
        EloraStay
    </div>

    <!-- Menu -->
    <div class="absolute left-1/2 -translate-x-1/2 flex gap-8">

        <a href="/"
           class="relative font-semibold after:content-[''] after:absolute after:left-0 after:-bottom-1 after:w-0 after:h-[3px] after:bg-white after:rounded-full hover:after:w-full after:transition-all">

            Beranda
        </a>

        <a href="/kamar"
           class="relative font-semibold after:content-[''] after:absolute after:left-0 after:-bottom-1 after:w-0 after:h-[3px] after:bg-white after:rounded-full hover:after:w-full after:transition-all">

            Daftar Kamar
        </a>

        <a href="/pembayaran"
           class="relative font-semibold after:content-[''] after:absolute after:left-0 after:-bottom-1 after:w-0 after:h-[3px] after:bg-white after:rounded-full hover:after:w-full after:transition-all">

            Pembayaran
        </a>

        <a href="/reservasi"
           class="relative font-semibold after:content-[''] after:absolute after:left-0 after:-bottom-1 after:w-0 after:h-[3px] after:bg-white after:rounded-full hover:after:w-full after:transition-all">

            Reservasi
        </a>

    </div>

    @if(session('login'))

<div class="flex items-center gap-3">

    <span class="font-semibold">
        Halo, {{ session('nama') }}
    </span>

    <a href="{{ route('logout') }}"
       class="bg-white text-pink-500 px-4 py-2 rounded-full font-bold hover:bg-pink-100 transition">

        Logout

    </a>

</div>

@else

<a href="/login"
   class="bg-white text-pink-500 px-4 py-2 rounded-full font-bold hover:bg-pink-100 transition">

    Login

</a>

@endif
</nav>