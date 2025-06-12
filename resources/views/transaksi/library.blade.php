@extends('layouts.user')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-gaming-purple via-gaming-dark to-gaming-blue py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-8">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4">Your Game Library</h1>
            <p class="text-lg text-gray-300">Access and manage your purchased games</p>
        </div>

        <!-- Navigation Buttons -->
        <div class="flex justify-center gap-4 mb-8">
            <a href="{{ route('home') }}" 
               class="px-8 py-3 bg-gaming-purple hover:bg-gaming-blue transition rounded-lg text-white font-semibold shadow-lg hover:scale-105 duration-200 flex items-center gap-2">
                <i class="fas fa-home"></i>
                <span>Store</span>
            </a>
            <a href="{{ route('transaksi.cart') }}" 
               class="px-8 py-3 bg-gaming-blue hover:bg-gaming-purple transition rounded-lg text-white font-semibold shadow-lg hover:scale-105 duration-200 flex items-center gap-2">
                <i class="fas fa-shopping-cart"></i>
                <span>Cart</span>
            </a>
        </div>
    </div>
</section>

<!-- Library Section -->
<section class="py-16 bg-gaming-dark text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @if($transaksis->isNotEmpty())
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($transaksis as $item)
                    <div class="bg-gaming-card rounded-xl overflow-hidden shadow-lg hover:shadow-gaming-purple/20 transition duration-300 transform hover:scale-105">
                        <!-- Game Thumbnail -->
                        <div class="relative h-48 overflow-hidden">
                            @if($item->produk->gambar)
                                <img src="{{ asset('storage/' . $item->produk->gambar) }}" alt="{{ $item->produk->nama }}" class="w-full h-full object-cover">
                            @else
                                <div class="w-full h-full bg-gaming-purple/30 flex items-center justify-center">
                                    <i class="fas fa-gamepad text-4xl text-gray-400"></i>
                                </div>
                            @endif
                            <!-- Game Status Badge -->
                            <div class="absolute top-4 right-4 px-3 py-1 bg-gaming-purple rounded-full text-sm">
                                {{ $item->status }}
                            </div>
                        </div>

                        <div class="p-6">
                            <h3 class="text-xl font-bold text-white mb-2">{{ $item->produk->nama }}</h3>
                            <!-- Game Details -->
                            <div class="mb-4 text-sm text-gray-400">
                                <p>Purchase Date: {{ $item->created_at->format('d M Y') }}</p>
                            </div>
                            
                            <div class="flex flex-wrap gap-3">
                                <a href="{{ route('user.library.play', $item->id) }}" 
                                   class="px-4 py-2 bg-gaming-purple hover:bg-gaming-blue transition rounded-lg text-white font-medium inline-flex items-center gap-2">
                                    <i class="fas fa-play"></i>
                                    <span>Play</span>
                                </a>
                                
                                <a href="{{ route('user.library.download', $item->id) }}" 
                                   class="px-4 py-2 bg-green-600 hover:bg-green-700 transition rounded-lg text-white font-medium inline-flex items-center gap-2">
                                    <i class="fas fa-download"></i>
                                    <span>Download</span>
                                </a>
                                
                                <form action="{{ route('user.library.delete', $item->id) }}" 
                                      method="POST" 
                                      onsubmit="return confirm('Are you sure you want to remove this game from your library?');" 
                                      class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="px-4 py-2 bg-red-600 hover:bg-red-700 transition rounded-lg text-white font-medium inline-flex items-center gap-2">
                                        <i class="fas fa-trash"></i>
                                        <span>Remove</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-12">
                <i class="fas fa-gamepad text-5xl text-gray-600 mb-4"></i>
                <p class="text-xl text-gray-400 mb-6">Your library is empty</p>
                <a href="{{ route('home') }}" 
                   class="inline-block px-8 py-3 bg-gaming-purple hover:bg-gaming-blue transition rounded-lg text-white font-semibold shadow-lg hover:scale-105 duration-200">
                    Browse Games
                </a>
            </div>
        @endif
    </div>
</section>
@endsection
