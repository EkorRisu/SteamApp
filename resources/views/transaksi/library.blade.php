@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">🎮 Library Game Kamu</h1>
        <div class="row">
            @forelse ($transaksis as $item)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->produk->nama }}</h5>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('user.library.play', $item->id) }}" class="btn btn-primary btn-sm">Mainkan</a>
                                <a href="{{ route('user.library.download', $item->id) }}" class="btn btn-success btn-sm">Download</a>
                                <form action="{{ route('user.library.delete', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus game ini dari library?');" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <p>Kamu belum memiliki game yang dapat dimainkan atau didownload.</p>
            @endforelse
        </div>
    </div>
@endsection
