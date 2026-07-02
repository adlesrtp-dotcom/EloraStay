@extends('layouts.app')

@section('content')

<section class="min-h-screen bg-pink-100 flex items-center justify-center py-10">

    <div class="bg-white w-full max-w-md rounded-3xl shadow-xl p-8">

        <div class="bg-pink-500 text-white rounded-2xl p-6 text-center mb-6">

            <h2 class="text-2xl font-bold">
                Reset Password
            </h2>

            <p class="text-sm mt-2">
                Masukkan password baru Anda
            </p>

        </div>

        @if(session('error'))
            <div class="bg-red-100 text-red-600 p-3 rounded-lg mb-4">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('password.update', $user->id) }}" method="POST">
         @csrf
            

            <div class="mb-4">
                <input
                    type="password"
                    name="password"
                    placeholder="Password Baru"
                    required
                    class="w-full px-5 py-3 rounded-full border border-pink-300">
            </div>

            <div class="mb-6">
                <input
                    type="password"
                    name="password_confirmation"
                    placeholder="Konfirmasi Password"
                    required
                    class="w-full px-5 py-3 rounded-full border border-pink-300">
            </div>

            <button
                type="submit"
                class="w-full bg-pink-500 hover:bg-pink-600 text-white py-3 rounded-full font-semibold">
                Simpan Password
            </button>

            @if ($errors->any())
    <div class="bg-red-100 text-red-600 p-3 rounded-lg mb-4">
        <ul>
            @foreach ($errors->all() as $error)
                <li>• {{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        </form>

    </div>

</section>

@endsection 