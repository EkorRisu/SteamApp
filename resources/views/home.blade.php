@extends('layouts.user')

@section('content')
    <!-- Hero Section -->
    <section class="bg-gaming-hero min-h-screen flex items-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="mb-8">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-4">
                    "Selamat Datang di ShopGaming"
                </h1>
                <p class="text-xl md:text-2xl text-gray-300 mb-8">
                    "Temukan & beli game favoritmu dengan harga terbaik"
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#games-section" class="px-8 py-3 btn-gaming text-white rounded-lg font-medium hover-lift">
                        Shop
                    </a>
                    <a href="#games-section" class="px-8 py-3 btn-gaming-blue text-white rounded-lg font-medium hover-lift">
                        Explore
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Games Section -->
    <section id="games-section" class="py-16 bg-gaming-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="flex justify-between items-center mb-8">
                <div>
                    <h2 class="text-3xl font-bold text-white mb-2">Game</h2>
                    <p class="text-gray-400">Terpopuler</p>
                </div>
                <div class="flex gap-3">
                    <a href="{{ route('transaksi.cart') }}" class="px-4 py-2 btn-gaming text-white rounded-lg font-medium hover-lift flex items-center">
                        <i class="fas fa-shopping-cart mr-2"></i>Pembayaran
                    </a>
                    <a href="{{ route('transaksi.library') }}" class="px-4 py-2 btn-gaming-blue text-white rounded-lg font-medium hover-lift flex items-center">
                        <i class="fas fa-book mr-2"></i>Library
                    </a>
                </div>
            </div>

            @if($produks->isNotEmpty())
                <!-- Games Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                    @foreach($produks->take(6) as $produk)
                        <div class="bg-gaming-card rounded-lg overflow-hidden hover-lift glass-effect">
                            <!-- Game Image -->
                            <div class="relative h-48 bg-gaming-darker">
                                @if($produk->gambar)
                                    <img src="{{ asset('storage/' . $produk->gambar) }}" 
                                         alt="{{ $produk->nama }}"
                                         class="w-full h-full object-cover">
                                @else
                                    <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-gaming-purple to-gaming-blue">
                                        <i class="fas fa-gamepad text-4xl text-white opacity-50"></i>
                                    </div>
                                @endif
                                
                                <!-- Platform Badge -->
                                <div class="absolute top-3 left-3">
                                    <span class="px-2 py-1 bg-black bg-opacity-70 text-white text-xs rounded-full flex items-center">
                                        @switch($produk->platform)
                                            @case('Steam')
                                                <i class="fab fa-steam mr-1"></i>
                                                @break
                                            @case('Epic Games')
                                                <i class="fas fa-gamepad mr-1"></i>
                                                @break
                                            @case('PlayStation')
                                                <i class="fab fa-playstation mr-1"></i>
                                                @break
                                            @case('Xbox')
                                                <i class="fab fa-xbox mr-1"></i>
                                                @break
                                            @default
                                                <i class="fas fa-desktop mr-1"></i>
                                        @endswitch
                                        {{ $produk->platform }}
                                    </span>
                                </div>

                                <!-- Stock Badge -->
                                <div class="absolute top-3 right-3">
                                    @if($produk->stok > 10)
                                        <span class="px-2 py-1 bg-green-600 text-white text-xs rounded-full">
                                            <i class="fas fa-check mr-1"></i>In Stock
                                        </span>
                                    @elseif($produk->stok > 0)
                                        <span class="px-2 py-1 bg-yellow-600 text-white text-xs rounded-full">
                                            <i class="fas fa-exclamation-triangle mr-1"></i>Low Stock
                                        </span>
                                    @else
                                        <span class="px-2 py-1 bg-red-600 text-white text-xs rounded-full">
                                            <i class="fas fa-times mr-1"></i>Out of Stock
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <!-- Game Info -->
                            <div class="p-6">
                                <div class="flex justify-between items-start mb-2">
                                    <h3 class="text-lg font-bold text-white mb-1">{{ $produk->nama }}</h3>
                                    <span class="text-xs bg-gaming-purple px-2 py-1 rounded text-white">
                                        {{ $produk->kode_produk }}
                                    </span>
                                </div>
                                
                                <p class="text-gray-400 text-sm mb-3">
                                    {{ $produk->kategori->nama ?? 'Uncategorized' }}
                                </p>

                                <div class="flex justify-between items-center mb-4">
                                    <div class="text-2xl font-bold text-gaming-purple">
                                        Rp {{ number_format($produk->harga, 0, ',', '.') }}
                                    </div>
                                    <div class="text-sm text-gray-400">
                                        Stock: {{ $produk->stok }}
                                    </div>
                                </div>

                                <!-- Action Button -->
                                @if($produk->stok > 0)
                                    <form action="{{ route('transaksi.beli') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="produk_id" value="{{ $produk->id }}">
                                        <button type="submit" class="w-full px-4 py-2 bg-gradient-to-r from-yellow-500 to-orange-500 hover:from-yellow-600 hover:to-orange-600 text-white rounded-lg font-medium hover-lift transition-all duration-300">
                                            <i class="fas fa-cart-plus mr-2"></i>Add to Cart
                                        </button>
                                    </form>
                                @else
                                    <button disabled class="w-full px-4 py-2 bg-gray-600 text-gray-400 rounded-lg font-medium cursor-not-allowed">
                                        <i class="fas fa-ban mr-2"></i>Out of Stock
                                    </button>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- View All Button -->
                @if($produks->count() > 6)
                    <div class="text-center">
                        <button id="load-more" class="px-8 py-3 btn-gaming-blue text-white rounded-lg font-medium hover-lift">
                            View All Games
                        </button>
                    </div>

                    <!-- Hidden Games (Load More) -->
                    <div id="more-games" class="hidden grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
                        @foreach($produks->skip(6) as $produk)
                            <div class="bg-gaming-card rounded-lg overflow-hidden hover-lift glass-effect">
                                <!-- Same structure as above games -->
                                <div class="relative h-48 bg-gaming-darker">
                                    @if($produk->gambar)
                                        <img src="{{ asset('storage/' . $produk->gambar) }}" 
                                             alt="{{ $produk->nama }}"
                                             class="w-full h-full object-cover">
                                    @else
                                        <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-gaming-purple to-gaming-blue">
                                            <i class="fas fa-gamepad text-4xl text-white opacity-50"></i>
                                        </div>
                                    @endif
                                    
                                    <div class="absolute top-3 left-3">
                                        <span class="px-2 py-1 bg-black bg-opacity-70 text-white text-xs rounded-full flex items-center">
                                            @switch($produk->platform)
                                                @case('Steam')
                                                    <i class="fab fa-steam mr-1"></i>
                                                    @break
                                                @case('Epic Games')
                                                    <i class="fas fa-gamepad mr-1"></i>
                                                    @break
                                                @case('PlayStation')
                                                    <i class="fab fa-playstation mr-1"></i>
                                                    @break
                                                @case('Xbox')
                                                    <i class="fab fa-xbox mr-1"></i>
                                                    @break
                                                @default
                                                    <i class="fas fa-desktop mr-1"></i>
                                            @endswitch
                                            {{ $produk->platform }}
                                        </span>
                                    </div>

                                    <div class="absolute top-3 right-3">
                                        @if($produk->stok > 10)
                                            <span class="px-2 py-1 bg-green-600 text-white text-xs rounded-full">
                                                <i class="fas fa-check mr-1"></i>In Stock
                                            </span>
                                        @elseif($produk->stok > 0)
                                            <span class="px-2 py-1 bg-yellow-600 text-white text-xs rounded-full">
                                                <i class="fas fa-exclamation-triangle mr-1"></i>Low Stock
                                            </span>
                                        @else
                                            <span class="px-2 py-1 bg-red-600 text-white text-xs rounded-full">
                                                <i class="fas fa-times mr-1"></i>Out of Stock
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="p-6">
                                    <div class="flex justify-between items-start mb-2">
                                        <h3 class="text-lg font-bold text-white mb-1">{{ $produk->nama }}</h3>
                                        <span class="text-xs bg-gaming-purple px-2 py-1 rounded text-white">
                                            {{ $produk->kode_produk }}
                                        </span>
                                    </div>
                                    
                                    <p class="text-gray-400 text-sm mb-3">
                                        {{ $produk->kategori->nama ?? 'Uncategorized' }}
                                    </p>

                                    <div class="flex justify-between items-center mb-4">
                                        <div class="text-2xl font-bold text-gaming-purple">
                                            Rp {{ number_format($produk->harga, 0, ',', '.') }}
                                        </div>
                                        <div class="text-sm text-gray-400">
                                            Stock: {{ $produk->stok }}
                                        </div>
                                    </div>

                                    @if($produk->stok > 0)
                                        <form action="{{ route('transaksi.beli') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="produk_id" value="{{ $produk->id }}">
                                            <button type="submit" class="w-full px-4 py-2 bg-gradient-to-r from-yellow-500 to-orange-500 hover:from-yellow-600 hover:to-orange-600 text-white rounded-lg font-medium hover-lift transition-all duration-300">
                                                <i class="fas fa-cart-plus mr-2"></i>Add to Cart
                                            </button>
                                        </form>
                                    @else
                                        <button disabled class="w-full px-4 py-2 bg-gray-600 text-gray-400 rounded-lg font-medium cursor-not-allowed">
                                            <i class="fas fa-ban mr-2"></i>Out of Stock
                                        </button>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            @else
                <!-- Empty State -->
                <div class="text-center py-16">
                    <div class="mb-8">
                        <i class="fas fa-gamepad text-6xl text-gaming-purple opacity-50"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">No Games Available</h3>
                    <p class="text-gray-400 mb-8">Check back later for new releases and updates!</p>
                    <a href="#" class="px-6 py-3 btn-gaming text-white rounded-lg font-medium hover-lift">
                        Notify Me
                    </a>
                </div>
            @endif
        </div>
    </section>

    <!-- Toast Notifications -->
    @if(session('success'))
        <div id="success-toast" class="fixed top-24 right-4 z-50 glass-effect rounded-lg p-4 text-white max-w-sm">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <i class="fas fa-check-circle text-green-400 text-xl"></i>
                </div>
                <div class="ml-3">
                    <p class="text-sm font-medium">Success!</p>
                    <p class="text-sm text-gray-300">{{ session('success') }}</p>
                </div>
                <button onclick="closeToast('success-toast')" class="ml-4 text-gray-400 hover:text-white">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
    @endif

    @if(session('error'))
        <div id="error-toast" class="fixed top-24 right-4 z-50 glass-effect rounded-lg p-4 text-white max-w-sm">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <i class="fas fa-exclamation-circle text-red-400 text-xl"></i>
                </div>
                <div class="ml-3">
                    <p class="text-sm font-medium">Error!</p>
                    <p class="text-sm text-gray-300">{{ session('error') }}</p>
                </div>
                <button onclick="closeToast('error-toast')" class="ml-4 text-gray-400 hover:text-white">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
    @endif
@endsection

@push('scripts')
<script>
    // Load more games functionality
    document.getElementById('load-more')?.addEventListener('click', function() {
        const moreGames = document.getElementById('more-games');
        const button = this;
        
        moreGames.classList.remove('hidden');
        button.style.display = 'none';
        
        // Animate the new games
        const newGameCards = moreGames.querySelectorAll('.hover-lift');
        newGameCards.forEach((card, index) => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            setTimeout(() => {
                card.style.transition = 'all 0.6s ease';
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, index * 100);
        });
    });

    // Toast notification functions
    function closeToast(toastId) {
        const toast = document.getElementById(toastId);
        if (toast) {
            toast.style.transform = 'translateX(100%)';
            setTimeout(() => toast.remove(), 300);
        }
    }

    // Auto-hide toasts after 5 seconds
    document.addEventListener('DOMContentLoaded', function() {
        const toasts = document.querySelectorAll('[id$="-toast"]');
        toasts.forEach(toast => {
            setTimeout(() => {
                closeToast(toast.id);
            }, 5000);
        });
    });

    // Smooth scroll to games section
    document.querySelectorAll('a[href="#games-section"]').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            document.getElementById('games-section').scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>
@endpush