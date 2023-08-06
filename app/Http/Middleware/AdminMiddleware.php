<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $roles): Response
    {
        if (Auth::check() && Auth::user()->role_id == 'admin@gmail.com') {
            return $next($request);
        }

        // Jika pengguna belum login, Anda mungkin ingin melakukan sesuatu di sini, seperti mengarahkannya ke halaman login.
        return redirect('/session/auth/user/signin');
    }
}
