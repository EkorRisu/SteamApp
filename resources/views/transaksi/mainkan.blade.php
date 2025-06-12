@extends('layouts.user')

@section('content')
<!-- Game Section -->
<section class="py-16 bg-gaming-dark min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Game Container -->
        <div class="bg-gaming-card rounded-xl overflow-hidden shadow-xl transition-transform hover:scale-[1.01]">
            <!-- Game Frame -->
                <iframe 
                    id="gameFrame"
                    src="{{ $gameUrl }}" 
                    class="w-full h-[800px]"
                    frameborder="0"
                    allowfullscreen>
                    <p class="text-white text-center">Browser Anda tidak mendukung iframe.</p>
                </iframe>
            </div>

            <!-- Game Info -->
            <div class="p-6 bg-gradient-to-r from-gaming-card to-gaming-card/90">
                <div class="flex items-center justify-between flex-wrap gap-4">
                    <div class="flex items-center space-x-4">
                        <h2 class="text-2xl font-bold text-white hover:text-gaming-purple transition-colors">
                            {{ $gameName }}
                        </h2>
                        <span class="px-4 py-2 bg-gaming-purple rounded-lg text-white text-sm animate-pulse">
                            <i class="fas fa-gamepad mr-2"></i>Now Playing
                        </span>
                    </div>
                    <div class="flex space-x-4">
                        <button onclick="window.history.back()" class="px-4 py-2 bg-gray-700 rounded-lg text-white hover:bg-gray-600 transition-colors">
                            <i class="fas fa-arrow-left mr-2"></i>Back
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
function toggleFullscreen() {
    const gameFrame = document.getElementById('gameFrame');
    if (!document.fullscreenElement) {
        if (gameFrame.requestFullscreen) {
            gameFrame.requestFullscreen();
        } else if (gameFrame.webkitRequestFullscreen) {
            gameFrame.webkitRequestFullscreen();
        } else if (gameFrame.msRequestFullscreen) {
            gameFrame.msRequestFullscreen();
        }
    } else {
        if (document.exitFullscreen) {
            document.exitFullscreen();
        } else if (document.webkitExitFullscreen) {
            document.webkitExitFullscreen();
        } else if (document.msExitFullscreen) {
            document.msExitFullscreen();
        }
    }
}
</script>
@endpush
@endsection