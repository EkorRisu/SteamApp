<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\User;
use App\Models\Cart;
use App\Models\Transaksi;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Str;

class PembelianController extends Controller
{
    public function index()
    {
        $tikets = Produk::all();
        $users = User::all();
        $carts = Cart::all();
        return view('transaksi.transaksi', compact('tikets', 'users', 'carts'));
    }

    public function transaksiCart()
    {
        $user = Auth::user();
        $carts = Cart::where('user_id', $user->id)->get();
        return view('transaksi.cart', compact('carts'));
    }

    public function beli(Request $request)
    {
        $request->validate([
            'produk_id' => 'required|exists:produks,id',
        ]);

        $user = Auth::user();
        $produk = Produk::findOrFail($request->produk_id);

        // Cek stok
        if ($produk->stok < 1) {
            return redirect()->back()->with('error', 'Stok produk habis!');
        }

        // Cek apakah sudah ada di cart
        $existingCart = Cart::where('user_id', $user->id)
                           ->where('kode_produk', $produk->kode_produk)
                           ->first();

        if ($existingCart) {
            return redirect()->back()->with('error', 'Produk sudah ada di cart!');
        }

        // Buat cart baru
        Cart::create([
            'user_id' => $user->id,
            'kode_produk' => $produk->kode_produk,
            'nama_user' => $user->name,
            'harga' => $produk->harga,
            'status' => 'pending'
        ]);

        return redirect()->route('transaksi.cart')
                        ->with('success', 'Produk berhasil ditambahkan ke cart!');
    }

    public function clearcart($id)
    {
        $cart = Cart::where('id', $id)->where('user_id', Auth::user()->id)->first();
        if ($cart) {
            // Restore product stock
            $produk = Produk::where('kode_produk', $cart->kode_produk)->first();
            if ($produk) {
                $produk->stok += 1;
                $produk->save();
            }
            $cart->delete();
            return redirect()->route('transaksi.cart')->with('success', 'Item berhasil dihapus dari cart.');
        }
        return redirect()->route('transaksi.cart')->with('error', 'Item tidak ditemukan.');
    }

    public function transaksiIndex()
    {
        $user = Auth::user();
        $transaksis = Transaksi::where('user_id', $user->id)->get();
        return view('transaksi.transaksi', compact('transaksis'));
    }

    public function transaksiIndexManager()
    {
        $transaksis = Transaksi::all();
        return view('transaksi.transaksiManager', compact('transaksis'));
    }

    public function bayar(Request $request)
    {
        $request->validate([
            'cart_id' => 'required|exists:carts,id',
        ]);

        $user = Auth::user();
        $cart = Cart::findOrFail($request->cart_id);


        $transaksi = new Transaksi();
        $transaksi->user_id = $user->id;
        $transaksi->kode_produk = $cart->kode_produk;
        $transaksi->nama_user = $user->name;
        $transaksi->harga = $cart->harga;
        $transaksi->status = 'Pending';
        $transaksi->save();

        $cart->delete();

        return redirect()->route('transaksi.transaksi')
            ->with('success', 'Produk berhasil dibayar dan masuk ke transaksi!');
    }

    public function hapus($id)
    {
        $transaksi = Transaksi::find($id);
        if ($transaksi) {
            $transaksi->delete();
            return redirect()->route('transaksi.transaksiManager')
                ->with('success', 'Transaksi berhasil dihapus');
        }
        return redirect()->route('transaksi.transaksiManager')
            ->with('error', 'Transaksi tidak ditemukan.');
    }

    public function clear($id)
    {
        $transaksi = Transaksi::find($id);
        if ($transaksi) {
            $transaksi->delete();
            return redirect()->route('transaksi.transaksi')
                ->with('success', 'Transaksi berhasil dibatalkan');
        }
        return redirect()->route('transaksi.transaksi')
            ->with('error', 'Transaksi tidak ditemukan.');
    }

    public function konfirmasiStatus($id)
    {
        $transaksi = Transaksi::find($id);
        if ($transaksi) {
            $transaksi->status = 'Selesai';
            $transaksi->save();
            return redirect()->route('transaksi.transaksiManager')
                ->with('success', 'Transaksi berhasil dikonfirmasi.');
        }
        return redirect()->route('transaksi.transaksiManager')
            ->with('error', 'Transaksi tidak ditemukan.');
    }

    public function batal($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->status = 'dibatalkan';
        $transaksi->save();

        return redirect()->back()->with('success', 'Transaksi berhasil dibatalkan.');
    }

    public function generatePdf($id)
    {
        $transaksi = Transaksi::find($id);
        if (!$transaksi) {
            return redirect()->back()->with('error', 'Transaksi tidak ditemukan.');
        }

        $pdf = PDF::loadView('transaksi.pdf', compact('transaksi'));
        return $pdf->download('transaksi-' . $transaksi->kode_produk . '.pdf');
    }

    // =========================
    // 🔥 Fitur LIBRARY & MAIN GAME
    // =========================

    public function library()
    {
        $user = Auth::user();
        $transaksis = Transaksi::with('produk')
            ->where('user_id', $user->id)
            ->where('status', 'Selesai')
            ->whereHas('produk')
            ->get();

        $games = Produk::all(); // 


        return view('transaksi.library', compact('transaksis','games'));
    }

    public function mainkan($id)
    {
        $user = Auth::user();
        $transaksi = Transaksi::with('produk')
            ->where('id', $id)
            ->where('user_id', $user->id)
            ->where('status', 'Selesai')
            ->firstOrFail();

        if (!$transaksi || !$transaksi->produk) {
            return redirect()->back()->with('error', 'Game tidak ditemukan.');
        }

        // Gunakan kode_produk sebagai folder name
        $gamePath = "games/{$transaksi->produk->kode_produk}/index.html";
        
        // Cek apakah file index.html exists
        if (!file_exists(public_path($gamePath))) {
            return redirect()->back()->with('error', 'File game tidak ditemukan. Pastikan game sudah diextract dengan benar.');
        }

        return view('transaksi.mainkan', [
            'gameUrl' => asset($gamePath),
            'gameName' => $transaksi->produk->nama
        ]);
    }





    public function downloadGame($id)
    {
        $user = Auth::user();

        $transaksi = Transaksi::with('produk')
            ->where('id', $id)
            ->where('user_id', $user->id)
            ->where('status', 'Selesai')
            ->first();

        if (!$transaksi || !$transaksi->produk) {
            return redirect()->back()->with('error', 'File game tidak ditemukan atau belum selesai transaksi.');
        }

        // Ambil path relatif dari kolom zip_file (sudah termasuk "storage/games_zip/xxx.zip")
        $zipRelativePath = $transaksi->produk->zip_file;

        // Perbaikan: langsung ke public_path()
        $zipPath = public_path($zipRelativePath);

        if (File::exists($zipPath)) {
            return response()->download($zipPath);
        }

        return redirect()->back()->with('error', 'File ZIP tidak ditemukan di server.');
    }

    public function hapusDariLibrary($id)
    {
        $transaksi = Transaksi::find($id);
        if ($transaksi) {
            $transaksi->delete();
            return redirect()->route('transaksi.library')
                ->with('success', 'Game berhasil dihapus dari library!');
        }
        return redirect()->route('transaksi.library')
            ->with('error', 'Game tidak ditemukan.');
    }
    


    
}
