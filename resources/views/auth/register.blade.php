@extends('layouts.auth')

@section('title', 'Register')

@section('content')
<style>
    body {
        font-family: 'Poppins', sans-serif;
    }
</style>
<div class="min-h-screen flex items-center justify-center bg-gradient-to-b from-purple-300 to-blue-200 px-4 py-10">
    <div class="bg-white shadow-2xl rounded-xl overflow-hidden flex w-[90%] max-w-5xl">
        
        <!-- Form Panel -->
        <div class="w-full md:w-1/2 p-10">
            <h2 class="text-3xl font-bold text-purple-700 mb-6 text-center">Register</h2>
            
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="mb-4">
                    <input type="text" name="name" id="name"
                        class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-400 @error('name') border-red-500 @enderror"
                        placeholder="Name" value="{{ old('name') }}" required autofocus>
                    @error('name')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <input type="email" name="email" id="email"
                        class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-400 @error('email') border-red-500 @enderror"
                        placeholder="Email" value="{{ old('email') }}" required>
                    @error('email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <input type="password" name="password" id="password"
                        class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-400 @error('password') border-red-500 @enderror"
                        placeholder="Password" required>
                    @error('password')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div class="mb-4">
                    <input type="password" name="password_confirmation" id="password-confirm"
                        class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-400"
                        placeholder="Confirm Password" required>
                </div>

                <!-- Terms -->
                <div class="mb-4 flex items-center">
                    <input id="terms" name="terms" type="checkbox" required
                        class="h-4 w-4 text-purple-600 focus:ring-purple-500 border-gray-300 rounded">
                    <label for="terms" class="ml-2 text-sm text-gray-600">
                        I agree to the <a href="#" class="text-purple-600 hover:underline">Terms</a> and <a href="#" class="text-purple-600 hover:underline">Privacy Policy</a>.
                    </label>
                </div>

                <!-- Register Button -->
                <div class="mb-4">
                    <button type="submit"
                        class="w-full bg-gradient-to-r  from-purple-400 to-blue-400 hover:from-purple-500 hover:to-blue-500 text-white font-bold  py-3 rounded-lg shadow-lg hover:opacity-90 transition">
                        Register
                    </button>
                </div>

                <p class="text-center text-sm text-gray-600">have account? 
                    <a href="{{ route('login') }}" class="text-purple-600 hover:underline font-medium">Login</a>
                </p>
            </form>
        </div>

        <!-- Side Panel -->
        <div class="hidden md:flex md:w-1/2 flex-col items-center justify-center bg-gradient-to-br from-purple-400 to-pink-300 p-10 text-white">
            <img src="{{ asset('images/icon.svg') }}" alt="Play Icon" class="brand-icon-img w-20 h-20 mb-4">
            <h3 class="text-2xl font-semibold">play play</h3>
        </div>
    </div>
</div>
@endsection
