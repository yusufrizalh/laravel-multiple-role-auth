<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function index()
    {
        return view('superadmin');
    }

    public function users()
    {
        // return view('superadmin.index', ['users' => User::orderBy('id', 'ASC')->get()]);
        return view('superadmin.index', ['users' => User::orderBy('id', 'ASC')->paginate(5)]);
    }
}
