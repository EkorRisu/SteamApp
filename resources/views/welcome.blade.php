@extends('layouts.user')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-gaming-purple via-gaming-dark to-gaming-blue min-h-screen flex items-center justify-center">
    <div class="text-center px-4 sm:px-6 lg:px-8 max-w-4xl">
        <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6">Welcome to <span class="text-gaming-purple">Play Play</span></h1>
        <p class="text-lg md:text-2xl text-gray-300 mb-8">Temukan & mainkan berbagai pilihan game seru</p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="#games-section" class="px-8 py-3 bg-gaming-purple hover:bg-gaming-blue transition rounded-lg text-white font-semibold shadow-lg hover:scale-105 duration-200">
                <i class="fas fa-shopping-cart mr-2"></i>Shop
            </a>
            <a href="{{ route('login') }}" class="px-8 py-3 bg-gaming-blue hover:bg-gaming-purple transition rounded-lg text-white font-semibold shadow-lg hover:scale-105 duration-200">
                <i class="fas fa-sign-in-alt mr-2"></i>Login
            </a>
        </div>
    </div>
</section>

<!-- Games Section -->
<section id="games-section" class="py-16 bg-gaming-dark text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center mb-8">
            <div>
                <h2 class="text-3xl font-bold">Game</h2>
                <p class="text-gray-400">Terpopuler</p>
            </div>
            <div class="flex gap-3">
                <a href="{{ route('register') }}" class="px-4 py-2 bg-gaming-purple hover:bg-gaming-blue transition rounded-lg text-white font-semibold flex items-center gap-2 shadow hover:scale-105">
                    <i class="fas fa-user-plus"></i>Register
                </a>
                <a href="{{ route('login') }}" class="px-4 py-2 bg-gaming-blue hover:bg-gaming-purple transition rounded-lg text-white font-semibold flex items-center gap-2 shadow hover:scale-105">
                    <i class="fas fa-sign-in-alt"></i>Login
                </a>
            </div>
        </div>

        <!-- Game Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Dota 2 -->
            <div class="bg-gaming-card rounded-xl overflow-hidden shadow-lg transform hover:scale-105 transition duration-300">
                <div class="relative h-48 bg-gaming-darker">
                    <img src="https://cdn.cloudflare.steamstatic.com/steam/apps/570/header.jpg" alt="Dota 2" class="w-full h-full object-cover">
                    <div class="absolute top-3 left-3">
                        <span class="bg-black bg-opacity-70 text-white text-xs px-3 py-1 rounded-full flex items-center">
                            <i class="fab fa-steam mr-1"></i>Steam
                        </span>
                    </div>
                </div>
                <div class="p-5">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-lg font-bold">Dota 2</h3>
                        <span class="text-xs bg-gaming-purple px-2 py-1 rounded text-white">MOBA</span>
                    </div>
                    <p class="text-gray-400 text-sm mb-3">MOBA klasik dari Valve</p>
                    <a href="{{ route('login') }}" class="w-full px-4 py-2 bg-gradient-to-r from-yellow-500 to-orange-500 hover:from-yellow-600 hover:to-orange-600 text-white rounded-lg font-medium transition-all duration-300 text-center block">
                        <i class="fas fa-sign-in-alt mr-2"></i>Login to Play
                    </a>
                </div>
            </div>

            <!-- CS:GO -->
            <div class="bg-gaming-card rounded-xl overflow-hidden shadow-lg transform hover:scale-105 transition duration-300">
                <div class="relative h-48 bg-gaming-darker">
                    <img src="https://cdn.cloudflare.steamstatic.com/steam/apps/730/header.jpg" alt="CS:GO" class="w-full h-full object-cover">
                    <div class="absolute top-3 left-3">
                        <span class="bg-black bg-opacity-70 text-white text-xs px-3 py-1 rounded-full flex items-center">
                            <i class="fab fa-steam mr-1"></i>Steam
                        </span>
                    </div>
                </div>
                <div class="p-5">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-lg font-bold">CS:GO</h3>
                        <span class="text-xs bg-gaming-purple px-2 py-1 rounded text-white">FPS</span>
                    </div>
                    <p class="text-gray-400 text-sm mb-3">Game FPS kompetitif</p>
                    <a href="{{ route('login') }}" class="w-full px-4 py-2 bg-gradient-to-r from-yellow-500 to-orange-500 hover:from-yellow-600 hover:to-orange-600 text-white rounded-lg font-medium transition-all duration-300 text-center block">
                        <i class="fas fa-sign-in-alt mr-2"></i>Login to Play
                    </a>
                </div>
            </div>

            <!-- GTA V -->
            <div class="bg-gaming-card rounded-xl overflow-hidden shadow-lg transform hover:scale-105 transition duration-300">
                <div class="relative h-48 bg-gaming-darker">
                    <img src="https://cdn.cloudflare.steamstatic.com/steam/apps/271590/header.jpg" alt="GTA V" class="w-full h-full object-cover">
                    <div class="absolute top-3 left-3">
                        <span class="bg-black bg-opacity-70 text-white text-xs px-3 py-1 rounded-full flex items-center">
                            <i class="fab fa-steam mr-1"></i>Steam
                        </span>
                    </div>
                </div>
                <div class="p-5">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-lg font-bold">GTA V</h3>
                        <span class="text-xs bg-gaming-purple px-2 py-1 rounded text-white">Action</span>
                    </div>
                    <p class="text-gray-400 text-sm mb-3">Petualangan open-world</p>
                    <a href="{{ route('login') }}" class="w-full px-4 py-2 bg-gradient-to-r from-yellow-500 to-orange-500 hover:from-yellow-600 hover:to-orange-600 text-white rounded-lg font-medium transition-all duration-300 text-center block">
                        <i class="fas fa-sign-in-alt mr-2"></i>Login to Play
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection