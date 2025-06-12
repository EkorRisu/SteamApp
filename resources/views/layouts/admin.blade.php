<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'ShopGaming') }} - Admin @yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #8B5CF6 0%, #7C3AED 100%);
        }
        .gradient-shadow {
            box-shadow: 0 2px 10px rgba(139, 92, 246, 0.3);
        }
    </style>
    @yield('styles')
</head>
<body class="min-h-screen flex flex-col bg-gray-900">
    <!-- Top Navigation -->
    <nav class="gradient-bg gradient-shadow px-4 py-3">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-4">
                <button id="sidebarToggle" class="text-white lg:hidden">
                    <i class="fas fa-bars text-xl"></i>
                </button>
                <a class="brand-text flex items-center space-x-2 text-white font-bold text-xl" href="{{ route('admin.home') }}">
                    <img src="{{ asset('images/icon.svg') }}" alt="Play Icon" class="w-10 h-10">
                    <span>play play Admin</span>
                </a>
            </div>
            
            <div class="flex items-center space-x-4">
                <div class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="flex items-center space-x-2 text-white">
                        <i class="fas fa-user-circle text-2xl"></i>
                        <span>{{ Auth::user()->name ?? 'Admin' }}</span>
                        <i class="fas fa-caret-down"></i>
                    </button>
                    <div x-show="open" @click.away="open = false" 
                         class="absolute right-0 mt-2 w-48 bg-purple-900 rounded-lg shadow-lg py-1"
                         x-transition:enter="transition ease-out duration-100">
                        <a href="#" class="block px-4 py-2 text-white hover:bg-purple-800">Profile</a>
                        <a href="#" class="block px-4 py-2 text-white hover:bg-purple-800">Settings</a>
                        <hr class="border-purple-700 my-1">
                        <a href="{{ route('logout') }}" 
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                           class="block px-4 py-2 text-white hover:bg-purple-800">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="flex flex-1">
        <!-- Sidebar -->
        <aside id="sidebar" class="gradient-bg w-64 min-h-screen fixed lg:static z-20 transition-transform duration-300 ease-in-out lg:translate-x-0 -translate-x-full">
            <div class="p-4">
                <!-- Dashboard Overview -->
                <div class="mb-6">
                    <h3 class="text-white/70 uppercase text-xs font-semibold mb-3">Dashboard</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="{{ route('admin.home') ?? '#' }}" 
                               class="flex items-center space-x-3 text-white hover:bg-white/10 rounded-lg px-3 py-2 transition">
                                <i class="fas fa-tachometer-alt"></i>
                                <span>Overview</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Products Management -->
                <div class="mb-6">
                    <h3 class="text-white/70 uppercase text-xs font-semibold mb-3">Products</h3>
                    <ul class="space-y-2">
                     
                        <li>
                            <a href="{{ route('produk.create') ?? '#' }}" class="flex items-center space-x-3 text-white hover:bg-white/10 rounded-lg px-3 py-2 transition">
                                <i class="fas fa-plus"></i>
                                <span>Tambah Game</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('kategori.index') ?? '#' }}" class="flex items-center space-x-3 text-white hover:bg-white/10 rounded-lg px-3 py-2 transition">
                                <i class="fas fa-tags"></i>
                                <span>Kategori</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Orders Management -->
                <div class="mb-6">
                    <h3 class="text-white/70 uppercase text-xs font-semibold mb-3">Pesanan</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="{{ route('transaksi.transaksiManager') ?? '#' }}" class="flex items-center space-x-3 text-white hover:bg-white/10 rounded-lg px-3 py-2 transition">
                                <i class="fas fa-shopping-cart"></i>
                                <span>Konfirmasi Pesanan</span>
                                <span class="bg-red-500 text-white text-xs rounded-full px-2 py-1 ml-auto">3</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('transaksi.transaksiManager') ?? '#' }}" class="flex items-center space-x-3 text-white hover:bg-white/10 rounded-lg px-3 py-2 transition">
                                <i class="fas fa-history"></i>
                                <span>Riwayat Transaksi</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Users Management -->
                <div class="mb-6">
                    <h3 class="text-white/70 uppercase text-xs font-semibold mb-3">Pengguna</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="#" class="flex items-center space-x-3 text-white hover:bg-white/10 rounded-lg px-3 py-2 transition">
                                <i class="fas fa-users"></i>
                                <span>Kelola Pengguna</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Reports -->
                <div class="mb-6">
                    <h3 class="text-white/70 uppercase text-xs font-semibold mb-3">Laporan</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="#" class="flex items-center space-x-3 text-white hover:bg-white/10 rounded-lg px-3 py-2 transition">
                                <i class="fas fa-chart-bar"></i>
                                <span>Statistik Penjualan</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center space-x-3 text-white hover:bg-white/10 rounded-lg px-3 py-2 transition">
                                <i class="fas fa-file-alt"></i>
                                <span>Laporan Bulanan</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Settings -->
                <div class="mb-6">
                    <h3 class="text-white/70 uppercase text-xs font-semibold mb-3">Pengaturan</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="#" class="flex items-center space-x-3 text-white hover:bg-white/10 rounded-lg px-3 py-2 transition">
                                <i class="fas fa-cog"></i>
                                <span>Konfigurasi</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/') }}" class="flex items-center space-x-3 text-white hover:bg-white/10 rounded-lg px-3 py-2 transition">
                                <i class="fas fa-external-link-alt"></i>
                                <span>Lihat Website</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 lg:ml-0">
            <div class="">
                @if(session('success'))
                    <div class="gradient-bg text-white p-4 rounded-lg mb-6 flex items-center">
                        <i class="fas fa-check-circle mr-2"></i>
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="bg-red-600 text-white p-4 rounded-lg mb-6 flex items-center">
                        <i class="fas fa-exclamation-circle mr-2"></i>
                        {{ session('error') }}
                    </div>
                @endif

                @yield('content')
            </div>
        </main>
    </div>

    <!-- Overlay -->
    <div id="sidebarOverlay" class="fixed inset-0 bg-black bg-opacity-50 z-10 lg:hidden hidden"></div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    
    <script>
        const sidebarToggle = document.getElementById('sidebarToggle');
        const sidebar = document.getElementById('sidebar');
        const sidebarOverlay = document.getElementById('sidebarOverlay');

        sidebarToggle.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full');
            sidebarOverlay.classList.toggle('hidden');
        });

        sidebarOverlay.addEventListener('click', () => {
            sidebar.classList.add('-translate-x-full');
            sidebarOverlay.classList.add('hidden');
        });
    </script>

    @yield('scripts')
</body>
</html>