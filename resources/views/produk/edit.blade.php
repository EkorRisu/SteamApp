@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Header -->
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Edit Produk</h2>
        <p class="text-gray-600">Update informasi produk game</p>
    </div>

    <!-- Error Messages -->
    @if ($errors->any())
    <div class="bg-red-50 border-l-4 border-red-500 p-4 mb-6">
        <div class="flex">
            <div class="flex-shrink-0">
                <svg class="h-5 w-5 text-red-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                        clip-rule="evenodd" />
                </svg>
            </div>
            <div class="ml-3">
                <h3 class="text-sm font-medium text-red-800">Terdapat beberapa kesalahan:</h3>
                <ul class="mt-2 text-sm text-red-700 list-disc list-inside">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    @endif

    <form action="{{ route('produk.update', $produk->id) }}" method="POST" enctype="multipart/form-data" class="bg-white shadow-md rounded-lg p-6">
    @csrf
    @method('PUT')

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Kode Produk -->
            <div class="form-group">
                <label class="block text-sm font-medium text-gray-700 mb-2" for="kode_produk">
                    Kode Produk
                </label>
                <input type="text" name="kode_produk" id="kode_produk"
                    class="form-control @error('kode_produk') is-invalid @enderror"
                    value="{{ old('kode_produk', $produk->kode_produk) }}" required>
            </div>

            <!-- Nama Produk -->
            <div class="form-group">
                <label class="block text-sm font-medium text-gray-700 mb-2" for="nama">
                    Nama Produk
                </label>
                <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror"
                    value="{{ old('nama', $produk->nama) }}" required>
            </div>

            <!-- Harga -->
            <div class="form-group">
                <label class="block text-sm font-medium text-gray-700 mb-2" for="harga">
                    Harga
                </label>
                <input type="number" name="harga" id="harga" class="form-control @error('harga') is-invalid @enderror"
                    value="{{ old('harga', $produk->harga) }}" required>
            </div>

            <!-- Stok -->
            <div class="form-group">
                <label class="block text-sm font-medium text-gray-700 mb-2" for="stok">
                    Stok
                </label>
                <input type="number" name="stok" id="stok" class="form-control @error('stok') is-invalid @enderror"
                    value="{{ old('stok', $produk->stok) }}" required>
            </div>

            <!-- Kategori -->
            <div class="form-group">
                <label class="block text-sm font-medium text-gray-700 mb-2" for="kategori">
                    Kategori
                </label>
                <select name="kategori_id" id="kategori" class="form-control @error('kategori_id') is-invalid @enderror"
                    required>
                    <option value="">Pilih Kategori</option>
                    @foreach($kategoris as $kategori)
                    <option value="{{ $kategori->id }}" {{ old('kategori_id', $produk->kategori_id) == $kategori->id ?
                        'selected' : '' }}>
                        {{ $kategori->nama }}
                    </option>
                    @endforeach
                </select>
            </div>

            <!-- Platform -->
            <div class="form-group">
                <label class="block text-sm font-medium text-gray-700 mb-2" for="platform">
                    Platform
                </label>
                <input type="text" name="platform" id="platform"
                    class="form-control @error('platform') is-invalid @enderror"
                    value="{{ old('platform', $produk->platform) }}" required>
            </div>

            <!-- Gambar Produk -->
            <div class="form-group">
                <label class="block text-sm font-medium text-gray-700 mb-2" for="gambar">
                    Gambar Produk
                </label>
                <input type="file" name="gambar" id="gambar" class="form-control" accept="image/*">
                @if($produk->gambar)
                <div class="mt-2">
                    <img src="{{ asset('storage/' . $produk->gambar) }}" alt="Gambar Produk" style="max-width: 200px;">
                </div>
                @endif
            </div>
        </div>

        @if($produk->zip_file)
        <div class="mt-4">
            <p class="text-sm text-gray-600">File ZIP sudah ada: <strong>{{ $produk->zip_file }}</strong></p>
        </div>
        @endif

        <div class="mt-6">
            <button type="submit" class="btn btn-primary">
                Simpan Perubahan
            </button>
        </div>
    </form>
</div>
@endsection