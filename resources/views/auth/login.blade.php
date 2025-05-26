@extends('layouts.auth')

@section('title', 'Login')

@section('content')
<div class="container mx-auto px-4 py-16">
    <div class="flex justify-center">
        <div class="w-full md:w-2/3 lg:w-1/2 xl:w-1/3">
            <div class="bg-gray-800 rounded-lg shadow-lg overflow-hidden">
                <!-- Header -->
                <div class="bg-gray-700 px-6 py-4 border-b border-gray-600">
                    <h2 class="text-xl font-bold text-white">{{ __('Login') }}</h2>
                </div>
                
                <!-- Body -->
                <div class="p-6">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        
                        <!-- Email -->
                        <div class="mb-6">
                            <label for="email" class="block text-gray-300 text-sm font-medium mb-2">
                                {{ __('Email Address') }}
                            </label>
                            
                            <input id="email" type="email" 
                                class="bg-gray-700 text-white w-full rounded-lg border border-gray-600 focus:border-purple-500 focus:ring focus:ring-purple-500 focus:ring-opacity-50 px-4 py-2.5 @error('email') border-red-500 @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            
                            @error('email')
                                <span class="text-red-500 text-sm mt-1">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <!-- Password -->
                        <div class="mb-6">
                            <label for="password" class="block text-gray-300 text-sm font-medium mb-2">
                                {{ __('Password') }}
                            </label>
                            
                            <input id="password" type="password" 
                                class="bg-gray-700 text-white w-full rounded-lg border border-gray-600 focus:border-purple-500 focus:ring focus:ring-purple-500 focus:ring-opacity-50 px-4 py-2.5 @error('password') border-red-500 @enderror"
                                name="password" required autocomplete="current-password">
                            
                            @error('password')
                                <span class="text-red-500 text-sm mt-1">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <!-- Remember Me -->
                        <div class="mb-6">
                            <div class="flex items-center">
                                <input class="mr-2 rounded border-gray-600 bg-gray-700 text-purple-600 focus:ring-purple-500" 
                                    type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                
                                <label class="text-gray-300 text-sm" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                        
                        <!-- Submit -->
                        <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                            <button type="submit" class="bg-purple-600 hover:bg-purple-700 text-white font-medium py-2.5 px-6 rounded-lg transition duration-300 mb-4 md:mb-0">
                                {{ __('Login') }}
                            </button>
                            
                            @if (Route::has('password.request'))
                                <a class="text-purple-400 hover:text-purple-300 text-sm" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </form>
                </div>

                <!-- Sign up Link -->
                <div class="bg-gray-700 px-6 py-4 border-t border-gray-600 flex justify-center">
                    <p class="text-gray-300 text-sm">
                        Don't have an account? 
                        <a href="{{ route('register') }}" class="text-purple-400 hover:text-purple-300 font-medium">
                            Sign up now
                        </a>
                    </p>
                </div>
            </div>

            <!-- Gaming Elements -->
            <div class="mt-8 flex justify-center">
                <div class="flex space-x-4 text-gray-400">
                    <div class="flex items-center">
                        <i class="fas fa-shield-alt mr-2 text-purple-500"></i>
                        <span class="text-sm">Secure Login</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-gamepad mr-2 text-purple-500"></i>
                        <span class="text-sm">Game Access</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-headset mr-2 text-purple-500"></i>
                        <span class="text-sm">24/7 Support</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection