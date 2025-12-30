<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $levels): Response
    {
         if (!Auth::check()) {
            return redirect()->route('login');
        }

        // FIX: pastikan $levels array
        $levels = is_array($levels) ? $levels : [$levels];

        if (!in_array(Auth::user()->level->nama_level, $levels)) {
            abort(403, 'AKSES DITOLAK');
        }
        return $next($request);
    }
}
