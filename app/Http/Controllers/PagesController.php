<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function landing()
    {
        return view('main.index');
    }

    public function member()
    {
        return view('main.member');
    }
}
