<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Kategori;
use App\Models\Produk;

class GameController extends Controller
{
    public function create()
    {
        $kategoris = Kategori::all();
        return view('games.create', compact('kategoris'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|numeric|min:0',
            'kategori_id' => 'required|exists:kategoris,id',
            'platform' => 'required|in:pc,mobile,console', // Make sure platform is required
            'zip_file' => 'required|file|mimes:zip|max:51200',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        try {
            DB::beginTransaction();

            // Generate unique code
            $kode_produk = 'GAME-' . strtoupper(Str::random(8));

            // Handle image upload
            $gambarPath = null;
            if ($request->hasFile('gambar') && $request->file('gambar')->isValid()) {
                $gambarPath = $request->file('gambar')->store('games/images', 'public');
            }

            // Handle game file upload
            $zipPath = null;
            if ($request->hasFile('zip_file') && $request->file('zip_file')->isValid()) {
                $zipPath = $request->file('zip_file')->store('games/files', 'public');
            }

            if (!$gambarPath || !$zipPath) {
                throw new \Exception('File upload failed');
            }

            // Create game record with all required fields including platform
            $game = Produk::create([
                'nama' => $validated['nama'],
                'deskripsi' => $validated['deskripsi'],
                'harga' => $validated['harga'],
                'kategori_id' => $validated['kategori_id'],
                'platform' => $validated['platform'], // Make sure platform is included
                'kode_produk' => $kode_produk,
                'gambar' => $gambarPath,
                'zip_file' => $zipPath,
                'user_id' => auth()->id(),
                'stok' => 999
            ]);

            DB::commit();

            return redirect()->route('home')
                           ->with('success', 'Game berhasil diupload!');

        } catch (\Exception $e) {
            DB::rollBack();
            
            // Clean up uploaded files if transaction failed
            if (isset($gambarPath)) Storage::disk('public')->delete($gambarPath);
            if (isset($zipPath)) Storage::disk('public')->delete($zipPath);

            return back()
                ->withInput()
                ->with('error', 'Gagal mengupload game: ' . $e->getMessage());
        }
    }
}