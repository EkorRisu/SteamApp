@extends('layouts.admin')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-b from-purple-300 to-blue-200 px-4 py-10">
    <div
        class="w-full max-w-4xl bg-white bg-opacity-10 rounded-3xl shadow-2xl backdrop-blur-sm flex flex-col md:flex-row overflow-hidden">

        <!-- Left: Icon and Title -->
        <div class="md:w-1/2 bg-transparent p-10 flex flex-col justify-center items-center text-center">
            <img src="{{ asset('images/icon.svg') }}" alt="Play Icon" class="w-20 h-20">
            <h2 class="text-3xl font-extrabold text-purple-800">Add New Game</h2>
            <p class="text-gray-600 mt-2">Add a new game to your store</p>
        </div>

        <!-- Right: Form -->
        <div class="md:w-1/2 bg-white bg-opacity-20 rounded-3xl p-10">
            @if($errors->any())
            <div class="mb-4 p-4 bg-red-100 border-l-4 border-red-500 text-red-700">
                <ul class="list-disc ml-4">
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf

                <!-- Kode Produk -->
                <div>
                    <input type="text" name="kode_produk" id="kode_produk"
                        class="w-full px-4 py-3 rounded-xl bg-white bg-opacity-30 text-gray-900 placeholder-gray-500 focus:ring-2 focus:ring-purple-400"
                        value="{{ old('kode_produk') }}" placeholder="Product Code" required>
                </div>

                <!-- Nama -->
                <div>
                    <input type="text" name="nama" id="nama"
                        class="w-full px-4 py-3 rounded-xl bg-white bg-opacity-30 text-gray-900 placeholder-gray-500 focus:ring-2 focus:ring-purple-400"
                        value="{{ old('nama') }}" placeholder="Game Name" required>
                </div>

                <!-- Harga -->
                <div>
                    <input type="number" name="harga" id="harga"
                        class="w-full px-4 py-3 rounded-xl bg-white bg-opacity-30 text-gray-900 placeholder-gray-500 focus:ring-2 focus:ring-purple-400"
                        value="{{ old('harga') }}" placeholder="Price" required>
                </div>

                <!-- Stok -->
                <div>
                    <input type="number" name="stok" id="stok"
                        class="w-full px-4 py-3 rounded-xl bg-white bg-opacity-30 text-gray-900 placeholder-gray-500 focus:ring-2 focus:ring-purple-400"
                        value="{{ old('stok') }}" placeholder="Stock" required>
                </div>

                <!-- Kategori -->
                <div>
                    <select name="kategori_id"
                        class="w-full px-4 py-3 rounded-xl bg-white bg-opacity-30 text-gray-900 focus:ring-2 focus:ring-purple-400"
                        required>
                        <option value="">Select Category</option>
                        @foreach($kategoris as $kategori)
                        <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Platform -->
                <div>
                    <select name="platform" id="platform"
                        class="w-full px-4 py-3 rounded-xl bg-white bg-opacity-30 text-gray-900 focus:ring-2 focus:ring-purple-400"
                        required>
                        <option value="">Select Platform</option>
                        <option value="pc" {{ old('platform')=='pc' ? 'selected' : '' }}>PC</option>
                        <option value="mobile" {{ old('platform')=='mobile' ? 'selected' : '' }}>Mobile</option>
                        <option value="console" {{ old('platform')=='console' ? 'selected' : '' }}>Console</option>
                    </select>
                </div>

                <!-- Game File -->
                <div>
                    <label class="block mb-2 text-sm text-gray-600">Game File (ZIP)</label>
                    <input type="file" name="zip_file" id="file_game"
                        class="w-full px-4 py-3 rounded-xl bg-white bg-opacity-30 text-gray-900 focus:ring-2 focus:ring-purple-400"
                        accept=".zip">
                </div>

                <!-- Product Image -->
                <div>
                    <label class="block mb-2 text-sm text-gray-600">Product Image</label>
                    <input type="file" name="gambar" id="gambar"
                        class="w-full px-4 py-3 rounded-xl bg-white bg-opacity-30 text-gray-900 focus:ring-2 focus:ring-purple-400"
                        accept="image/*">
                </div>

                <!-- Submit Button -->
                <div>
                    <button type="submit"
                        class="w-full bg-gradient-to-r from-purple-400 to-blue-400 hover:from-purple-500 hover:to-blue-500 text-white font-bold py-3 rounded-xl shadow-md transition-all duration-300">
                        Save Game
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection