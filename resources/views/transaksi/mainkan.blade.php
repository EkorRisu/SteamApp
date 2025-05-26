@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-3">🎮 Mainkan Game</h1>
        <iframe src="{{ asset('games/' . $slug . '/index.html') }}" width="100%" height="600px" frameborder="0">
            Browser Anda tidak mendukung iframe.
        </iframe>
    </div>
@endsection