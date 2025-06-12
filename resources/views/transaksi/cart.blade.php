@extends('layouts.user')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-gaming-purple via-gaming-dark to-gaming-blue py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-8">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4">Your Shopping Cart</h1>
            <p class="text-lg text-gray-300">Review and manage your game purchases</p>
        </div>

        <!-- Navigation Links -->
        <div class="flex justify-center gap-4 mb-8">
            <a href="{{ route('home') }}" 
               class="px-8 py-3 bg-gaming-purple hover:bg-gaming-blue transition rounded-lg text-white font-semibold shadow-lg hover:scale-105 duration-200 flex items-center gap-2">
                <i class="fas fa-home"></i>
                <span>Back to Store</span>
            </a>
            <a href="{{ route('transaksi.library') }}" 
               class="px-8 py-3 bg-gaming-blue hover:bg-gaming-purple transition rounded-lg text-white font-semibold shadow-lg hover:scale-105 duration-200 flex items-center gap-2">
                <i class="fas fa-book"></i>
                <span>My Library</span>
            </a>
            <a href="{{ route('transaksi.transaksi') }}" 
               class="px-8 py-3 bg-gaming-purple hover:bg-gaming-blue transition rounded-lg text-white font-semibold shadow-lg hover:scale-105 duration-200 flex items-center gap-2">
                <i class="fas fa-shopping-cart"></i>
                <span>Purchase History</span>
            </a>
        </div>

        @if(session('success'))
            <div class="mb-6 mx-auto max-w-4xl p-4 bg-green-500/20 border-l-4 border-green-500 text-green-400 rounded-lg">
                {{ session('success') }}
            </div>
        @endif
    </div>
</section>

<!-- Cart Section -->
<section class="py-16 bg-gaming-dark text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gaming-card rounded-xl overflow-hidden shadow-lg">
            <div class="overflow-x-auto">
                <table class="min-w-full">
                    <thead class="bg-gaming-darker">
                        <tr>
                            <th class="px-6 py-4 text-left text-white font-semibold">Game Code</th>
                            <th class="px-6 py-4 text-left text-white font-semibold">Name</th>
                            <th class="px-6 py-4 text-left text-white font-semibold">Price</th>
                            <th class="px-6 py-4 text-left text-white font-semibold">Status</th>
                            <th class="px-6 py-4 text-left text-white font-semibold">Added Date</th>
                            <th class="px-6 py-4 text-center text-white font-semibold">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gaming-darker">
                        @forelse($carts as $cart)
                            <tr class="hover:bg-gaming-darker/50 transition-colors duration-200">
                                <td class="px-6 py-4 text-gray-300">{{ $cart->kode_produk }}</td>
                                <td class="px-6 py-4 text-white font-medium">{{ $cart->nama_user }}</td>
                                <td class="px-6 py-4">
                                    <span class="text-gaming-purple font-bold">
                                        Rp {{ number_format($cart->harga, 0, ',', '.') }}
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium
                                        @if($cart->status == 'Selesai') bg-green-600/30 text-green-500
                                        @elseif($cart->status == 'Pending') bg-yellow-600/25 text-yellow-500
                                        @else bg-red-600/20 text-red-500 @endif">
                                        <i class="fas fa-circle text-xs mr-2"></i>
                                        {{ $cart->status }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-gray-300">
                                    {{ $cart->created_at->format('d M Y H:i') }}
                                </td>
                                <td class="px-6 py-4 text-center space-x-2">
                                    @if($cart->status == 'Pending')
                                        <!-- Purchase Button -->
                                        <form action="{{ route('transaksi.bayar') }}" method="POST" class="inline-block">
                                            @csrf
                                            <input type="hidden" name="cart_id" value="{{ $cart->id }}">
                                            <button type="submit" 
                                                    class="px-4 py-2 bg-gradient-to-r from-yellow-500 to-orange-500 hover:from-yellow-600 hover:to-orange-600 transition rounded-lg text-white font-medium inline-flex items-center gap-2 hover:scale-105 duration-200">
                                                <i class="fas fa-shopping-cart"></i>
                                                <span>Pay Now</span>
                                            </button>
                                        </form>
                                        
                                        <!-- Delete Button -->
                                        <form action="{{ route('transaksi.clearcart', $cart->id) }}" 
                                              method="GET" 
                                              class="inline-block"
                                              onsubmit="return confirm('Are you sure you want to delete this item?');">
                                            @csrf
                                            <button type="submit"
                                                    class="px-4 py-2 bg-red-600 hover:bg-red-700 transition rounded-lg text-white font-medium inline-flex items-center gap-2 hover:scale-105 duration-200">
                                                <i class="fas fa-trash"></i>
                                                <span>Delete</span>
                                            </button>
                                        </form>
                                    @elseif($cart->status == 'Selesai')
                                        <!-- Print Receipt Button -->
                                        <a href="{{ route('transaksi.cetak', $cart->id) }}"
                                           target="_blank"
                                           class="px-4 py-2 bg-gaming-purple hover:bg-gaming-blue transition rounded-lg text-white font-medium inline-flex items-center gap-2 hover:scale-105 duration-200">
                                            <i class="fas fa-print"></i>
                                            <span>Print Receipt</span>
                                        </a>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center px-6 py-12">
                                    <i class="fas fa-shopping-cart text-5xl text-gray-600 mb-4"></i>
                                    <p class="text-xl text-gray-400">Your cart is empty</p>
                                    <a href="{{ route('home') }}" 
                                       class="inline-block mt-4 px-6 py-2 bg-gaming-purple hover:bg-gaming-blue transition rounded-lg text-white font-medium hover:scale-105 duration-200">
                                        Browse Games
                                    </a>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection