<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, $roles)
    {
        // if (!Auth::check() || !in_array(Auth::user()->role, $roles)) {
        //     return redirect(route('beranda'))->withErrors('Unauthorized.');
        // }

        // return $next($request);

        if ($request->user()->role == $roles) {
            return $next($request);
        }

        return redirect(route('beranda'));


        // ->to(route('login'));

        // $user = Auth::user();

        // if ($user) {
        //     // Mendapatkan peran (role) pengguna
        //     $role = $user->role;

        //     // Selanjutnya, Anda dapat melakukan sesuatu dengan nilai $role, misalnya:
        //     if ($role === 'admin') {
        //         // Jika peran adalah "admin", lakukan sesuatu
        //         // Contoh: Redirect ke dashboard admin
        //         return redirect('/admin/dashboard');
        //     } elseif ($role === 'user') {
        //         // Jika peran adalah "user", lakukan sesuatu
        //         // Contoh: Redirect ke halaman beranda untuk pengguna
        //         return redirect(route('beranda'));
        //     } else {
        //         // Peran lainnya...
        //     }
        // } else {
        //     // Jika tidak ada pengguna yang sedang masuk (guest),
        //     // Anda dapat melakukan sesuatu yang sesuai, misalnya redirect ke halaman login
        //     return redirect('/login');
        // }
    }
}
