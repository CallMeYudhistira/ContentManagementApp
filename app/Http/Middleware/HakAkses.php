<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HakAkses
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (session()->get('role') != 'admin') {
            return redirect()->route('users.index')->with('error', 'Anda Tidak Memiliki Hak Akses Untuk Manajemen Konten');
        }

        return $next($request);
    }
}
