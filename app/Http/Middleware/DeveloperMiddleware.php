<?php

namespace App\Http\Middleware;

use App\Models\Developer;
use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DeveloperMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && Auth::user()->role == 'developer') {
            $developerStatus = Auth::user()->developers->first()->status;
            $developerSub = Auth::user()->developers->first()->subscribe;

            if ($developerSub === 'already') {
                if ($developerStatus === 'approved') {
                    return $next($request);
                } elseif ($developerStatus === 'rejected') {
                    return redirect(route('beranda'))->with('rejected', true);
                }
            } elseif ($developerSub === 'pending') {
                return redirect()->route('langganan.index')->with('pending', true);
            }

            return redirect(route('beranda'));
        }
    }
}
