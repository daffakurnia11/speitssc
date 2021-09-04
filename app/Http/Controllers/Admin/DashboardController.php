<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Shortlink;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Profile;
use App\Models\Point;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'members'       => User::where('role', 'Member')->count(),
            'shortlinks'    => Shortlink::all()->count()
        ]);
    }

    public function renewal()
    {
        return view('admin.renewal', [
            'users'         => Profile::where('status', '!=', 'New Member')->get()
        ]);
    }

    public function point()
    {
        return view('admin.point', [
            'points'        => Point::all()
        ]);
    }
}
