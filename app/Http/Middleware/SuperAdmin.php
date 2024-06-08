<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuperAdmin
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        if (Auth::user()->role == 1) {
            return $next($request);
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
            return redirect()->route('instructor');
        }
    }
}
