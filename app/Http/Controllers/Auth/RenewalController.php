<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RenewalController extends Controller
{
    public function renewal_member()
    {
        return view('auth.renewal_member');
    }

    public function renewal()
    {
        return view('auth.renewal');
    }
}
