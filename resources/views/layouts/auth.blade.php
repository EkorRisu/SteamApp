<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'ShopGaming') }} - @yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    @yield('styles')
</head>

<body class="bg-gray-900 min-h-screen flex flex-col">
    <!-- Navigation -->
    <nav class="bg-gray-800 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <a href="{{ url('/') }}" class="flex items-center space-x-2">
                    <i class="fas fa-gamepad text-purple-500 text-2xl"></i>
                    <span class="font-bold text-xl text-white">ShopGaming</span>
                </a>
            </div>
            <div class="hidden md:flex space-x-6">
                <a href="{{ url('/') }}" class="text-gray-300 hover:text-white">Home</a>
                <a href="#" class="text-gray-300 hover:text-white">Catalog</a>
                <a href="#" class="text-gray-300 hover:text-white">Contact</a>
            </div>
            <div class="flex space-x-2">
                @guest
                    @if (Route::has('login'))
                        <a href="{{ route('login') }}"
                            class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded">Login</a>
                    @endif

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded">Register</a>
                    @endif
                @else
                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open" class="flex items-center text-white space-x-1">
                            <span>{{ Auth::user()->name }}</span>
                            <i class="fas fa-caret-down"></i>
                        </button>
                        <div x-show="open" @click.away="open = false"
                            class="absolute right-0 mt-2 w-48 bg-gray-800 rounded shadow-lg py-1">
                            <a href="#" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">Profile</a>
                            <a href="#" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">My Games</a>
                            <hr class="border-gray-700 my-1">
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                class="block px-4 py-2 text-gray-300 hover:bg-gray-700">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                @csrf
                            </form>
                        </div>
                    </div>
                @endguest
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-6 border-t border-gray-800">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="flex items-center space-x-2 mb-4 md:mb-0">
                    <i class="fas fa-gamepad text-purple-500 text-2xl"></i>
                    <span class="font-bold text-xl">ShopGaming</span>
                </div>
                <p class="text-gray-400 text-sm">© 2025 ShopGaming. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Alpine.js for dropdown functionality -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    @yield('scripts')
</body>

</html>