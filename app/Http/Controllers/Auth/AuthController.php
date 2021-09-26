<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username'  => 'required',
            'password'  => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            // Member Validation
            if (auth()->user()->role == 'Member') {
                $request->session()->regenerate();

                return redirect()->intended('/');
            }

            // Admin Validation
            if (auth()->user()->role == 'Dev') {
                $request->session()->regenerate();

                return redirect()->intended('/dashboard');
            }

            // Admin Validation
            if (auth()->user()->role == 'Admin') {
                $request->session()->regenerate();

                return redirect()->intended('/dashboard');
            }

            // Admin Requesting Validation
            if (auth()->user()->role == 'Requesting') {
                $request->session()->invalidate();

                return redirect('/login')->with('loginError', 'You have been requested! Please contact Developer!');
            }
        }

        return back()->with('loginError', 'Login Failed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Succesfully Logout!');
    }
}
