<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.admin.index', [
            'admin' => User::where('role', '!=', 'Member')->get()
        ]);
    }

    public function create()
    {
        return view('admin.admin.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'      => 'required|max:191',
            'username'  => 'required|max:191|unique:users|alpha_dash',
            'password'  => 'required|min:8',
        ]);
        $validated['role'] = 'Admin';
        $validated['password'] = Hash::make($validated['password']);
        User::create($validated);

        return redirect('dashboard/admin');
    }
}
