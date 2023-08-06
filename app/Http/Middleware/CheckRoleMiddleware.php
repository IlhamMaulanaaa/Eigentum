<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::guard('developer')->check()) {
            return $next($request);
        }
        // if (Auth::guard('agent')->check()) {
        //     return $next($request);
        // }
        // if (Auth::guard('admin')->check()) {
        //     return $next($request);
        // }
        // if (Auth::guard('user')->check()) {
        //     return $next($request);
        // }

        return redirect('/');
    }
}
