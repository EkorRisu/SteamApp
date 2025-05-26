@extends('layouts.auth')

@section('title', 'Register')

@section('content')
<div class="container mx-auto px-4 py-16">
    <div class="flex justify-center">
        <div class="w-full md:w-2/3 lg:w-1/2 xl:w-1/3">
            <div class="bg-gray-800 rounded-lg shadow-lg overflow-hidden">
                <!-- Header -->
                <div class="bg-gray-700 px-6 py-4 border-b border-gray-600">
                    <h2 class="text-xl font-bold text-white">{{ __('Register') }}</h2>
                </div>
                
                <!-- Body -->
                <div class="p-6">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        
                        <!-- Name -->
                        <div class="mb-6">
                            <label for="name" class="block text-gray-300 text-sm font-medium mb-2">
                                {{ __('Name') }}
                            </label>
                            
                            <input id="name" type="text" 
                                class="bg-gray-700 text-white w-full rounded-lg border border-gray-600 focus:border-purple-500 focus:ring focus:ring-purple-500 focus:ring-opacity-50 px-4 py-2.5 @error('name') border-red-500 @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            
                            @error('name')
                                <span class="text-red-500 text-sm mt-1">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <!-- Email -->
                        <div class="mb-6">
                            <label for="email" class="block text-gray-300 text-sm font-medium mb-2">
                                {{ __('Email Address') }}
                            </label>
                            
                            <input id="email" type="email" 
                                class="bg-gray-700 text-white w-full rounded-lg border border-gray-600 focus:border-purple-500 focus:ring focus:ring-purple-500 focus:ring-opacity-50 px-4 py-2.5 @error('email') border-red-500 @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email">
                            
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
                                name="password" required autocomplete="new-password">
                            
                            @error('password')
                                <span class="text-red-500 text-sm mt-1">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <!-- Confirm Password -->
                        <div class="mb-6">
                            <label for="password-confirm" class="block text-gray-300 text-sm font-medium mb-2">
                                {{ __('Confirm Password') }}
                            </label>
                            
                            <input id="password-confirm" type="password" 
                                class="bg-gray-700 text-white w-full rounded-lg border border-gray-600 focus:border-purple-500 focus:ring focus:ring-purple-500 focus:ring-opacity-50 px-4 py-2.5"
                                name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <!-- Terms and Conditions -->
                        <div class="mb-6">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="terms" type="checkbox" 
                                        class="rounded border-gray-600 bg-gray-700 text-purple-600 focus:ring-purple-500" 
                                        name="terms" required>
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="terms" class="text-gray-300">
                                        I agree to the <a href="#" class="text-purple-400 hover:text-purple-300">Terms of Service</a> and <a href="#" class="text-purple-400 hover:text-purple-300">Privacy Policy</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Submit -->
                        <div class="flex justify-center">
                            <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2.5 px-6 rounded-lg transition duration-300 w-full">
                                {{ __('Create Account') }}
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Login Link -->
                <div class="bg-gray-700 px-6 py-4 border-t border-gray-600 flex justify-center">
                    <p class="text-gray-300 text-sm">
                        Already have an account? 
                        <a href="{{ route('login') }}" class="text-purple-400 hover:text-purple-300 font-medium">
                            Log in instead
                        </a>
                    </p>
                </div>
            </div>

            <!-- Gaming Elements -->
            <div class="mt-8">
                <div class="bg-gray-800 rounded-lg p-4 border border-gray-700">
                    <h3 class="text-lg font-medium text-white mb-2">Join the Gaming Community</h3>
                    <div class="flex flex-wrap gap-3 justify-center">
                        <div class="flex items-center bg-gray-700 px-3 py-2 rounded-lg">
                            <i class="fas fa-store text-purple-500 mr-2"></i>
                            <span class="text-gray-300 text-sm">Easy Game Purchase</span>
                        </div>
                        <div class="flex items-center bg-gray-700 px-3 py-2 rounded-lg">
                            <i class="fas fa-users text-purple-500 mr-2"></i>
                            <span class="text-gray-300 text-sm">Community Access</span>
                        </div>
                        <div class="flex items-center bg-gray-700 px-3 py-2 rounded-lg">
                            <i class="fas fa-tags text-purple-500 mr-2"></i>
                            <span class="text-gray-300 text-sm">Exclusive Deals</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection