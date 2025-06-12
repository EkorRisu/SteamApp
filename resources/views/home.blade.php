@extends('layouts.user')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-gaming-purple via-gaming-dark to-gaming-blue min-h-screen flex items-center justify-center">
    <div class="text-center px-4 sm:px-6 lg:px-8 max-w-4xl">
        <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6">Selamat Datang <span class="text-gaming-purple"> {{ Auth::user()->name }}</span></h1>
        <p class="text-lg md:text-2xl text-gray-300 mb-8">Temukan & beli game favoritmu dengan harga terbaik</p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="#games-section" class="px-8 py-3 bg-gaming-purple hover:bg-gaming-blue transition rounded-lg text-white font-semibold shadow-lg hover:scale-105 duration-200">
                Shop
            </a>
            <a href="#games-section" class="px-8 py-3 bg-gaming-blue hover:bg-gaming-purple transition rounded-lg text-white font-semibold shadow-lg hover:scale-105 duration-200">
                Explore
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
                <a href="{{ route('transaksi.cart') }}" class="px-4 py-2 bg-gaming-purple hover:bg-gaming-blue transition rounded-lg text-white font-semibold flex items-center gap-2 shadow hover:scale-105">
                    <i class="fas fa-shopping-cart"></i>Pembayaran
                </a>
                <a href="{{ route('transaksi.library') }}" class="px-4 py-2 bg-gaming-blue hover:bg-gaming-purple transition rounded-lg text-white font-semibold flex items-center gap-2 shadow hover:scale-105">
                    <i class="fas fa-book"></i>Library
                </a>
            </div>
        </div>

        @if($produks->isNotEmpty())
            <!-- Game Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6" id="game-grid">
                @foreach($produks as $index => $produk)
                    <div class="bg-gaming-card rounded-xl overflow-hidden shadow-lg transform hover:scale-105 transition duration-300 {{ $index > 5 ? 'hidden more-games' : '' }}">
                        <div class="relative h-48 bg-gaming-darker">
                            @if($produk->gambar)
                                <img src="{{ asset('storage/' . $produk->gambar) }}" alt="{{ $produk->nama }}" class="w-full h-full object-cover">
                            @else
                                <div class="flex items-center justify-center h-full bg-gradient-to-r from-gaming-purple to-gaming-blue">
                                    <i class="fas fa-gamepad text-4xl text-white opacity-60"></i>
                                </div>
                            @endif

                            <!-- Platform -->
                            <div class="absolute top-3 left-3">
                                <span class="bg-black bg-opacity-70 text-white text-xs px-3 py-1 rounded-full flex items-center">
                                    @switch($produk->platform)
                                        @case('Steam') <i class="fab fa-steam mr-1"></i> @break
                                        @case('Epic Games') <i class="fas fa-gamepad mr-1"></i> @break
                                        @case('PlayStation') <i class="fab fa-playstation mr-1"></i> @break
                                        @case('Xbox') <i class="fab fa-xbox mr-1"></i> @break
                                        @default <i class="fas fa-desktop mr-1"></i>
                                    @endswitch
                                    {{ $produk->platform }}
                                </span>
                            </div>

                            <!-- Stock -->
                            <div class="absolute top-3 right-3">
                                @if($produk->stok > 10)
                                    <span class="bg-green-600 text-white text-xs px-3 py-1 rounded-full">
                                        <i class="fas fa-check mr-1"></i>In Stock
                                    </span>
                                @elseif($produk->stok > 0)
                                    <span class="bg-yellow-600 text-white text-xs px-3 py-1 rounded-full">
                                        <i class="fas fa-exclamation-triangle mr-1"></i>Low Stock
                                    </span>
                                @else
                                    <span class="bg-red-600 text-white text-xs px-3 py-1 rounded-full">
                                        <i class="fas fa-times mr-1"></i>Out of Stock
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="p-5">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="text-lg font-bold">{{ $produk->nama }}</h3>
                                <span class="text-xs bg-gaming-purple px-2 py-1 rounded text-white">{{ $produk->kode_produk }}</span>
                            </div>

                            <p class="text-gray-400 text-sm mb-3">{{ $produk->kategori->nama ?? 'Uncategorized' }}</p>

                            <div class="flex justify-between items-center mb-4">
                                <div class="text-xl font-bold text-gaming-purple">Rp {{ number_format($produk->harga, 0, ',', '.') }}</div>
                                <div class="text-sm text-gray-400">Stock: {{ $produk->stok }}</div>
                            </div>

                            @if($produk->stok > 0)
                                @auth
                                    <form action="{{ route('transaksi.beli') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="produk_id" value="{{ $produk->id }}">
                                        <button type="submit" class="w-full px-4 py-2 bg-gradient-to-r from-yellow-500 to-orange-500 hover:from-yellow-600 hover:to-orange-600 text-white rounded-lg font-medium transition-all duration-300">
                                            <i class="fas fa-cart-plus mr-2"></i>Add to Cart
                                        </button>
                                    </form>
                                @else
                                    <a href="{{ route('login') }}" class="block w-full px-4 py-2 bg-gradient-to-r from-yellow-500 to-orange-500 hover:from-yellow-600 hover:to-orange-600 text-white rounded-lg font-medium transition-all duration-300 text-center">
                                        <i class="fas fa-sign-in-alt mr-2"></i>Login to Buy
                                    </a>
                                @endauth
                            @else
                                <button disabled class="w-full px-4 py-2 bg-gray-600 text-gray-400 rounded-lg font-medium cursor-not-allowed">
                                    <i class="fas fa-ban mr-2"></i>Out of Stock
                                </button>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>

            @if($produks->count() > 6)
                <div class="text-center mt-8">
                    <button id="load-more" class="px-8 py-3 bg-gaming-blue hover:bg-gaming-purple text-white rounded-lg font-semibold transition hover:scale-105 duration-200">
                        View All Games
                    </button>
                </div>
            @endif
        @else
            <p class="text-center text-gray-400">Belum ada produk tersedia.</p>
        @endif
    </div>
</section>

<!-- Script -->
<script>
    const loadMoreButton = document.getElementById('load-more');
    if (loadMoreButton) {
        loadMoreButton.addEventListener('click', () => {
            document.querySelectorAll('.more-games').forEach(el => el.classList.remove('hidden'));
            loadMoreButton.classList.add('hidden');
        });
    }
</script>
@endsection
