<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class OnlyUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Periksa apakah user yang login memiliki role admin (role_id = 1)
        if (Auth::check() && Auth::user()->role_id !== 2) {
            // Redirect ke halaman index jika bukan admin
            return redirect('/')->with('error', 'Akses ditolak. Anda bukan admin.');
        }
        return $next($request);
    }
}
