<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    // Menambahkan middleware 'auth' untuk melindungi halaman
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Halaman utama user
    public function index(): View
    {
        $produks = Produk::all(); // Ambil semua produk
        return view('home', compact('produks')); // Kirim ke view home
    }

    // Halaman admin untuk menampilkan produk
    public function adminHome(): View
    {
        $produks = Produk::all(); // Mengambil semua data produk
        return view('adminHome', compact('produks')); // Kirim ke view adminHome
    }

    // Halaman admin untuk menambah produk
    public function create(): View
    {
        return view('produk.create');
    }

    // Simpan produk baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'nullable',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'kategori' => 'required',
            'platform' => 'required',
            'gambar' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('gambar-produk', 'public');
        }

        // Simpan produk baru
        Produk::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'kategori' => $request->kategori,
            'platform' => $request->platform,
            'gambar' => $gambarPath ?? null,
        ]);

        return redirect()->route('adminHome')->with('success', 'Produk berhasil ditambahkan');
    }

    // Halaman admin untuk mengedit produk
    public function edit($id): View
    {
        $produk = Produk::findOrFail($id);
        return view('produk.edit', compact('produk'));
    }

    // Update produk
    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_produk' => 'required|unique:produks',
            'nama' => 'required',
            'deskripsi' => 'nullable',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'kategori' => 'required',
            'platform' => 'required',
            'gambar' => 'nullable|image|max:2048',
        ]);

        $produk = Produk::findOrFail($id);

        // Generate kode_produk otomatis
        

        // Menyimpan gambar baru jika ada
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('gambar-produk', 'public');
        }

        // Update produk dengan data baru
        $produk->update([
            'kode_produk' => $request->kode_produk,
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'kategori' => $request->kategori,
            'platform' => $request->platform,
            'gambar' => $gambarPath ?? $produk->gambar,  // Jika tidak ada gambar baru, tetap pakai gambar lama
        ]);

        return redirect()->route('adminHome')->with('success', 'Produk berhasil diperbarui');
    }

    // Hapus produk
    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();

        return redirect()->route('adminHome')->with('success', 'Produk berhasil dihapus');
    }
}
