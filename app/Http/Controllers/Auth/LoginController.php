<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo;

    public function redirectTo()
    {
        switch (Auth::user()->role) {
            case 1:
                $this->redirectTo = 'superadmin';
                return $this->redirectTo;
                break;
            case 2:
                $this->redirectTo = 'admin';
                return $this->redirectTo;
                break;
            case 3:
                $this->redirectTo = 'frontoffice';
                return $this->redirectTo;
                break;
            case 4:
                $this->redirectTo = 'backoffice';
                return $this->redirectTo;
                break;
            case 5:
                $this->redirectTo = 'sales';
                return $this->redirectTo;
                break;
            case 6:
                $this->redirectTo = 'instructor';
                return $this->redirectTo;
                break;

            default:
                $this->redirectTo = 'login';
                return $this->redirectTo;
        }
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }
}
