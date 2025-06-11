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

<body class="min-h-screen flex flex-col">
    <!-- Navigation -->
    <nav
        style="background: linear-gradient(135deg, #8B5CF6 0%, #7C3AED 100%); padding: 15px 0; box-shadow: 0 2px 10px rgba(139, 92, 246, 0.3);">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <a class="brand-text flex items-center space-x-2 text-white font-bold text-xl"
                    href="{{ route('home') }}">
                    <img src="{{ asset('images/icon.svg') }}" alt="Play Icon" class="w-10 h-10">
                    <span>play play</span>
                </a>

            </div>

            <div class="flex space-x-2">
                @guest
                <div style="display: flex; align-items: center;">
                    @if (Route::has('login'))
                    <a href="{{ route('login') }}"
                        style="background: rgba(255, 255, 255, 0.1); border: 2px solid rgba(255, 255, 255, 0.3); color: white; padding: 8px 20px; border-radius: 25px; font-weight: 500; transition: all 0.3s ease; backdrop-filter: blur(10px); text-decoration: none; margin-left: 10px;">
                        Login
                    </a>
                    @endif

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        style="background: rgba(255, 255, 255, 0.1); border: 2px solid rgba(255, 255, 255, 0.3); color: white; padding: 8px 20px; border-radius: 25px; font-weight: 500; transition: all 0.3s ease; backdrop-filter: blur(10px); text-decoration: none; margin-left: 10px;">
                        Register
                    </a>
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
    <footer
        style="background: linear-gradient(135deg, #8B5CF6 0%, #7C3AED 100%); padding: 15px 0; box-shadow: 0 2px 10px rgba(139, 92, 246, 0.3);">
        <div class="container mx-auto px-4 text-center">
            <div class="container">
                <p>&copy; 2025 play play. All rights reserved.</p>
                <div class="d-flex justify-content-center gap-3">
                    <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
    </footer>

    <!-- Alpine.js for dropdown functionality -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    @yield('scripts')
</body>

</html>