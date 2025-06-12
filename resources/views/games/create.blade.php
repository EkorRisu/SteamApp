@extends('layouts.user')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gaming-dark px-4 py-10">
    <div class="w-full max-w-4xl bg-gaming-card rounded-xl shadow-xl">
        <div class="p-8">
            <h2 class="text-3xl font-bold text-white mb-6">Upload Your Game</h2>

            @if($errors->any())
            <div class="mb-6 p-4 bg-red-500/20 border-l-4 border-red-500 text-red-400 rounded-lg">
                <ul class="list-disc ml-4">
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            @if(session('error'))
            <div class="mb-6 p-4 bg-red-500/20 border-l-4 border-red-500 text-red-400 rounded-lg">
                {{ session('error') }}
            </div>
            @endif

            <form action="{{ route('games.store') }}" 
                  method="POST" 
                  enctype="multipart/form-data" 
                  class="space-y-6">
                @csrf

                <!-- Game Name -->
                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">Game Name</label>
                    <input type="text" name="nama" required
                           class="w-full px-4 py-3 rounded-lg bg-gaming-darker border border-gaming-purple/50 text-white focus:ring-2 focus:ring-gaming-purple focus:border-transparent">
                </div>

                <!-- ID -->
                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">ID</label>
                    <input type="text" name="id" required
                           class="w-full px-4 py-3 rounded-lg bg-gaming-darker border border-gaming-purple/50 text-white focus:ring-2 focus:ring-gaming-purple focus:border-transparent">
                </div>


                <!-- Price -->
                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">Price (Rp)</label>
                    <input type="number" name="harga" required
                           class="w-full px-4 py-3 rounded-lg bg-gaming-darker border border-gaming-purple/50 text-white focus:ring-2 focus:ring-gaming-purple focus:border-transparent">
                </div>

                <!-- Category -->
                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">Category</label>
                    <select name="kategori_id" required
                            class="w-full px-4 py-3 rounded-lg bg-gaming-darker border border-gaming-purple/50 text-white focus:ring-2 focus:ring-gaming-purple focus:border-transparent">
                        <option value="">Select Category</option>
                        @foreach($kategoris as $kategori)
                        <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Platform Field -->
                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">Platform</label>
                    <select name="platform" required 
                            class="w-full px-4 py-3 rounded-lg bg-gaming-darker border border-gaming-purple/50 text-white focus:ring-2 focus:ring-gaming-purple focus:border-transparent">
                        <option value="">Select Platform</option>
                        <option value="pc">PC</option>
                        <option value="mobile">Mobile</option>
                        <option value="console">Console</option>
                    </select>
                </div>

                <!-- Game File -->
                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">Game File (ZIP)</label>
                    <input type="file" name="zip_file" accept=".zip" required
                           class="w-full px-4 py-3 rounded-lg bg-gaming-darker border border-gaming-purple/50 text-white focus:ring-2 focus:ring-gaming-purple focus:border-transparent">
                    <p class="mt-1 text-sm text-gray-400">Upload your game files in ZIP format (max 50MB)</p>
                </div>

                <!-- Game Image -->
                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">Game Image</label>
                    <input type="file" name="gambar" accept="image/*" required
                           class="w-full px-4 py-3 rounded-lg bg-gaming-darker border border-gaming-purple/50 text-white focus:ring-2 focus:ring-gaming-purple focus:border-transparent">
                    <p class="mt-1 text-sm text-gray-400">Upload a cover image for your game (max 2MB)</p>
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end gap-4">
                    <a href="{{ route('home') }}" 
                       class="px-6 py-3 bg-gray-600 hover:bg-gray-700 rounded-lg text-white font-medium">
                        Cancel
                    </a>
                    <button type="submit" 
                            class="px-6 py-3 bg-gaming-purple hover:bg-gaming-blue transition rounded-lg text-white font-medium">
                        Upload Game
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection