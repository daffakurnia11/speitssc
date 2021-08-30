<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;
use App\Models\User;
use App\Models\Profile;
use App\Models\File;
use Illuminate\Support\Facades\Hash;

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

    public function store(Request $request)
    {
        // Validating
        $request->validate([
            'member_id' => 'required|max:255|exists:profiles'
        ]);
        $userData = $request->validate([
            'username'          => 'required|max:255|alpha_dash|unique:users',
            'password'          => 'required',
            'email'             => 'required|email:dns|max:255|unique:users',
        ]);
        $request->validate([
            'payment'           => 'required|mimes:JPG,jpg,png,jpeg|max:2048',
            'screenshot'        => 'required|mimes:JPG,jpg,png,jpeg|max:2048'
        ]);

        // Uploading Files
        if ($request->hasFile('payment') && $request->hasFile('screenshot')) {
            $paymentImage = $request->username . '-payment.' . $request->payment->extension();
            $screenshotImage = $request->username . '-screenshot.' . $request->screenshot->extension();

            $request->payment->move(public_path('files/payment'), $paymentImage);
            $request->screenshot->move(public_path('files/screenshot'), $screenshotImage);

            // Inserting Data
            $profileId = Profile::firstWhere('member_id', $request->member_id)->id;
            $name = Profile::firstWhere('member_id', $request->member_id)->fullname;

            $userData['password'] = Hash::make($userData['password']);
            $userData['profile_id'] = $profileId;
            User::create($userData);
            File::create([
                'profile_id'    => $profileId,
                'payment'       => $paymentImage,
                'screenshot'    => $screenshotImage
            ]);

            Mail::to($request->email)->send(new WelcomeMail($name));
        }
        return redirect('/login')->with('success', 'Registration success! Please login!');
    }
}
