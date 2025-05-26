<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ShopGames') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800,900&display=swap" rel="stylesheet" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'gaming-dark': '#2d3748',
                        'gaming-darker': '#1a202c',
                        'gaming-purple': '#9f7aea',
                        'gaming-blue': '#4299e1',
                        'gaming-card': '#4a5568',
                        'gaming-hover': '#718096',
                    },
                    fontFamily: {
                        sans: ['Figtree', 'sans-serif'],
                    },
                    backdropBlur: {
                        'xs': '2px',
                    }
                }
            }
        }
    </script>

    <style>
        body {
            font-family: 'Figtree', sans-serif;
        }

        .bg-gaming-gradient {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .bg-gaming-hero {
            background: linear-gradient(rgba(45, 55, 72, 0.8), rgba(26, 32, 44, 0.9)),
                url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><defs><radialGradient id="a" cx="50%" cy="50%"><stop offset="0%" stop-color="%23667eea" stop-opacity="0.1"/><stop offset="100%" stop-color="%23764ba2" stop-opacity="0.05"/></radialGradient></defs><rect width="100%" height="100%" fill="url(%23a)"/></svg>');
            background-size: cover;
            background-position: center;
        }

        .glass-effect {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .hover-lift {
            transition: all 0.3s ease;
        }

        .hover-lift:hover {
            transform: translateY(-2px);
        }

        .btn-gaming {
            background: linear-gradient(135deg, #9f7aea 0%, #667eea 100%);
            transition: all 0.3s ease;
        }

        .btn-gaming:hover {
            background: linear-gradient(135deg, #805ad5 0%, #5a67d8 100%);
            transform: translateY(-1px);
            box-shadow: 0 10px 25px rgba(159, 122, 234, 0.3);
        }

        .btn-gaming-blue {
            background: linear-gradient(135deg, #4299e1 0%, #3182ce 100%);
            transition: all 0.3s ease;
        }

        .btn-gaming-blue:hover {
            background: linear-gradient(135deg, #3182ce 0%, #2c5282 100%);
            transform: translateY(-1px);
            box-shadow: 0 10px 25px rgba(66, 153, 225, 0.3);
        }

        .gamepad-icon {
            filter: drop-shadow(0 0 10px rgba(159, 122, 234, 0.5));
        }
    </style>
</head>

<body class="bg-gaming-darker text-white">
    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 z-50 glass-effect">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <div class="gamepad-icon">
                        <i class="fas fa-gamepad text-2xl text-gaming-purple"></i>
                    </div>
                    <h1 class="text-xl font-bold text-white">ShopGames</h1>
                </div>

                <!-- Navigation Links -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}"
                        class="text-gray-300 hover:text-white transition-colors duration-200">Home</a>
                    <a href="{{ route('transaksi.cart') }}"
                        class="text-gray-300 hover:text-white transition-colors duration-200">Cart</a>
                    <a href="{{ route('transaksi.library') }}"
                        class="text-gray-300 hover:text-white transition-colors duration-200">Library</a>
                </div>

                <!-- Auth Buttons -->
                <div class="flex items-center space-x-3">
                    @guest
                        <a href="{{ route('login') }}"
                            class="px-4 py-2 btn-gaming text-white rounded-lg font-medium hover-lift">
                            Login
                        </a>
                        <a href="{{ route('register') }}"
                            class="px-4 py-2 btn-gaming-blue text-white rounded-lg font-medium hover-lift">
                            Register
                        </a>
                    @else
                        <!-- User Dropdown -->
                        <div class="relative group">
                            <button
                                class="flex items-center space-x-2 text-white hover:text-gaming-purple transition-colors">
                                <i class="fas fa-user"></i>
                                <span>{{ Auth::user()->name }}</span>
                                <i class="fas fa-chevron-down text-sm"></i>
                            </button>

                            <!-- Dropdown Menu -->
                            <div
                                class="absolute right-0 mt-2 w-48 bg-gaming-card rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                                <div class="py-2">
                                    <a href="#"
                                        class="block px-4 py-2 text-gray-300 hover:bg-gaming-hover hover:text-white transition-colors">
                                        <i class="fas fa-user-cog mr-2"></i>Profile
                                    </a>
                                    <div class="border-t border-gray-600 my-1"></div>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                        class="block px-4 py-2 text-gray-300 hover:bg-gaming-hover hover:text-white transition-colors">
                                        <i class="fas fa-sign-out-alt mr-2"></i>Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endguest
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-white hover:text-gaming-purple transition-colors">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="md:hidden hidden pb-4">
                <div class="flex flex-col space-y-2">
                    <a href="{{ route('home') }}" class="text-gray-300 hover:text-white py-2 transition-colors">Home</a>
                    <a href="{{ route('transaksi.cart') }}"
                        class="text-gray-300 hover:text-white py-2 transition-colors">Cart</a>
                    <a href="{{ route('transaksi.library') }}"
                        class="text-gray-300 hover:text-white py-2 transition-colors">Library</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-20">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gaming-dark mt-16 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <div class="flex items-center justify-center space-x-3 mb-4">
                    <div class="gamepad-icon">
                        <i class="fas fa-gamepad text-2xl text-gaming-purple"></i>
                    </div>
                    <h2 class="text-xl font-bold text-white">ShopGames</h2>
                </div>
                <p class="text-gray-400 mb-6">Temukan & beli game favoritmu dengan harga terbaik</p>

                <!-- Social Links -->
                <div class="flex justify-center space-x-6 mb-6">
                    <a href="#" class="text-gray-400 hover:text-gaming-purple transition-colors">
                        <i class="fab fa-discord text-2xl"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gaming-blue transition-colors">
                        <i class="fab fa-steam text-2xl"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gaming-purple transition-colors">
                        <i class="fab fa-twitch text-2xl"></i>
                    </a>
                </div>

                <div class="border-t border-gray-700 pt-6">
                    <p class="text-gray-500 text-sm">
                        &copy; {{ date('Y') }} ShopGames. All rights reserved.
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function () {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });

        // Add animation to page elements
        document.addEventListener('DOMContentLoaded', function () {
            // Animate elements on page load
            const animatedElements = document.querySelectorAll('.hover-lift');
            animatedElements.forEach((element, index) => {
                element.style.opacity = '0';
                element.style.transform = 'translateY(20px)';
                setTimeout(() => {
                    element.style.transition = 'all 0.6s ease';
                    element.style.opacity = '1';
                    element.style.transform = 'translateY(0)';
                }, index * 100);
            });
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add loading effect to buttons
        document.querySelectorAll('button[type="submit"]').forEach(button => {
            button.addEventListener('click', function (e) {
                if (!this.disabled) {
                    this.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Loading...';
                    this.disabled = true;
                }
            });
        });
    </script>

    @stack('scripts')
</body>

</html>