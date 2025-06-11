@extends('layouts.auth')

@section('title', 'Login')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-b from-purple-300 to-blue-200 px-4 py-10">
    <div class="w-full max-w-4xl bg-white bg-opacity-10 rounded-3xl shadow-2xl backdrop-blur-sm flex flex-col md:flex-row overflow-hidden">

        <!-- Kiri: Logo dan Branding -->
        <div class="md:w-1/2 bg-transparent p-10 flex flex-col justify-center items-center text-center">
            <img src="{{ asset('images/icon.svg') }}" alt="Play Icon" class="brand-icon-img w-20 h-20 mb-4">
            <h2 class="text-3xl font-extrabold text-purple-800">play play</h2>
        </div>

        <!-- Kanan: Form Login -->
        <div class="md:w-1/2 bg-white bg-opacity-20 rounded-3xl p-10">
            <h2 class="text-2xl font-bold text-center text-purple-800 mb-8 uppercase">Login</h2>
            
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div class="mb-6">
                    <input id="email" type="email"
                        class="w-full px-4 py-3 rounded-xl bg-white bg-opacity-30 text-gray-900 placeholder-gray-500 focus:ring-2 focus:ring-purple-400 @error('email') border border-red-500 @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                        placeholder="Email">
                    @error('email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-6">
                    <input id="password" type="password"
                        class="w-full px-4 py-3 rounded-xl bg-white bg-opacity-30 text-gray-900 placeholder-gray-500 focus:ring-2 focus:ring-purple-400 @error('password') border border-red-500 @enderror"
                        name="password" required autocomplete="current-password"
                        placeholder="Password">
                    @error('password')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Tombol -->
                <div class="mb-6">
                    <button type="submit"
                        class="w-full bg-gradient-to-r from-purple-400 to-blue-400 hover:from-purple-500 hover:to-blue-500 text-white font-bold py-2.5 rounded-xl shadow-md transition-all duration-300">
                        Login
                    </button>
                </div>

                <!-- Link Register -->
                <div class="text-center text-sm text-gray-700">
                    Don't have an account? 
                    <a href="{{ route('register') }}" class="text-blue-600 font-semibold hover:underline">Register</a>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection
