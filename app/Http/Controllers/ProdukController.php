<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    // Menampilkan semua produk (user)
    public function index()
    {
        $produks = Produk::all();  // Ambil semua produk
        return view('adminHome', ['produks' => $produks]);
    }

    // Menampilkan form tambah produk (admin)
    public function create()
    {
        $kategoris = Kategori::all(); // Ambil semua kategori
        return view('produk.create', compact('kategoris'));
    }

    // Menambah produk baru (admin)
    public function store(Request $request)
    {
        $request->validate([
            'kode_produk' => 'required|unique:produks',
            'nama' => 'required',
            'deskripsi' => 'nullable',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'kategori_id' => 'required|exists:kategoris,id', // Menggunakan kategori_id yang benar
            'platform' => 'required',
            'zip_file' => 'nullable|file|mimes:zip|max:10240',
            'gambar' => 'nullable|image|max:2048',  // Validasi gambar
        ]);

        try {
            // Menangani upload file ZIP dan gambar
            $uploadedFiles = $this->handleFileUpload($request);

            // Menyimpan data produk baru
            Produk::create(array_merge($request->only([
                'kode_produk',
                'nama',
                'deskripsi',
                'harga',
                'stok',
                'kategori_id',
                'platform',
            ]), $uploadedFiles));

            return redirect()->route('adminHome')->with('success', 'Produk berhasil ditambahkan');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    // Edit produk (admin)
    public function edit($id)
    {
        $produk = Produk::find($id);
        $kategoris = Kategori::all(); // Ambil semua kategori
        return view('produk.edit', compact('produk', 'kategoris'));
    }

    // Update produk (admin)
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'nullable',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'kategori_id' => 'required|exists:kategoris,id',
            'platform' => 'required',
            'zip_file' => 'nullable|file|mimes:zip|max:10240',
            'gambar' => 'nullable|image|max:2048',
        ]);

        $produk = Produk::find($id);

        try {
            // Menangani upload file ZIP dan gambar
            $uploadedFiles = $this->handleFileUpload($request, $produk);

            // Update produk dengan data baru
            $produk->update(array_merge($request->only([
                'nama',
                'deskripsi',
                'harga',
                'stok',
                'kategori_id',
                'platform',
            ]), $uploadedFiles));

            return redirect()->route('adminHome')->with('success', 'Produk berhasil diperbarui');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    // Hapus produk (admin)
    public function destroy($id)
    {
        $produk = Produk::find($id);

        // Hapus file terkait dari storage
        if ($produk->gambar) {
            Storage::disk('public')->delete($produk->gambar);
        }
        if ($produk->zip_file) {
            Storage::disk('public')->delete($produk->zip_file);
        }
        $slug = $produk->kode_produk;
        $gameFolder = public_path('games/' . $slug);
        if (file_exists($gameFolder)) {
            rmdir($gameFolder); // Hapus folder game jika ada
        }

        $produk->delete();

        return redirect()->route('adminHome')->with('success', 'Produk berhasil dihapus');
    }

    // Metode untuk menangani upload file
    private function handleFileUpload($request, $produk = null)
    {
        $data = [];
        if ($request->hasFile('zip_file')) {
            $slug = $request->kode_produk ?? $produk->kode_produk;

            // Simpan file ZIP ke storage/app/public/games_zip
            $zipPath = $request->file('zip_file')->storeAs(
                'games_zip',
                $slug . '.zip',
                'public'
            );

            // Ekstrak file ZIP ke public/games/{slug}
            $extractPath = public_path('games/' . $slug);
            if (!file_exists($extractPath)) {
                mkdir($extractPath, 0755, true);
            }

            $zip = new \ZipArchive;
            if ($zip->open(storage_path('app/public/' . $zipPath)) === TRUE) {
                $zip->extractTo($extractPath);
                $zip->close();
            } else {
                throw new \Exception('Gagal mengekstrak file ZIP.');
            }

            // Simpan path ZIP ke database
            $data['zip_file'] = 'storage/' . $zipPath; // agar bisa diakses publik
        }


        // Menangani gambar
        if ($request->hasFile('gambar')) {
            if ($produk && $produk->gambar) {
                Storage::disk('public')->delete($produk->gambar); // Hapus gambar lama
            }
            $data['gambar'] = $request->file('gambar')->store('gambar-produk', 'public');
        }

        return $data;
    }
}
