<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserAccess
{
    public function handle(Request $request, Closure $next, $userType): Response
    {
        // Pastikan pengguna sudah login
        if (Auth::check()) {
            $user = Auth::user();

            // Pastikan property 'type' ada sebelum membandingkannya
            if (isset($user->type) && $user->type == $userType) {
                return $next($request);
            }
        }

        // Jika tidak sesuai, kembalikan respons error
        return response()->json(['message' => 'Access Denied'], 403);
    }
}
