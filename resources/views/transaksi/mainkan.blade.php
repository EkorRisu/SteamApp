@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1 class="mb-3">🎮 {{ $gameName }}</h1>
        </div>
        <div class="card-body">
            <iframe 
                src="{{ $gameUrl }}" 
                width="100%" 
                height="600px" 
                frameborder="0"
                allowfullscreen>
                Browser Anda tidak mendukung iframe.
            </iframe>
        </div>
    </div>
</div>
@endsection