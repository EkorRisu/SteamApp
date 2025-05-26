<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class LogoutController extends Controller
{
    public function signout()
    {
        // Hapus semua session
        Session::flush();

        // Logout pengguna
        // Auth::logout(); // Bisa diaktifkan jika menggunakan facade Auth untuk logout

        // Redirect ke halaman login
        return redirect()->route('login'); // Pastikan ada route login yang didefinisikan
    }
}
