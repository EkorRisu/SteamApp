@extends('layouts.admin')

@section('content')
<section class="bg-gaming-dark min-h-screen p-6">
    <div class="max-w-7xl mx-auto">
        <!-- Header Section with improved styling -->
        <div class="flex justify-between items-center mb-8 bg-gaming-card p-6 rounded-xl shadow-lg">
            <div>
                <h2 class="text-4xl font-bold text-white mb-2">Game Management</h2>
                <p class="text-gray-400 text-lg">Manage your game inventory</p>
            </div>
            <a href="{{ route('produk.create') }}" 
               class="px-6 py-3 bg-gaming-purple hover:bg-gaming-blue transition-all duration-300 rounded-lg text-white font-semibold flex items-center gap-3 shadow-lg hover:shadow-gaming-purple/50 transform hover:scale-105">
                <i class="fas fa-plus-circle text-lg"></i>
                <span>Add New Game</span>
            </a>
        </div>

        <!-- Table Card with improved styling -->
        <div class="bg-gaming-card rounded-xl overflow-hidden shadow-xl border border-gaming-darker/30">
            <div class="overflow-x-auto">
                <table class="min-w-full">
                    <thead class="bg-gaming-darker">
                        <tr>
                            <th class="px-6 py-4 text-left text-white font-semibold">Image</th>
                            <th class="px-6 py-4 text-left text-white font-semibold">Code</th>
                            <th class="px-6 py-4 text-left text-white font-semibold">Name</th>
                            <th class="px-6 py-4 text-left text-white font-semibold">Price</th>
                            <th class="px-6 py-4 text-left text-white font-semibold">Category</th>
                            <th class="px-6 py-4 text-left text-white font-semibold">Stock</th>
                            <th class="px-6 py-4 text-left text-white font-semibold">Platform</th>
                            <th class="px-6 py-4 text-left text-white font-semibold">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gaming-darker">
                        @forelse($produks as $produk)
                        <tr class="hover:bg-gaming-darker/50 transition-colors duration-200">
                            <td class="px-6 py-4">
                                @if($produk->gambar)
                                    <img src="{{ asset('storage/'.$produk->gambar) }}"
                                         alt="{{ $produk->nama }}"
                                         class="w-24 h-24 object-cover rounded-lg shadow-lg hover:scale-105 transition-transform duration-200"
                                         onerror="this.src='{{ asset('images/default-game.jpg') }}'">
                                @else
                                    <div class="w-24 h-24 rounded-lg bg-gradient-to-r from-gaming-purple to-gaming-blue flex items-center justify-center shadow-lg">
                                        <i class="fas fa-gamepad text-3xl text-white opacity-60"></i>
                                    </div>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-gray-300">{{ $produk->kode_produk }}</td>
                            <td class="px-6 py-4 text-white font-medium capitalize">{{ $produk->nama }}</td>
                            <td class="px-6 py-4 text-white font-medium capitalize">
                                <span class="text-gaming-purple font-bold text-lg">
                                    Rp {{ number_format($produk->harga, 2, ',', '.') }}
                                </span>
                            </td>
                            <td class="px-6 py-4 text-white font-medium capitalize">
                                <span class="px-4 py-1 bg-gaming-purple/20 rounded-full text-gaming-purple capitalize">
                                    {{ $produk->kategori->nama ?? '-' }}
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <span class="px-4 py-1 rounded-full text-sm font-medium
                                    @if($produk->stok > 10) bg-green-600/20 text-green-400
                                    @elseif($produk->stok > 0) bg-yellow-600/20 text-yellow-400
                                    @else bg-red-600/20 text-red-400 @endif">
                                    {{ $produk->stok }} units
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <span class="text-white uppercase font-medium">{{ $produk->platform }}</span>
                            </td>
                            <td class="px-6 py-4 space-x-2">
                                <a href="{{ route('produk.edit', ['id' => $produk->id]) }}"
                                   class="px-4 py-2 bg-gaming-purple hover:bg-gaming-blue transition-all duration-300 rounded-lg text-white inline-flex items-center gap-2 hover:shadow-lg hover:scale-105">
                                    <i class="fas fa-edit"></i>
                                    <span>Edit</span>
                                </a>
                                <form action="{{ route('produk.destroy', $produk->id) }}" 
                                      method="POST" 
                                      class="inline-block"
                                      id="deleteForm{{ $produk->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button"
                                            onclick="confirmDelete({{ $produk->id }})"
                                            class="px-4 py-2 bg-red-600 hover:bg-red-700 transition-all duration-300 rounded-lg text-white inline-flex items-center gap-2 hover:shadow-lg hover:scale-105">
                                        <i class="fas fa-trash-alt"></i>
                                        <span>Delete</span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8" class="text-center px-6 py-8 text-gray-400">
                                <i class="fas fa-game-console-handheld text-4xl mb-3"></i>
                                <p class="text-lg">No games available.</p>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
function confirmDelete(id) {
    if (confirm('Are you sure you want to delete this game? This action cannot be undone.')) {
        document.getElementById('deleteForm' + id).submit();
    }
}
</script>
@endpush

@endsection