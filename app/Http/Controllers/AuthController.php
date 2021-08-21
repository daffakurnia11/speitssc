<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function new_member()
    {
        return view('auth.new_member');
    }

    public function renewal_member()
    {
        return view('auth.renewal_member');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function renewal()
    {
        return view('auth.renewal');
    }
}
