<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Exception;

class ProdukController extends Controller
{
    private const SUCCESS_MESSAGE = [
        'store' => 'Produk berhasil ditambahkan',
        'update' => 'Produk berhasil diperbarui',
        'delete' => 'Produk berhasil dihapus'
    ];

    // Validasi rules yang digunakan berulang
    private const VALIDATION_RULES = [
        'nama' => 'required',
        'deskripsi' => 'nullable',
        'harga' => 'required|numeric',
        'stok' => 'required|integer',
        'kategori_id' => 'required|exists:kategoris,id',
        'platform' => 'required',
        'zip_file' => 'nullable|file|mimes:zip|max:50000',  // Maksimal 50MB
        'gambar' => 'nullable|image|max:2048',
    ];

    public function index()
    {
        $produks = Produk::with('kategori')->get();  // Eager loading untuk optimasi
        return view('adminHome', compact('produks'));
    }

    public function create()
    {
        $kategoris = Kategori::all();
        return view('produk.create', compact('kategoris'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate(array_merge(
            self::VALIDATION_RULES,
            ['kode_produk' => 'required|unique:produks']
        ));

        try {
            $uploadedFiles = $this->handleFileUpload($request);
            
            Produk::create(array_merge($validatedData, $uploadedFiles));

            return redirect()->route('adminHome')
                           ->with('success', self::SUCCESS_MESSAGE['store']);
        } catch (Exception $e) {
            return $this->handleError($e);
        }
    }

    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        $kategoris = Kategori::all();
        return view('produk.edit', compact('produk', 'kategoris'));
    }

    public function update(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);
        
        $validatedData = $request->validate([
            'kode_produk' => 'required',
            'nama' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'kategori_id' => 'required|exists:kategoris,id',
            'platform' => 'required'
        ]);

        try {
            $uploadedFiles = $this->handleFileUpload($request, $produk);
            $produk->update(array_merge($validatedData, $uploadedFiles));

            return redirect()->route('adminHome')
                            ->with('success', 'Produk berhasil diperbarui');
        } catch (Exception $e) {
            return redirect()->back()
                            ->withInput()
                            ->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        try {
            $produk = Produk::findOrFail($id);
            $this->deleteAssociatedFiles($produk);
            $produk->delete();

            return redirect()->route('adminHome')
                            ->with('success', self::SUCCESS_MESSAGE['delete']);
        } catch (Exception $e) {
            return redirect()->back()
                            ->withErrors(['error' => 'Gagal menghapus produk: ' . $e->getMessage()]);
        }
    }

    private function deleteAssociatedFiles(Produk $produk)
    {
        if ($produk->gambar) {
            Storage::disk('public')->delete($produk->gambar);
        }
        if ($produk->zip_file) {
            Storage::disk('public')->delete($produk->zip_file);
        }

        $gameFolder = public_path("games/{$produk->kode_produk}");
        if (File::exists($gameFolder)) {
            File::deleteDirectory($gameFolder);  // Lebih aman daripada rmdir
        }
    }

    private function handleFileUpload($request, $produk = null)
    {
        $data = [];
        
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($produk && $produk->gambar) {
                Storage::disk('public')->delete($produk->gambar);
            }
            
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('gambar-produk', $filename, 'public');
            $data['gambar'] = $path;
        }
        
        if ($request->hasFile('zip_file')) {
            $data['zip_file'] = $this->handleZipFile($request, $produk);
        }

        return $data;
    }

    private function handleZipFile($request, $produk = null)
    {
        if (!class_exists('\ZipArchive')) {
            throw new Exception('Ekstensi PHP ZipArchive belum aktif.');
        }

        $kode_produk = $request->kode_produk ?? $produk->kode_produk;
        
        // Simpan file zip
        $zipPath = $request->file('zip_file')->storeAs(
            'games_zip',
            "{$kode_produk}.zip",
            'public'
        );

        // Path ekstrak di public/games/{kode_produk}
        $extractPath = public_path("games/{$kode_produk}");

        // Hapus folder lama jika ada
        if (File::exists($extractPath)) {
            File::deleteDirectory($extractPath);
        }

        // Buat folder baru
        File::makeDirectory($extractPath, 0755, true, true);

        // Extract zip
        $zip = new \ZipArchive;
        $zipFullPath = storage_path("app/public/{$zipPath}");
        
        if ($zip->open($zipFullPath) === TRUE) {
            $zip->extractTo($extractPath);
            $zip->close();

            // Verify index.html exists
            if (!File::exists("{$extractPath}/index.html")) {
                throw new Exception('File index.html tidak ditemukan dalam ZIP.');
            }
        } else {
            throw new Exception('Gagal membuka file ZIP.');
        }

        return $zipPath;
    }

    private function handleImageFile($request, $produk = null)
    {
        if ($produk && $produk->gambar) {
            Storage::disk('public')->delete($produk->gambar);
        }
        return $request->file('gambar')->store('gambar-produk', 'public');
    }

    private function handleError(Exception $e)
    {
        return redirect()->back()
                        ->withInput()
                        ->withErrors(['error' => $e->getMessage()]);
    }
}
