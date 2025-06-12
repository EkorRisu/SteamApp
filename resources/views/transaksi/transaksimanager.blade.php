@extends('layouts.admin')

@section('content')
<section class="bg-gaming-dark min-h-screen p-6">
    <div class="max-w-7xl mx-auto">
        <!-- Header Section -->
        <div class="flex justify-between items-center mb-8 bg-gaming-card p-6 rounded-xl shadow-lg">
            <div>
                <h2 class="text-4xl font-bold text-white mb-2">Transaction Management</h2>
                <p class="text-gray-400 text-lg">Monitor and manage game purchases</p>
            </div>
            <a href="{{ route('adminHome') }}" 
               class="px-6 py-3 bg-gaming-purple hover:bg-gaming-blue transition-all duration-300 rounded-lg text-white font-semibold flex items-center gap-3 shadow-lg hover:shadow-gaming-purple/50 transform hover:scale-105">
                <i class="fas fa-home text-lg"></i>
                <span>Dashboard</span>
            </a>
        </div>

        @if(session('success'))
            <div class="mb-6 p-4 bg-green-500/20 border-l-4 border-green-500 text-green-400 rounded-lg">
                {{ session('success') }}
            </div>
        @endif

        <!-- Table Card -->
        <div class="bg-gaming-card rounded-xl overflow-hidden shadow-xl border border-gaming-darker/30">
            <div class="overflow-x-auto">
                <table class="min-w-full">
                    <thead class="bg-gaming-darker">
                        <tr>
                            <th class="px-6 py-4 text-left text-white font-semibold">Ticket Code</th>
                            <th class="px-6 py-4 text-left text-white font-semibold">Buyer Name</th>
                            <th class="px-6 py-4 text-left text-white font-semibold">Price</th>
                            <th class="px-6 py-4 text-left text-white font-semibold">Status</th>
                            <th class="px-6 py-4 text-left text-white font-semibold">Transaction Date</th>
                            <th class="px-6 py-4 text-center text-white font-semibold">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gaming-darker">
                        @forelse($transaksis as $transaksi)
                            <tr class="hover:bg-gaming-darker/50 transition-colors duration-200">
                                <td class="px-6 py-4 text-gray-300">{{ $transaksi->kode_produk }}</td>
                                <td class="px-6 py-4 text-white font-medium">{{ $transaksi->nama_user }}</td>
                                <td class="px-6 py-4">
                                    <span class="text-gaming-purple font-bold">
                                        Rp {{ number_format($transaksi->harga, 2, ',', '.') }}
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="px-4 py-1 rounded-full text-sm font-medium
                                        @if($transaksi->status == 'Selesai') bg-green-500/20 text-green-400
                                        @elseif($transaksi->status == 'Pending') bg-yellow-500/20 text-yellow-400
                                        @else bg-red-500/20 text-red-400 @endif">
                                        {{ $transaksi->status }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-gray-300">
                                    {{ $transaksi->created_at->format('d M Y H:i') }}
                                </td>
                                <td class="px-6 py-4 text-center space-x-2">
                                    <form action="{{ route('transaksi.konfirmasi', $transaksi->id) }}" 
                                          method="POST" 
                                          class="inline-block">
                                        @csrf
                                        <button type="submit"
                                                class="px-4 py-2 bg-green-600 hover:bg-green-700 transition-all duration-300 rounded-lg text-white inline-flex items-center gap-2 hover:shadow-lg hover:scale-105">
                                            <i class="fas fa-check"></i>
                                            <span>Confirm</span>
                                        </button>
                                    </form>

                                    <form action="{{ route('transaksi.batal', $transaksi->id) }}" 
                                          method="POST" 
                                          class="inline-block">
                                        @csrf
                                        <button type="button"
                                                onclick="confirmCancel(this)"
                                                class="px-4 py-2 bg-red-600 hover:bg-red-700 transition-all duration-300 rounded-lg text-white inline-flex items-center gap-2 hover:shadow-lg hover:scale-105">
                                            <i class="fas fa-times"></i>
                                            <span>Cancel</span>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center px-6 py-8 text-gray-400">
                                    <i class="fas fa-receipt text-4xl mb-3"></i>
                                    <p class="text-lg">No transactions available.</p>
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
function confirmCancel(button) {
    if (confirm('Are you sure you want to cancel this transaction? This action cannot be undone.')) {
        button.closest('form').submit();
    }
}
</script>
@endpush

@endsection