<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Shortlink;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Profile;
use App\Models\Point;
use App\Models\Article;
use App\Models\Post;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'members'           => User::where('role', 'Member')->count(),
            'articles'          => Article::all()->count(),
            'posts'             => Post::all()->count(),
            'shortlinks'        => Shortlink::all()->count(),

            'petroknowledge'    => Article::where('category', 'Petroknowledge')->orderBy('published_at', 'desc')->limit(5)->get(),
            'petronews'         => Article::where('category', 'Petronews')->orderBy('published_at', 'desc')->limit(5)->get(),
        ]);
    }

    public function renewal()
    {
        return view('admin.member.renewal', [
            'users'         => Profile::where('status', '!=', 'New Member')->get()
        ]);
    }

    public function point()
    {
        return view('admin.member.point', [
            'points'        => Point::all()
        ]);
    }

    public function member()
    {
        return view('admin.member.international', [
            'members'       => User::where('role', 'Member')->get()
        ]);
    }

    public function updatePoint(Request $request, Point $point)
    {
        $point->update([
            'point' => $request->point
        ]);

        return response()->json([
            'point' => $point->point,
            'name'  => $point->user->name
        ]);
    }
}
