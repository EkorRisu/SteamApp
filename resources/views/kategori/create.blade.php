@extends('layouts.admin')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-b from-purple-300 to-blue-200 px-4 py-10">
    <div class="w-full max-w-4xl bg-white bg-opacity-10 rounded-3xl shadow-2xl backdrop-blur-sm flex flex-col md:flex-row overflow-hidden">
        
        <!-- Left: Icon and Title -->
        <div class="md:w-1/2 bg-transparent p-10 flex flex-col justify-center items-center text-center">
            <i class="fas fa-folder-plus text-6xl text-purple-800 mb-4"></i>
            <h2 class="text-3xl font-extrabold text-purple-800">Add New Category</h2>
            <p class="text-gray-600 mt-2">Create a new category for your games</p>
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

            <form action="{{ route('kategori.store') }}" method="POST" class="space-y-6">
                @csrf
                
                <!-- Nama Kategori -->
                <div>
                    <label for="nama" class="block mb-2 text-sm text-gray-600">Category Name</label>
                    <input type="text" 
                           name="nama" 
                           id="nama"
                           class="w-full px-4 py-3 rounded-xl bg-white bg-opacity-30 text-gray-900 placeholder-gray-500 focus:ring-2 focus:ring-purple-400"
                           placeholder="Enter category name"
                           required>
                </div>

                <!-- Action Buttons -->
                <div class="flex gap-4">
                    <button type="submit"
                            class="flex-1 bg-gradient-to-r from-purple-400 to-blue-400 hover:from-purple-500 hover:to-blue-500 text-white font-bold py-3 rounded-xl shadow-md transition-all duration-300">
                        Save Category
                    </button>
                    <a href="{{ route('kategori.index') }}"
                       class="flex-1 bg-gray-500 hover:bg-gray-600 text-white font-bold py-3 rounded-xl shadow-md transition-all duration-300 text-center">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection