<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.admin.index', [
            'admin' => User::where('role', '!=', 'Member')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        if (auth()->user()->id == $user->id) {
            return view('admin.admin.profile', compact('user'));
        } else {
            return redirect('dashboard');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if (auth()->user()->id == $user->id) {
            $rules = [
                'name'  => 'required|max:255'
            ];

            if ($request->username != $user->username) {
                $rules['username'] = 'required|max:255|unique:users';
            } elseif ($request->username == $user->username) {
                $rules['username'] = 'required|max:255';
            }

            $request->validate($rules);

            $user->update($request->all());

            $id = $user->id;
            $user = $user->name;
            return redirect("/dashboard/admin/$id/edit")->with('message', "Your profile has been updated! Thank you, $user");
        } else {
            return redirect('dashboard');
        }
    }

    public function changepass(Request $request, User $user)
    {
        if (auth()->user()->id == $user->id) {
            $request->validate(
                [
                    'oldpass'       => 'required|password',
                    'password1'     => 'required|min:8',
                    'password2'     => 'required|min:8|same:password1',
                ],
                [
                    'oldpass.required' => 'The old password field is required!',
                    'password1.required' => 'The new password field is required!',
                    'password1.min' => 'The new password must be at least 8 characters.',
                    'password2.required' => 'The repeat password field is required!',
                    'password2.min' => 'The new password must be at least 8 characters.',
                    'password2.same' => 'The password does not match!'
                ]
            );
            $id = $user->id;
            User::where('id', $id)->update([
                'password'  => Hash::make($request->password1)
            ]);

            $user = $user->name;
            return redirect("/dashboard/admin/$id/edit")->with('message', "Your Password has been changed! Thank you and please try to login again, $user");
        } else {
            return redirect('dashboard');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->forceDelete();

        return redirect('/dashboard/admin');
    }

    // ADMIN REGISTRATION
    public function admin_request()
    {
        return view('auth.admin_register');
    }

    // ADMIN REGISTRATION FORM
    public function admin_store(Request $request)
    {
        $validated = $request->validate(
            [
                'name'          => 'required|max:255',
                'username'      => 'required|max:255|alpha_dash|unique:users',
                'password'      => 'required|min:8',
                'password2'     => 'required|min:8|same:password',
            ],
            [
                'password2.required' => 'The repeat password field is required!',
                'password2.same' => 'The password does not match!'
            ]
        );
        $validated['role'] = 'Requesting';
        $validated['password'] = Hash::make($validated['password']);
        User::create($validated);

        return redirect('/login')->with('success', 'You have been requested! Please contact Developer!');
    }

    public function request()
    {
        return view('admin.admin.request', [
            'admin' => User::where('role', 'Requesting')->get()
        ]);
    }

    public function acceptrequest(User $user)
    {
        $user->update([
            'role'  => 'Admin'
        ]);

        return redirect('dashboard/admin/request');
    }
}
