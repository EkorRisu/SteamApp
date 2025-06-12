@extends('layouts.admin')

@section('content')
<section class="bg-gaming-dark min-h-screen p-6">
    <div class="max-w-7xl mx-auto">
        <!-- Header Section -->
        <div class="flex justify-between items-center mb-8 bg-gaming-card p-6 rounded-xl shadow-lg">
            <div>
                <h2 class="text-4xl font-bold text-white mb-2">Category Management</h2>
                <p class="text-gray-400 text-lg">Manage your game categories</p>
            </div>
            <a href="{{ route('kategori.create') }}" 
               class="px-6 py-3 bg-gaming-purple hover:bg-gaming-blue transition-all duration-300 rounded-lg text-white font-semibold flex items-center gap-3 shadow-lg hover:shadow-gaming-purple/50 transform hover:scale-105">
                <i class="fas fa-plus-circle text-lg"></i>
                <span>Add New Category</span>
            </a>
        </div>

        <!-- Table Card -->
        <div class="bg-gaming-card rounded-xl overflow-hidden shadow-xl border border-gaming-darker/30">
            <div class="overflow-x-auto">
                <table class="min-w-full">
                    <thead class="bg-gaming-darker">
                        <tr>
                            <th class="px-6 py-4 text-left text-white font-semibold">Category Name</th>
                            <th class="px-6 py-4 text-left text-white font-semibold">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gaming-darker">
                        @forelse($kategoris as $kategori)
                        <tr class="hover:bg-gaming-darker/50 transition-colors duration-200">
                            <td class="px-6 py-4 text-white font-medium">{{ $kategori->nama }}</td>
                            <td class="px-6 py-4 space-x-2">
                                <a href="{{ route('kategori.edit', $kategori->id) }}"
                                   class="px-4 py-2 bg-gaming-purple hover:bg-gaming-blue transition-all duration-300 rounded-lg text-white inline-flex items-center gap-2 hover:shadow-lg hover:scale-105">
                                    <i class="fas fa-edit"></i>
                                    <span>Edit</span>
                                </a>
                                <form action="{{ route('kategori.destroy', $kategori->id) }}" 
                                      method="POST" 
                                      class="inline-block"
                                      id="deleteForm{{ $kategori->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button"
                                            onclick="confirmDelete({{ $kategori->id }})"
                                            class="px-4 py-2 bg-red-600 hover:bg-red-700 transition-all duration-300 rounded-lg text-white inline-flex items-center gap-2 hover:shadow-lg hover:scale-105">
                                        <i class="fas fa-trash-alt"></i>
                                        <span>Delete</span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="2" class="text-center px-6 py-8 text-gray-400">
                                <i class="fas fa-folder-open text-4xl mb-3"></i>
                                <p class="text-lg">No categories available.</p>
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
    if (confirm('Are you sure you want to delete this category? This action cannot be undone.')) {
        document.getElementById('deleteForm' + id).submit();
    }
}
</script>
@endpush

@endsection