<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'ShopGaming') }} - Admin @yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    @yield('styles')
</head>
<body class="bg-gray-900 text-white">
    <!-- Top Navigation -->
    <nav class="bg-gray-800 border-b border-gray-700 px-4 py-3">
        <div class="flex justify-between items-center">
            <div class="flex items-center space-x-4">
                <button id="sidebarToggle" class="text-gray-400 hover:text-white lg:hidden">
                    <i class="fas fa-bars text-xl"></i>
                </button>
                <div class="flex items-center space-x-2">
                    <i class="fas fa-gamepad text-purple-500 text-2xl"></i>
                    <span class="font-bold text-xl text-white">ShopGaming Admin</span>
                </div>
            </div>
            
            <div class="flex items-center space-x-4">
                <!-- Notifications -->
                <div class="relative">
                    <button class="text-gray-400 hover:text-white">
                        <i class="fas fa-bell text-xl"></i>
                        <span class="absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">3</span>
                    </button>
                </div>
                
                <!-- User Menu -->
                <div class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="flex items-center space-x-2 text-gray-300 hover:text-white">
                        <i class="fas fa-user-circle text-2xl"></i>
                        <span>{{ Auth::user()->name ?? 'Admin' }}</span>
                        <i class="fas fa-caret-down"></i>
                    </button>
                    <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-48 bg-gray-800 rounded-lg shadow-lg py-1 border border-gray-700">
                        <a href="#" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">Profile</a>
                        <a href="#" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">Settings</a>
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
            </div>
        </div>
    </nav>

    <div class="flex">
        <!-- Sidebar -->
        <aside id="sidebar" class="bg-gray-800 w-64 min-h-screen border-r border-gray-700 transition-transform duration-300 ease-in-out lg:translate-x-0 -translate-x-full fixed lg:static z-20">
            <div class="p-4">
                <!-- Dashboard Overview -->
                <div class="mb-6">
                    <h3 class="text-gray-400 uppercase text-xs font-semibold mb-3">Dashboard</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="{{ route('admin.home') ?? '#' }}" class="flex items-center space-x-3 text-gray-300 hover:text-white hover:bg-gray-700 rounded-lg px-3 py-2">
                                <i class="fas fa-tachometer-alt"></i>
                                <span>Overview</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Products Management -->
                <div class="mb-6">
                    <h3 class="text-gray-400 uppercase text-xs font-semibold mb-3">Produk</h3>
                    <ul class="space-y-2">
                        <li>
                            
                                <i class="fas fa-gamepad"></i>
                                <span>Kelola Produk</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('produk.create') ?? '#' }}" class="flex items-center space-x-3 text-gray-300 hover:text-white hover:bg-gray-700 rounded-lg px-3 py-2">
                                <i class="fas fa-plus"></i>
                                <span>Tambah Game</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('kategori.index') ?? '#' }}" class="flex items-center space-x-3 text-gray-300 hover:text-white hover:bg-gray-700 rounded-lg px-3 py-2">
                                <i class="fas fa-tags"></i>
                                <span>Kategori</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Orders Management -->
                <div class="mb-6">
                    <h3 class="text-gray-400 uppercase text-xs font-semibold mb-3">Pesanan</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="{{ route('transaksi.transaksiManager') ?? '#' }}" class="flex items-center space-x-3 text-gray-300 hover:text-white hover:bg-gray-700 rounded-lg px-3 py-2">
                                <i class="fas fa-shopping-cart"></i>
                                <span>Konfirmasi Pesanan</span>
                                <span class="bg-red-500 text-white text-xs rounded-full px-2 py-1 ml-auto">3</span>
                            </a>
                        </li>
                        <li>
                            
                            <a href="{{ route('transaksi.transaksiManager') ?? '#' }}" class="flex items-center space-x-3 text-gray-300 hover:text-white hover:bg-gray-700 rounded-lg px-3 py-2">
                                <i class="fas fa-history"></i>
                                <span>Riwayat Transaksi</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Users Management -->
                <div class="mb-6">
                    <h3 class="text-gray-400 uppercase text-xs font-semibold mb-3">Pengguna</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="#" class="flex items-center space-x-3 text-gray-300 hover:text-white hover:bg-gray-700 rounded-lg px-3 py-2">
                                <i class="fas fa-users"></i>
                                <span>Kelola Pengguna</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Reports -->
                <div class="mb-6">
                    <h3 class="text-gray-400 uppercase text-xs font-semibold mb-3">Laporan</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="#" class="flex items-center space-x-3 text-gray-300 hover:text-white hover:bg-gray-700 rounded-lg px-3 py-2">
                                <i class="fas fa-chart-bar"></i>
                                <span>Statistik Penjualan</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center space-x-3 text-gray-300 hover:text-white hover:bg-gray-700 rounded-lg px-3 py-2">
                                <i class="fas fa-file-alt"></i>
                                <span>Laporan Bulanan</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Settings -->
                <div class="mb-6">
                    <h3 class="text-gray-400 uppercase text-xs font-semibold mb-3">Pengaturan</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="#" class="flex items-center space-x-3 text-gray-300 hover:text-white hover:bg-gray-700 rounded-lg px-3 py-2">
                                <i class="fas fa-cog"></i>
                                <span>Konfigurasi</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/') }}" class="flex items-center space-x-3 text-gray-300 hover:text-white hover:bg-gray-700 rounded-lg px-3 py-2">
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
            <div class="p-6">
                @if(session('success'))
                    <div class="bg-green-600 text-white p-4 rounded-lg mb-6 flex items-center">
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

    <!-- Overlay for mobile sidebar -->
    <div id="sidebarOverlay" class="fixed inset-0 bg-black bg-opacity-50 z-10 lg:hidden hidden"></div>

    <!-- Alpine.js -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    
    <!-- Sidebar Toggle Script -->
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