@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Tambah Game</h2>
        <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="kode_produk">Kode Produk</label>
                <input type="text" name="kode_produk" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" name="harga" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="number" name="stok" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="kategori">Kategori</label>
                <select name="kategori_id" class="form-control" required>
                    <option value="">Pilih Kategori</option>
                    <!-- Loop through categories from the database -->
                    @foreach($kategoris as $kategori)
                        <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="platform">Platform</label>
                <input type="text" name="platform" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="file_game">File Game (ZIP)</label>
                <input type="file" class="form-control" name="zip_file" accept=".zip">

            </div>

            <div class="form-group">
                <label for="gambar">Gambar Produk</label>
                <input type="file" name="gambar" class="form-control" accept="image/*">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection