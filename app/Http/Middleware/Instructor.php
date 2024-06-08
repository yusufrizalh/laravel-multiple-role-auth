<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Instructor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        if (Auth::user()->role == 1) {
            return redirect()->route('superadmin');
        }
        if (Auth::user()->role == 2) {
            return redirect()->route('admin');
        }
        if (Auth::user()->role == 3) {
            return redirect()->route('frontoffice');
        }
        if (Auth::user()->role == 4) {
            return redirect()->route('backoffice');
        }
        if (Auth::user()->role == 5) {
            return redirect()->route('sales');
        }
        if (Auth::user()->role == 6) {
            return $next($request);
        }
    }
}
