@extends('layouts.admin')

@section('content')
<div class="px-6 py-6">
    <h2 class="text-2xl font-semibold text-white mb-6">Overview</h2>

    <div class="bg-gray-800 rounded-lg shadow overflow-x-auto">
        <table class="min-w-full text-white table-auto">
            <thead class="bg-gray-700">
                <tr>
                    <th class="px-4 py-2 text-left">Gambar</th>
                    <th class="px-4 py-2 text-left">Kode Produk</th>
                    <th class="px-4 py-2 text-left">Nama Produk</th>
                    <th class="px-4 py-2 text-left">Harga</th>
                    <th class="px-4 py-2 text-left">Kategori</th>
                    <th class="px-4 py-2 text-left">Stok</th>
                    <th class="px-4 py-2 text-left">Platform</th>
                    <th class="px-4 py-2 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-gray-900 divide-y divide-gray-700">
                @forelse($produks as $produk)
                <tr>
                    <td class="px-4 py-2">
                        @if($produk->gambar)
                        <img src="{{ asset('storage/'.$produk->gambar) }}"
                        alt="{{ $produk->nama }}"
                        class="w-20 h-20 object-cover rounded"
                        onerror="this.src='{{ asset('images/default-game.jpg') }}'">
                        @else
                        <img src="{{ asset('images/default-game.jpg') }}" alt="Default Image"
                            class="w-20 h-20 object-cover rounded">
                        @endif
                    </td>
                    <td class="px-4 py-2">{{ $produk->kode_produk }}</td>
                    <td class="px-4 py-2 capitalize">{{ $produk->nama }}</td>
                    <td class="px-4 py-2">Rp {{ number_format($produk->harga, 2, ',', '.') }}</td>
                    <td class="px-4 py-2 capitalize">{{ $produk->kategori->nama ?? '-' }}</td>
                    <td class="px-4 py-2">{{ $produk->stok }}</td>
                    <td class="px-4 py-2 uppercase">{{ $produk->platform }}</td>
                    <td class="px-4 py-2 space-x-2">
                        <a href="{{ route('produk.edit', ['id' => $produk->id]) }}"
                            class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded">
                            Edit
                        </a>
                        <form action="{{ route('produk.destroy', $produk->id) }}" method="POST" class="inline-block"
                            onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="8" class="text-center px-4 py-4 text-gray-400">Tidak ada produk.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@push('scripts')
<script>
    function confirmDelete(id) {
    if (confirm('Yakin ingin menghapus produk ini?')) {
        const form = document.getElementById('deleteForm' + id);
        fetch(form.action, {
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Accept': 'application/json',
            },
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                window.location.reload();
            } else {
                alert('Gagal menghapus produk');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Terjadi kesalahan saat menghapus produk');
        });
    }
}
</script>
@endpush

@endsection